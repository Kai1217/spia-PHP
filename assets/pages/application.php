<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect them to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang=en_AU>
<meta charset="UTF-8">
<style>
.heading {
    text-align: center;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body id="mainApplication">
<div class="w3-container w3-padding-64 w3-center" id="main">
    <div class="shadow-sm p-3 mb-5 bg-white rounded">
        <div class="heading">
            <div class="p-3 mb-2 bg-warning text-white">
                <h1>Main Application</h1>
            </div>
        </div>
    </div>
</div>
</body>
<script src="../js/all.js"></script>
</html>