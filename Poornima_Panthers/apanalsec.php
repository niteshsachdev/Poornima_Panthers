<?php
error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
</head>

<body>
    <form action="apanalsec.php" method="post">
   <table width="500" align="center" border="1">
     <tr>
        <th>Sr No.<th>Team name</th> <th>Team leader Name</th><th>Registration Id.</th> <th>Mobile No.</th> <th>Email Id.</th><th>Year</th><th>Events</th> <th>Action</th>
     </tr>
     <?php
     
  
$servername="localhost";
$username="id5251823_nsn";
$password="poornimapanthers";
$dbname="id5251823_poornimapanthers";
$conn=mysqli_connect($servername,$username,$password,$dbname);
	 $query="select * from joinoutside";
 $ck=mysqli_query($conn,$query);
	 $i=1;


	 while($rw=mysqli_fetch_array($ck))
	   {
	      // $sn=$rw['sn'];
	      if($_REQUEST['dd'])
	      {
	       if($_GET['dd']==$rw['sn'])
	       {
		?>
		
       <tr>
         <td><?php echo $i ?></td>
         <td><input type="text" value="<?php echo $rw['teamname']; ?>" name="teamname"></td>
         <td><input type="text" value="<?php echo $rw['tlname']; ?>" name="tlname"></td>
         <td><input type="text" value="<?php echo $rw['registrationid']; ?>" name="registrationid"></td>
         <td><input type="text" value="<?php echo $rw['mobileno']; ?>" name="mobileno"></td>
         <td><input type="text" value="<?php echo $rw['emailid']; ?>" name="emailid"></td>
         <td><input type="text" value="<?php echo $rw['year']; ?>" name="year"></td>
         <td><input type="text" value="<?php echo $rw['Events']; ?>" name="Events"></td>
         <td>
             <input type="hidden" name="idd" value="<?php echo $rw['sn'] ?>">
         <a href="apanalsec.php?sn=<?php echo $sn; ?>"><button>edit</button></a>
         <a href="delete.php?sn=<?php echo $sn; ?>"><button>delete</button></a>
         </td>
         </tr>
         </form>
         <?php
	        $dd=$_GET['dd'];
    $query=mysqli_query($conn,"UPDATE joinoutside SET teamname='$teamname',tlname='$tlname',registrationid='$registrationid',mobileno='$mobileno',emailid='$emailid',year='$year',Events='Events' WHERE sn='$dd'");
	           
	       }
	      }
	       else
	       {
	       ?>
         
         <tr>
         <td><?php echo $i ?></td>
         <td><?php echo $rw['teamname']; ?></td>
         <td><?php echo $rw['tlname']; ?></td>
         <td><?php echo $rw['registrationid']; ?></td>
         <td><?php echo $rw['mobileno']; ?></td>
         <td><?php echo $rw['emailid']; ?></td>
         <td><?php echo $rw['year']; ?></td>
         <td><?php echo $rw['Events']; ?></td>
         <td>
         <a href="apanalsec.php?dd=<?php echo $rw['sn']; ?>">edit</a>
         <a href="apanalsec.php?dd1=<?php echo $rw['sn']; ?>">delete</a>
         </td>
         
         
       </tr> 
       
       <?php
	       }
	  $i++; }
	   ?>
        
   
   </table>
</body>
</html>
<?php
if($_REQUEST['dd1'])
{
    $dd1=$_GET['dd1'];
    
$query=mysqli_query($conn,"delete from joinoutside where sn='$dd1'");
if($query)
{
header('location:admin.php');
}

}
?>