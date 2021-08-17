<?php

    if(isset($_POST['fullname']) && isset($_POST['uemail']) && isset($_POST['unumber']) && isset($_POST['uname']) && isset($_POST['upass']) && !empty($_POST['fullname']) && !empty($_POST['uemail']) && !empty($_POST['unumber']) && !empty($_POST['uname']) && !empty($_POST['upass'])){
        $var1=$_POST['fullname'];
        $var2=$_POST['uemail'];
        $var3=$_POST['unumber'];
        $var4=$_POST['uname'];
        $var5=md5($_POST['upass']);
        
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=petlover;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query="INSERT INTO user VALUES('$var1','$var2','$var3','$var4','$var5', 'general')";           
            try{
                $dbcon->exec($query);
                ?>
                    <script>window.location.assign('index.html')</script>
                <?php
            }
            catch(PDOException $ex){
                ?>
                    <script>window.location.assign('signup.php')</script>
                <?php
            }
            
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('signup.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>window.location.assign('signup.php')</script>  
        <?php      
    }
?>