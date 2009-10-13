<?php

class Url_Twig_Extension extends Twig_Extension
{
  public function getFilters()
  {
    return array(
              "link_to2" => array("link_to2", false),
              "link_to1" => array("link_to1", false),
              "url_for2" => array("url_for2", false),
              "url_for1" => array("url_for1", false),
              "url_for" => array("url_for", false),
              "link_to" => array("link_to", false),
              "url_for_form" => array("url_for_form", false),
              "form_tag_for" => array("form_tag_for", false),
              "link_to_if" => array("link_to_if", false),
              "link_to_unless" => array("link_to_unless", false),
              "public_path" => array("public_path", false),
              "button_to" => array("button_to", false),
              "mail_to" => array("mail_to", false),
            );
  }

  public function getName()
  {
    return "url";
  }
}
