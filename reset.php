<?php get_header();
/*
 Template Name: reset
*/
?>
<?php
/* The password reset form, the link to this page is included
   from the forgot.php email message
*/
require 'db.php';
session_start();

// Make sure email and hash variables aren't empty
if( isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']) )
{
    $email = $mysqli->escape_string($_GET['email']);
    $hash = $mysqli->escape_string($_GET['hash']);

    // Make sure user email with matching hash exist
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email' AND hash='$hash'");

    if ( $result->num_rows == 0 )
    {
        $_SESSION['message'] = "Password linket er ikke aktivt, prøv igen.";
        header("location: error.php");
    }
}
else {
    $_SESSION['message'] = "Undskyld noget gik galt, prøv igen!";
    header("location: error.php");
}
?>

    <div class="form">

          <h1 id="presse-h1">Vælg nyt password</h1>

          <form action="reset_password.php" method="post">

          <div class="field-wrap">
            <label>
              Nyt password<span class="req">*</span>
            </label>
            <input type="password"required name="newpassword" autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Gentast nyt password<span class="req">*</span>
            </label>
            <input type="password"required name="confirmpassword" autocomplete="off"/>
          </div>

          <!-- This input field is needed, to get the email of the user -->
          <input type="hidden" name="email" value="<?= $email ?>">
          <input type="hidden" name="hash" value="<?= $hash ?>">

          <button class="button button-block"/>Accepter</button>

          </form>

    </div>
<?php get_footer(); ?>
