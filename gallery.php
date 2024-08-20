<?php
include("connect.php");
$filename = "songlist.json";
$data = file_get_contents($filename);
$array = json_decode($data, true);

foreach ($array as $row) {
    $id = $row["id"];
    $path = $row["path"];
    $image = $row["image"];
    $artist = $row["artist"];
    $name = $row["name"];
    $sql = "INSERT INTO gallery (id, path, image, artist, name) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, "issss", $id, $path, $image, $artist, $name);
    mysqli_stmt_execute($stmt);
}

echo "success hem";
mysqli_close($connect);
?>
            