<?php
    session_start();
    if(isset($_SESSION['uname']) && !empty($_SESSION['uname'])){
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <title>Add Vet Info</title>
                <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">    
            <div><img src="logo.PNG" class="m-1 p-1 h-32"></div>
            </head>
            <body>
               <div class="max-w-sm mx-auto bg-gray-400 px-5 py-10 rounded shadow-xl">
                <form action="addprocess_vet.php" method="post" enctype="multipart/form-data">
                    <label class="text-lg leading-10">Vet Name</label>
                    <input type="text" name="vname2"  class="block w-full p-2 border rounded border-gray-600" placeholder="Add Vet Name" autocomplete="off"><br>
                    <label class="text-lg leading-10">Contact Number</label>
                    <input type="text" name="cname2"  class="block w-full p-2 border rounded border-gray-600" placeholder="Add Phone Number" autocomplete="off"><br>
                    <label class="text-lg leading-10">Location</label>
                    <input type="text" name="lname2"  class="block w-full p-2 border rounded border-gray-600" placeholder="Add Location" autocomplete="off"><br>
                    <label class="text-lg leading-10">Vet Details</label>
                    <textarea name="dname2" class="block w-full p-2 border rounded border-gray-600" placeholder="Add Details" cols="34" rows="8"></textarea><br>
                    <div class="flex justify-between">
                    <input type="submit" class="px-12 py-1 text-lg text-white border rounded border-gray-800 bg-blue-600 hover:bg-blue-700" value="Add">
                    <a class="px-9 py-1 text-lg text-white border rounded border-gray-800 bg-red-600 hover:bg-red-700" href="homepage_admin.php">Cancel</a></div>
                </form>
                </div><br>
            </body>
        </html>
    <?php
    }
    else{
        ?>
            <script>
                window.location.assign('login_user.php');
            </script>
        <?php
    }