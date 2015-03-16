<?php 
$answers = $_POST;
 $url1 = "http://wwww.energybillquote.com/results.html";

 $var1 = "?company18=".urlencode($answers[company18]);
 $var2 = "&name19=".urlencode($answers[name19]);
 $var3 = "&email=".urlencode($answers[email]);
 $var4 = "&phone=".urldecode($answers[phone]);
 $url2 = $url1.$var1.$var2.$var3.$var4;
 header("location:$url2");
?>
