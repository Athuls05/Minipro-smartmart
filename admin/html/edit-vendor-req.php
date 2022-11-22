<?php
session_start();

?>

<?php 
        
            if(isset($_POST['name'])){
            $name = $_POST["name"];    
            $username = $_POST["username"];
            $gender = $_POST["gender"];
            $contact = $_POST["contact"];
          
            $id = $_POST["id"];
           
            include 'config.php';
            //code after connection is successfull
            //update query
            $qry = "update vendor set name='$name', username='$username', contact='$contact',  address='$address' where id='$id'";
            $result = mysqli_query($link,$qry); //query executes

            if(!$result){
                echo"ERROR!!";
            }else {

                header('Location:index.php');

            }

            }else{
                echo"<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
            }
?>
<a href="index.php">
          <span class="btn btn-success">Go Back</span>
        </a>
        </body></html>