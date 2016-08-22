<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="style.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>

<?php
include 'session.php';
$con = mysqli_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysqli_select_db($con,"employee");
//session_start(); 
$EmpID=$_SESSION['UserID'];
//echo $EmpID;
//echo "EmpID=".$EmpID;
$result = mysqli_query($con,"select * from personal_det where EmpID=$EmpID");
$row = mysqli_fetch_array($result);
$JobID=$row['JobID'];
?>

<div id="bar" >
<ul>
	  <li style=" color: #00549c; font-weight: bold; border: 2px solid blue; border-radius: 8%; margin-top: -1px; "><a  href="logout.php" style=" color: black;">Log Out</a></li>
	  <li><a href="emp_notification.php?EmpID=<?php echo $EmpID ?>"  target="iframe_a"><div style="padding-right:6px ; float:left; "><img src="icon/Asset 8.png" alt="#" width="21" height="23"></div>Notification</a></li>
	  <li style=" font-style: italic; font-weight: bold;"><a href="#contact">Welcome <?php echo $row['Fname']?> !</a></li>
	  <li class="ax"><a href="#" style=" color:#00549c;"> DC Monitoring Sys.</a></li>
</ul>
</div>
<div class="row">
<div class="col-2 menu">
<ul>
             <li><a href="emp_home.php?EmpID=<?php echo $EmpID ?>"  target="iframe_a"><div style="padding-left:7px; padding-right:7px; float:left; margin-top: -5px; "><img src="icon/Asset 2.png" alt="#" width="23" height="23"></div>  Home</a></li>
             
             <li><a href="personal.php?EmpID=<?php echo $EmpID ?>" target="iframe_a"><div style=" padding-left:7px; padding-right:7px ; float:left; margin-top: -5px;"><img src="icon/Asset 3.png" alt="#" width="23" height="23"></div>   Profile</a>
                <ul>
                    <li><a href="personal.php?EmpID=<?php echo $EmpID ?>" target="iframe_a">Personal</a></li>
                    <li><a href="job.php?EmpID=<?php echo $EmpID ?>" target="iframe_a">Job Detail</a></li>
                    <li><a href="#">Documents</a></li>
                </ul>         
             </li>
             
          <li><a href="default.html" target="iframe_a" ><div style="padding-left:7px; padding-right:9px ; float:left; margin-top: -5px;"><img src="icon/Asset 3 1.png" alt="#" width="21" height="21"></div>News</a></li>
          
             <li><a href="all_employees.php?EmpID=<?php echo $EmpID ?>" target="iframe_a" ><div style="padding-left:7px; padding-right:7px ; float:left; margin-top: -5px;"><img src="icon/Asset 4.png" alt="#" width="23" height="23"></div>Employees</a></li>
             
              <li><a href="req_leave.php?EmpID=<?php echo $EmpID ?>" target="iframe_a"><div style="padding-left:7px; padding-right:7px ; float:left; margin-top: -5px;"><img src="icon/Asset 5.png" alt="#" width="23" height="23"></div>  Leave</a></li>
             
             <li><a href="default.html" target="iframe_a"><div style="padding-left:7px; padding-right:11px ; float:left; margin-top: -5px;"><img src="icon/Asset 6.png" alt="#" width="19" height="22"></div> Documents</a></li>
                
                 <li style=""><a href="default.html" target="iframe_a"><div style=" padding-left:7px; padding-right:7px ; float:left; margin-top: -5px;"><img src="icon/Asset 7.png" alt="#" width="23" height="23"></div>  Settings</a></li>
</ul>
</div>
<div class="col-10"style=" left: 15.6%;   position:fixed; height: 90%; " >
<div id="frame">
<iframe  height=100% width=100% style="border: 0; position:absolute;" src="all_employees.php?EmpID=<?php echo $EmpID ?>" name="iframe_a"></iframe> 
</div>
</div>
</div>
</body>