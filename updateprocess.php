<?php
    session_start();
    if(isset($_SESSION['uname']) && !empty($_SESSION['uname'])){
            $var1=$_POST['lname1'];
            $var2=$_POST['dname1'];
            $var5=$_POST['pname1'];
            $var6=$_GET['post'];
            
            
            try{
                $dbcon = new PDO("mysql:host=localhost:3306;dbname=petlover;","root","");
                $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sqlquery="UPDATE adoption_post SET location='$var1',description='$var2',price='$var5' WHERE post_id='$var6'";  
                try{
                    $dbcon->exec($sqlquery);
                    ?>
                        <script>
                      window.location.assign('homepage_user.php');
                        </script>
                    <?php
                }
                catch(PDOException $ex){
                    ?>
                        <script>
                           window.location.assign('updatepost.php');
                        </script>
                    <?php
                }
                
            }
            catch(PDOException $ex){
                ?>
                    <script>
                        window.location.assign('updatepost.php');
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