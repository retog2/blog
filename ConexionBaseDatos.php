<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="CSS/css.css">
</head>
<body>
	 <?php
        $bdname = "id3314307_blog2dw3";
        $username = "id3314307_grupo2";
        $password = "admin";

        // Create connection
        $conn = new mysqli('localhost','id3314307_grupo2', 'grupo2', 'id3314307_blog2dw3');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
        ?> 

</body>

</html>