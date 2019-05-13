<?php
    require 'api/Session.php';
    Session::start();
    echo Session::getSession();
?>