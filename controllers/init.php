<?php

use http\Client;

session_start();

$dev_path = "pro";
$companyname = "Academia";

$parent_path = $dev_path == "dev" ? "Academia/" : "";


     include ($_SERVER['DOCUMENT_ROOT']."/". $parent_path.'models/MainModel.php');
     $mainModel = new MainModel();
