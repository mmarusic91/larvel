<?php
/**
 * Created by PhpStorm.
 * User: Marusic
 * Date: 01-Mar-18
 * Time: 19:54
 */
session_start();
session_destroy();
header("Location: index.php");