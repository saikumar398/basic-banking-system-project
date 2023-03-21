<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style>
      button{
        color: Black;
      }

      footer{
        background-color:Black;
        color:Black;
      }
    </style>

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #72dc8a">
              
              <div class="col-sm-12 col-md img text-center">
                <h1 style="color:black;">WELLCOME TO SPARK FOUNDATION BANK<h2>
                <!-- <img src="img/bank11.jpg" class="img-fluid pt-2"> -->
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/customer.jpg" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color : #72dc8a;" style="border-radius:0%">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/aboutus.jpg" class="img-fluid">
                    <br>
                    <a href="removeuser.php"><button style="background-color : #72dc8a;" style="border-radius:0%">Delete Users</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfermoney.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #72dc8a; ">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transhistory.png" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #72dc8a; ">Transaction History</button></a>
                  </div>
                  
            </div>
      </div>

      <!-- Footer -->


     <footer class="text-center mt-5 py-2">
        <p>&copy 2021 Made by <b>SANGEETA KEVAT</b></p>
      </footer>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>