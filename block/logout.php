<?php
session_start();
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?php
if (session_destroy())
    print "<script type=text/javascript> window.location='../index.php'</script>";
else
    echo "<p align=center><font size=+2>Unknown Error!</font></p>";
?>
</body>
</html>