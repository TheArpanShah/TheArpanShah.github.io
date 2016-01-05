<?php 
$answers = $_POST;
 $url1 = "http://www.energybillquote.org/results2.html";

 $var1 = "?business=".urlencode($answers[businessname]);
 $var2 = "&firstName=".urlencode($answers[firstname]);
 $var3 = "&email=".urlencode($answers[email]);
 $url2 = $url1.$var1.$var2.$var3;
 header("location:$url2");
?>