<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>onunload</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body onunload="test()">
<script>
function test()
{
    alert('Hi i am loading flipkart please press OK')
    window.location='https://www.flipkart.com';
}
</script>
</body>
</html>