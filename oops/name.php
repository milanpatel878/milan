<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>name</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form method="post">
        ENTER YOUR NAME :<input type="text" name="nm" placeholder="enter name"><br><br>
        <input type="submit" name="ad" value="ADD"><br><br>
    </form>

    <?php
        if(isset($_POST['ad']))
        {
            class a
            {
                public function aaa()
                {
                    $nm=$_POST['nm'];
                    echo $nm;
                }
            }
            $obj=new a;
            $obj->aaa();
        }
    ?>
</body>
</html>