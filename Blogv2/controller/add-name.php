<?php

$query->insert('blog',[
	'name' => $_POST['name'],
	'status' => $_POST['status'],
    'category' => $_POST['category'],
    'title' => $_POST['title'],
    'text' => $_POST['text'],
]);

header('Location:/');
