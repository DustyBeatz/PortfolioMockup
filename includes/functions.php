<?php
    //include the file we just wrote - connect
    include("connect.php"); //like a JS import statement
$result = array();



//THIS IS THE IMAGE FETCH PORTION


function getAllImages($conn) { //Collects all the images from gallery_main and sends it to FetchAll();
    $query = "SELECT * FROM gallery_main";

    $runQuery = $conn->query($query);

    while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)) {
        $result[] =$row;
    }

    echo(json_encode($result));
}



function getSingleImage($conn, $id) {//Collects selects the single image id from gallery_main and sends it to FetchAll();
    $query = "SELECT * FROM gallery_main WHERE id=" . $id . "";

    $runQuery = $conn->query($query);

    while($row = $runQuery-fetchAll(PDO::FETCH_ASSOC)) {
        $result[] =$row;
    }

    echo (json_encode($result));

}



// THIS IS THE VIDEO FETCH PORTION


function getAllVideos($conn) { //Collects all the videos from gallery_main and sends it to FetchAll();
    $query = "SELECT * FROM gallery_video";

    $runQuery = $conn->query($query);

    while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)) {
        $result[] =$row;
    }

    echo(json_encode($result));
}

function getSingleVideo($conn, $id) { //Collects selects the single video id from gallery_main and sends it to FetchAll();
    $query = "SELECT * FROM gallery_video WHERE id=" . $id . "";

    $runQuery = $conn->query($query);

    while($row = $runQuery-fetchAll(PDO::FETCH_ASSOC)) {
        $result[] =$row;
    }

    echo (json_encode($result));

}