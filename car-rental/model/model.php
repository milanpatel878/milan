<?php 
class model 
{
    public $connection="";
    public function __construct()
    {
         try 
         {
           $this->connection=new mysqli("localhost","root","","car-rental");
          // echo "connection succefully";  
         }
         catch(Exception $e)
         {
            die(mysqli_error($this->connection,$e));

         }
    }
}
?>