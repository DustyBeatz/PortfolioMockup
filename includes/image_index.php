<?php
include('connect.php');
include('functions.php');

if(isset ($_GET["id"])){
    $targetID = $_GET["id"];
    $getSingleImg = getSingleImage($pdo, $targetID);

    return $getSingleImg;
} 

else {
    $allImage = getAllImages($pdo);

    return $allImage;
}