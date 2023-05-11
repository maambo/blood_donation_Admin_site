<?php

    
    // Seats JSON
    $stSql = "Select * from seats";
    $resultstSql = mysqli_query($conn, $stSql);
    $arr = array();
    if(mysqli_num_rows($resultstSql))
        while($row = mysqli_fetch_assoc($resultstSql))
            $arr[] = $row;
    $seatJson = json_encode($arr);

     // Bus JSON
     $busSql = "Select * from bus";
     $resultBusSql = mysqli_query($conn, $busSql);
     $arr = array();
     while($row = mysqli_fetch_assoc($resultBusSql))
         $arr[] = $row;
     $busJson = json_encode($arr);
 
     // Booking JSON
     $bookingSql = "Select * from booked";
     $resultBookingSql = mysqli_query($conn, $bookingSql);
     $arr = array();
     while($row = mysqli_fetch_assoc($resultBookingSql))
         $arr[] = $row;
     $bookingJson = json_encode($arr);
     
     // schedule JSON
    $rtSql = "Select * from schedule_list";
    $resultrtSql = mysqli_query($conn, $rtSql);
    $arr = array();
    if(mysqli_num_rows($resultrtSql))
        while($row = mysqli_fetch_assoc($resultrtSql))
            $arr[] = $row;
        $scheduleJson = json_encode($arr);

    //Earning JSON
     $result = mysqli_query($conn, 'SELECT SUM(price) AS value_sum FROM booked'); 
     $row = mysqli_fetch_assoc($result); 
     $sum = $row['value_sum'];
     $earningJson = json_encode($sum);

     //location json
     $location = "Select * from location";
    $resultctlocation = mysqli_query($conn, $location);
    $load_location = array();
    if(mysqli_num_rows($resultctlocation))
        while($rows = mysqli_fetch_assoc($resultctlocation))
        $load_location[] = $rows;
    $locationjson = json_encode($load_location);

?>