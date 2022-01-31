<?php 

$users = $query->selectAll('blog');

require 'views/index-view.php';
include 'views/blogView-view.php';
