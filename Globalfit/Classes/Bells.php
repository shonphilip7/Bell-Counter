<?php
namespace Globalfit\Classes;
  
  class Bells {  
	 /**
	   * a blank contructor
	   */
	  public function __construct()
	  {
		  
	  }
	  
	  /** A function to get number of bell counts
	    *
	    * @param date/time string $startTime the start time entered by user
	    * @param date/time string $endTime the end time entered by user
		*
	    * @return int an integer of the number of bells
	    */
	  public function countBells($startTime, $endTime)
	  {
		 $clockHours = array(12,1,2,3,4,5,6,7,8,9,10,11,12,1,2,3,4,5,6,7,8,9,10,11); 
		 $startTime = strtotime($startTime);
         $endTime   = strtotime($endTime);
         $timeDifference  = ($endTime - $startTime)/3600;
		 $minuteHand = date('i', $startTime);
		 $sHour = date('H', $startTime);
         $eHour = date('H', $endTime);
		 if ($minuteHand != 0) { //ex: 2:30
		     $sHour++;		 
		 }
		 if ($timeDifference > 0) {
		     $hourDifference = ($eHour - $sHour)+1;
			 $bells_array = array_slice($clockHours, $sHour, $hourDifference);
			 $bellCount = array_sum($bells_array);
			 return $bellCount;
		 }else { //time difference negative or zero
			 $bells_array_2 = array_slice($clockHours, $sHour, 23);
			 $bells_array_3 = array_slice($clockHours, 0, $eHour+1);
			 $bellCount = array_sum($bells_array_2) + array_sum($bells_array_3);
			 return $bellCount;
		 } 
	  } 
  }
  