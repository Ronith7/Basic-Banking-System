<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- external css bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <!-- <link href="./css/style.css" rel="text/stylesheet"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image"/x-icon>
    <title>DigitalSafeBank</title>
</head>
<body>

  <!-- header with connection and sql code -->
  <?php require_once './include/header.php' ?>
        <!-- middle container start-->
        <section id="services" class="services">
        <div class="container my-5">
            <h1 class="text-dark text-center my-5">Our Services</h1>
            <div class="container">
            <div class="row row-cols-2">       
              <div class="col ">
              <h3>Manage Everything at one place</h3>   
                <div class="container col my-5">
                   <p class="lead"> To see all Customers</p>
                   <a href="customer.php"><button class="btn btn-primary" type="button" >View Customer</button></a>
                </div>
                <div class="container col my-5">
                   <p class="lead"> To see all Transaction</p>
                   <a href="transaction.php"><button class="btn btn-primary" type="button" >View Transactions</button></a>
                </div>
               
              </div>

              <div class="col">
              <img src="SOBK0422040_780x440_mobile.jpeg">
              </div>
            </div>
            </section>
            <section id="about" class="about">
    </section>
             
            </div>
          </div>
        <!-- middle container end -->

         <!-- footer  -->
        <?php require_once './include/footer.php' ?>  
</body>

      <!-- bootstrap js script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</html> 