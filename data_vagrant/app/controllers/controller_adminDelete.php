<?php

include "../models/Product.php";
$idProduct = isset($_POST['idProduct']) ?  $_POST['idProduct'] : null ;
if(!empty($idProduct) && is_numeric($idProduct)){
    deleteProduct($idProduct);
}else{
    echo json_encode(array("error" => "Une erreur est survenue !"));
}
