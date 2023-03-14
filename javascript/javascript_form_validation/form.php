<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='js/validation.js'></script>
</head>
<body>

    <center>
        <form name="frm" action="welcome.php" onsubmit="return valid(this.value)">

            Email <input type="text" name="email" placeholder="Enter your Email Id">
            <br><br>
            
            Password <input type="password" name="password" placeholder="Enter your Password *">
            <br><br>

           <input type="submit" name="sub" value="Login">
            <br><br>
        
        </form>
    </center>

</body>
</html>