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
        <form action = "./controler/tambah.php/" method='post' enctype="multipart/form-data">
            <label for = "nama" class="text-xl font-bold">
                nama
                <input type = "text" name="nama"class =" w-full border-none p-5 rounded-md bg-gray-400 grid my-10">
            </label>
            <label for="alamat" class="text-xl font-bold">
                alamat
                <input type= "text" name='alamat'class="w-full border-none p-5 rounded-md bg-gray-400 my-10 ">
            </label>
            <label for="foto" class="border w-40 mb-10 cursor-pointer flex mx-auto  text-center  p-5 rounded-md bg-black text-white  font-bold hover:bg-gray-400 transition duration-300 "> masukan foto
            <input type="file" id="foto" class="hidden" name="foto" accept="image/*">
            </label>
            <button type="submit" class="w-30 flex mx- p-3 text-center rounded-md bg-blue-500 flex justify-center mx-auto text-white hover:bg-blue-200 transition duration-300 cursor-pointer ">submit</button>
            



        </form>
    </div>
    
</body>
</html>