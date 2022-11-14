<?php
session_start();
?>
<html> 
    <head>
        <title>VIPS|AUDITORIUM BOOK</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/common.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        
    <body>
     <?php 
     include "includes/header.php"
     ?>
     <div>
         
     </div>
     
    <?php
    include "includes/login-modal.php";
    include "includes/signup-modal.php";
    include "includes/admin-login-modal.php";
    include "includes/request-form.php";
    ?>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/common.js"></script>

    </body>    
<html>
