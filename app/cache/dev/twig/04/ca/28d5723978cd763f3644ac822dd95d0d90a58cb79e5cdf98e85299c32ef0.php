<?php

/* MyAppEspritBundle:Mail:contenu.html.twig */
class __TwigTemplate_04ca28d5723978cd763f3644ac822dd95d0d90a58cb79e5cdf98e85299c32ef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppEspritBundle:Mail:email.html.twig");

        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppEspritBundle:Mail:email.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        echo " 

zzzzzzzzzzzz
";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Mail:contenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,);
    }
}
