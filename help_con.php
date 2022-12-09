<?php

$conn = mysqli_connect('localhost', 'root', '','db_users');

if(!$conn){
    die ("Connection failed: ".mysqli_connect_error());
}