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
  }

?>