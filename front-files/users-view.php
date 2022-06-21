<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./styles.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>

    <title>thestock | Dashboard</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');
    body{
        font-family: 'nunito';
    }
</style>
<body>
    <div class="container grid grid-cols-6 grid-rows-6  h-screen w-screen">
        <?php
        if (isset($_GET['message'])) {
            echo $_GET['message'];
        }
        ?>
        <div class="navbar col-start-1 col-end-2 row-start-1 row-end-7 bg-blue-500 p-2 relative">
            <h1 class="px-2 text-xl text-white font-extrabold">MyStock&trade;</h1>
            <div class="links ">
                <ul class="flex flex-col gap-4 px-2 mt-[12vh]">
                    <li class="flex items-center gap-2"><img src="" alt="" class="w-4  h-4"><a href="./products-view.php" class="font-semibold text-white">Products</a></li>
                    <li class="flex items-center gap-2"><img src="" alt="" class="w-4  h-4"><a href="./users-view.php" class="font-semibold text-white">Users</a></li>
                    <li class="flex items-center gap-2"><img src="" alt="" class="w-4  h-4"><a href="./inventory-view.php" class="font-semibold text-white">outgoing</a></li>
                    <li class="flex items-center gap-2"><img src="" alt="" class="w-4  h-4"><a href="./outgoing-view.php" class="font-semibold text-white">Inventory </a></li>
                </ul>
                <button class="px-10 py-2  bg-white text-blue-500 rounded-full absolute bottom-2 ">Logout </button>
            </div>

        </div>
        <div class="header col-span-5 flex items-center justify-between px-4 h-10 shadow-sm py-4">
            <h1 class="font-bold"></h1>
            <div class="flex gap-2">

                <img src="" alt="" class="w-8 h-8 bg-black">
                <span>Username</span>
            </div>

        </div>
        <div class="main  col-start-2 col-end-7  row-end-7 row-start-2 h-full p-2">
            <div class="search flex items-center justify-between px-10 mb-10">
                <h1 class= "text-xl font-bold underline "> All users</h1>
                <form action="" class=" w-fit"><input type="text" placeholder="Search product..." class="border-b-2 border-black py-2 w-[300px]"><button type="submit" class="py-2 px-4 border-b-2 border-black">Search</button></form>
                <a href="./addproduct.php" class="py-2 px-4 bg-blue-200 ">Add new username</a>
            </div>
            <div class="products_list mt-4">
                <table class="w-full">
                    <!-- border-b-2 border-gray-200 py-2 -->
                        <tr class="mb-10    ">

                            <th class="text-gray-600 py-4">User Id</th>
                            <th class="text-gray-600 py-4">First name</li>
                            <th class="text-gray-600 py-4">Last name</th>
                            <th class="text-gray-600 py-4">Telephone</li>
                            <th class="text-gray-600 py-4">Gender</th>
                            <th class="text-gray-600 py-4">nationality</th>
                            <th class="text-gray-600 py-4">Username</th>
                            <th class="text-gray-600 py-4">Email</th>
                            <th class="text-gray-600 py-4">Password</th>
                            <th class="text-gray-600 py-4">Edit</th>
                        </tr>
                    </thead >
                    <tbody>

                        <tr class="mb-2">
                            <td class=" py-2 text-center text-gray-600">User Id</td>
                            <td class=" py-2  text-center text-gray-600">First name</td>
                            <td class=" py-2  text-center text-gray-600">Last name</li>
                            <td class=" py-2   text-center text-gray-600">Telephone</td>
                            <td class=" py-2 text-center text-gray-600">Gender</td>
                            <td class=" py-2  text-center text-gray-600">nationality</td>
                            <td class=" py-2  text-center text-gray-600">Username</td>
                            <td class=" py-2  text-center text-gray-600">Email</td>
                            <td class=" py-2  text-center text-gray-600">Password</td>
                            <td class=" py-2 text-center text-gray-600 flex gap-2 justify-around"><a href="" class="px-2 py-1 bg-green-100 text-green-700">Update</a><a href="" class="px-2 py-1 bg-red-100 text-red-700">Delete</a></td>
                        </tr>

                        <tr class="mb-2">
                            <td class=" py-2 text-center text-gray-600">User Id</td>
                            <td class=" py-2  text-center text-gray-600">First name</td>
                            <td class=" py-2  text-center text-gray-600">Last name</li>
                            <td class=" py-2   text-center text-gray-600">Telephone</td>
                            <td class=" py-2 text-center text-gray-600">Gender</td>
                            <td class=" py-2  text-center text-gray-600">nationality</td>
                            <td class=" py-2  text-center text-gray-600">Username</td>
                            <td class=" py-2  text-center text-gray-600">Email</td>
                            <td class=" py-2  text-center text-gray-600">Password</td>
                            <td class=" py-2 text-center text-gray-600 flex gap-2 justify-around"><a href="" class="px-2 py-1 bg-green-100 text-green-700">Update</a><a href="" class="px-2 py-1 bg-red-100 text-red-700">Delete</a></td>
                        </tr>
                        <tr class="mb-2">
                            <td class=" py-2 text-center text-gray-600">User Id</td>
                            <td class=" py-2  text-center text-gray-600">First name</td>
                            <td class=" py-2  text-center text-gray-600">Last name</li>
                            <td class=" py-2   text-center text-gray-600">Telephone</td>
                            <td class=" py-2 text-center text-gray-600">Gender</td>
                            <td class=" py-2  text-center text-gray-600">nationality</td>
                            <td class=" py-2  text-center text-gray-600">Username</td>
                            <td class=" py-2  text-center text-gray-600">Email</td>
                            <td class=" py-2  text-center text-gray-600">Password</td>
                            <td class=" py-2 text-center text-gray-600 flex gap-2 justify-around"><a href="" class="px-2 py-1 bg-green-100 text-green-700">Update</a><a href="" class="px-2 py-1 bg-red-100 text-red-700">Delete</a></td>
                        </tr>   
            </div>
            </tbody>
            </table>
        </div>

    </div>
    </div>

</body>

</html>