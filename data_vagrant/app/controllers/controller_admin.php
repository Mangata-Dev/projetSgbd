<?php
  include "../models/Product.php";
  $products = getAllProducts();
  echo json_encode($products);
