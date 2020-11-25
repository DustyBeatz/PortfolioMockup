<?php
include('connect.php');
include('functions.php');

if(isset ($_GET["id"])){
    $targetID = $_GET["id"];
    $getSingleVid = getSingleVideo($pdo, $targetID);

    return $getSingleVid;
} 

else {
    $allVideo = getAllVideos($pdo);

    return $allVideo;
}