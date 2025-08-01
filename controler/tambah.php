<?php
include("./../koneksi.php");
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$targat="./../image/";
$jadi=$_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'],"./../image/$jadi");
$simpan=$koneksi->query("INSERT INTO `b`(`nama`, `alamat`,`gambar`) VALUES ('$nama','$alamat','$jadi')");

if($simpan){
    echo 
    "
    <script>
    alert('data berhasil di tambahkan')
    window.location='./../../index.php'
    </script>
    ";
}else{
    echo 
    "
    <script>
    lert('data gagal di tambahkan')
    window.location='./../../tambah.php'
    
    </script>
    
    
    ";
}
