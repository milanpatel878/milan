<?php 
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {
        parent:: __construct();
        // add users
        if(isset($_POST["add_user"]))
        {
            $tmp_name=$_FILES["txt_img"]["tmp_name"];
            $path="uploads/users/".$_FILES["txt_img"]["name"];
            move_uploaded_file($tmp_name,$path);
            $name=$_POST["txt_name"];
            $email=$_POST["txt_email"];
            $phone=$_POST["txt_mono"];
            $data=array("photo"=>$path,"name"=>$name,"email"=>$email,"mono"=>$mono);
            $chk=$this->insalldata('tbl_addusers',$data);
            if($chk)
            {
                echo "<script>
                alert('Thanks for Adding Data of New Cricketer')
                window.location='./';
                </script>";
            }
        }

        // all data show here
        $shwdata=$this->shwdata('tbl_addusers');
        // load your view or templates 
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("content.php");
                    require_once("adduser.php");
                    break;

                default:
                require_once("index.php");
                require_once("404.php");
                break;    
            }

        }

    }
}
$obj=new controller;
?>