sfTwigPlugin
============
This plugin tries to integrate the [Twig](http://twig-project.com) into [Symfony](http://symfony-project.org)

### TextMate tick
To get support for Syntax highligting when coding in the twig "language" it is desireable to install Django HTML syntax highlighting support, which will highlight both the html and the twig code. There will might be some glitches though.

Helping
-------
This is a HUGE project for one man, so if _YOU_ want to contribute in any dont hesitate to fork me or open an issue or contact med at `yep [at] iamhenrik.se`. The first really big thing that needs help is porting the Core and Standard helpers for Symfony to Twig Extensions either as tags or filters.

Install
-------
Create a file named `module.yml` in project/`config` or app/`config` dir with the following content.
    
    all:
        view_class: sfTwig
        partial_view_class: sfTwig

This will enable the sfTwigView class to be used when rendering templates.

Usage
-----
Usage is simple, this plugin replaces sfPHPView and therefor the template file extension have changed into .html. But because this is not exactly the same as
sfPHPView and Twig dosent allow function calling from within the templates none of the normal helpers will work until they have been converted to Twig Extensions.