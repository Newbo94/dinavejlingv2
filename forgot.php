<?php get_header();
/*
 Template Name: forgot
*/
?><?php
/* Reset your password form, sends reset.php password link */
require 'db.php';

if(!isset($_SESSION)) {
       session_start();
  }



// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if ( $result->num_rows == 0 ) // User doesn't exist
    {
        $_SESSION['message'] = "Bruger med denne mail eksistere ikke!";
        header("location: error.php");
    }
    else { // User exists (num_rows != 0)

        $user = $result->fetch_assoc(); // $user becomes array with user data

        $email = $user['email'];
        $hash = $user['hash'];
        $first_name = $user['first_name'];

        // Session message to display on success.php
        $_SESSION['message'] = "<p>Venligst tjek din email <span>$email</span>"
        . " du vil modtage et genaktiverings link</p>";

        // Send registration confirmation link (reset.php)
        $to      = $email;
        $subject = 'Password Reset Link ( clevertechie.com )';
        $message_body = '
        Hej '.$first_name.',

        Du har andmodet om at få nulstillet dit password.

        Klik link for at nulstille:

        http://localhost/login-system/reset.php?email='.$email.'&hash='.$hash;

        mail($to, $subject, $message_body);

        header("location: success.php");
  }
}
?>

<div class="row">
    <div class="presse-container container-fluid">

        <div class="wrapper-form col-md-4 col-sm-8 col-xs-11" id="reset">

<div id="title-presse">
    <h1 id="presse-h1">Nulstil password</h1>
</div>
    <form class="presseform" action="forgot.php" method="post">
     <div class="field-wrap">
      <input placeholder="Email*" type="email"required autocomplete="off" name="email"/>
    </div>
    <button class="button button-presse"/>Nulstil</button>
    <p class="link-area"><a href=“/login.php?page_id=189”><u>Tilbage til log ind</u></a></p>
    </form>
  </div>
<?php get_footer(); ?>
