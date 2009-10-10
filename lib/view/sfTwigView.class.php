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
        $twig           = null,
        $twig_loaders   = array('decorator' => null, 'module' => null),
        $extension      = '.html';
    
    /**
     * Initializes this view.
     *
     * @param  sfContext $context     The current application context
     * @param  string    $moduleName  The module name for this view
     * @param  string    $actionName  The action name for this view
     * @param  string    $viewName    The view name
     * @return bool  true, if initialization completes successfully, otherwise false
     */
    public function initialize($context, $moduleName, $actionName, $viewName)
    {
        parent::initialize($context, $moduleName, $actionName, $viewName);
        
        //sets up a Twig_Loader_Array with directories
        $this->twig_loaders['decorator']    = new Twig_Loader_FileSystem($this->getDecoratorDirectory(), sfConfig::get('sf_template_cache_dir'));
        $this->twig_loaders['module']       = new Twig_Loader_FileSystem($this->getDirectory(), sfConfig::get('sf_template_cache_dir'));
        
        //Setting the $loader to null lets us swap the loader out as we need it on the same instance.
        $this->twig = new Twig_Environment(null);
    }
    
    /**
     * Renders the content
     *
     * @return string
     */
    public function render()
    {
        //Content holder
        $content = null;
        
        //No cache
        if (is_null($content)) {
            // execute pre-render check
            $this->preRenderCheck();
            
            $content = $this->renderTemplate('module');
        }
        
        //Two step rendering so decorate if needed
        if ($this->isDecorator()) {
            $content = $this->renderTemplate('decorator', $content);
        }
    
        return $content;
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
     * Renders a Twig_Template based on $loader_type
     *
     * @param string $loader_type this can be decorator or module
     * @param string $content Content to be decorated if the $loader_type is decorator
     * @returns string a rendered Twig_Template
     */
    protected function renderTemplate($loader_type, $content = null)
    {
        //Must be availible even tho Twig cant support calling them
        $this->loadCoreAndStandardHelpers();
        
        switch ($loader_type) {
            case 'decorator':
                $attributeHolder = clone $this->attributeHolder;
                $this->attributeHolder = $this->initializeAttributeHolder(array('sf_content' => new sfOutputEscaperSafe($content)));
                $this->attributeHolder->set('sf_type', 'layout');
                
                $this->twig->setLoader($this->twig_loaders['decorator']);
                $content = $this->twig->loadTemplate($this->getDecoratorTemplate())->render($this->attributeHolder->toArray());
                
                $this->attributeHolder = $attributeHolder;
                unset($attributeHolder);
                break;
            case 'module':
            default:
                $this->attributeHolder->set('sf_type', 'action');
                $this->twig->setLoader($this->twig_loaders['module']);
                $content = $this->twig->loadTemplate($this->getTemplate())->render($this->attributeHolder->toArray());
                break;
        }
        
        return $content;
    }
}