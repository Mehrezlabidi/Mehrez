<?php

/* MyAppEspritBundle:Menu:show.html.twig */
class __TwigTemplate_cb24fe3ed2de91aa287ebcddb07942ca5d35a94996b1bf6de020f49930d181a9 extends Twig_Template
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
        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" /> 
    <title>Liste menu </title>
     <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/show.css"), "html", null, true);
        echo "\"/> 
</head>

<body>
 <div style=\"padding: 120px 50px 0 10px;position:relative; top:-20px;left:-20px; \"> 
     ";
        // line 12
        if ((twig_length_filter($this->env, (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))) > 0)) {
            echo " 
<table class=\"bordered\" >
<thead>

    <tr>
       <th>#</th>              
       <th>Title</th>
       <th>Position</th>
        <th>Utilisateur</th>
       <th>Nbr Rub  </th>
             
    </tr>   
</thead>
</table>  
     ";
        }
        // line 26
        echo " 
</div> 
         ";
        // line 28
        if ((twig_length_filter($this->env, (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))) > 0)) {
            echo "      
   <div style=\"padding: 10px 50px 0 10px;position:relative; top:-20px;left:-70px; \">
 
<center ><div style=\"height:175px;width:750px;border:0px solid #000000;font:20px/17px Georgia, Garamond, Serif;overflow:auto;\">
    
<table class=\"bordered\" >
<thead>

    <tr>
       
    </tr>
    
</thead>  
   
    
       ";
            // line 43
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 44
                echo "
        <tr>
        <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id"), "html", null, true);
                echo "</th> 
        <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "title")), "html", null, true);
                echo "</td>
        <td>No ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "position"), "html", null, true);
                echo "</td>
        
        <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "utilisateur"), "nom")), "html", null, true);
                echo "</td>
 
";
                // line 55
                echo " 
 
        
          ";
                // line 59
                echo "           ";
                $context["counter"] = 0;
                echo "          
           ";
                // line 60
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")));
                foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "menu")) > 0)) {
                        // line 61
                        echo "                    ";
                        if (($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id") == $this->getAttribute($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "menu"), "id"))) {
                            echo " ";
                            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
                            echo "  ";
                        }
                        echo "             
           ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "            <td><b><h1>";
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                echo "</h1></b></td>
             ";
                // line 64
                echo "   
        
        
        
        
        
        
        
        
        
        
        
        <td><a href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_menu_delete", array("id" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/delete.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>
        <td><a href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_menu_edit", array("id" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/update.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>

             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "         ";
        } else {
            // line 81
            echo "                <div style=\"font:38px/15px Georgia, Garamond, Serif;\"> 
                    <h2><p> (  rien  &agrave;   afficher )</p></h2> </div>

         ";
        }
        // line 84
        echo " 
    </tr>       
    
</table> </div> 
</center>
    </div>
<center><h2><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_menu_new");
        echo "\" style=\"text-decoration:none\"> 
        <div style=\"font:38px/15px Georgia, Garamond, Serif;\">        
            ajouter menu
        </div></a></h2></center>
</br></br>
<div style=\"font:38px/15px Georgia, Garamond, Serif;\">
 ";
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 97
            echo "    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "</div>



</body>
</html>";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Menu:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 100,  202 => 98,  199 => 97,  195 => 96,  186 => 90,  178 => 84,  172 => 81,  169 => 80,  158 => 77,  152 => 76,  138 => 64,  133 => 63,  119 => 61,  114 => 60,  109 => 59,  104 => 55,  99 => 50,  94 => 48,  90 => 47,  86 => 46,  82 => 44,  78 => 43,  60 => 28,  56 => 26,  38 => 12,  30 => 7,  25 => 5,  19 => 1,);
    }
}
