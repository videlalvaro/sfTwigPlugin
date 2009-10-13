<?php

class Date_Twig_Extension extends Twig_Extension
{
  public function getFilters()
  {
    return array(
              "format_daterange" => array("format_daterange", false),
              "format_date" => array("format_date", false),
              "format_datetime" => array("format_datetime", false),
              "distance_of_time_in_words" => array("distance_of_time_in_words", false),
              "time_ago_in_words" => array("time_ago_in_words", false),
            );
  }

  public function getName()
  {
    return "date";
  }
}
