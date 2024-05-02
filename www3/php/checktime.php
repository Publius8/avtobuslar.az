<?php


    date_default_timezone_set('Asia/Baku');


    $time2 = time();    // + (4*60*60);  //summer time (11*60*60); winter time (10*60*60)
    $yearID=date("Y", $time2);
    $monthID=date("m", $time2);
    $dateID=date("d", $time2);
    $hoursID=date('H', $time2);
    $minutesID=date("i", $time2);
    $secondsID=date("s", $time2);
    $weekdayID=date('w', $time2);
    $cmpdate = $yearID."-".sprintf("%02d", $monthID)."-".sprintf("%02d", $dateID)." ".sprintf("%02d", $hoursID).":".sprintf("%02d", $minutesID).":".sprintf("%02d", $secondsID);
echo $cmpdate;


?>