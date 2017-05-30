<?php get_header();
/*
 Template Name: Press-register
*/
?>

<?php require 'db.php';

if(!isset($_SESSION)) {
       session_start();
  }

/* Registration process, inserts user info into the database
   and sends account confirmation email message
 */
if(isset($_POST['register'])){

// Set session variables to be used on profile.php page
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];
$_SESSION['company'] = $_POST['company'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['webaddress'] = $_POST['webaddress'];




// Escape all $_POST variables to protect against SQL injections
$first_name = $mysqli->escape_string($_POST['firstname']);
$last_name = $mysqli->escape_string($_POST['lastname']);
$email = $mysqli->escape_string($_POST['email']);
$company = $mysqli->escape_string($_POST['company']);
$address = $mysqli->escape_string($_POST['address']);
$webaddress = $mysqli->escape_string($_POST['webaddress']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );


// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error);




// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {

    $_SESSION['message'] = 'Bruger eksistere allerede!';
    header("location: error.php");

}
else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO users (first_name, last_name, email, company, address, webaddress, password, hash) "
            . "VALUES ('$first_name','$last_name', '$email', '$company', '$address', '$webaddress','$password', '$hash')";

    // Add user to the database
    if ( $mysqli->query($sql) ){

        $_SESSION['active'] = 0; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true; // So we know the user has logged in


        // Send registration confirmation link (verify.php)
        $to      = "a.christiansen1995@gmail.com";
        $subject = 'Anmodning om presse log ind til www.dinavejling.dk';

        $message_body = '
        Presse login, '.$first_name.' ønsker tilgang til din presse side.

        Information
        '.$first_name.'
        '.$last_name.'
        '.$company.'
        '.$address.'
        '.$webaddress.'

        Accepter anmodning om presse login.

        http://localhost/login-systemv2/verify.php?email='.$email.'&hash='.$hash;

mail( $to, $subject, $message_body );

   $_SESSION['message'] = "Dina Vejling har modtaget din ansøgning. Hun vil vertificere dig hurtigst muligt";
    header("location: success.php");

    }

    else {
        $_SESSION['message'] = 'Registrering mislykkedes';
        header("location: error.php");
    }

}
}
?>
<div class="row">
    <div class="presse-container container-fluid">

        <div class="wrapper-form col-md-4 col-sm-8 col-xs-11" id="signup">

         <div id="title-presse">
          <h1 id="presse-h1">Anmod om et log ind</h1>
          </div>

          <form class="presseform" action="" method="post" autocomplete="off">

          <div class="top-row">
            <div class="field-wrap">
              <input placeholder="Fornavn*" type="text" required autocomplete="off" name='firstname' />
            </div>

            <div class="field-wrap">
             <input placeholder="Efternavn*" type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <input placeholder="Email*" type="email"required autocomplete="off" name='email' />
          </div>

          <div class="field-wrap">
            <input placeholder="Firma*" type="company"required autocomplete="off" name='company' />
          </div>

          <div class="field-wrap">
            <input placeholder="Adresse*" type="address"required autocomplete="off" name='address' />
          </div>

          <div class="field-wrap">
            <input placeholder="Firma URL" type="webaddress"required autocomplete="off" name='webaddress' />
          </div>

          <div class="field-wrap">
            <input placeholder="Password*" type="password"required autocomplete="off" name='password'/>
          </div>

          <button type="submit" class="button button-presse" name="register"/>Registrer</button>

        <p class="link-area">Har du allerede et log ind? <br><a href="login.php"> <u>Tilbage til log ind side</u></a></p>

          </form>

        </div>
    </div>
</div>



<?php get_footer(); ?>
