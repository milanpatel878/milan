<?php 
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {
        parent:: __construct();
       
           // show all data of about us
       $shwabout=$this->shwjoindata('tbl_addabout','tbl_degree','tbl_city','tbl_addabout.degree_id=tbl_degree.degree_id','tbl_addabout.city_id=tbl_city.city_id');

        // load your view or templates 
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("sidebar.php");
                    require_once("content.php");
                    require_once("footer.php");
                    break;

                default:
                require_once("index.php");
                require_once("404.php");
                break;    
            }

        }

    }
}
$obj=new controller();
?>