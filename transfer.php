<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customer_details where id=$from";
    $query = mysqli_query($conn, $sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from customer_details where id=$to";
    $query = mysqli_query($conn, $sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount) < 0) {
        echo '<script type="text/javascript">';
        echo ' alert("INVALID INPUT")';  // showing an alert box.
        echo '</script>';
    }



    // constraint to check insufficient balance.
    else if ($amount > $sql1['balance']) {

        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }



    // constraint to check zero values
    else if ($amount == 0) {

        echo "<script type='text/javascript'>";
        echo "alert('Oops! Zero value cannot be transferred')";
        echo "</script>";
    } else {

        // deducting amount from sender's account
        $newbalance = $sql1['balance'] - $amount;
        $sql = "UPDATE customer_details set balance=$newbalance where id=$from";
        echo"success";
        mysqli_query($conn, $sql);


        // adding amount to reciever's account
        $newbalance = $sql2['balance'] + $amount;
        $sql = "UPDATE customer_details set balance=$newbalance where id=$to";
        mysqli_query($conn, $sql);

        $sender = $sql1['name'];
        $receiver = $sql2['name'];
        $sql = "INSERT INTO transaction_history(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "<script> alert('Transaction Successful');
            window.location='transfer_history.php';
            </script>";
        }

        $newbalance = 0;
        $amount = 0;
    }
}
?>
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
<!-- <link rel="stylesheet" href="nav.css"> -->
<!-- bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- javascripy -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- javascript -->


<body>
    <title style=" width:20px">Transfer money</title>


    <!-- navbar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="home.php"><i class="fa fa-university" aria-hidden="true">INTERNET BANKING</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:black;">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Feautres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="transfer_history.php">Transaction History</a>
        </div>
    </nav>

    <div class="row">
        <div class=" col-sm-5" id="transfer">
            <img class="card-img-top" src="transfer.jpg">
            <div class="card-body">
                <h2 class="customer_title">CUSTOMER DETAILS</h2>

                <?php
                include 'config.php';
                $sid = $_GET['id'];
                $sql = "SELECT * FROM  customer_details where id=$sid";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
                }
                $rows = mysqli_fetch_assoc($result);
                ?>


                <div>
                    <p><b>Name:</b><br><?php echo $rows['name'] ?></p>
                    <p><b>Email:</b><br><?php echo $rows['email'] ?></p>
                    <p><b>Account number:</b><br><?php echo $rows['id'] ?></p>
                    <p><b>IFSC code:</b><br><?php echo $rows['ifsc_code'] ?></p>
                    <p><b>Current Balance:</b><br><?php echo $rows['balance'] ?></p>
                </div>


            </div>


            <form method="POST">
                <div class="form-group">
                    <label for="name" name="">Transfer To</label>
                    <select name="to" class="form-control" required>
                        <option value="" disabled selected>Choose</option>
                        <?php
                        include 'config.php';
                        $sid = $_GET['id'];
                        $sql = "SELECT * FROM customer_details where id!=$sid";
                        $result = mysqli_query($conn, $sql);
                        if (!$result) {
                            echo "Error " . $sql . "<br>" . mysqli_error($conn);
                        }
                        while ($rows = mysqli_fetch_assoc($result)) {
                        ?>
                            <option class="table" value="<?php echo $rows['id']; ?>">

                                <?php echo $rows['name']; ?> (Balance:
                                <?php echo $rows['balance']; ?> )

                            </option>
                        <?php
                        }
                        ?>
                        <div>
                    </select>
                </div>

                <div class="form-group">
                    <label>Amount</label>
                    <input type="number" class="form-control" id="amount" placeholder="amount" name="amount">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1" id="exampleCheck2">Are you sure</label>
                </div>
                <button type="submit" class="btn btn-dark" id="button" name="submit">Submit</button>
            </form>
        </div>
    </div>
    </div>

    <!-- footer -->

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