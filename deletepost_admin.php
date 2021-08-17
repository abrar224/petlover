 <?php
    session_start();
    if(isset($_SESSION['uname']) && !empty($_SESSION['uname'])){
        $var1=$_GET['post'];
    try{
        $dbcon = new PDO("mysql:host=localhost:3306;dbname=petlover;","root","");
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query="DELETE FROM adoption_post WHERE post_id=$var1";
        try{
                $dbcon->exec($query);
                ?>
                    <script>window.location.assign('homepage_admin.php')</script>
                <?php
        }
       catch(PDOException $ex){
                ?>
                    <script>window.location.assign('homepage_admin.php')</script>
                <?php
            }
            
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('homepage_admin.php')</script>
            <?php
        }
    }
      else{
            ?>
            <script>
                window.location.assign(index.html);
            </script>
            <?php
    }?>