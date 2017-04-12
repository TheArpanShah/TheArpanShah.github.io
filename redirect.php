<?php 
$answers = $_POST;
 $url1 = "http://www.energybillquote.org/results.html";
 $var1 = "?company18=".urlencode($answers[company18]);
 $var2 = "&firstName=".urlencode($answers[firstname]);
 $var3 = "&lastName=".urlencode($answers[lastname]);
 $var4 = "&email=".urlencode($answers[email]);
 $var5 = "&phone=".urlencode($answers[phone]);
 $url2 = $url1.$var1.$var2.$var3.$var4.$var5;
 header("location:$url2");
?>
