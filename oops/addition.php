<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>addition of two values</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form method="post">
        Enter First Number : <input type="text" name="a" placeholder="enter number"><br><br>
        Enter second Number : <input type="text" name="b" placeholder="enter number"><br><br>
        <input type="submit" name="ad" value="ADD"><br><br>
        
        <?php
            class a 
            {
                public function display()
                {
                    if(isset($_POST['ad']))
                    {
                        $a=$_POST["a"];
                        $b=$_POST["b"];
                        $c=$a+$b;
                        return $c;
                    }
                }
            }
            $obj=new a;
            echo "Addition of two numbers :".$obj->display();
        ?>
    </form>
</body>
</html>