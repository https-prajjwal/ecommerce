<?php session_start() ?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="./style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    
    <style>
    body {
      background-color: #f0f0f0;
      padding: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
      border: 2px solid #739072;
      border-radius: 8px;
      overflow: hidden;
    }

    th, td {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid #739072;
      color: #333;
    }

    th {
      background-color: #739072;
      color: #fff;
    }

    tr:nth-child(even) {
      background-color: #f7f7f7;
    }
  </style>
</head>


<body>

  <div class="col-md-12">
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">HamroGrocery</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Shop
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Fruits</a></li>
                <li><a class="dropdown-item" href="#">Vegetables</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Dairy</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> Contact</a>
            </li>
          </ul>
          <form class="d-flex" style="margin-bottom: 0px;">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <button type="button" class="btn btn-success position-relative" style="margin-left: 8px;">
            Cart
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            <?php if (isset($_SESSION['product_counter'])) {echo $_SESSION['product_counter'];} else {echo "0";}?>
              <span class="visually-hidden">unread messages</span>
            </span>
          </button>
        </div>
      </div>
    </nav>
  </div>


  <div class="container" style="margin-top: 100px;" id="tb">
    <table class="table">
      <thead>
        <tr>
          <th>Product</th>
          <th>Name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>

      <?php
      if (isset($_SESSION['product_name'])){
        $filtered_array = array_unique($_SESSION['product_name']);
        $filtered_price = array_unique($_SESSION['product_price']);
        $filtered_image = array_unique($_SESSION['product_image']);
        $total=0.00;

    foreach($filtered_array as $row){
      $item_repeated = array_count_values($_SESSION['product_name']);
      $find_position_in_array = array_search($row,$_SESSION['product_name']);
      echo "<tr>";
      echo '<td><img style="height: 100px;width: 100px;" src="./image/' . $_SESSION['product_image'][$find_position_in_array] . '" alt=""></td>';
      echo "<td>$row</td>";
      echo "<td>$item_repeated[$row]</td>";
      echo "<td> $ " . $_SESSION['product_price'][$find_position_in_array] . " CAD</td>";
      $subtotal = floatval($item_repeated[$row]) * floatval($_SESSION['product_price'][$find_position_in_array]);
        echo "<td> $ $subtotal CAD</td>";
      echo "<tr>";

      $total = $total+$subtotal;
  }

  echo "<tr>";
      echo '<td></td>';
      echo "<td></td>";
      echo "<td></td>";
      echo "<td>Total</td>";
      echo "<td>$ $total CAD</td>";
  echo "<tr>";
}
?>

      
      </tbody>
    </table>
    <div class="button-contain">
    <button type="button" class="btn btn-success position-relative" style="margin-top:16px; margin-bottom:24px;">Proceed to Checkout</button>
    </div>
  </div>



  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h4>Product Categories</h4>
          <ul>
            <li><a href="#">Fruits</a></li>
            <li><a href="#">Vegetables</a></li>
            <li><a href="#">Dairy</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h4>Connect With Us</h4>
          <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
          </ul>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-12">
          <p>&copy; 2024 HamroGrocery. All rights reserved.</p>
          <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>


