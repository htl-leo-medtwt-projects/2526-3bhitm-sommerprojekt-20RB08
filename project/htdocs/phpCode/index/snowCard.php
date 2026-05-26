<?php
# conn
require_once __DIR__ . '/../../datenBank/mysqlConnection.php';

function printFourTrickCard() {
    global $conn;

    $res = $conn->query("SELECT *
                    FROM trick
                    ORDER BY RAND()
                    LIMIT 4");
    $tricks = mysqli_fetch_all($res, MYSQLI_ASSOC);

    $s = "";


    foreach ($tricks as $trick) {
        $id = $trick['id'];
        $titel = $trick['titel'];
        $description = $trick['description'];
        $imagePath = $trick['image_path'];

        $s .= "
            <!--Trick Card-->
                <div class='trickCard'>
                    <img src='img/$imagePath' alt='$titel'>
                    <div class='layer'>
                        <h1>$titel</h1>
                        <div class='text'>
                            $description
                        </div>
                         <a href='pages/tutorial.php?trickId=$id' class='button'>Learn More!</a>
                    </div>
                </div>
        ";
    }

    echo $s;
}