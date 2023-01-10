<?php 
require "functions.php";

$id = $_GET["id"];
if(delet($id)>0){
    echo "
            <script>
                document.location.href='index.php';
            </script>
        ";
}else{
    echo "
            <script>
                alert('Data Gagal Dihapus!');
                document.location.href='index.php';
            </script>
        ";
}
 ?>