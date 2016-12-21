<?php
session_start();
require_once 'session.class.php';

if (Session::has('user')) {
    echo 'Hello, ' . Session::get('user');
} else {
    echo 'Restricted area! Get out!';
    // header('Location: index.php');
}