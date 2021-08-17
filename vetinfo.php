<?php
    session_start();
    if(isset($_SESSION['uname']) && !empty($_SESSION['uname'])){
        ?>
            <title>Vet Page</title>
            <title>Search Page</title>
            <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
            <div class="navbar border b-2 border b-gray-500">
                <img src="logo.PNG" class="m-1 p-1 h-32">
                <div class="p-4 flex bg-gray-400 justify-between">
                   <a class="text-xl font-medium hover:text-gray-600" href="homepage_user.php">Home</a>
                </div>
                    <?php
                        try{
                            $dbcon = new PDO("mysql:host=localhost:3306;dbname=petlover;","root","");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
                            $sqlquery1="SELECT * FROM vet Order By vet_id ASC";
                            
                            try{
                                $returnval1=$dbcon->query($sqlquery1);
                                $table1=$returnval1->fetchAll();

                                foreach($table1 as $row1){
                                    ?><br>
                                    <div class="max-w-lg mx-auto bg-gray-300">
                                       <table>
                                        <thead>
                                            <tr>      
                                                <div class="px-4 py-4">
                                                <h4 class="text-lg font-bold flex justify-center">VetId: <?php echo $row1['vet_id'] ?></h4>
                                                <h4 class="text-lg font-bold flex justify-center">Vet Name: <?php echo $row1['vet_name'] ?></h4> 
                                                <h4 class="text-lg font-bold flex justify-center">Contact No: <?php echo $row1['contact_number'] ?></h4>
                                                <h4 class="text-lg font-bold flex justify-center">Location: <?php echo $row1['location'] ?></h4>
                                                <h4 class="text-lg font-bold flex justify-center">Details: <?php echo $row1['vet_details']?></h4>
                                                <br></div>
                                            <tr>
                                        <?php
                                     }?>
                                <?php
                            }
                            catch(PDOException $ex){
                                ?>
                                       <tr> <th colspan="5">Data read error ... ...</th></tr>    
                                <?php
                            }
                        }
                        
                        catch(PDOException $ex){
                            ?>
                                    <tr><th colspan="5">Data read error ... ...</th></tr>
                            <?php
                        }
                    ?> 
                 </thead>
               </table>

        <?php
    }
    else{
        ?>
            <script>
                window.location.assign('index.html');
            </script>
        <?php
    }
?>