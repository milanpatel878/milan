<?php 
class model 
{
    public $connection="";
    public function __construct()
    {
         try 
         {
           $this->connection=new mysqli("localhost","root","","crudapp");
          // echo "connection succefully";  
         }
         catch(Exception $e)
         {
            die(mysqli_error($this->connection,$e));

         }
    }

    // create a member function for insertalldata
    public function insalldata($table,$data)
    {
      $column=array_keys($data);
      $column1=implode(",",$column);
      $value=array_values($data);
      $value1=implode("','",$value);
      $insert="insert into $table($column1) values('$value1')";
      $exe=mysqli_query($this->connection,$insert);
      return $exe;  
    }

    // create a member function for show data
    public function shwdata($table)
    {
      $select="select * from $table";
      $exe=mysqli_query($this->connection,$select);
      while($fetch=mysqli_fetch_array($exe))
      {
        $arr[]=$fetch;
      }
      return $arr;
    }
  }
?>