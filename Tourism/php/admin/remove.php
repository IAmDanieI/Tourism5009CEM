<?php
require '../config.php';
try{
    $pdo = new PDO('mysql:host=' . $dbServername . ';dbname=' . $dbName . ';charset=utf8', $dbUsername);
} catch(PDOException $exception){
    exit('Failed to connect to database');
}
$location_id = $_GET['id'];
$delete_query = 'DELETE FROM tourism_website.locations WHERE location_id=?';
$stmt = $pdo->prepare($delete_query);
$delete_success = $stmt->execute([$location_id]);
//close message and display the control panel page
if($delete_success){
    header("location:listing.php");
}else{
    echo "Error deleting record";
}
