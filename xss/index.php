<?php

//for xss auditor in Chrome and Safari
header("X-XSS-Protection: 0");
$page = $_GET['page'];

?>
<!DOCTYPE HTML>
<html>
<head>
   <meta charset="UTF-8"></meta>
   <title>XSS TEST</title>
</head>
<body>
	<a href="login.php">登入</a>
    <h2><?php echo "page:" . $page; ?></h2>
</body>
</html>