<?php get_header();
/*
 Template Name: Press-login
*/
?>


<?php require 'db.php';



if(!isset($_SESSION)) {
       session_start();
  }

/* User login process, checks if user exists and password is correct */

if(isset($_POST['login'])){

// Escape email to protect against SQL injections
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "Bruger med denne email eksistere ikke!";
    header("location: error.php");
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {

        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['active'] = $user['active'];


        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: profile.php");

    }
    else {
        // Error
        $_SESSION['message'] = "Forkert password, prøv igen!";
       header("location: error.php");
    }
    }
}

?>


<div class="row">
    <div class="presse-container container-fluid">

        <div class="wrapper-form col-md-4 col-sm-8 col-xs-10" id="login">


          <div id="title-presse">
             <h1 id="presse-h1" >Presse log ind</h1>
             </div>

           <form class="presseform" action="login.php" method="post" autocomplete="off">

            <div class="field-wrap">
            <input placeholder="Email" type="email" required autocomplete="off" name="email"/>
          </div>

          <div class="field-wrap">
            <input placeholder="Password" type="password" required autocomplete="off" name="password"/>
             <p class="forgot"><a href="forgot.php">Har du glemt dit password?</a></p>
          </div>



          <button class="button button-presse" name="login" />LOG PÅ</button>

           <p class="link-area">Ønsker du tilgang til Dina Vejling presse? <a href="register.php"><u>Registrer her</u></a></p>

          </form>

        </div>
    </div>
</div>

<?php get_footer(); ?>
