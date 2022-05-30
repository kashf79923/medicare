<?php
    include_once 'connection/dbh.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="BSSE-4 Web Technologies Project">
        <meta name="keywords" content="Medicare, medicine, delivery, doorstep">
        
        <title>MediCare</title>
        
        <link rel="shortcut icon" type="image/png" href="favicon/favicon.png">
        
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>

        <header class="header">

            <nav class="navbar navbar-style">

                <div class="container-fluid">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#hamburgermenu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <a href="#"><img src="images/pills.svg" alt="logo" class="logo"></a>
                    </div>
            
                    <div class="collapse navbar-collapse" id="hamburgermenu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="pharmacies.html">Pharmacies</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="faqs.html">FAQs</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="#" class="bold">Sign Up</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container">
                <?php

                $sql = "SELECT * FROM riders;";
                $result = mysqli_query($conn, $sql);
                $check = mysqli_num_rows($result);

                if ($check > 0)
                {
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo $row['fname'];

                    }

                }

                ?>
                
                    
                
            </div>
        </header>
    </body>
</html>