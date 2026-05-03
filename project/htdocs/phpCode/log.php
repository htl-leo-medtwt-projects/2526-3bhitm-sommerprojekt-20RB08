<?php 
/***********************
 * getLogButton
 *********************/
function getLogButton($base = '') {
    if (isset($_SESSION['login']) && $_SESSION['login']){
        $username = $_SESSION['user']['username'] ?? '';
        return "<a href='{$base}phpCode/account/logout.php' class='button'>$username</a>";
    } else {
        return "<a href='{$base}pages/account.php' class='button'>Sign up</a>";
    }
}