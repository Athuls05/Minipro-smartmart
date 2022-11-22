<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css/fullcalendar.css" />
<link rel="stylesheet" href="../css/matrix-style.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
<link href="../font-awesome/css/all.css" rel="stylesheet" />
<link rel="stylesheet" href="../css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>


<div id="content">
<div id="content-header">
 
  <h1>Product Entry Form</h1>
</div>
<form role="form" action="index.php" method="POST">
            <?php 

if(isset($_POST['name'])){
$name = $_POST["name"];    
$amount = $_POST["amount"];
$vendor = $_POST["vendor"];
$description = $_POST["description"];
$date = $_POST["date"];
$quantity = $_POST["quantity"];
$address = $_POST["address"];
$contact = $_POST["contact"];
$image=$_POST['img'];

$totalamount = $amount * $quantity;

include 'config.php';

$qry = "insert into prod(name,description,amount,vendor,address,contact,date,quantity,image) values ('$name','$description','$totalamount','$vendor','$address','$contact','$date','$quantity','$image')";
$result = mysqli_query($link,$qry);

if(!$result){
  echo"<div class='container-fluid'>";
      echo"<div class='row-fluid'>";
      echo"<div class='span12'>";
      echo"<div class='widget-box'>";
      echo"<div class='widget-title'> <span class='icon'> <i class='fas fa-info'></i> </span>";
          echo"<h5>Error Message</h5>";
          echo"</div>";
          echo"<div class='widget-content'>";
              echo"<div class='error_ex'>";
              echo"<h1 style='color:maroon;'>Error 404</h1>";
              echo"<h3>Error occured while entering your details</h3>";
              echo"<p>Please Try Again</p>";
              echo"<a class='btn btn-warning btn-big'  href='edit-equipment.php'>Go Back</a> </div>";
          echo"</div>";
          echo"</div>";
      echo"</div>";
      echo"</div>";
  echo"</div>";
}else {

  echo"<div class='container-fluid'>";
      echo"<div class='row-fluid'>";
      echo"<div class='span12'>";
      echo"<div class='widget-box'>";
      echo"<div class='widget-title'> <span class='icon'> <i class='fas fa-info'></i> </span>";
          echo"<h5>Message</h5>";
          echo"</div>";
          echo"<div class='widget-content'>";
              echo"<div class='error_ex'>";
              echo"<h1>Success</h1>";
              echo"<h3>Product record has been added!</h3>";
              echo"<p>The requested details are added. Please click the button to go back.</p>";
              echo"<a class='btn btn-inverse btn-big'  href='index.php'>Go Back</a> </div>";
          echo"</div>";
          echo"</div>";
      echo"</div>";
      echo"</div>";
  echo"</div>";

}

}else{
    echo"<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
}


?>
                                    
                              
                                        
                
                                    </form>
                                </div>
</div></div>
</div>





<style>
#footer {
  color: white;
}
</style>



<script src="../js/excanvas.min.js"></script> 
<script src="../js/jquery.min.js"></script> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.flot.min.js"></script> 
<script src="../js/jquery.flot.resize.min.js"></script> 
<script src="../js/jquery.peity.min.js"></script> 
<script src="../js/fullcalendar.min.js"></script> 
<script src="../js/matrix.js"></script> 
<script src="../js/matrix.dashboard.js"></script> 
<script src="../js/jquery.gritter.min.js"></script> 
<script src="../js/matrix.interface.js"></script> 
<script src="../js/matrix.chat.js"></script> 
<script src="../js/jquery.validate.js"></script> 
<script src="../js/matrix.form_validation.js"></script> 
<script src="../js/jquery.wizard.js"></script> 
<script src="../js/jquery.uniform.js"></script> 
<script src="../js/select2.min.js"></script> 
<script src="../js/matrix.popover.js"></script> 
<script src="../js/jquery.dataTables.min.js"></script> 
<script src="../js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>