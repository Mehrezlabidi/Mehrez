<?php

/* MyAppEspritBundle:Rubrique:show.html.twig */
class __TwigTemplate_d1ee66589cccf79f1997cdbd28c94e1e0997b7bc0a9bb02a2eb1739d3af7cff6 extends Twig_Template
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
    <title>Liste Rub </title>
     <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/show.css"), "html", null, true);
        echo "\"/> 
</head>

<body>
 <div style=\"padding: 120px 50px 0 10px;position:relative; top:-20px;left:-20px; \"> 
     ";
        // line 12
        if ((twig_length_filter($this->env, (isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique"))) > 0)) {
            echo " 
<table class=\"bordered\" >
<thead>

    <tr>
       <th>#</th>              
        <th>Position</th>
        <th>State</th>
        <th>Title</th>
        <th>Menu associé</th>
         <th>Nbr Article  </th>
        <th>Nbr Sub.R  </th>
        
        
    </tr>   
</thead>
</table>  
     ";
        }
        // line 29
        echo " 
</div> 
         ";
        // line 31
        if ((twig_length_filter($this->env, (isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique"))) > 0)) {
            echo "      
   <div style=\"padding: 10px 50px 0 10px;position:relative; top:-20px;left:-70px; \">
 
<center ><div style=\"height:175px;width:750px;border:0px solid #000000;font:20px/17px Georgia, Garamond, Serif;overflow:auto;\">
    
<table class=\"bordered\" >
<thead>

    <tr>
       
    </tr>
    
</thead>  
     
       ";
            // line 45
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")));
            foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
                // line 46
                echo "     <tr>  
       <th>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id", array()), "html", null, true);
                echo "</th> 
      
        <td><b>No  </b>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "position", array()), "html", null, true);
                echo "</td>
          ";
                // line 50
                if (($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "state", array()) == 1)) {
                    // line 51
                    echo "          <td><b>access</b></td>
          ";
                } else {
                    // line 53
                    echo "          <td><div id=\"Produit1\"> denied</div></td>
          ";
                }
                // line 55
                echo "           <td>";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "title", array()), 20, true, "..."), "html", null, true);
                echo "</td>
           <td><b> ";
                // line 56
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "menu", array()), "title", array())), "html", null, true);
                echo "</b></td>
           
           
           
           ";
                // line 61
                echo "           ";
                $context["counter"] = 0;
                echo "          
           ";
                // line 62
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique", array())) > 0)) {
                        // line 63
                        echo "                    ";
                        if (($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique", array()), "id", array()))) {
                            echo " ";
                            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
                            echo "  ";
                        }
                        echo "             
           ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "           <td><b><h1>";
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                echo "</h1></b></td>
             ";
                // line 66
                echo "         
           ";
                // line 67
                $context["counter2"] = 0;
                echo "          
           ";
                // line 68
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")));
                foreach ($context['_seq'] as $context["_key"] => $context["sousrubrique"]) {
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "rubrique", array())) > 0)) {
                        // line 69
                        echo "                    ";
                        if (($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "rubrique", array()), "id", array()))) {
                            echo " ";
                            $context["counter2"] = ((isset($context["counter2"]) ? $context["counter2"] : $this->getContext($context, "counter2")) + 1);
                            echo "  ";
                        }
                        echo "             
           ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousrubrique'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "             <td><b><h1>";
                echo twig_escape_filter($this->env, (isset($context["counter2"]) ? $context["counter2"] : $this->getContext($context, "counter2")), "html", null, true);
                echo "</h1></b></td>     
            ";
                // line 72
                echo "     
            
            
            
        <td><a href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_rubrique_delete", array("id" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id", array()))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/delete.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>
        <td><a href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_rubrique_edit", array("id" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id", array()))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/update.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>
     
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "         ";
        } else {
            // line 81
            echo "          <div style=\"font:38px/15px Georgia, Garamond, Serif;\"> 
              <h2><p> (  rien  &agrave;   afficher )</p></h2> </div>

         ";
        }
        // line 84
        echo " 
    </tr>        
    
 

</table>
    
</div></center>
    </div>
<center><h2><a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_rubrique_new");
        echo " \" style=\"text-decoration:none\">
       <div style=\"font:38px/15px Georgia, Garamond, Serif;\">        
            ajouter rubrique
        </div>
        
        </a></h2></center>
</br></br>
<div style=\"font:38px/15px Georgia, Garamond, Serif;\">
 ";
        // line 101
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 102
            echo "    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "</div>



</body>
</html>";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Rubrique:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 105,  239 => 103,  236 => 102,  232 => 101,  221 => 93,  210 => 84,  204 => 81,  201 => 80,  190 => 77,  184 => 76,  178 => 72,  173 => 71,  159 => 69,  154 => 68,  150 => 67,  147 => 66,  142 => 65,  128 => 63,  123 => 62,  118 => 61,  111 => 56,  106 => 55,  102 => 53,  98 => 51,  96 => 50,  92 => 49,  87 => 47,  84 => 46,  80 => 45,  63 => 31,  59 => 29,  38 => 12,  30 => 7,  25 => 5,  19 => 1,);
    }
}
