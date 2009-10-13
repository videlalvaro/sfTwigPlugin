<?php

class Tag_Twig_Extension extends Twig_Extension
{
  public function getFilters()
  {
    return array(
              "tag" => array("tag", false),
              "content_tag" => array("content_tag", false),
              "cdata_section" => array("cdata_section", false),
              "comment_as_conditional" => array("comment_as_conditional", false),
              "escape_javascript" => array("escape_javascript", false),
              "escape_once" => array("escape_once", false),
              "fix_double_escape" => array("fix_double_escape", false),
              "get_id_from_name" => array("get_id_from_name", false),
            );
  }

  public function getName()
  {
    return "tag";
  }
}
