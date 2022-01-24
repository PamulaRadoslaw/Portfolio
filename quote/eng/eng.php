<?php
$servername = "shareddb1e.hosting.stackcp.net";
$username = "Radoq";
$password = "feniks92";
$database = "generator-3233f25a";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
$conn->query("SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
$conn->query("SET CHARSET utf8");


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Random Quote Machine</title>
    <script src="https://use.fontawesome.com/15c98dbd15.js"></script>

    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

</head>

<body>
    <a class="btn btn-primary" href="../index.php" role="button">Polska wersja</a>
    <div class="container-fluid text-center">
        <h1>Random Quote Generator</h1>
        <p class="header">I present you my favorite movie quotes of all time.</p>
        <div class="quotes text-center">
        <span id="quote"> 
        <?php 
        $sql = "SELECT * FROM quotes";      
        $result = mysqli_query($conn,$sql);            
        $row = mysqli_fetch_all($result);
        $randomn = $row[rand(0,9)];
        $randomn1 = $randomn[1];      
        echo ($randomn1);               
        ?></span>
        <span id="author">
        <?php
        $sql = "SELECT * FROM quotes";      
        $result = mysqli_query($conn,$sql);           
        $row = mysqli_fetch_all($result);
        $randomn2 = $randomn[2];      
        echo ($randomn2);
        mysqli_close($conn);                      
        ?></span>
        </div>

        <div class="row">
            <div class="col-xs-4">
                <button type="button" class="btn btn-primary" type="submit" id="new-quote"><i class="fa fa-quote-left"> New Quote</i></button>
                <a href="#" class="btn btn-primary" id="tweet"><i class="fa fa-twitter"> Tweet Out!</i></a>
            </div>
        </div>        
        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>

        <script src="js/index.js"></script>

</body>

</html>