<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
       <title>Sign Up Page</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
     <img src="logo.PNG" class="m-auto p-1 h-48">
        <div class="container mx-auto p-2">
            <div class="max-w-sm mx-auto bg-gray-400 px-5 py-10 rounded shadow-xl"> 
            <form action="register.php" method="POST">
            <label class="text-lg leading-10"> Full Name </label>
            <input type="text" class="block w-full p-2 border rounded border-gray-600" name="fullname" placeholder="Enter Full Name" autocomplete="off"><br>
            <label class="text-lg leading-10"> Email </label>
            <input type="text" class="block w-full p-2 border rounded border-gray-600" name="uemail" placeholder="example@gmail.com" autocomplete="off"><br>
            <label class="text-lg leading-10"> Phone Number </label>
            <input type="text" class="block w-full p-2 border rounded border-gray-600" name="unumber" placeholder="Enter Phone Number" autocomplete="off"><br>
            <label class="text-lg leading-10"> Username </label> 
            <input type="username" class="block w-full p-2 border rounded border-gray-600" name="uname" placeholder="Enter Username" autocomplete="off"><br>
            <label class="text-lg leading-10"> Password </label>
            <input type="password"class="block w-full p-2 border rounded border-gray-600" name="upass" placeholder="Enter Password"><br><br><input type="submit" value="Sign up" class="p-2 w-full bg-blue-600 text-white text-lg border rounded border-gray-600 hover:bg-blue-700"><br><br>
            <a class="hover:text-blue-600 underline" href="index.html">Already have an account?</a>
           </form>
           </div>
        </div>
    </body>
</html>