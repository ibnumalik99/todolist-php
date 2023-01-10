<?php 
require "functions.php";
if( isset($_POST["submit"]) ){
    if (tambah($_POST) > 0){
        echo "
            <script>
                alert('Data Sukses!');
                document.location.href='index.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Data Gagal!');
                document.location.href='index.php';
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center col-6">
        <h1>Tambah jadwal</h1>
        <form action="" method="post" class="">
            <input class="form-control mt-2" type="text" name="jadwal" required placeholder="isikan jadwal anda!">
            <input class="form-control mt-2" type="date" name="waktu" required>
            <button name="submit" class="btn btn-outline-primary mt-2">Tambah</button>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>