<?php

// Establish connection to database
$db = new PDO('mysql:host=db; dbname=shirt_collection','root','password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);