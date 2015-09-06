<?php

$page = $_GET['page'];

?>
<!DOCTYPE HTML>
<html>
<head>
   <meta charset="UTF-8"></meta>
   <title>XSS TEST</title>
</head>
<body>
    <h1>
    <h2><?php echo "page:" . $page; ?></h2>

</body>
</html>