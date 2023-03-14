<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script>
        function ans()
        {
        document.getElementById("btn").style="border:none; background-color:black; width:200px; padding:8px; color:white";
        document.getElementById("btn1").style="border:none; background-color:black; width:200px; padding:8px; color:white";
        document.getElementById("btn2").style="border:none; background-color:black; width:200px; padding:8px; color:white";
        document.getElementById("btn3").style="border:none; background-color:black; width:200px; padding:8px; color:white";

        }

        function ad()
        {
            var a=parseInt(prompt("Enter a values :"));
            var b=parseInt(prompt("Enter b values :"));
            var c=a+b;
            alert('Addition of numbers is :'+c)
        }
        
        function sub()
        {
            var a=parseInt(prompt("Enter a values :"));
            var b=parseInt(prompt("Enter b values :"));
            var c=a-b;
            alert('Substraction of numbers is :'+c)
        }

        
        function mul()
        {
            var a=parseInt(prompt("Enter a values :"));
            var b=parseInt(prompt("Enter b values :"));
            var c=a*b;
            alert('Multiplication of numbers is :'+c)
        }

        
        function div()
        {
            var a=parseInt(prompt("Enter a values :"));
            var b=parseInt(prompt("Enter b values :"));
            var c=a/b;
            alert('Division of numbers is :'+c)
        }
        </script>
</head>
<body onload="ans()">

    <button type="button" id="btn" onclick="ad()">Addition</button>
    <button type="button" id="btn1" onclick="sub()">Substraction</button>
    <button type="button" id="btn2" onclick="mul()">Multiplication</button>
    <button type="button" id="btn3" onclick="div()">Division</button>
    
</body>
</html>