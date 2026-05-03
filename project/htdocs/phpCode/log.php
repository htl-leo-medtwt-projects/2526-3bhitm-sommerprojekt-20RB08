<?php 
/***********************
 * getLogButton
 *********************/
function getLogButton() {
    if (isset($_SESSION['login']) && $_SESSION['login']){
        $username =  $_SESSION['username'];
        return "<a href='#' class='button'>$username</a>";
    } else {
        return "<a href='pages/account.php' class='button'>Sign up</a>";
    }
}