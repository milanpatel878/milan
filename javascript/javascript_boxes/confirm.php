<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>confirm box</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <script>
          function con()
          {
            if(confirm('Are you sure to delete'))
            {
                alert('successfully deleted')
                window.location='https://https://www.amazon.com';
            }
            else
            {
                window.location='confirm.php';
            }
          }
    </script>
    <button type="button" onclick="con()">Delete</button>
</body>
</html>