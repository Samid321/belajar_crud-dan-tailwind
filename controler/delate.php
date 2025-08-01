<?php
require_once __DIR__."/../koneksi.php";

$id=$_POST['id'];
$data=$koneksi->query("DELETE FROM `b` WHERE id=$id");
if($data){
    echo 
    "
    <script>
    alert('data berhasil di hapus')
    window.location='./../index.php'
    </script>
    ";
}else{
    echo
    "
    <script>
    alert('data gagal di hapus')
    window.location='./../index.php'
    
    </script>
    
    
    
    ";
}