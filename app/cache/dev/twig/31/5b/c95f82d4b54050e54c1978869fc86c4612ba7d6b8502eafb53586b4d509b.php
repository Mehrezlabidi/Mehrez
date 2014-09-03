<?php

/* MyAppEspritBundle:Mail:email.html.twig */
class __TwigTemplate_315bc95f82d4b54050e54c1978869fc86c4612ba7d6b8502eafb53586b4d509b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " 
<html>
";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "<body>
<div style=\"padding: 100px 50px 10px 400px;position:relative; top:-20px; \">   
<form class=\"form\"> 
   
    <p> 
        <input type=\"text\" name=\"name\" id=\"name\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "\" /> 
        <label for=\"name\">Name</label> 
    </p> 
   
    <p> 
        <input type=\"text\" name=\"email\" id=\"email\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "\"  /> 
        <label for=\"email\">E-mail</label> 
    </p> 
   
    <p> 
        <input type=\"text\" name=\"web\" id=\"web\" /> 
        <label for=\"web\">Website</label> 
    </p> 
   
    <p> 
        <textarea name=\"text\"  value=\"\"  ></textarea> 
    </p> 
    <tr>
             
                  <p> 
                     <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_sendmail");
        echo "\">
           <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/send-button.png"), "html", null, true);
        echo "\" alt=\"\" width=\"100\" height=\"50\" />
                     </a>
                 </p>
             
              <!--
                 <button type=\"reset\"> 
                     <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/button-reset.png"), "html", null, true);
        echo "\" alt=\"\" width=\"80\" height=\"30\" />
                 </button>-->
               
    </tr>
</form>
</div>   


</body>
</html>";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "  <title>  Home </title>
    <meta charset=\"utf-8\">
<link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" /> 

 <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/cssmail.css"), "html", null, true);
        echo "\"/> 

  ";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Mail:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 8,  93 => 6,  89 => 4,  86 => 3,  72 => 43,  63 => 37,  59 => 36,  41 => 21,  33 => 16,  26 => 11,  24 => 3,  20 => 1,);
    }
}
