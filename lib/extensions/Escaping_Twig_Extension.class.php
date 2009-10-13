<?php

class Escaping_Twig_Extension extends Twig_Extension
{
  public function getFilters()
  {
    return array(
              "esc_entities" => array("esc_entities", false),
              "esc_specialchars" => array("esc_specialchars", false),
              "esc_raw" => array("esc_raw", false),
              "esc_js" => array("esc_js", false),
              "esc_js_no_entities" => array("esc_js_no_entities", false),
            );
  }

  public function getName()
  {
    return "escaping";
  }
}
