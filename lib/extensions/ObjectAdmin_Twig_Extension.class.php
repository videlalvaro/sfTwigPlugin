<?php

class ObjectAdmin_Twig_Extension extends Twig_Extension
{
  public function getFilters()
  {
    return array(
              "object_admin_input_file_tag" => array("object_admin_input_file_tag", false),
              "object_admin_double_list" => array("object_admin_double_list", false),
              "object_admin_select_list" => array("object_admin_select_list", false),
              "object_admin_check_list" => array("object_admin_check_list", false),
            );
  }

  public function getName()
  {
    return "objectadmin";
  }
}
