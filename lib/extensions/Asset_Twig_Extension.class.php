<?php

class Asset_Twig_Extension extends Twig_Extension
{
  public function getFilters()
  {
    return array(
              "auto_discovery_link_tag" => array("auto_discovery_link_tag", false),
              "javascript_path" => array("javascript_path", false),
              "javascript_include_tag" => array("javascript_include_tag", false),
              "stylesheet_path" => array("stylesheet_path", false),
              "stylesheet_tag" => array("stylesheet_tag", false),
              "use_stylesheet" => array("use_stylesheet", false),
              "use_javascript" => array("use_javascript", false),
              "decorate_with" => array("decorate_with", false),
              "image_path" => array("image_path", false),
              "image_tag" => array("image_tag", false),
              "include_metas" => array("include_metas", false),
              "include_http_metas" => array("include_http_metas", false),
              "include_title" => array("include_title", false),
              "get_javascripts" => array("get_javascripts", false),
              "include_javascripts" => array("include_javascripts", false),
              "get_stylesheets" => array("get_stylesheets", false),
              "include_stylesheets" => array("include_stylesheets", false),
              "dynamic_javascript_include_tag" => array("dynamic_javascript_include_tag", false),
              "use_dynamic_javascript" => array("use_dynamic_javascript", false),
              "use_dynamic_stylesheet" => array("use_dynamic_stylesheet", false),
              "get_javascripts_for_form" => array("get_javascripts_for_form", false),
              "include_javascripts_for_form" => array("include_javascripts_for_form", false),
              "get_stylesheets_for_form" => array("get_stylesheets_for_form", false),
              "include_stylesheets_for_form" => array("include_stylesheets_for_form", false),
            );
  }

  public function getName()
  {
    return "asset";
  }
}
