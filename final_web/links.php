<?php include("connect.php");  
error_reporting(0);?>
 <!DOCTYPE html>

 <head> 
    <form action="links.php" method="post">
         
<div style="display:flex; justify-content:center"><h3> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
    link &nbsp;<input type="placeholder"  name="link"  /></div></h3><br>
    <div style="display:flex; justify-content:center">
            <input type="submit" name="submit" >
</div>
</form>
</head> 
</html>  

<?php 
if($_POST['submit']){ 
$link=$_POST['link']; 
  
$query="INSERT INTO `abcd` (`id`, `link`) VALUES (NULL, '$link')";
$data = mysqli_query($conn,$query);
if($data) 
{ 

    echo "added";
} 
else{ 
    echo "failed";
}  
} 
?>