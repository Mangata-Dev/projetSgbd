<?php
  include "../models/Product.php";
  $products = getTenLastProducts();
  echo json_encode($products);
