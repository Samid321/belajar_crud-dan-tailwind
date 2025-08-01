







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class = " container mx-auto p-6">
            <?php
                include('./koneksi.php');
                $id=$_GET['id'];
                $data=$koneksi->query("SELECT * FROM `b` WHERE id=$id");
                foreach($data as $i => $value):?>
        <form action = "./controler/edit.php?id=<?=$value['id']?>" method='post'>
            <label for = "nama" class="text-xl font-bold">
                nama
                <input type = "text" placeholder="<?=$value['nama']?>" name="nama"class =" w-full border-none p-5 rounded-md bg-gray-400 grid my-10" >
            </label>
            <label for="alamat" class="text-xl font-bold">
                alamat
                <input type= "text" placeholder="<?=$value['alamat']?>" name='alamat'class="w-full border-none p-5 rounded-md bg-gray-400 my-10  ">
            </label>
            <button type="submit" class="w-30 flex mx- p-3 text-center rounded-md bg-blue-500 flex justify-center mx-auto text-white hover:bg-blue-200 transition duration-300 cursor-pointer ">submit</button>
            




        </form>
        <?php endforeach?>
    </div>
    
</body>
</html>