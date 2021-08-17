<?php
    session_start();
    if(isset($_SESSION['uname']) && !empty($_SESSION['uname'])){

        if(isset($_POST['vname2']) && isset($_POST['cname2']) && isset($_POST['lname2']) && isset($_POST['dname2'])  && !empty($_POST['vname2']) && !empty($_POST['cname2']) && !empty($_POST['lname2']) && !empty($_POST['dname2'])){
            
            $var1=$_SESSION['uname'];
            $var2=$_POST['vname2'];
            $var3=$_POST['cname2'];
            $var4=$_POST['lname2'];
            $var5=$_POST['dname2'];

            
            try{
                $dbcon = new PDO("mysql:host=localhost:3306;dbname=petlover;","root","");
                $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sqlquery="INSERT INTO vet VALUES(NULL,'$var2','$var3','$var5','$var4','$var1')"; 
                try{
                    $dbcon->exec($sqlquery);
                    ?>
                        <script>
                            window.location.assign('homepage_admin.php');
                        </script>
                    <?php
                }
                catch(PDOException $ex){
                    ?>
                        <script>
                           window.location.assign('addvet.php');
                        </script>
                    <?php
                }
            }
                
            catch(PDOException $ex){
                ?>
                    <script>
                        window.location.assign('addvet.php');
                    </script>
                <?php
            }
        }
        else{
            ?>
                <script>
                    window.location.assign('addvet.php');
                </script>
            <?php
        }
    }
    else{
        ?>
            <script>
                window.location.assign('index.html');
            </script>
        <?php
    }
?>