<?php
/*
 * This file is part of the symfony package.
 * (c) 2004-2006 Fabien Potencier <fabien.potencier@symfony-project.com>
 * (c) 2004-2006 Sean Kerr <sean@code-box.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * A view that uses PHP as the templating engine.
 *
 * @package    symfony
 * @subpackage sfTwigPlugin
 * @author     Henrik Bjornskov <yep@iamhenrik.se>
 */
class sfTwigView extends sfPHPView
{
    protected
        $twig       = null,
        $extension  = '.html';
    
    /**
     * Sets up a Twig_Environment
     *
     * @return void
     */
    public function execute()
    {
        $loader = new Twig_Loader_Filesystem('/', false, sfConfig::get('sf_twig_template_cache', false));
        $this->twig = new Twig_Environment($loader);
    }
    
    /**
     * Returns the initiated Twig_Environment object
     *
     * @return Twig_Environment
     */
    public function getEngine()
    {
        return $this->twig;
    }
    
    /**
     * Renders a Twig_Template
     *
     * @oaram $_sfFile string fullpath to a template file
     * @return string the rendered file
     */
    protected function renderFile($_sfFile)
    {
        $this->loadCoreAndStandardHelpers();
    
        $template = $this->twig->loadTemplate(substr($_sfFile, 1));
        return $template->render($this->attributeHolder->toArray());
    }
}