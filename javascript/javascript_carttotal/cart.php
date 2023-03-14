<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CART</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>

        th 
        {
            background-color: black;
            color: white;
        }
    </style>

    <script>
        function crt()
        {
            var p=document.getElementById("Price").value;
            var q=document.getElementById("Qty").value;
            var t=p*q;
            document.getElementById("tot").innerHTML=t;
        }
    </script>
</head>

<body>
        <table align="center" border="0" cellpadding="5" cellspacing="5">
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>P_name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Action</th>
            </tr>

            <tr>
                <td>001</td>
                <td><img src="https://m.media-amazon.com/images/I/617FFRO3vcL._SX679_.jpg" width="165px" height="155px"></td>
                <td>I-PHONE 13</td>
                <td><input type="number" id="Qty" min="1" max="20" value="1" onchange="crt()"></td>
                <td>Rs.<input type="text" id="Price"  value="135000" readonly style="border: none;"></td>
                <td><a href="">ADD</a></td>
            </tr>
    
            <tr>
                <td colspan="6"><h3 align="right">Total is Rs. <label id="tot">135000</label></h3></td>
            </tr>

       </table>
</body>
</html>