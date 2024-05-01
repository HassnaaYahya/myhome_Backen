<!-- 
    <?php

$to ="hassnaaflutter@gmail.com";
$title ="hi";
$body ="I am hassna";
$header="From: support@hassnaayahya.com" . "\n";

mail($to,$title,$body,$header);

?>  -->

<?php

$notAuth = "" ; 

include "connect.php" ; 
 
sendGCM("hi"  , "How Are You" , "users31" , "" , "") ; 

echo "Send"  ;

?>