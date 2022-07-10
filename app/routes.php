<?php
include_once __DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."src".DIRECTORY_SEPARATOR."Controller".DIRECTORY_SEPARATOR."users.php";

$app->get('/',"users_list");

$app->get('/user/new',"users_create_form");

$app->post('/user/create',"users_create_new");