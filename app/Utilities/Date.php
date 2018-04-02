<?php
namespace APP\utilities;
use DateTime;

class Date{
  public static function isWeekend(){
      return (new DateTime)->format('N') >= 6;
  }
}