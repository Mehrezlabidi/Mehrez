<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_d4d2f74d20040e54ab4d1b55557a449f609ef9bac06233853f8565e9b11bd19e extends Twig_Template
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
            Error 404
            </br></br>
     <p style=\"font:20px/15px Georgia, Garamond, Serif;
        padding: 10px 50px 0 10px;position:relative; top:25px;left:65px;\">( url invalid .. )</p>
        </div>



";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  19 => 2,  75 => 18,  72 => 17,  69 => 16,  67 => 15,  64 => 13,  60 => 12,  57 => 11,  54 => 10,  49 => 7,  46 => 6,  42 => 4,  39 => 3,  35 => 10,  32 => 9,  30 => 6,  27 => 5,  25 => 3,  22 => 2,);
    }
}
