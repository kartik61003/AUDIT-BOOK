<!DOCTYPE html>
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

        <div class="banner-container">
            <div class="title">
                <h1>VIPS AUDIT</br> BOOKING PORTAL...</h1>
            </div>
            <div class="row button_row">
                <div class="col-4">
                    <a class="btn btn-outline-info" href="#" role="button">Check Reservations</a>
                </div>

                <div class="col-4">
                    <?php if(!isset($_SESSION['id'])){ ?>
                        <a class="btn btn-outline-info" href="#" data-toggle="modal" data-target="#login-modal">Create Request</a>
                    <?php } if(isset($_SESSION['id'])){ ?>
                        <a class="btn btn-outline-info" href="#" data-bs-toggle="modal" data-target="#req-modal">Create Request</a>
                    <?php } ?>        
                </div>

                <div class="col-4">
                    <a class="btn btn-outline-info" href="#" role="button">Cancel Request</a>
                </div>
            </div>
            </BR></BR>

        </div>

    <?php
    include "includes/footer.php";
    ?>

    <?php
    include "includes/login-modal.php";
    include "includes/signup-modal.php";
    include "includes/admin-login-modal.php";
    include "includes/req-modal.php";
    ?>

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/common.js"></script>

    </body>
    <html>