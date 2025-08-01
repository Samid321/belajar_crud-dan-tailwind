<?php
include("./../koneksi.php");
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$id=$_GET['id'];
$data=$koneksi->query("UPDATE `b` SET `nama`='$nama',`alamat`='$alamat' WHERE `id`='$id'");
if($data){
    echo"
    <script>
    alert('data berhasil di tambahkan')
    window.location='./../index.php'
    </script>
    
    
    
    ";
  
}
else{
    echo"
    <script>
    alert('data anda gagal di tambahkan')
    window.location='./../update.php'
    </script>
    ";
}