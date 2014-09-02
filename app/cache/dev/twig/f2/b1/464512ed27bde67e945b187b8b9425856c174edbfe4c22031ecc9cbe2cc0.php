<?php

/* MyAppEspritBundle:Article:show.html.twig */
class __TwigTemplate_f2b1464512ed27bde67e945b187b8b9425856c174edbfe4c22031ecc9cbe2cc0 extends Twig_Template
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
 <title> Liste Article</title>
 <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/show.css"), "html", null, true);
        echo "\"/> 
</head>

<body>
    
<div style=\"padding: 120px 50px 0 10px;position:relative; top:-20px;left:-20px; \">    
    ";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["article"]) ? $context["article"] : $this->getContext($context, "article"))) > 0)) {
            echo " 
<table class=\"bordered\" >
<thead>

    <tr>
        <th>#</th>        
        <th>Texte</th>
        <th>Nom</th>
        <th>Date</th>
       
         <th>Rubrique associé</th>
         <th>Sous Rubrique associé</th>  
        <th>Role associé</th>
         <th>Image</th>
    </tr>   
</thead>
</table>  
     ";
        }
        // line 30
        echo " 
</div> 
    
    
    ";
        // line 34
        if ((twig_length_filter($this->env, (isset($context["article"]) ? $context["article"] : $this->getContext($context, "article"))) > 0)) {
            // line 35
            echo "    <div style=\"padding: 10px 50px 0 10px;position:relative; top:-20px;left:-180px; \">
 
<center ><div style=\"height:125px;width:950px;border:0px solid #000000;font:15px/15px Georgia, Garamond, Serif;overflow:auto; \">
    
<table class=\"bordered\" >
<thead>

    <tr>
       
    </tr>
    
</thead>  
        
       ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                echo "    
     <tr>
         <th>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
                echo "</th> 
         <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "texte"), 20, true, "..."), "html", null, true);
                echo "</td>
         <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom"), "html", null, true);
                echo "</td>
      <!--  <td>article.date</td>  -->
         <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d/m/Y"), "html", null, true);
                echo "</td>
         
           ";
                // line 56
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique")) > 0)) {
                    // line 57
                    echo "           <td><p>";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique"), "title")), "html", null, true);
                    echo "</p></td>    
           ";
                } else {
                    // line 58
                    echo "<td><div id=\"Produit1\"> Aucun</div></td>";
                }
                // line 59
                echo "           
         
         
         
         
         
           ";
                // line 65
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "sousrubrique")) > 0)) {
                    // line 66
                    echo "           <td><p>";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "sousrubrique"), "title")), "html", null, true);
                    echo "</p></td>    
           ";
                } else {
                    // line 67
                    echo "<td><div id=\"Produit1\"> Aucun</div></td>";
                }
                // line 68
                echo "          
             
          
          
          ";
                // line 72
                if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "role"), "id") == 1)) {
                    // line 73
                    echo "          <td><b>access</b></td>
          ";
                } else {
                    // line 75
                    echo "          <td><div id=\"Produit1\"> denied</div></td>
            ";
                }
                // line 76
                echo "                 
        
       ";
                // line 78
                if ((!(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image")))) {
                    // line 79
                    echo "        <td><img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "html", null, true);
                    echo "\" alt=\"\" width=\"100\" height=\"100\" class=\"img-border\"></td>
       ";
                }
                // line 81
                echo "        
        ";
                // line 82
                echo " 
        ";
                // line 83
                if ((null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"))) {
                    // line 84
                    echo "         <td> <img src=\"http://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "html", null, true);
                    echo "\"alt=\"\" width=\"100\" height=\"100\" class=\"img-border\" /></td>
        ";
                }
                // line 86
                echo "               
        <td><a href=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/delete.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>
        <td><a href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/update.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "         ";
        } else {
            // line 92
            echo "              <div style=\"font:38px/15px Georgia, Garamond, Serif;\"> 
                  <h2><p> (  rien   &agrave;   afficher )</p></h2> </div>

         ";
        }
        // line 95
        echo " 
                  
    </tr>            

</table>
  </div> 
</center> </div>
    
 <center><h2><a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_article_new");
        echo "\" style=\"text-decoration:none\">
      <div style=\"font:38px/15px Georgia, Garamond, Serif;\">ajouter article</div>
         </a></h2></center>
</br></br>
<div style=\"font:38px/15px Georgia, Garamond, Serif;\">
 ";
        // line 108
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 109
            echo "    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
";
            // line 110
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "</div>



</body>
</html>";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Article:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 112,  234 => 110,  231 => 109,  227 => 108,  219 => 103,  209 => 95,  203 => 92,  200 => 91,  189 => 88,  183 => 87,  180 => 86,  174 => 84,  172 => 83,  169 => 82,  166 => 81,  160 => 79,  158 => 78,  154 => 76,  150 => 75,  146 => 73,  144 => 72,  138 => 68,  135 => 67,  129 => 66,  127 => 65,  119 => 59,  116 => 58,  110 => 57,  108 => 56,  103 => 54,  98 => 52,  94 => 51,  90 => 50,  83 => 48,  68 => 35,  66 => 34,  60 => 30,  39 => 13,  30 => 7,  25 => 5,  19 => 1,);
    }
}
