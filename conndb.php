<?php
$dbname="usersb.db";
$db = new SQLite3($dbname);

//if (!$db) {die("db not created .... ");} else {echo "create database successfully";}

//create table in sqlite database
$query = "CREATE TABLE IF NOT EXISTS user_table(user_id integer primary key, 
            user_name text, user_email text)";
$db->exec($query);




?>
