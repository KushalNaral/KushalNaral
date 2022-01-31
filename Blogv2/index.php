<?php  

$query = require 'core/bootstrap.php';

$redirect_root = Request::url();  

require Router::load('routes.php')
		->direct($redirect_root,Request::method());


/*
foreach ($users as $value)
{
    echo $value;
    echo "<br";

}*/