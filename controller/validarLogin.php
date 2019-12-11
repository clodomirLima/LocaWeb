<?php
session_start();

if(!isset($_SESSION["codigo"]))
    header("location: ../index.php");
