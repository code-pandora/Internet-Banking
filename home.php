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
<!-- <link rel="stylesheet" href="nav.css"> -->
<!-- bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- javascripy -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- javascript -->


<body>
    <title>Banker's</title>


    <!-- navbar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#"><i class="fa fa-university" aria-hidden="true">INTERNET BANKING</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:black;">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" >Feautres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="transfer_history.php">Transaction History</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login/Sign Up
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Login</a>
                        <a class="dropdown-item" href="#">Sign Up</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="background-color:wheat">Search</button>
            </form>
        </div>
    </nav>

    <!-- corousel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block " src="image1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-sm-block">
                    <h2>FEAUTRES</h2>
                    <ul>
                        <li>Check the account statement online.</li>
                        <li>Open a fixed deposit account.</li>
                        <li>Pay utility bills such as water bill and electricity bill.</li>
                    </ul>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block " src="image2.jpg" alt="Second slide">
                <div class="carousel-caption d-sm-block">
                    <h2>FEATURES</h2>
                    <ul>
                        <li>Make merchant payments.</li>
                        <li>Transfer funds.</li>
                        <li>Order for a cheque book.</li>
                    </ul>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block " src="image3.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-sm-block">
                    <h2>FEATURES</h2>
                    <ul>
                        <li>Make merchant payments.</li>
                        <li>Transfer funds.</li>
                        <li>Order for a cheque book.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block " src="transfer.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-sm-block">
                <h2>FEATURES</h2>
                <ul>
                    <li>Make merchant payments.</li>
                    <li>Transfer funds.</li>
                    <li>Order for a cheque book.</li>
                </ul>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

    <!-- horizontal line after the coroseul -->
    <div class="vl"></div>

    <!-- View full customer detials -->
    <div class="customer row">
        <div class=col-md>
            <button type="button" id="btn" class="btn btn-dark"><a href="full_list.php">View All Customer</a></button>
        </div>
    </div>

    <!-- cards -->

    <div class="card1 row">
        <div class="card col-sm" id="card">
            <img class="card-img-top" src="creditcard.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Credit Card</h5>
                <p class="card-text">Apply for Credit Card now through NetBanking.</p>
                <a href="#" class="btn btn-primary"> Know More</a>
            </div>
        </div>
        <div class="card col-sm" id="card">
            <img class="card-img-top" src="homeloan.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Home Loan</h5>
                <p class="card-text">Apply for a home loan</p>
                <a href="#" class="btn btn-primary"> Know More</a>
            </div>
        </div>
        <div class="card col-sm" id="card">
            <img class="card-img-top" src="insurance.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Buy Insurance</h5>
                <p class="card-text">Buy Insurance the easy way with NetBanking!</p>
                <a href="#" class="btn btn-primary"> Know More</a>
            </div>
        </div>
    </div>

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

    <script>
        $('img').on('dragstart', function(event) {
            event.preventDefault();
        });
    </script>
</body>

</html>