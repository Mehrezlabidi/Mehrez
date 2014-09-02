<?php

/* TwigBundle:Exception:error500.html.twig */
class __TwigTemplate_dacd3d120a247c96aef0201751e92538e7a2b4c90f57c02cb969e232053595ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo " 
<title> Error ! </title>
<link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" /> 

<div style=\"height:125px;width:750px;padding: 10px 50px 0 10px;position:relative; top:250px;left:400px;
     font:70px/55px Georgia, Garamond, Serif;\">      
            Error 500
            </br></br>
<p style=\"font:20px/15px Georgia, Garamond, Serif; padding: 10px 50px 0 10px;position:relative; top:25px;left:5px;\">( Un article pour une Sous Rub.. )</p>

 
       
        </div>
 ";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  19 => 2,);
    }
}
