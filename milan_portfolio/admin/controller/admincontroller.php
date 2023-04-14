<?php 
require_once("model/adminmodel.php");
error_reporting(0);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class admincontroller extends adminmodel 
{
    public function __construct()
    {
        parent:: __construct();
        
        //add about us content from admin 

        if(isset($_POST["addabout"]))
        {
            $abtus=$_POST["about_yourself"];
            $tmp_name=$_FILES["photo"]["tmp_name"];
            $path="uploads/users/".$_FILES["photo"]["name"];
            move_uploaded_file($tmp_name,$path);
            $jobtitle=$_POST["title"];
            $dob=$_POST["dob"];
            $ag=$_POST["age"];
            $website=$_POST["website"];
            $dg=$_POST["degree"];
            $phone=$_POST["phone"];
            $email=$_POST["emailon"];
            $ct=$_POST["city"];
            $fl=$_POST["freelance"];
            $detail=$_POST["details"];
            
            $data=array("about_yourself"=>$abtus,"photo"=>$path,"jobtitle"=>$jobtitle,"dob"=>$dob,"age"=>$ag,"website"=>$website,"degree_id"=>$dg,"phone"=>$phone,"email"=>$email,"city_id"=>$ct,"freelance"=>$fl,"details"=>$detail);
            $chk=$this->insalldata('tbl_addabout',$data);
            if($chk)
            {
                echo "<script>
                alert('Thanks for Adding about us data')
                window.location='manageabout';
                </script>";
            }
        }
       // all data show here or dropdown fecth in about add content
       $shwdata=$this->shwdata('tbl_degree');
       // all data show here or dropdown fecth in about add content
       $shwcity=$this->shwdata('tbl_city');
      // show all data of about us
      $shwabout=$this->shwjoindata('tbl_addabout','tbl_degree','tbl_city','tbl_addabout.degree_id=tbl_degree.degree_id','tbl_addabout.city_id=tbl_city.city_id');
      
    
    //    delete about us content or data from admin
    if(isset($_GET["delete-id"]))
    {
        $delid=$_GET["delete-id"];
        $id=array("about_id"=>$delid);
        $chk=$this->deldata('tbl_addabout',$id);
        if($chk)
        {
             echo "<div class='w-50 alert alert-danger mx-auto mt-2 alert-dismissible fade show' role='alert'>
              Data successfully Deleted.
             <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
           </div>";
          

        }
        else 
        {
            echo "<div class='w-50 alert alert-dark mx-auto mt-2 text-white alert-dismissible fade show' role='alert'>
            Somthing went wrong
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
        }
    }
    // edit about content 
    if(isset($_GET["edit-id"]))
    {
        $id=base64_decode($_GET["edit-id"]);
        $eddata=$this->editdata('tbl_addabout','tbl_degree','tbl_city','tbl_addabout.degree_id=tbl_degree.degree_id','tbl_addabout.city_id=tbl_city.city_id','about_id',$id);
    }

    // update about us data
    if(isset($_POST["updabout"]))
    {
        $id=base64_decode($_GET["edit-id"]);
        $abtus=$_POST["about_yourself"];
        $tmp_name=$_FILES["photo"]["tmp_name"];
        $path="uploads/users/".$_FILES["photo"]["name"];
        move_uploaded_file($tmp_name,$path);
        $jobtitle=$_POST["title"];
        $dob=$_POST["dob"];
        $ag=$_POST["age"];
        $website=$_POST["website"];
        $dg=$_POST["degree"];
        $phone=$_POST["phone"];
        $email=$_POST["emailon"];
        $ct=$_POST["city"];
        $fl=$_POST["freelance"];
        $detail=$_POST["details"];
    
        $chk=$this->upddata('tbl_addabout',$abtus,$path,$jobtitle,$dob,$ag,$website,$dg,$phone,$email,$ct,$fl,$detail,'about_id',$id);
        if($chk)
        {
            echo "<script>
            alert('Thanks for Update about us data')
            window.location='manageabout';
            </script>";
        }

    }

    //add resume
    if(isset($_POST["addresume"]))
    {
        $summary=$_POST['summary'];
        $nm=$_POST['nm'];
        $abtsum=$_POST['about_summary'];
        $add=$_POST['address'];
        $pho=$_POST['phone'];
        $em=$_POST['email'];
        $mdegree=$_POST['mdegree']; 
        $myear=$_POST['myear'];
        $mname=$_POST['munm'];
        $about_master=$_POST['abt_master'];
        $bdegree=$_POST['bdegree'];
        $byear=$_POST['byear'];
        $bname=$_POST['bname'];
        $about_bachelor=$_POST['abt_bachelor'];
        $data=array("res_sum"=>$summary,"res_nm"=>$nm,"abt_skill"=>$abtsum,"address"=>$add,"phone"=>$pho,"email"=>$em,"mdegree_id"=>$mdegree,"myear"=>$myear,"mname"=>$mname,"about_master"=>$about_master,"bdegree_id"=>$bdegree,"byear"=>$byear,"bname"=>$bname,"about_bachelor"=>$about_bachelor);
        $chk=$this->insalldata('tbl_addresume',$data);
        if($chk)
        {
            echo "<script>
            alert('Add data on resume table')
            window.location='manageresume';
            </script>";
        }
        else
        {
            echo "<script>
            alert('something went wrong !')
            window.location='manageresume';
            </script>";
        }
    }  
    $resumedata=$this->shwjoindata('tbl_addresume','tbl_degree','tbl_addresume.mdegree_id=tbl_degree.degree_id','tbl_degree','tbl_addresume.bdegree_id=tbl_degree.degree_id');
    $resumedata=$this->shwdata("tbl_addresume");

        // login as admin 
        if(isset($_POST["log"]))
        {
            $em=$_POST["email"];
            $pass=base64_encode($_POST["pass"]);
            $chk=$this->adminlogin('tbl_admin',$em,$pass);
            if($chk)
            {
                echo "<script>
                alert('You are logged in Successfully')
                 window.location='admin-dashboard';
                 </script>";
            }
            else 
            {
                echo "<script>
                alert('Your email and password are Incorrect try again')
                 window.location='./';
                 </script>";
            }
        }
 
        // change password of admin
        if(isset($_POST["change"]))
        {
            $id=$_SESSION["admin_id"];
            $opass=base64_encode($_POST["opass"]);
            $npass=base64_encode($_POST["npass"]);
            $cpass=base64_encode($_POST["cpass"]);
            $chk=$this->adminchangepassword('tbl_admin','admin_id',$opass,$npass,$cpass,$id);
            if($chk)
            {
                unset($_SESSION["admin_id"]);
                unset($_SESSION["email"]);
                session_destroy();
                echo "<script>
                alert('Your admin password successfully changed')
                 window.location='./';
                 </script>";
            }
            else 
            {
                echo "<script>
                alert('Your Oldpass,New password and Confirm Passsword does not matched try again')
                 window.location='change-password';
                 </script>";
            }

        }
         
        // forget password of admin password should send on email also
         if(isset($_POST["admin_frg"]))
         {
            
            require 'PHPMailer/Exception.php';
            require 'PHPMailer/PHPMailer.php';
            require 'PHPMailer/SMTP.php';
            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);  
            try {

                $em=$_POST["email"];
                //Server settings
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->SMTPDebug = 1;    
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'milangondaliya62@gmail.com';                     //SMTP username
                $mail->Password   = 'mockpfxsleuzdqbu';                               //SMTP password
                // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->SMTPSecure = 'tls';
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            
                //Recipients
                $mail->setFrom('milangondaliya62@gmail.com', 'Mailer');
                $mail->addAddress($_POST["email"],'Recepeint');   
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $chk=$this->frgpassword('tbl_admin','email',$em);
                $mail->Subject = 'Forget password email';
                $mail->Body    = "<p>Why do password reset emails not come through?The email might be in your spam folder or have been blocked In some cases, the spam filtering system on your email client might have misidentified the automated Reset Your Password email as being spam Try checking the Spam folder in your email inbox </p>"."<p>Your Password is :".$chk."</p>";

                $mail->send();
                echo "<script>
                alert('Your admin password successfully send on your email kindly checked and logged In')
                window.location='./';
                </script>";
            
            } 
            catch (Exception $e)
             {
                echo "<script>
                alert('Your email id is not registered with us try again')
                 window.location='admin-forgetpassword';
                 </script>";
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
  }
         
        // logout as admin
        if(isset($_GET["admin-logout"]))
        {
            $chk=$this->logout();
            echo "<script>
            alert('You are Logout successfully')
             window.location='./';
             </script>";
        }
        // load your view or templates 
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("login.php");
                    break;

                case '/admin-forgetpassword':
                    require_once("index.php");
                    require_once("forgetpassword.php");
                    break;

                case '/admin-dashboard':
                    require_once("index.php");
                    require_once("sidebar.php");
                    require_once("dashboard.php");
                    require_once("footer.php");
                    break;

                case '/change-password':
                    require_once("index.php");
                    require_once("sidebar.php");
                    require_once("changepassword.php");
                    require_once("footer.php");
                    break;

                case '/manageabout':
                    require_once("index.php");
                    require_once("sidebar.php");
                    require_once("manageabout.php");
                    require_once("footer.php");
                    break;
                    
                case '/editabout':
                    require_once("index.php");
                    require_once("sidebar.php");
                    require_once("editabout.php");
                    require_once("footer.php");
                    break;

                case '/manageresume':
                    require_once("index.php");
                    require_once("sidebar.php");
                    require_once("manageresume.php");
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
$obj=new admincontroller();
?>