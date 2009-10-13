<?php

class I18N_Twig_Extension extends Twig_Extension
{
  public function getFilters()
  {
    return array(
              "format_number_choice" => array("format_number_choice", false),
              "format_country" => array("format_country", false),
              "format_language" => array("format_language", false),
            );
  }

  public function getName()
  {
    return "i18n";
  }
}
