<?php

class Form_Twig_Extension extends Twig_Extension
{
  public function getFilters()
  {
    return array(
              "options_for_select" => array("options_for_select", false),
              "form_tag" => array("form_tag", false),
              "select_tag" => array("select_tag", false),
              "select_country_tag" => array("select_country_tag", false),
              "select_language_tag" => array("select_language_tag", false),
              "select_currency_tag" => array("select_currency_tag", false),
              "input_tag" => array("input_tag", false),
              "input_hidden_tag" => array("input_hidden_tag", false),
              "input_file_tag" => array("input_file_tag", false),
              "input_password_tag" => array("input_password_tag", false),
              "textarea_tag" => array("textarea_tag", false),
              "checkbox_tag" => array("checkbox_tag", false),
              "radiobutton_tag" => array("radiobutton_tag", false),
              "input_date_range_tag" => array("input_date_range_tag", false),
              "input_date_tag" => array("input_date_tag", false),
              "submit_tag" => array("submit_tag", false),
              "reset_tag" => array("reset_tag", false),
              "submit_image_tag" => array("submit_image_tag", false),
              "label_for" => array("label_for", false),
            );
  }

  public function getName()
  {
    return "form";
  }
}
