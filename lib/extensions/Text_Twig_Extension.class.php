<?php

class Text_Twig_Extension extends Twig_Extension
{
  public function getFilters()
  {
    return array(
              "truncate_text" => array("truncate_text", false),
              "highlight_text" => array("highlight_text", false),
              "excerpt_text" => array("excerpt_text", false),
              "wrap_text" => array("wrap_text", false),
              "simple_format_text" => array("simple_format_text", false),
              "auto_link_text" => array("auto_link_text", false),
              "strip_links_text" => array("strip_links_text", false),
            );
  }

  public function getName()
  {
    return "text";
  }
}
