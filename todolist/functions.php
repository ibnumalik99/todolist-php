<?php 
$db = mysqli_connect("localhost","root", "", "todolist");
function query ($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $db;
    // ambil data dari form
    $jadwal = $data['jadwal'];
    $waktu = $data['waktu'];

    // kirim data form ke database
    $query = "INSERT INTO list VALUES ('', '$jadwal','$waktu');";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}
function delet($id){
    global $db;
    mysqli_query($db, "DELETE FROM list WHERE id = $id");
    return mysqli_affected_rows($db);
}
function edit($data){
    global $db;
    $id = $data["id"];
    $jadwal = $data["jadwal"];
    $waktu = $data["waktu"];
    $query = "UPDATE list SET
        jadwal = '$jadwal',
        waktu = '$waktu' 
        WHERE id = $id
    ";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}
?>