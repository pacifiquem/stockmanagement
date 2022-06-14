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
    <div class="container w-screen h-screen flex  bg-blue-500    ">
        <div class="left w-1/3  bg-blue-500 flex flex-col items-center justify-around">
            <h1 class="text-xl font-bold text-white">MyStock &trade;</h1>
            <img src="https://images.unsplash.com/photo-1613442368781-2e54fee2a055?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fHN0b2NrJTIwbWFuYWdlbWVudHxlbnwwfDF8MHx8&auto=format&fit=crop&w=500&q=60" class=" mx-auto rounded-xl w-2/3" alt="" />

        </div>
        <div class="right w-2/3 p-4 flex items-center justify-between outline-none bg-white rounded-l-2xl  ">
            <form action="" method="" class="w-[370px]  mx-auto">
                <h1 class="text-xl font-bold ">Create an account in   <span class=" font-bold text-blue-500">MyStock &trade;</span></h1>
                <p class="text-gray-400 text-sm mb-4">Fill in all fields provided below to start using our stock managemt system</p>
                <hr class="py-2">

                <input  type="text" class="border-b p-2 w-1/2 outline-none duration-200 hover:border-b-blue-500" placeholder="Your lastname" name="lastname" autocomplete="off">
                <input type="text" class="border-b p-2 w-1/2 float-right duration-200 hover:border-b-blue-500" placeholder="Your firstname" name="firstname" autocomplete="off">
                <input type="text" class="border-b p-2 w-full duration-200 hover:border-b-blue-500" placeholder="Your telephone" name="telephone" autocomplete="off">
                <input type="text" class="border-b p-2 w-full duration-200 hover:border-b-blue-500" placeholder="Your gender" name="gender" autocomplete="off">
                <input type="text" class="border-b p-2 w-full duration-200 hover:border-b-blue-500" placeholder="Your nationality" name="nationality" autocomplete="off">
                <input type="text" class="border-b p-2 w-full duration-200 hover:border-b-blue-500" placeholder="Your username " name="username" autocomplete="off">
                <input type="emal" class="border-b p-2 w-full duration-200 hover:border-b-blue-500" placeholder="Your email address" name="email" autocomplete="off">
                <input type="password" class="border-b p-2 w-full duration-200 hover:border-b-blue-500" placeholder="Your password" name="email">   
                <input type="submit" class="border-b p-2 w-full mt-4  bg-blue-500  font-bold text-white cursor-pointer rounded-md   " value="Create account                      ">
                <p class="text-sm text-gray-500 text-center mt-2">Already have an account ?  <a href="./login.php" class="text-blue-500 font-bold hover:underline">Login</a></p>
            </form>  
        </div>
    </div>

</body>
</html>