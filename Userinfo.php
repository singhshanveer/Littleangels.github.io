<?php

$con = mysqli_connect('localhost','root');
if($con)
{
  echo "Successfully Registered";
}
else{
  echo"no connection";
}


  


mysqli_select_db($con, 'school_db');

$name = $_POST['name'];
if(isset($_POST['submit'])){
  if(empty($_POST['name'])){
    echo "Name Required";
  }
}
$session= $_POST['session'];
$dob = $_POST['dob'];
$adm_in_class = $_POST['adm_in_class'];
$gender = $_POST['gender'];
$m_tongue = $_POST['m_tongue'];
$pno = $_POST['pno'];
$mob = $_POST['mob'];
$pincode =$_POST['pincode'];
$residential_city =$_POST['residential_city'];
$residential_state =$_POST['residential_state'];
$residential_country =$_POST['residential_country'];
$address =$_POST['address'];
$last_school_name =$_POST['last_school_name'];
$last_school_class =$_POST['last_school_class'];
$last_school_marks =$_POST['last_school_marks'];
$repeat_class =$_POST['repeat_class'];
$last_school_board =$_POST['last_school_board'];
$last_school_address =$_POST['last_school_address'];
$last_school_change_reason =$_POST['last_school_change_reason'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$fqualification = $_POST['fqualification'];
$mqualification = $_POST['mqualification'];
$fage = $_POST['fage'];
$mage = $_POST['mage'];
$foccupation = $_POST['foccupation'];
$moccupation = $_POST['moccupation'];
$f_income = $_POST['f_income'];
$m_income = $_POST['m_income'];
$f_mobile = $_POST['f_mobile'];
$m_mobile = $_POST['m_mobile'];
$f_email = $_POST['f_email'];
$m_email = $_POST['m_email']; 
$transport_service = $_POST['transport_service'];
$child_disability = $_POST['child_disability'];


//required field validator





$query = "INSERT into studentinfo (name,session,dob,adm_in_class,gender,m_tongue,pno,mob,pincode,residential_city,residential_state,residential_country,address,last_school_name,last_school_class,last_school_marks,repeat_class,last_school_board,last_school_address,last_school_change_reason,fname,mname,fqualification,mqualification,fage,mage,foccupation,moccupation,f_income,m_income,f_mobile,m_mobile,f_email,m_email,transport_service,child_disability)
values('$name','$session','$dob','$adm_in_class','$gender','$m_tongue','$pno','$mob','$pincode','$residential_city','$residential_state','$residential_country',
'$address','$last_school_name','$last_school_class','$last_school_marks',
'$repeat_class','$last_school_board','$last_school_address','$last_school_change_reason','$fname','$mname','$fqualification','$mqualification','$fage','$mage','$foccupation','$moccupation','$f_income','$m_income','$f_mobile','$m_mobile','$f_email','$m_email','$transport_service','$child_disability')";

mysqli_query($con,$query);







?>