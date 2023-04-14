<?php 
class model 
{
    public $connection="";
    public function __construct()
    {
         try 
         {
           $this->connection=new mysqli("localhost","root","","milanportfolio_app");
          // echo "connection succefully";  
         }
         catch(Exception $e)
         {
            die(mysqli_error($this->connection,$e));

         }
    }

  //create a member function for join data
  
  public function shwjoindata($table,$table1,$table2,$where,$where1)
  {
    $select="select * from $table join $table1 on $where join $table2 on $where1";
    $exe=mysqli_query($this->connection,$select);
    while($fetch=mysqli_fetch_array($exe))
    {
      $arr[]=$fetch;
    }
    return $arr;
  }

}
?>