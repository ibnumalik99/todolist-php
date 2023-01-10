<?php 
require "functions.php";
$lists = query("SELECT * FROM list");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <h1>ToDoList</h1>
        <a href="tambah.php" class="btn btn-outline-primary mb-2">Tambah Jadwal</a>
        <table class="table table-striped-line table-hover">
            <thead class="table-dark">
                <th class="">No.</th>
                <th>Jadwal</th>
                <th>Waktu</th>
                <th>Tools</th>
            </thead>
            <?php $i =1; ?>
            <?php foreach($lists as $list) : ?>
            <tbody class="">
                <td class=""><?= $i; ?></td>
                <td class="col-7 text-start"><?= $list["jadwal"] ; ?> </td>
                <td><?= $list["waktu"] ; ?></td>
                <td>
                    <a href="hapus.php?id=<?= $list["id"] ; ?>" onclick="return confirm('Apakah anda yakin untuk menghapus?')"><button class="btn btn-outline-danger">Hapus</button></a>
                    <a href="edit.php?id=<?= $list["id"] ; ?>"><button class="btn btn-outline-primary">Edit</button></a>
                </td>
            </tbody>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>