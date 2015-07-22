<?php
session_start();

if (!isset($_SESSION['uid'])) {
    header("location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Csrf Violation Example</title>
</head>
<body>
    <form method="GET" action="exchange.php">
        <select name="award">
            <option value=1>50元，獎品1</option>
            <option value=2>100元，獎品2</option>
            <option value=3>200元，獎品3</option>
            <option value=4>300元，獎品4</option>
        </select>
        <input type="submit" value="確認"/>
    </form>
</body>
</html>