<?php

function validateUser($user)
{
    
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Username Is Required');
    }

    if (empty($user['email'])) {
        array_push($errors, 'E-Mail Is Required');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Password Is Required');
    }

    if ($user['passwordConf'] !== $user['password']) {
        array_push($errors, 'Passwords Do Not Match');
    }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if (isset($existingUser)) {
        array_push($errors, 'Email id already exists');
    }



    return $errors;
}



function validateLogin($user)
{
    
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Username Is Required');
    }


    if (empty($user['password'])) {
        array_push($errors, 'Password Is Required');
    }


    return $errors;
}