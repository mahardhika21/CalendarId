<?php
 
 include 'lib/CalendarId.php';

// contoh penggunaan library CalendarId
 
 $Calendar =  new CalendarId();

 echo $calendar->full_long_date(date('Y-m-d')).'<br>';