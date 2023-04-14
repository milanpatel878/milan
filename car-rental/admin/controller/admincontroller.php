<?php
require_once("model/adminmodel.php");
error_reporting(0);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class controller extends model
{
    public function __construct()
    {
        parent::__construct();

//add about data
        if (isset($_POST["addabout"]))
    {
        $pg1 = $_POST["pg1"];
        $pg2 = $_POST["pg2"];
        $tmp_name = $_FILES["vd"]["tmp_name"];
        $path = "uploads/about/".$_FILES["vd"]["name"];
        move_uploaded_file($tmp_name,$path);
        $data = array("pg1" => $pg1, "pg2" => $pg2, "video" => $path);
        $chk = $this->insalldata('add_about', $data);
        if ($chk) {
            echo "<script>
            alert('Thanks for Adding about us data')
            window.location='manageaboutus';
            </script>";
        }
    }
    $shwaboutdata=$this->shwaboutdata('add_about');
//delete about us content or data from admin 
    if (isset($_GET["delete-id"])) 
    {
        $delid = $_GET["delete-id"];
        $id = array("about_id" => $delid);
        $chk = $this->deldata('add_about', $id);
        if ($chk) 
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
    $id=($_GET["edit-id"]);
    $aboutdata=$this->editdata('add_about','about_id',$id);
}
//update about data
if (isset($_POST["updabout"]))
{
    $id=($_GET["edit-id"]);
    $pg1 = $_POST["pg1"];
    $pg2 = $_POST["pg2"];
    $tmp_name = $_FILES["vd"]["tmp_name"];
    $path = "uploads/about/".$_FILES["vd"]["name"];
    move_uploaded_file($tmp_name,$path);
    $chk=$this->upaboutdata('add_about',$pg1,$pg2,$path,'about_id',$id);
    if($chk)
    {
        echo "<script>
        alert('Thanks for Update about us data')
        window.location='manageaboutus';
        </script>";
    }
}
// ending about content ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


//add deal data
    if (isset($_POST["adddeal"]))
    {
        $rs1 = $_POST["rs1"];
        $day1 = $_POST["day1"];
        $tmp_name1 = $_FILES["photo1"]["tmp_name"];
        $path1 = "uploads/users/" . $_FILES["photo1"]["name"];
        move_uploaded_file($tmp_name1, $path1);
        $rs2 = $_POST["rs2"];
        $day2 = $_POST["day2"];
        $tmp_name2 = $_FILES["photo2"]["tmp_name"];
        $path2 = "uploads/users/" . $_FILES["photo2"]["name"];
        move_uploaded_file($tmp_name2, $path2);
        $rs3 = $_POST["rs3"];
        $day3 = $_POST["day3"];
        $tmp_name3 = $_FILES["photo3"]["tmp_name"];
        $path3 = "uploads/users/" . $_FILES["photo3"]["name"];
        move_uploaded_file($tmp_name3, $path3);

        $data = array("rs1" => $rs1, "day1" => $day1, "photo1" => $path1, "rs2" => $rs2, "day2" => $day2, "photo2" => $path2, "rs3" => $rs3, "day3" => $day3, "photo3" => $path3);
        $chk = $this->insalldata('add_deal', $data);
        if ($chk) {
            echo "<script>
            alert('Thanks for Adding deal data')
            window.location='managedeal';
            </script>";
        }
    }
    $shwdata=$this->shwdata('add_deal');
// delete deal content or data from admin 
    if (isset($_GET["delete-id"])) 
    {
        $delid = $_GET["delete-id"];
        $id = array("deal_id" => $delid);
        $chk = $this->deldata('add_deal', $id);
        if ($chk) 
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
// edit deal content 
if(isset($_GET["edit-id"]))
{
    $id=($_GET["edit-id"]);
    $dealdata=$this->editdata('add_deal','deal_id',$id);
}
//update deal data
if (isset($_POST["upddeal"]))
    {
        $id=($_GET["edit-id"]);
        $rs1 = $_POST["rs1"];
        $day1 = $_POST["day1"];
        $tmp_name1 = $_FILES["photo1"]["tmp_name"];
        $path1 = "uploads/users/" . $_FILES["photo1"]["name"];
        move_uploaded_file($tmp_name1, $path1);
        $rs2 = $_POST["rs2"];
        $day2 = $_POST["day2"];
        $tmp_name2 = $_FILES["photo2"]["tmp_name"];
        $path2 = "uploads/users/" . $_FILES["photo2"]["name"];
        move_uploaded_file($tmp_name2, $path2);
        $rs3 = $_POST["rs3"];
        $day3 = $_POST["day3"];
        $tmp_name3 = $_FILES["photo3"]["tmp_name"];
        $path3 = "uploads/users/" . $_FILES["photo3"]["name"];
        move_uploaded_file($tmp_name3, $path3);
        $chk=$this->updealdata('add_deal',$rs1,$day1,$path1,$rs2,$day2,$path2,$rs3,$day3,$path3,'deal_id',$id);
        if ($chk) {
            echo "<script>
            alert('Thanks for updating deal data')
            window.location='managedeal';
            </script>";
        }
    }
// ending deal content ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


//add team data
        if(isset($_POST["addteam"])) 
        {    
        $tmp_name1 = $_FILES["photo1"]["tmp_name"];
        $path1 = "uploads/users/".$_FILES["photo1"]["name"];
        move_uploaded_file($tmp_name1,$path1);
        $nm1 = $_POST["nm1"];
        
        $tmp_name2= $_FILES["photo2"]["tmp_name"];
        $path2 = "uploads/users/".$_FILES["photo2"]["name"];
        move_uploaded_file($tmp_name2,$path2);
        $nm2 = $_POST["nm2"];

        $tmp_name3= $_FILES["photo3"]["tmp_name"];
        $path3 = "uploads/users/".$_FILES["photo3"]["name"];
        move_uploaded_file($tmp_name3,$path3);
        $nm3 = $_POST["nm3"];

        $data = array("photo1"=>$path1,"nm1"=>$nm1,"photo2"=>$path2,"nm2"=>$nm2,"photo3"=>$path3,"nm3"=>$nm3 );
        $chk = $this->insalldata('add_team', $data);
        if ($chk) {
            echo "<script>
            alert('Thanks for Adding Team data')
            window.location='manageteam';
            </script>";
        }
    }
    $shwteamdata=$this->shwteamdata('add_team');
//delete team content or data from admin 
    if (isset($_GET["delete-id"])) 
    {
        $delid = $_GET["delete-id"];
        $id = array("team_id" => $delid);
        $chk = $this->deldata('add_team', $id);
        if ($chk) 
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
// edit team content 
if(isset($_GET["edit-id"]))
{
    $id=($_GET["edit-id"]);
    $teamdata=$this->editdata('add_team','team_id',$id);
}
//update team data
if(isset($_POST["updteam"])) 
    {    
        $id=($_GET["edit-id"]);  
        $tmp_name1 = $_FILES["photo1"]["tmp_name"];
        $path1 = "uploads/users/".$_FILES["photo1"]["name"];
        move_uploaded_file($tmp_name1,$path1);
        $nm1 = $_POST["nm1"];

        $tmp_name2= $_FILES["photo2"]["tmp_name"];
        $path2 = "uploads/users/".$_FILES["photo2"]["name"];
        move_uploaded_file($tmp_name2,$path2);
        $nm2 = $_POST["nm2"];

        $tmp_name3= $_FILES["photo3"]["tmp_name"];
        $path3 = "uploads/users/".$_FILES["photo3"]["name"];
        move_uploaded_file($tmp_name3,$path3);
        $nm3 = $_POST["nm3"];

    $chk=$this->upteamdata('add_team',$path1,$nm1,$path2,$nm2,$path3,$nm3,'team_id',$id);
    if ($chk) {
    echo "<script>
    alert('Thanks for updating Team data')
    window.location='manageteam';
    </script>";
        }
    }
// ending team content ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


// add slider images data
       if (isset($_POST["addslider"])) 
       {
        $tmp_name1 = $_FILES["img1"]["tmp_name"];
        $path1 = "uploads/users/" . $_FILES["img1"]["name"];
        move_uploaded_file($tmp_name1, $path1);
        $pr1 = $_POST["pr1"];

        $tmp_name2 = $_FILES["img2"]["tmp_name"];
        $path2 = "uploads/users/" . $_FILES["img2"]["name"];
        move_uploaded_file($tmp_name2, $path2);
        $pr2 = $_POST["pr2"];

        $tmp_name3 = $_FILES["img3"]["tmp_name"];
        $path3 = "uploads/users/" . $_FILES["img3"]["name"];
        move_uploaded_file($tmp_name3, $path3);
        $pr3 = $_POST["pr3"];

        $tmp_name4 = $_FILES["img4"]["tmp_name"];
        $path4 = "uploads/users/" . $_FILES["img4"]["name"];
        move_uploaded_file($tmp_name4, $path4);
        $pr4 = $_POST["pr4"];

        $tmp_name5 = $_FILES["img5"]["tmp_name"];
        $path5 = "uploads/users/" . $_FILES["img5"]["name"];
        move_uploaded_file($tmp_name5, $path5);
        $pr5 = $_POST["pr5"];

        $tmp_name6 = $_FILES["img6"]["tmp_name"];
        $path6 = "uploads/users/" . $_FILES["img6"]["name"];
        move_uploaded_file($tmp_name6, $path6);
        $pr6 = $_POST["pr6"];

        $tmp_name7 = $_FILES["img7"]["tmp_name"];
        $path7 = "uploads/users/" . $_FILES["img7"]["name"];
        move_uploaded_file($tmp_name7, $path7);
        $pr7 = $_POST["pr7"];

        $tmp_name8 = $_FILES["img8"]["tmp_name"];
        $path8 = "uploads/users/" . $_FILES["img8"]["name"];
        move_uploaded_file($tmp_name8, $path8);
        $pr8 = $_POST["pr8"];

        $tmp_name9 = $_FILES["img9"]["tmp_name"];
        $path9 = "uploads/users/" . $_FILES["img9"]["name"];
        move_uploaded_file($tmp_name9, $path9);
        $pr9 = $_POST["pr9"];

        $tmp_name10 = $_FILES["img10"]["tmp_name"];
        $path10 = "uploads/users/" . $_FILES["img10"]["name"];
        move_uploaded_file($tmp_name10, $path10);
        $pr10 = $_POST["pr10"];

        $tmp_name11 = $_FILES["img11"]["tmp_name"];
        $path11 = "uploads/users/" . $_FILES["img11"]["name"];
        move_uploaded_file($tmp_name11, $path11);
        $pr11 = $_POST["pr11"];

        $tmp_name12 = $_FILES["img12"]["tmp_name"];
        $path12 = "uploads/users/" . $_FILES["img12"]["name"];
        move_uploaded_file($tmp_name12, $path12);
        $pr12 = $_POST["pr12"];
        
        $data = array("img1" => $path1, "pr1" => $pr1,"img2" => $path2, "pr2" => $pr2,"img3" => $path3, "pr3" => $pr3,"img4" => $path4, "pr4" => $pr4,"img5" => $path5, "pr5" => $pr5,"img6" => $path6, "pr6" => $pr6,"img7" => $path7, "pr7" => $pr7,"img8" => $path8, "pr8" => $pr8,"img9" => $path9, "pr9" => $pr9,"img10" => $path10, "pr10" => $pr10,"img11" => $path11, "pr11" => $pr11,"img12" => $path12, "pr12" => $pr12);
        $chk = $this->insalldata('add_slider', $data);
        if ($chk) {
            echo "<script>
            alert('Thanks for Adding slider images')
            window.location='manageslider';
            </script>";
        }
    }
    $shwslidedata=$this->shwslidedata('add_slider');
//delete slider content or data from admin 
    if (isset($_GET["delete-id"])) 
    {
        $delid = $_GET["delete-id"];
        $id = array("slider_id" => $delid);
        $chk = $this->deldata('add_slider', $id);
        if ($chk) 
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
// edit slider content 
if(isset($_GET["edit-id"]))
{
    $id=($_GET["edit-id"]);
    $sliderdata=$this->editdata('add_slider','slider_id',$id);
}
// add slider images data
if (isset($_POST["updslider"])) 
{
    $id=($_GET["edit-id"]);   
    $tmp_name1 = $_FILES["img1"]["tmp_name"];
    $path1 = "uploads/users/" . $_FILES["img1"]["name"];
    move_uploaded_file($tmp_name1, $path1);
    $pr1 = $_POST["pr1"];

    $tmp_name2 = $_FILES["img2"]["tmp_name"];
    $path2 = "uploads/users/" . $_FILES["img2"]["name"];
    move_uploaded_file($tmp_name2, $path2);
    $pr2 = $_POST["pr2"];

    $tmp_name3 = $_FILES["img3"]["tmp_name"];
    $path3 = "uploads/users/" . $_FILES["img3"]["name"];
    move_uploaded_file($tmp_name3, $path3);
    $pr3 = $_POST["pr3"];

    $tmp_name4 = $_FILES["img4"]["tmp_name"];
    $path4 = "uploads/users/" . $_FILES["img4"]["name"];
    move_uploaded_file($tmp_name4, $path4);
    $pr4 = $_POST["pr4"];

    $tmp_name5 = $_FILES["img5"]["tmp_name"];
    $path5 = "uploads/users/" . $_FILES["img5"]["name"];
    move_uploaded_file($tmp_name5, $path5);
    $pr5 = $_POST["pr5"];

    $tmp_name6 = $_FILES["img6"]["tmp_name"];
    $path6 = "uploads/users/" . $_FILES["img6"]["name"];
    move_uploaded_file($tmp_name6, $path6);
    $pr6 = $_POST["pr6"];

    $tmp_name7 = $_FILES["img7"]["tmp_name"];
    $path7 = "uploads/users/" . $_FILES["img7"]["name"];
    move_uploaded_file($tmp_name7, $path7);
    $pr7 = $_POST["pr7"];

    $tmp_name8 = $_FILES["img8"]["tmp_name"];
    $path8 = "uploads/users/" . $_FILES["img8"]["name"];
    move_uploaded_file($tmp_name8, $path8);
    $pr8 = $_POST["pr8"];

    $tmp_name9 = $_FILES["img9"]["tmp_name"];
    $path9 = "uploads/users/" . $_FILES["img9"]["name"];
    move_uploaded_file($tmp_name9, $path9);
    $pr9 = $_POST["pr9"];

    $tmp_name10 = $_FILES["img10"]["tmp_name"];
    $path10 = "uploads/users/" . $_FILES["img10"]["name"];
    move_uploaded_file($tmp_name10, $path10);
    $pr10 = $_POST["pr10"];

    $tmp_name11 = $_FILES["img11"]["tmp_name"];
    $path11 = "uploads/users/" . $_FILES["img11"]["name"];
    move_uploaded_file($tmp_name11, $path11);
    $pr11 = $_POST["pr11"];

    $tmp_name12 = $_FILES["img12"]["tmp_name"];
    $path12 = "uploads/users/" . $_FILES["img12"]["name"];
    move_uploaded_file($tmp_name12, $path12);
    $pr12 = $_POST["pr12"];
    
    $chk=$this->upsliderdata('add_slider',$path1,$pr1,$path2,$pr2,$path3,$pr3,$path4,$pr4,$path5,$pr5,$path6,$pr6,$path7,$pr7,$path8,$pr8,$path9,$pr9,$path10,$pr10,$path11,$pr11,$path12,$pr12,'slider_id',$id);
    if ($chk) {
        echo "<script>
        alert('Thanks for updating slider images')
        window.location='manageslider';
        </script>";
    }
    }
// ending slider content ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


//add gallary images data
     if (isset($_POST["addgallary"])) 
    {
        $tmp_name1 = $_FILES["pc1"]["tmp_name"];
        $path1 = "uploads/users/".$_FILES["pc1"]["name"];
        move_uploaded_file($tmp_name1,$path1);
        $dtl1 = $_POST["dtl1"];

        $tmp_name2 = $_FILES["pc2"]["tmp_name"];
        $path2 = "uploads/users/".$_FILES["pc2"]["name"];
        move_uploaded_file($tmp_name2,$path2);
        $dtl2 = $_POST["dtl2"];

        $tmp_name3 = $_FILES["pc3"]["tmp_name"];
        $path3 = "uploads/users/".$_FILES["pc3"]["name"];
        move_uploaded_file($tmp_name3,$path3);
        $dtl3 = $_POST["dtl3"];

        $tmp_name4 = $_FILES["pc4"]["tmp_name"];
        $path4 = "uploads/users/".$_FILES["pc4"]["name"];
        move_uploaded_file($tmp_name4,$path4);
        $dtl4 = $_POST["dtl4"];

        $tmp_name5 = $_FILES["pc5"]["tmp_name"];
        $path5 = "uploads/users/".$_FILES["pc5"]["name"];
        move_uploaded_file($tmp_name5,$path5);
        $dtl5 = $_POST["dtl5"];

        $tmp_name6 = $_FILES["pc6"]["tmp_name"];
        $path6 = "uploads/users/".$_FILES["pc6"]["name"];
        move_uploaded_file($tmp_name6,$path6);
        $dtl6 = $_POST["dtl6"];
        
        $tmp_name7 = $_FILES["pc7"]["tmp_name"];
        $path7 = "uploads/users/".$_FILES["pc7"]["name"];
        move_uploaded_file($tmp_name7,$path7);
        $dtl7 = $_POST["dtl7"];

        $tmp_name8 = $_FILES["pc8"]["tmp_name"];
        $path8 = "uploads/users/".$_FILES["pc8"]["name"];
        move_uploaded_file($tmp_name8,$path8);
        $dtl8 = $_POST["dtl8"];

        $data = array("pc1" => $path1, "dtl1" => $dtl1,"pc2" => $path2, "dtl2" => $dtl2,"pc3" => $path3, "dtl3" => $dtl3,"pc4" => $path4, "dtl4" => $dtl4,"pc5" => $path5, "dtl5" => $dtl5,"pc6" => $path6, "dtl6" => $dtl6,"pc7" => $path7, "dtl7" => $dtl7,"pc8" => $path8, "dtl8" => $dtl8 );
        $chk = $this->insalldata('add_gallary', $data);
        if ($chk) {
            echo "<script>
            alert('Thanks for Adding gallary data')
            window.location='managegallary';
            </script>";
        }
    }
    $shwgallarydata=$this->shwgallarydata('add_gallary');
//delete letestcars content or data from admin 
if (isset($_GET["delete-id"])) 
{
    $delid = $_GET["delete-id"];
    $id = array("gallary_id" => $delid);
    $chk = $this->deldata('add_gallary', $id);
    if ($chk) 
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
// edit latest content 
if(isset($_GET["edit-id"]))
{
    $id=($_GET["edit-id"]);
    $gallarydata=$this->editdata('add_gallary','gallary_id',$id);
}
//update gallary images data
if (isset($_POST["updgallary"])) 
{
    $id=($_GET["edit-id"]);
    $tmp_name1 = $_FILES["pc1"]["tmp_name"];
    $path1 = "uploads/users/".$_FILES["pc1"]["name"];
    move_uploaded_file($tmp_name1,$path1);
    $dtl1 = $_POST["dtl1"];

    $tmp_name2 = $_FILES["pc2"]["tmp_name"];
    $path2 = "uploads/users/".$_FILES["pc2"]["name"];
    move_uploaded_file($tmp_name2,$path2);
    $dtl2 = $_POST["dtl2"];

    $tmp_name3 = $_FILES["pc3"]["tmp_name"];
    $path3 = "uploads/users/".$_FILES["pc3"]["name"];
    move_uploaded_file($tmp_name3,$path3);
    $dtl3 = $_POST["dtl3"];

    $tmp_name4 = $_FILES["pc4"]["tmp_name"];
    $path4 = "uploads/users/".$_FILES["pc4"]["name"];
    move_uploaded_file($tmp_name4,$path4);
    $dtl4 = $_POST["dtl4"];

    $tmp_name5 = $_FILES["pc5"]["tmp_name"];
    $path5 = "uploads/users/".$_FILES["pc5"]["name"];
    move_uploaded_file($tmp_name5,$path5);
    $dtl5 = $_POST["dtl5"];

    $tmp_name6 = $_FILES["pc6"]["tmp_name"];
    $path6 = "uploads/users/".$_FILES["pc6"]["name"];
    move_uploaded_file($tmp_name6,$path6);
    $dtl6 = $_POST["dtl6"];
    
    $tmp_name7 = $_FILES["pc7"]["tmp_name"];
    $path7 = "uploads/users/".$_FILES["pc7"]["name"];
    move_uploaded_file($tmp_name7,$path7);
    $dtl7 = $_POST["dtl7"];

    $tmp_name8 = $_FILES["pc8"]["tmp_name"];
    $path8 = "uploads/users/".$_FILES["pc8"]["name"];
    move_uploaded_file($tmp_name8,$path8);
    $dtl8 = $_POST["dtl8"];

    $chk=$this->upgallarydata('add_gallary',$path1,$dtl1,$path2,$dtl2,$path3,$dtl3,$path4,$dtl4,$path5,$dtl5,$path6,$dtl6,$path7,$dtl7,$path8,$dtl8,'gallary_id',$id);
    if ($chk) {
        echo "<script>
        alert('Thanks for update gallary data')
        window.location='managegallary';
        </script>";
    }
}
// ending gallary content ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


//add footer data
     if (isset($_POST["addfooter"])) 
     {
        $abtdetails = $_POST["abtdetails"];
        $tmp_name1 = $_FILES["pht1"]["tmp_name"];
        $path1 = "uploads/users/" . $_FILES["pht1"]["name"];
        move_uploaded_file($tmp_name1, $path1);
        
        $phtdt1 = $_POST["phtdt1"];   
        $tmp_name2 = $_FILES["pht2"]["tmp_name"];
        $path2 = "uploads/users/" . $_FILES["pht2"]["name"];
        move_uploaded_file($tmp_name2, $path2);
        
        $phtdt2 = $_POST["phtdt2"];
        $tmp_name3 = $_FILES["pht3"]["tmp_name"];
        $path3 = "uploads/users/" . $_FILES["pht3"]["name"];
        move_uploaded_file($tmp_name3, $path3);

        $tmp_name2 = $_FILES["pht4"]["tmp_name"];
        $path4 = "uploads/users/" . $_FILES["pht4"]["name"];
        move_uploaded_file($tmp_name4, $path4);
        
        $tmp_name5 = $_FILES["pht5"]["tmp_name"];
        $path5 = "uploads/users/" . $_FILES["pht5"]["name"];
        move_uploaded_file($tmp_name5, $path5);
        
        $tmp_name6 = $_FILES["pht6"]["tmp_name"];
        $path6 = "uploads/users/" . $_FILES["pht6"]["name"];
        move_uploaded_file($tmp_name6, $path6);

        $data = array("abtdetails" => $abtdetails, "pht1" => $path1,"phtdt1" => $phtdt1, "pht2" => $path2,"phtdt2" => $phtdt2,"pht3" => $path3,"pht4" => $path4,"pht5" => $path5,"pht6" => $path6);
        $chk = $this->insalldata('add_footer', $data);
        if ($chk)
        {
            echo "<script>
            alert('Thanks for Adding footer data')
            window.location='managefooter';
            </script>";
        }
    }
    $shwfooterdata=$this->shwfooterdata('add_footer'); 
//delete footer content or data from admin 
    if (isset($_GET["delete-id"])) 
    {
        $delid = $_GET["delete-id"];
        $id = array("footer_id" => $delid);
        $chk = $this->deldata('add_footer', $id);
        if ($chk) 
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
// edit footer content 
if(isset($_GET["edit-id"]))
{
    $id=($_GET["edit-id"]);
    $footerdata=$this->editdata('add_footer','footer_id',$id);
}
// update footer data
if (isset($_POST["updfooter"])) 
     {
        $id=($_GET["edit-id"]);
        $abtdetails = $_POST["abtdetails"];
        $tmp_name1 = $_FILES["pht1"]["tmp_name"];
        $path1 = "uploads/users/" . $_FILES["pht1"]["name"];
        move_uploaded_file($tmp_name1, $path1);
        
        $phtdt1 = $_POST["phtdt1"];   
        $tmp_name2 = $_FILES["pht2"]["tmp_name"];
        $path2 = "uploads/users/" . $_FILES["pht2"]["name"];
        move_uploaded_file($tmp_name2, $path2);
        
        $phtdt2 = $_POST["phtdt2"];
        $tmp_name3 = $_FILES["pht3"]["tmp_name"];
        $path3 = "uploads/users/" . $_FILES["pht3"]["name"];
        move_uploaded_file($tmp_name3, $path3);

        $tmp_name2 = $_FILES["pht4"]["tmp_name"];
        $path4 = "uploads/users/" . $_FILES["pht4"]["name"];
        move_uploaded_file($tmp_name4, $path4);
        
        $tmp_name5 = $_FILES["pht5"]["tmp_name"];
        $path5 = "uploads/users/" . $_FILES["pht5"]["name"];
        move_uploaded_file($tmp_name5, $path5);
        
        $tmp_name6 = $_FILES["pht6"]["tmp_name"];
        $path6 = "uploads/users/" . $_FILES["pht6"]["name"];
        move_uploaded_file($tmp_name6, $path6);

        $chk=$this->upfooterdata('add_footer',$abtdetails,$path1,$phtdt1,$path2,$phtdt2,$path3,$path4,$path5,$path6,'footer_id',$id);
        if ($chk)
        {
            echo "<script>
            alert('Thanks for updating footer data')
            window.location='managefooter';
            </script>";
        }
    }
// ending footer content ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


        // login as admin 
        if (isset($_POST["log"])) {
            $em = $_POST["email"];
            $pass = ($_POST["pass"]);
            $chk = $this->adminlogin('admin_login', $em, $pass);
            if ($chk) {
                echo "<script>
                 alert('You are logged in Successfully')
                  window.location='./header';
                  </script>";
            } else {
                echo "<script>
                 alert('Your email and password are Incorrect try again')
                  window.location='./';
                  </script>";
            }
        }

        // change password of admin
        if (isset($_POST["change"])) {
            $id = $_SESSION["admin_id"];
            $opass = ($_POST["opass"]);
            $npass = ($_POST["npass"]);
            $cpass = ($_POST["cpass"]);
            $chk = $this->adminchangepassword('admin_login', 'admin_id', $opass, $npass, $cpass, $id);
            if ($chk) {
                unset($_SESSION["admin_id"]);
                unset($_SESSION["email"]);
                session_destroy();
                echo "<script>
                alert('Your admin password successfully changed')
                 window.location='./';
                 </script>";
            } else {
                echo "<script>
                alert('Your Oldpass,New password and Confirm Passsword does not matched try again')
                 window.location='change-password';
                 </script>";
            }

        }

        // forget password of admin password should send on email also
        if (isset($_POST["admin_frg"])) {

            require 'PHPMailer/Exception.php';
            require 'PHPMailer/PHPMailer.php';
            require 'PHPMailer/SMTP.php';
            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);
            try {

                $em = $_POST["email"];
                //Server settings
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->SMTPDebug = 1;
                $mail->isSMTP(); //Send using SMTP
                $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
                $mail->SMTPAuth = true; //Enable SMTP authentication
                $mail->Username = 'milangondaliya62@gmail.com'; //SMTP username
                $mail->Password = 'mockpfxsleuzdqbu'; //SMTP password
                // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('milangondaliya62@gmail.com', 'Mailer');
                $mail->addAddress($_POST["email"], 'Recepeint');
                //Content
                $mail->isHTML(true); //Set email format to HTML
                $chk = $this->frgpassword('admin_login', 'email', $em);
                $mail->Subject = 'Forget password email';
                $mail->Body = "<p>Your Password is :" . $chk . "</p>";

                $mail->send();
                echo "<script>
                alert('Your admin password successfully send on your email kindly checked and logged In')
                window.location='./';
                </script>";

            } catch (Exception $e) {
                echo "<script>
                alert('Your email id is not registered with us try again')
                 window.location='admin-forgetpassword';
                 </script>";
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }

        // logout as admin
        if (isset($_GET["admin-logout"])) {
            $chk = $this->logout();
            echo "<script>
            alert('You are Logout successfully')
             window.location='./';
             </script>";
        }


        // load your view or templates 

        if (isset($_SERVER["PATH_INFO"])) {
            switch ($_SERVER["PATH_INFO"]) {
                case '/':
                    require_once("index.php");
                    require_once("login.php");
                    require_once("footer.php");
                    break;

                case '/admin-forgetpassword':
                    require_once("index.php");
                    require_once("forgetpassword.php");
                    require_once("footer.php");
                    break;

                case '/change-password':
                    require_once("index.php");
                    require_once("changepassword.php");
                    require_once("footer.php");
                    break;

                case '/header':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("footer.php");
                    break;

                case '/manageaboutus':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("manageaboutus.php");
                    require_once("footer.php");
                    break;

                case '/editabout':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("editabout.php");
                    require_once("footer.php");
                    break;

                case '/managedeal':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("managedeal.php");
                    require_once("footer.php");
                    break;

                case '/editdeal':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("editdeal.php");
                    require_once("footer.php");
                    break;

                case '/manageteam':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("manageteam.php");
                    require_once("footer.php");
                    break;
                
                case '/editteam':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("editteam.php");
                    require_once("footer.php");
                    break;

                case '/managegallary':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("managegallary.php");
                    require_once("footer.php");
                    break;

                case '/editgallary':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("editgallary.php");
                    require_once("footer.php");
                    break;

                case '/manageslider':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("manageslider.php");
                    require_once("footer.php");
                    break;

                case '/editslider':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("editslider.php");
                    require_once("footer.php");
                    break;

                case '/managecontactus':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("managecontactus.php");
                    require_once("footer.php");
                    break;

                case '/managefooter':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("managefooter.php");
                    require_once("footer.php");
                    break;

                case '/editfooter':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("editfooter.php");
                    require_once("footer.php");
                    break;

                default:
                    require_once("index.php");
                    require_once("404.php");
                    require_once("footer.php");
                    break;
            }
        }
    }
}
$obj = new controller();
?>