<?php
class model
{
public $connection = "";
public function __construct()
{
session_start();
try {
$this->connection = new mysqli("localhost", "root", "", "car-rental");
// echo "connection succefully";  
} catch (Exception $e) {
die(mysqli_error($this->connection, $e));
}
}
// create a member function function for adminlogin 
public function adminlogin($table, $em, $pass)
{
$select = "select * from $table where email='$em' and password='$pass'";
$exe = mysqli_query($this->connection, $select);
$fetch = mysqli_fetch_array($exe);
$num_rows = mysqli_num_rows($exe);
if ($num_rows == 1) 
{
$_SESSION["admin_id"] = $fetch["admin_id"];
$_SESSION["email"] = $fetch["email"];
return true;
} 
else 
{
return false;
}
}

// create a member function  for adminchange password 
public function adminchangepassword($table, $column, $opass, $npass, $cpass, $id)
{
$select = "select password from $table where $column='$id'";
$exe = mysqli_query($this->connection, $select);
$fetch = mysqli_fetch_array($exe);
$pass = $fetch["password"];
if ($pass == $opass && $npass == $cpass) {
$upd = "update $table set password='$npass' where $column='$id'";
$exe = mysqli_query($this->connection, $upd);
return $exe;
} else {
return false;
}
}

// create a member function for admin forget password 
public function frgpassword($table, $column, $em)
{
$select = "select password from $table where $column='$em'";
$exe = mysqli_query($this->connection, $select);
$fetch = mysqli_fetch_array($exe);
$num_rows = mysqli_num_rows($exe);
$pass = ($fetch["password"]);
if ($num_rows == 1)
{
return $pass;
}
else 
{
return false;
}

}

//  create a member function for logout
public function logout()
{
unset($_SESSION["admin_id"]);
unset($_SESSION["email"]);
session_destroy();
return true;
}

// create a member function for insertalldata
public function insalldata($table, $data)
{
$column = array_keys($data);
$column1 = implode(",", $column);
$value = array_values($data);
$value1 = implode("','", $value);
$insert = "insert into $table($column1) values('$value1')";
$exe = mysqli_query($this->connection, $insert);
return $exe;
}

public function shwaboutdata($table)
{ 
$select = "select * from $table";

$exe = mysqli_query($this->connection, $select);
while ($fetch = mysqli_fetch_array($exe)) 
{
$arr[] = $fetch;
}
return $arr;
}

public function shwdata($table)
{ 
$select = "select * from $table";

$exe = mysqli_query($this->connection, $select);
while ($fetch = mysqli_fetch_array($exe)) 
{
$arr[] = $fetch;
}
return $arr;
}

public function shwteamdata($table)
{ 
$select = "select * from $table";

$exe = mysqli_query($this->connection, $select);
while ($fetch = mysqli_fetch_array($exe)) 
{
$arr[] = $fetch;
}
return $arr;
}

public function shwslidedata($table)
{ 
$select = "select * from $table";

$exe = mysqli_query($this->connection, $select);
while ($fetch = mysqli_fetch_array($exe)) 
{
$arr[] = $fetch;
}
return $arr;
}

public function shwgallarydata($table)
{ 
$select = "select * from $table";

$exe = mysqli_query($this->connection, $select);
while ($fetch = mysqli_fetch_array($exe)) 
{
$arr[] = $fetch;
}
return $arr;
}

public function shwfooterdata($table)
{ 
$select = "select * from $table";

$exe = mysqli_query($this->connection, $select);
while ($fetch = mysqli_fetch_array($exe)) 
{
$arr[] = $fetch;
}
return $arr;
}

//  create a member function for delete data 
public function deldata($table,$id)
{
$key=array_keys($id);
$key1=implode(",",$key);
$value=array_values($id);
$value1=implode("','",$value);

$delete="delete from $table where $key1='$value1'";
$exe=mysqli_query($this->connection,$delete);
return $exe;
}
//  create a member function for edit data 
public function editdata($table,$column,$id)
{
$select="select * from $table where $column='$id'";
$exe=mysqli_query($this->connection,$select);
while($fetch=mysqli_fetch_array($exe))
{
$arr[]=$fetch;
}
return $arr;
}

//  create a member function for about update data
public function upaboutdata($table,$pg1,$pg2,$path,$column,$id)
{
$upd="update $table set  pg1='$pg1', pg2='$pg2',video='$path', where $column='$id'";
$exe=mysqli_query($this->connection,$upd);
return $exe;
} 

//  create a member function for deal update data
public function updealdata($table,$rs1,$day1,$path1,$rs2,$day2,$path2,$rs3,$day3,$path3,$column,$id)
{
$upd="update $table set  rs1='$rs1', day1='$day1',photo1='$path1',rs2='$rs2', day2='$day2',photo2='$path2',rs3='$rs3', day3='$day3',photo3='$path3', where $column='$id'";
$exe=mysqli_query($this->connection,$upd);
return $exe;
}

//  create a member function for team update data
public function upteamdata($table,$path1,$nm1,$path2,$nm2,$path3,$nm3,$column,$id)
{
$upd="update $table set  photo1='$path1',nm1='$nm1',photo2='$path2',nm2='$nm2',photo3='$path3',nm3='$nm3', where $column='$id'";
$exe=mysqli_query($this->connection,$upd);
return $exe;
}

//  create a member function for slider update data
public function upsliderdata($table,$path1,$pr1,$path2,$pr2,$path3,$pr3,$path4,$pr4,$path5,$pr5,$path6,$pr6,$path7,$pr7,$path8,$pr8,$path9,$pr9,$path10,$pr10,$path11,$pr11,$path12,$pr12,$column,$id)
{
$upd="update $table set  img1='$path1',pr1='$pr1,img2='$path2',pr2='$pr2,img3='$path3',pr3='$pr3,img4='$path4',pr4='$pr4,img5='$path5',pr5='$pr5,img6='$path6',pr6='$pr6,img7='$path7',pr7='$pr7,img8='$path8',pr8='$pr8,img9='$path9',pr9='$pr9,img10='$path10',pr10='$pr10,img11='$path11',pr11='$pr11,img12='$path12',pr12='$pr12, where $column='$id'";
$exe=mysqli_query($this->connection,$upd);
return $exe;
}

//  create a member function for gallary update data
public function upgallarydata($table,$path1,$dtl1,$path2,$dtl2,$path3,$dtl3,$path4,$dtl4,$path5,$dtl5,$path6,$dtl6,$path7,$dtl7,$path8,$dtl8,$column,$id)
{
$upd="update $table set  pc1='$path1',dtl1='$dtl1',pc2='$path2',dtl2='$dtl2',pc3='$path3',dtl3='$dtl3',pc4='$path4',dtl4='$dtl4',pc5='$path5',dtl5='$dtl5',pc6='$path6',dtl6='$dtl6',pc7='$path7',dtl7='$dtl7',pc8='$path8',dtl8='$dtl8', where $column='$id'";
$exe=mysqli_query($this->connection,$upd);
return $exe;
}

//  create a member function for footer update data
public function upfooterdata($table,$abtdetails,$path1,$phtdt1,$path2,$phtdt2,$path3,$path4,$path5,$path6,$column,$id)
{
$upd="update $table set  abtdetails='$abtdetails',pht1='$path1',phtdt1='$phtdt1',pht2='$path2',phtdt2='$phtdt2',pht3='$path3',pht4='$path4',pht5='$path5',pht6='$path6', where $column='$id'";
$exe=mysqli_query($this->connection,$upd);
return $exe;
}

}

?>