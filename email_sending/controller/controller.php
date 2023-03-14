<?php
require_once("model/model.php");

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

class controller extends model 
{
    
    

    public function __construct()
    {
        parent:: __construct();


    
        //Import PHPMailer classes into the global namespace
        //These must be at the top of your script, not inside a function
        if(isset($_POST["send"]))
        {
        //Load Composer's autoloader
        // require 'vendor/autoload.php';
        require 'PHPMailer/Exception.php';
        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/SMTP.php';
        
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        
        try
        {
             //Server settings
            $mail->SMTPDebug = 1;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'milangondaliya62@gmail.com';                     //SMTP username
            $mail->Password   = 'mockpfxsleuzdqbu';                               //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients

            $mail->setFrom($_POST["Email"], 'Mailer');
            $mail->addAddress('milangondaliya62@gmail.com','Repent');
           
            /* $mail->setFrom('from@example.com', 'Mailer');
            $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
            $mail->addAddress('ellen@example.com');               //Name is optional
            $mail->addReplyTo('info@example.com', 'Information');
            $mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com');*/
        
            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'inquiry form for customers details';
            $mail->Body    = $mail->Body    = "<div style='width:80%; height:auto; margin:auto; padding:15px'>"."<img src='https://email.uplers.com/blog/wp-content/uploads/2022/07/1-Signatures-blog.gif' style='width:100%; height:200px'>"."<p><b>Customer Email : </b>".$_POST['Email']."</p>"."<p><b>Customer FirstName : </b>".$_POST['fname']."</p>"."<p><b>Customer LastName : </b>".$_POST['lname']."</p>"."<p><b>Customer Adress : </b>".$_POST['address']."</p>"."<p><b>Customer state : </b>".$_POST['state']."</p>"."<p><b>Customer city : </b>".$_POST['city']."</p>"."<p><b>Customer mobilr no : </b>".$_POST['mobile']."</p>"."<p>Our office details : sell my car at rajkot <br>Email us <a href='mailto:info@tops-int.com'>sellmycar@gmail.com</a>.</p>"."</div>";
             //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();

             echo "<script>
            alert('Thanks for contact with us our one of Admin will contact with you Soon we get your email');
            </script>";
        }
        catch (Exception $e) 
        {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        }

        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
                {
                    case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("searchbar.php");
                    require_once("content.php");
                    require_once("ourstory.php");
                    require_once("footer.php");
                    require_once("login.php");
                    break;

                    case '/regi':
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("register.php");
                    require_once("footer.php");
                    break;

                    case '/about':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("aboutus.php");
                        require_once("footer.php");
                        break;
                        
                    case '/jaguar':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("jaguar.php");
                        require_once("footer.php");
                        break;

                    case '/rolls':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("rr.php");
                        require_once("footer.php");
                        break;

                    case '/kia':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("kia.php");
                        require_once("footer.php");
                        break;   
                        
                case '/bugatti':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("bugatti.php");
                        require_once("footer.php");
                        break;        

                    case '/tesla':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("tesla.php");
                        require_once("footer.php");
                        break;
                    
                case '/contect':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("contactus.php");
                        require_once("footer.php");
                        break;

                    default:
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("404.php");
                        require_once("footer.php");
                        break;
                }
        }
    }
}
$obj=new controller;
?>