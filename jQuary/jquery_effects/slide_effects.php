<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>slide effects</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#fd").click(function(){
            $("#crt1").slideToggle(1800);
        })
        })
    </script>

    <style>
        #crt1 
        {
            width: 60%;
            height: 50px;
            margin: auto;
            padding: 20px;
            margin-top: 0%;
            background-color: orange;
            color: black;
            display: none;
        }
    </style>    
</head>
<body>
        <center>
    <button type="button" id="fd">CLICK TO SLIDE EFFECTS</button>
    <br> <br>

    <table align="center" border="0" cellpadding="5" cellspacing="5" id="crt1">
        <tr>
            <th>Email </th>
            <th><input type="text" placeholder="enter email"></th>
            </tr>
            <tr>
                <th>Password </th>
                <th><input type="text" placeholder="enter password"></th>
            </tr>
           
        </table>    
</body>
</html>
