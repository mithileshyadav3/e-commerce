<?php
include('./include/connect.php');
include('./function/coomon_functions.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>E-commerce websit using php and mysql</title>
      <!-- link css file -->
       <link rel="stylesheet" href="style.css">
      <!-- bootstrap css file -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
       <!-- bootsrtap font awesome file -->
       
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
      .card-img-top{
      width: 100%;
      height: 150px;
      object-fit: contain;
}
</style>
      </head>
<body>
<div class="container-fluid p-0">
<!-- first child -->
<nav class="navbar navbar-expand-lg bg-info">
      <div class="container-fluid">
        <img src="../online_shoping/photos/logo.jpg" alt="" class="logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Products</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link d" href="./User_area/user_register.php" >Register</a>
            </li>
            <li class="nav-item">
                  <a class="nav-link " href="#">Contact</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true">Register</a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <sup>1</sup>    Total Price:1000/-</a>
                </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_product">
            <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
             <input type="submit" value="search" class="btn btn-outline-light" name="search_data_product">
          </form>
        </div>
      </div>
    </nav>
    <!-- second child -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
<ul class="navbar-nav me-auto text-center">
<ul class="navbar-nav me-auto text-center">
<?php
if(!isset($_SESSION['username'])){
 echo " <li class='nav-item'>
            <a class='nav-link' href='#'>Welcome Guest'</a>
          </li>";
}
else {
 echo" <li class='nav-item'>
            <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
          </li>";
}
?>
         
         <?php
if(!isset($_SESSION['username'])){
 echo " <li class='nav-item'>
            <a class='nav-link' href='./User_area/login.php'>Login</a>
          </li>";
}
else {
 echo" <li class='nav-item'>
            <a class='nav-link' href='./User_area/user_logout.php'>Logout</a>
          </li>";
}
?>
</ul>
    </nav>
    <!-- third child -->
<div class="bg-light">
      <h3 class="text-center">Hidden Products</h3>
      <p class="text-center">Communication is at the heart of E-commerce and Community</p>
</div>
<!-- fourth child -->
 <div class="row">
      <!-- products -->
      <div class="col-md-10">
            <div class="row">
              <?php
             search_products();
              get_unique_category();
              get_unique_brand();
               ?>
                   </div>
            
      </div>
      <div class="col-md-2">
            <!-- side nav -->
             <ul class="navbar-nav me-auto bg-dark text-center text-light">
                  <li class="nav-item bg-info">
                        <a href="" class="nav-link"><h4>Delivery Brands</h4></a>
                  </li>
                  <?php
                getbrand();
                  ?>
                <li class="nav-item bg-info">
                        <a href="" class="nav-link"><h4>Categories</h4></a>
                  </li>
                  <?php
                  getcategory();
                  ?>
             </ul>
            
      </div>
 </div>
 <!-- last child -->
 <div class=" bg-info text-center p-3 ">
      <p>All right are here by Mithilesh</p>
 </div>
</div>
<!-- bootstrap js file -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
       "></script>
</body>
</html>