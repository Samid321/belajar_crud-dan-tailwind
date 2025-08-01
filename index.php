
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class=" container mx-auto p-6"></div>
    <div class="text-xl text text-blue-400 font-bold flex justify-center">tampil</div>
    <div class=" absolute right-10 top-10 ">
        <a href="./tambah.php" class="text-xl font-bold bg-blue-400 rounded-md p-3   text-white "> tambah data</a>
    </div>
    <table class="w-[80%] mx-auto m-2 mt-10  ">
        <thead class=" mt-10 bg-gray-300  ">

                <tr class="-20">
                <th class="text-center"> nomor </th>
                <th class=" text-center"> nama </th>
                <th class=" text-center"> alamat </th>
                <th class="text-center"> gambar </th>
                <th class="text-center"> action </th>
            </tr>
        </thead>
        <tbody  >
                <?php
                    include("./koneksi.php");
                    $data=$koneksi->query("SELECT * FROM `b`");
                    foreach($data as $i => $jadi):
                        $i+=1;
                    ?>

            <tr class="bg-gray-200  border-b-2 ">  
                <td class="text-center "><?="$i" ?></td>
                <td class="text-center"><?=$jadi["nama"]?> </td>
                <td class=" text-center"><?=$jadi["alamat"]?></td>
                <td class="text-center " >
                    <div class="w-20 mx-auto m-1  ">
                        <img src="./image/<?=$jadi['gambar']?>" alt="<?=$jadi['gambar']?>" class="cursor-pointer     ">
                    </div>
                </td>
                <td class=" flex justify-center gap-4 m-2">
                    <a href="./update.php?id=<?=$jadi['id']?>" class=" bg-blue-400  w-20 h-10 text-center pt-2 cursor-pointer text-white hover:bg-blue-200 transition duration-300  border-none rounded-md">Edit</a>
                    <form action="./controler/delate.php" method="post">
                        <input type="hidden" value=<?=$jadi['id']?> name="id" >
                        <button class="bg-red-500  border-none rounded-md w-20 h-10 cursor-pointer text-white">hapus</button>
                       </form>     
                    
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
        
        

        
    </table>
    
</body>

</html>