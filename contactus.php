<!DOCTYPE html>
  
<!-- <html xmlns="https://www.w3.org/1999/xhtml"> -->
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">
    <!-- External css -->
    <link rel="stylesheet" href="css/style.css">

    <title> Contact Us </title>

</head>
<body style="font-family:'Trirong';">

        <?php 
            include "includes/header.php";
        ?>
    <!-- start header div -->
    <center><br>
    <div id="header">
        <h2>Contact Us</h2>
    </div>
    <div class="contact">
        <form action="contactsubmit.php" method="post">
        <div style="width:70%;">
            <div class="form-row" style="margin-bottom:10px;">
                <div class="col-sm-6">
                    <input type="text" id="username" name="username" placeholder="Username" class="form-control" required>
                </div>
                <div class="col-sm-6">    
                        <input type="email" id="email" name="email" placeholder="Email.." class="form-control" required>
                </div>
            </div>
            <div class="form-row" style="margin-bottom:10px;">        
                <textarea name="message" id="message" class="form-control"></textarea>
            </div>
                <button type="submit" name="submit" class="btn btn-dark"> Contact Us </button>
        </div>
<!--            <div> <a href="forgotpassword.php"> forgot password??? </a></div>-->
        </form> 
    </div>
    </center>
    <br>

    <?php
            include 'includes/footer.php';
        ?>
</body>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>