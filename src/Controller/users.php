<?php
use Slim\Slim;

function users_list(){
    $app = Slim::getInstance();

    $app->log->info("Slim-Skeleton '/hello/:name' route");

    $users = $app->database->query('SELECT * FROM users');
    $app->render('users/list_users.phtml',array(
        "users"=>$users
    ));
}

function users_create_form(){
    $app = Slim::GetInstance();
    $app->render('users/create_user.phtml');
}

function users_create_new(){
    $app = Slim::GetInstance();

    $name = $app->request->post("name");
    $age =$app->request->post("age");

    $app->database->query("INSERT INTO users",array(
        'name'=>$name,
        'age'=>$age
    ));

    $app->redirect('/');
}