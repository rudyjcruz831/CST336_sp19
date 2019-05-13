<?php
    require 'Session.php';
    Session::start();
    Session::endSession();
    echo json_encode($_SESSION);
?>