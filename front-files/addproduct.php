<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>

</style>
<body>
    <div class="container w-screen h-screen flex flex-col-rev bg-blue-500    ">

        <div class="right w-2/3 p-4 flex items-center justify-between outline-none bg-white rounded-l-2xl">
            <form action="../backend-files/product_controller.php?addproduct=TRUE" method="get" class="w-[370px]  mx-auto">
                <h1 class="text-xl font-bold text-center">Add a new product </h1>
                <p class="text-gray-400 text-red-600 text-md mb-4 ml-10"><?php if(!empty($_GET['error'])){ echo $_GET['error'];}?></p>
                <hr class="py-2">

                 
                <input type="text" class="border p-2 w-full duration-200 hover:border-b-blue-500  " placeholder="Product name" name="product_Name" autocomplete="off"> 
                <input type="text" class="border p-2 w-full   duration-200 hover:border-b-blue-500 " placeholder="Brand name" name="brand">  
                <input type="text" class="border p-2 w-full   duration-200 hover:border-b-blue-500 " placeholder="Supplier phone" name="supplier_phone">  
                <input type="text" class="border p-2 w-full   duration-200 hover:border-b-blue-500 " placeholder="Supplier name" name="supplier">  
                <input type="submit" class="border p-2 w-full mt-4  bg-blue-500  font-bold text-white cursor-pointer rounded-md  hover:bg-blue-800 duration-100  " value="Add the new product">

                <!-- <p class="text-sm text-gray-500 text-center mt-2">Don't have an account ?  <a href="./signup.php" class="text-blue-500 font-bold hover:underline">Create one</a></p> -->
            </form>
        </div>
    </div>

</body>
</html>