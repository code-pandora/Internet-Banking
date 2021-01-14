<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- A viewport meta tag should make the web site work on all devices and screen resolutions -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- W3 Refernce -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<!-- CSS -->
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="full_list.css">
<link rel="stylesheet" href="transfer.css">
<link rel="stylesheet" href="transfer_history.css">
<!-- <link rel="stylesheet" href="nav.css"> -->
<!-- bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- javascripy -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- javascript -->


<body>
    <title>Transfer History</title>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="home.php"><i class="fa fa-university" aria-hidden="true">INTERNET BANKING</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:black;">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Feautres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="full_list.php">List OF Customers</a>
        </div>
    </nav>

    <div class="main row">
        <div class="col-md">
            <div>
                <Button class="head">TRANSACTION HISTORY</button>
            </div>
        </div>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">SENDER NAME</th>
                <th scope="col">RECEIVER NAME</th>     
                <th scope="col">MONEY DEPOSIT</th>
                <th scope="col">DATE</th>

            </tr>
        </thead>
        <tbody>
            <?php

            include 'config.php';

            $sql = "select * from transaction_history";

            $query = mysqli_query($conn, $sql);

            while ($rows = mysqli_fetch_assoc($query)) {
            ?>
                <tr>
                    <td><?php echo $rows['sender']; ?></td>
                    <td><?php echo $rows['receiver']; ?></td>
                    <td><?php echo $rows['balance']; ?> </td>
                    <td><?php echo $rows['date']; ?> </td>

                <?php
            }

                ?>
        </tbody>
    </table>
    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
        <a href="#"><i class="fa fa-facebook-official"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="https://www.linkedin.com/in/sangeetha-panicker-339827140"><i class="fa fa-linkedin"></i></a>
        <p>Contact</p>
        <p class="w3-medium">
            Copyright ©. Made by SANGEETHA PANICKER<br>
            As a part of <br>The Sparks Foundation Internship Program
        </p>
    </footer>
</body>

</html>