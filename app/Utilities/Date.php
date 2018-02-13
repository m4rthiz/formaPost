<?php

namespace App\Utilities;

class Date
{
  public function isWeekEnd(){

    return date('N')>= 6;
  }
}
