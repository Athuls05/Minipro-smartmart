<?php
include("config.php");
if(isset($_POST["submit"]))
{
$category=$_POST['txt_category'];
$categorydescription=$_POST['txt_Description'];
$sql=mysqli_query($con,"SELECT count(*) as count FROM tbl_category WHERE category='$category'");
$display=mysqli_fetch_array($sql);
  		if($display['count']>0)
		{
			
		echo "<script>alert('Already exist');window.location='view_category.php'</script>";	
		}
		else 
		{
		$sql=mysqli_query($con,"INSERT INTO tbl_category(category,description)VALUES('$category','$categorydescription')");
echo " INSERT INTO tbl_category(category,description)VALUES('$category','$categorydescription')";
		echo "<script>alert('category Registered Successfully!!');window.location='view_category.php'</script>";
}
}
?>