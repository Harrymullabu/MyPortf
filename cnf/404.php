<?php
define('ROOT_DIR', '');
session_start();
require_once(ROOT_DIR.'pages/Projects.php');
require_once(ROOT_DIR.'pages/contact.php');
?>


<?php
// Check if the 'err' key exists in the session
if (isset($_SESSION['err'])) {
    // If it does, try to access a non-existent key to trigger an error
    $pErrorMsg = $_SESSION['err']['non_existent_key'];
    $errorMessage =  $pErrorMsg['date'].' - '.$pErrorMsg['message'];
} else {
    // If the 'err' key does not exist, set a custom error message
    $errorMessage = 'Error: No error message found in the session.';
}
?>

<h2>Error</h2>
<p class="alert alert-danger"><?php echo $errorMessage ?></p>


<?php require_once(ROOT_DIR.'pages/Projects.php');?>
