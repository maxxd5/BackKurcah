<?php

    
    try {

    $connect = new PDO("pgsql:host=172.18.0.2;port=5432;dbname=postgres","admin","admin");
    
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // set the PDO error mode to exception
        // echo "Connected Successfully";
        
    } catch(PDOException $e) {
    
        echo "Connection Failed" .$e->getMessage();
    }
    