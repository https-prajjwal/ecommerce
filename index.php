<?php 
session_start();

if (isset($_POST['submit'])){
    if(isset($_SESSION['product_counter'])){
        $_SESSION['product_counter'] = $_SESSION['product_counter']+1;
    }
    else{
        $_SESSION['product_counter']=1;
        $_SESSION['product_name']=array();
        $_SESSION['product_price']=array();
        $_SESSION['product_image']=array();
    }
    $_SESSION['product_name'][$_SESSION['product_counter']]= $_POST['product_name'];
    $_SESSION['product_price'][$_SESSION['product_counter']]= $_POST['product_price'];
    $_SESSION['product_image'][$_SESSION['product_counter']]= $_POST['product_image'];
}


?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="./style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <div class="col-md-12">
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">HamroGrocery</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
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
          <a href="./cart.php"><button type="button" class="btn btn-success position-relative" style="margin-left: 8px;">
            Cart
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            <?php if (isset($_SESSION['product_counter'])) {echo $_SESSION['product_counter'];} else {echo "0";}?>
              <span class="visually-hidden">unread messages</span>
            </span>
          </button>
</a>
        </div>
      </div>
    </nav>
  </div>


  <div class="hero-area">

    <div class="container d-flex justify-content-end align-items-end">



      <div class="col-md-6" id="txt">
        <h1 class="nepal">Welcome to Our Grocery Store</h4>
          <h4 class="nepal1">This is a famous Grocery Store in Toronto</h4>
          <a href="#groceries"><button class="btn-gradient btn-glow"
              style="border-radius: 8px; padding: 8px 20px 8px 20px; font-size: 13px; margin-top: 12px;">
              Shop Now
            </button>
          </a>


      </div>


    </div>
  </div>

  <div class="product-area text-center" id='groceries'>

    <h1 id="topic">Grocery Items</h1>

    <div class="container" style="margin-top: 16px;">
      <div class="row">
        <div class="col-md-4">
          <div class="card" id="item">
            <img src="./image/skimmilk.png" class="card-image" alt="">
            <div class="card-body">
              <h4 class="card-title">Skimmed Milk</h4>
              <h5 class="card-price">Price: $4.50 CAD</h5>
              <form action="" method="post">
                <input type='hidden' name="product_name" value="Skimmed Milk">
                <input type='hidden' name="product_price" value="4.50">
                <input type='hidden' name="product_image" value="skimmilk.png">
                <button class="btn btn-outline-success" type="submit" name="submit">Add to Cart</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" id="item">
            <img src="./image/2milk.png" class="card-image" alt="">
            <div class="card-body">
              <h4 class="card-title">2% Milk</h4>
              <h5 class="card-price">Price: $6.50 CAD</h5>
              <form action="" method="post">
                <input type='hidden' name="product_name" value="2% Milk">
                <input type='hidden' name="product_price" value="6.50">
                <input type='hidden' name="product_image" value="2milk.png">
                <button class="btn btn-outline-success" type="submit" name="submit">Add to Cart</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" id="item">
            <img src="./image/banana.jpg" class="card-image" alt="">
            <div class="card-body">
              <h4 class="card-title">Banana</h4>
              <h5 class="card-price">Price: $1.50 CAD / bag</h5>
              <form action="" method="post">
                <input type='hidden' name="product_name" value="Banana">
                <input type='hidden' name="product_price" value="1.50">
                <input type='hidden' name="product_image" value="banana.jpg">
                <button class="btn btn-outline-success" type="submit" name="submit">Add to Cart</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="separator"></div>

      <div class="row">
        <div class="col-md-4">
          <div class="card" id="item">
            <img src="./image/apple.jpg" class="card-image" alt="">
            <div class="card-body">
              <h4 class="card-title">Apple</h4>
              <h5 class="card-price">Price: $1.50 CAD / bag</h5>
              <form action="" method="post">
                <input type='hidden' name="product_name" value="Apple">
                <input type='hidden' name="product_price" value="1.50">
                <input type='hidden' name="product_image" value="apple.jpg">
                <button class="btn btn-outline-success" type="submit" name="submit">Add to Cart</button>
              </form>
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" id="item">
            <img src="./image/cauli.jpg" class="card-image" alt="">
            <div class="card-body">
              <h4 class="card-title">Cauli-flower</h4>
              <h5 class="card-price">Price: $3.50 CAD</h5>
              <form action="" method="post">
                <input type='hidden' name="product_name" value="Cauli-flower">
                <input type='hidden' name="product_price" value="1.50">
                <input type='hidden' name="product_image" value="cauli.jpg">
                <button class="btn btn-outline-success" type="submit" name="submit">Add to Cart</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" id="item">
            <img src="./image/potato.webp" class="card-image" alt="">
            <div class="card-body">
              <h4 class="card-title">Potato</h4>
              <h5 class="card-price">Price: $4.50 CAD / bag</h5>
              <form action="" method="post">
                <input type='hidden' name="product_name" value="Potato">
                <input type='hidden' name="product_price" value="4.50">
                <input type='hidden' name="product_image" value="potato.webp">
                <button class="btn btn-outline-success" type="submit" name="submit">Add to Cart</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="separator"></div>

      <div class="row">
        <div class="col-md-4">
          <div class="card" id="item">
            <img src="./image/kurkure.webp" class="card-image" alt="">
            <div class="card-body">
              <h4 class="card-title">Kurkure</h4>
              <h5 class="card-price">Price: $1.50 CAD</h5>
              <form action="" method="post">
                <input type='hidden' name="product_name" value="Kurkure">
                <input type='hidden' name="product_price" value="1.50">
                <input type='hidden' name="product_image" value="kurkure.webp">
                <button class="btn btn-outline-success" type="submit" name="submit">Add to Cart</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" id="item">
            <img src="./image/waiwai.jpg" class="card-image" alt="">
            <div class="card-body">
              <h4 class="card-title">WaiWai Quick</h4>
              <h5 class="card-price">Price: $0.90 CAD</h5>
              <form action="" method="post">
                <input type='hidden' name="product_name" value="WaiWai Quick">
                <input type='hidden' name="product_price" value="0.90">
                <input type='hidden' name="product_image" value="waiwai.jpg">
                <button class="btn btn-outline-success" type="submit" name="submit">Add to Cart</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" id="item">
            <img src="./image/rice.webp" class="card-image" alt="">
            <div class="card-body">
              <h4 class="card-title">Rice</h4>
              <h5 class="card-price">Price: $9.50 CAD</h5>
              <form action="" method="post">
                <input type='hidden' name="product_name" value="Rice">
                <input type='hidden' name="product_price" value="9.50">
                <input type='hidden' name="product_image" value="rice.webp">
                <button class="btn btn-outline-success" type="submit" name="submit">Add to Cart</button>
              </form>
            </div>
          </div>
        </div>
      </div>

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