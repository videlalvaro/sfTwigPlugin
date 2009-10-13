<?php

class Object_Twig_Extension extends Twig_Extension
{
  public function getFilters()
  {
    return array(
              "object_input_date_tag" => array("object_input_date_tag", false),
              "object_textarea_tag" => array("object_textarea_tag", false),
              "objects_for_select" => array("objects_for_select", false),
              "object_select_tag" => array("object_select_tag", false),
              "object_select_country_tag" => array("object_select_country_tag", false),
              "object_select_language_tag" => array("object_select_language_tag", false),
              "object_input_hidden_tag" => array("object_input_hidden_tag", false),
              "object_input_tag" => array("object_input_tag", false),
              "object_checkbox_tag" => array("object_checkbox_tag", false),
            );
  }

  public function getName()
  {
    return "object";
  }
}
