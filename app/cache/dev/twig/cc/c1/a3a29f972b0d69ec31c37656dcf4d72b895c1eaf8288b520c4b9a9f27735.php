<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ccc1a3a29f972b0d69ec31c37656dcf4d72b895c1eaf8288b520c4b9a9f27735 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('body', $context, $blocks);
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo " ";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "    
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "  ";
        if (((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) == 500)) {
            // line 12
            echo "    ";
            echo "  
    ";
            // line 13
            $this->env->loadTemplate("TwigBundle:Exception:error500.html.twig")->display($context);
        } elseif (((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) == 404)) {
            // line 15
            echo "    ";
            // line 16
            echo "    ";
            $this->env->loadTemplate("TwigBundle:Exception:error404.html.twig")->display($context);
            // line 17
            echo " ";
        } elseif (((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) == 403)) {
            // line 18
            echo "     ";
            $this->env->loadTemplate("TwigBundle:Exception:error403.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 18,  72 => 17,  69 => 16,  67 => 15,  64 => 13,  60 => 12,  57 => 11,  54 => 10,  49 => 7,  46 => 6,  42 => 4,  39 => 3,  35 => 10,  32 => 9,  30 => 6,  27 => 5,  25 => 3,  22 => 2,);
    }
}
