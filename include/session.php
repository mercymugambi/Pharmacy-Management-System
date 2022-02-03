<?php
if(session_status()==PHP_SESSION_NONE){
    session_start();//start session if session not started
}

if(!isset($_SESSION['logged_id'])){
    die('Access is Denied!');
}//end isset