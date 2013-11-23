<?php
class VernacularDateTime{
  public function format_date($date, $format = 'F j, Y'){
    return date($format, strtotime($date));
  }

  public function is_in_future($datetime){
    if(strtotime($datetime) > time())
      return true;
  }

  public function is_in_past($datetime){
    if(strtotime($datetime) < time())
      return true;
  }

  public function today($format = 'Ymd'){
    return date($format);
  }

  public function group_array_by_month_and_year($array, $date_key = 'date'){
    $dates = array();

    // Build Array
    foreach($array as $item){
      $year = date('Y', strtotime($item[$date_key]));
      $month = date('m', strtotime($item[$date_key]));

      $dates[$year][$month][] = $item;
    }

    // Sort Months
    array_walk($dates, 'ksort');

    // Sort Years
    ksort($dates);

    return $dates;
  }
}

class_alias('VernacularDateTime', '_datetime');
