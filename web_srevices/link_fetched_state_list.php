<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>STATE LIST</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<center>
    <br> <br>
    <h1> STATE'S OF INDIA </h1>
    <br><br>

    <form method="post">     
            SELECT YOUR STATE : <select name="state">
                <option>---------select--------</option>
                <?php
                    $url="https://gist.githubusercontent.com/shubhamjain/35ed77154f577295707a/raw/7bc2a915cff003fb1f8ff49c6890576eee4f2f10/IndianStates.json";
                    $data=file_get_contents($url,true);
                    $st=json_decode($data,true);
                    foreach($st as $st1)
                    {
                ?>
                <option value="<?php echo $st1; ?>"><?php echo $st1;?></option>        
                <?php    
                }
                ?>
            </select>
        </center>
    </form>
</body>
</html>