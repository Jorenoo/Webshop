<?php
session_start();
echo $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Webshop Joreno de Rooij</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css'">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</style>
</head>
<body>
    <div class="header">
        <a href="Index.html" class="logo">Laptops</a>
        <div class="header-right">
          <a class="active" href="registreer.html">Registreer</a>
          <a href="login.html">Login</a>
          <a class="fa fa-shopping-cart" aria-hidden="true"style="font-size:24px"></a>
        </div>
      </div> 

<div class= "products">
      <div class="card">
        <img src="img/laptop1.jpg" alt="Denim Jeans" style="width:100%">
        <h1>Slome laptop</h1>
        <p class="price">$199.99</p>
        <p><button>Add to Cart</button></p>
      </div>
      

        <div class="card">
          <img src="img/laptop1.jpg" alt="Denim Jeans" style="width:100%">
          <h1>Slome laptop</h1>
          <p class="price">$199.99</p>
          <p><button>Add to Cart</button></p>
        </div>

        <div class="card">
          <img src="img/laptop1.jpg" alt="Denim Jeans" style="width:100%">
          <h1>Slome laptop</h1>
          <p class="price">$199.99</p>
          <p><button>Add to Cart</button></p>
        </div>

        <div class="card">
          <img src="img/laptop1.jpg" alt="Denim Jeans" style="width:100%">
          <h1>Slome laptop</h1>
          <p class="price">$199.99</p>
          <p><button>Add to Cart</button></p>
        </div>
        </div>

</body>
</html>