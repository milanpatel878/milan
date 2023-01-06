<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CITY LIST</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form method="post">
        <br><br>
        <center>
            SELECT YOUR CITY : <select name="city">
                <option>---------select--------</option>
                <?php
                    $url="city.json";
                    $data=file_get_contents($url,true);
                    $ct=json_decode($data,true);
                    foreach($ct as $ct1)
                    {
                ?>
                <option value="<?php echo $ct1; ?>"><?php echo $ct1;?></option>        
                <?php    
                }
                ?>
            </select>
        </center>
    </form>
</body>
</html>