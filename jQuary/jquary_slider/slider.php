<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>slider</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>

    <script src='https://code.jquery.com/jquery-3.6.2.min.js'></script>
    
    <script src="https://malsup.github.io/jquery.cycle.all.js"></script>
    <script>
        $(document).ready(function(){

            $("#slide").cycle("fade,zoom,shuffle,turnLeft,turnRight");
        })
    </script>
    <style>
    .slider
    {
        width: 70%;
        height: 300px;
        margin-left: 15%;

    }
    #slide img 
    {
        width: 100%;
        height: 300px;
    }
    </style>
</head>
<body>
    <div class="slider">
        <div id="slide">
            <img src="image/1.jpg">
            <img src="image/2.jpg">
            <img src="image/3.jpg">
            <img src="image/4.jpg">
        </div>
    </div>
</body>
</html>