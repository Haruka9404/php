<?php

$company = htmlspecialchars($_POST['company'], ENT_QUOTES);
// http://localhost/php01/config/course.php

$company = htmlspecialchars($_GET['company'], ENT_QUOTES);
// http://localhost/php01/config/course.php?company=%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BEPHP&submit=%E9%80%81%E4%BF%A1%E3%81%99%E3%82%8B
print "会社名は" . $company . "ですね";

// echo ver_dump$_GET;