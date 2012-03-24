<?php

/* FolinusBaseBundle:Default:index.html.twig */
class __TwigTemplate_5a05865d4e5487b8b6e9dbdc91b857fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"test\">test</div>
";
    }

    public function getTemplateName()
    {
        return "FolinusBaseBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
