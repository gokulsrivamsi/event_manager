<?php

// Create connection
$conn = mysqli_connect("localhost","root","","eventS");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    echo "connected";
}
//DB creation
/*$sql = "CREATE DATABASE events";
if(mysqli_query($conn,$sql)){
    echo "data base was created";
}*/
// TABLE CREATION for Event Registration
/*$x="CREATE TABLE events_registration(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    Fullname VARCHAR(30) NOT NULL,
    email VARCHAR(50)
    )";
    if(mysqli_query($conn,$x)){
        echo "succussfully table created";
    }
    else{
        echo "table not created". mysqli_error($conn);
    }
*/
// Table Creation for Add items
/*
$y="CREATE TABLE AddEvents(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    EventName VARCHAR(30) NOT NULL,
    EventDescription VARCHAR(50) Not NULL,
    images LONGBLOB NOT NULL  )";


if(mysqli_query($conn,$y)){
    echo "succussfully table created";
}
else{
    echo "table not created". mysqli_error($conn);
}
*/
mysqli_close($conn);
?>