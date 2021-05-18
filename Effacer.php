<?php
session_start();
echo "<pre>";
session_destroy();
var_dump($_SESSION);
echo "</pre>";
