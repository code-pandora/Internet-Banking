

<nav class="w3-bar w3-black">
        <a href="#home" class="w3-button w3-bar-item">Banker's</a>
    </nav>

    <section class="slide">
        <img class="mySlides" src="image1.jpg">
        <img class="mySlides" src="image2.jpg">
        <img class="mySlides" src="image3.jpg">
    </section>


    <!-- Main Description -->
    <section class="main">
        <h2><b>About</b></h2>
    </section>

    <section class="main">
        <img src="customer.jpg" alt="Random Name" style="width:40%">
        <section> This software enables you access to details of all the customers as well as the customer can transfer amount.</section>
    </section>

    <!-- Transaction  -->
    <section class="w3-row-padding w3-center  " id="section">
        <article class="w3-third">
            <a href="full_list.php" type="button" style="border: 10px black;">Customer List</a>
            <img src="customer.jpg" alt="Random Name" style="width:100%">
            <p>View full list of customers.</p>
        </article>
        <!-- <article class="w3-third">
            <a href="#" type="button" style="border: 10px black;">Transfer Amount</a>
            <img src="transfer.jpg" alt="Random Name" style="width:100%">
            <p>Transfer amount to respective bank</p>
        </article> -->

    </section>

    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
        <a href="#"><i class="fa fa-facebook-official"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-flickr"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <p class="w3-medium">
            Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a>
        </p>
    </footer>

    <!-- Automatic Slideshow - change image every 3 seconds-->
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 3000);
        }
    </script>
             .mySlides {
                 width: 100%;
                 height: 500px;
                 margin-bottom: 20px;
                 border: 10px solid rgb(95, 7, 7);
             }
             /* editing for description */
             
             .main {
                 text-align: center;
             }
             
             h2 {
                 color: crimson;
                 font-size: 36px;
             }
             /* transfer button and customer list */
             
             .w3-third {
                 margin-left: 35%;
             }
             /*transfer button and customer list  */
             
             .img1 {
                 width: 100%;
                 margin: 10px;
                 height: 5%;
                 padding-top: 60px;
             }
             /* transfer button and customer list */
             
             #section,
             a {
                 background-color: rgba(226, 45, 45, 0.1);
                 border: 1px solid rgb(192, 71, 71);
             }
             /* transfer button and customer list */
             
             .img2 {
                 width: 100%;
                 margin: 10px;
                 padding-top: 60px;
                 border-top: 2px solid rgba(192, 42, 42, 0.1);
             }
             /* a hover */
             
             a:link {
                 color: rgb(128, 0, 117);
                 background-color: transparent;
                 text-decoration: none;
                 margin: 10px;
             }
             
             a:active {
                 color: yellow;
                 background-color: transparent;
                 text-decoration: underline;
             }
             
             a:link,
             a:visited {
                 background-color: #3652f4;
                 color: white;
                 padding: 15px 25px;
                 text-align: center;
                 text-decoration: none;
                 display: inline-block;
             }
             
             a:hover,
             a:active {
                 background-color: rgb(55, 0, 255);
             }