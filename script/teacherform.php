<?php

  // PHP variable to store the host address
 $db_host  = "";
 // PHP variable to store the username
 $db_uid  = "root";
 // PHP variable to store the password
 $db_pass = "";
 // PHP variable to store the Database name  
 $db_name  = ""; 
        // PHP variable to store the result of the PHP function 'mysql_connect()' which establishes the PHP & MySQL connection  
 $db_con = mysql_connect($db_host,$db_uid,"") or die('could not connect');
 mysql_select_db($db_name);
 
 
 

$fname=$_POST['fname'];
$pass=$_POST['pass'];
$dept=$_POST['dept'];
$desgn=$_POST['desgn'];
$contact=$_POST['contact'];
$email=$_POST['email'];
									
$sql="INSERT INTO loginteacher (teacher_name,teacher_email,teacher_contact,teacher_password,teacher_department,teacher_designation) VALUES('$fname','$email','$contact','$pass','$dept','$desgn')";		



 $result = mysql_query($sql);


 mysql_close();   
?>
