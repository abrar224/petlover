<?php
    if(isset($_POST['uname']) && isset($_POST['upass']) && !empty($_POST['uname']) && !empty($_POST['upass'])){
        $var1=$_POST['uname'];
        $var2=md5($_POST['upass']);        
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=petlover;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sqlquery="SELECT username FROM user WHERE username='$var1' and password='$var2' and user_type='general'";
            $sqlquery2="SELECT username FROM user WHERE username='$var1' and password='$var2' and user_type='admin'";
            try{
                $returnval=$dbcon->query($sqlquery);
                $returnval2=$dbcon->query($sqlquery2);
                if($returnval->rowCount()==1){
                    session_start();
                    $_SESSION['uname']=$var1;
                    ?>
                        <script>
                            window.location.assign('homepage_user.php');
                        </script>
                    <?php
                }
                else if($returnval2->rowCount()==1){
                    session_start();
                    $_SESSION['uname']=$var1;
                    ?>
                        <script>
                            window.location.assign('homepage_admin.php');
                        </script>
                    <?php
                }
                else{
                    ?>
                        <script>
                            window.location.assign('index.html');
                        </script>
                    <?php
                }
            }
            catch(PDOException $ex){
                ?>
                    <script>
                        window.location.assign('index.html');
                    </script>
                <?php
            }
        }
        catch(PDOException $ex){
            ?>
                <script>
                    window.location.assign('index.html');
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