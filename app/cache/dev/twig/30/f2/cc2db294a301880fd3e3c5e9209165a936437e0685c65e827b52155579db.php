<?php

/* MyAppEspritBundle:Actualite:show.html.twig */
class __TwigTemplate_30f2cc2db294a301880fd3e3c5e9209165a936437e0685c65e827b52155579db extends Twig_Template
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
    <title>Liste Actualités</title>
      <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/show.css"), "html", null, true);
        echo "\"/> 

</head>

<body>
    <div style=\"padding: 120px 50px 0 10px;\">
<center ><div style=\"height:150px;width:655px;border:0px solid #ccc;font:10px/15px Georgia, Garamond, Serif;overflow:auto;\">
       ";
        // line 14
        if ((twig_length_filter($this->env, (isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite"))) > 0)) {
            // line 15
            echo "<table class=\"bordered\" >
    
     
    <thead>
      
    <tr>
        <th>#</th>        
        <th>Titre</th>
        <th>Date Insertion</th>
        <th>Description</th>
        <th>Utilisateur associé</th>
        <th>Image</th>
        
    
    </tr>
    </thead>
    
       ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")));
            foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
                echo "  
       
     <tr>
        <th>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "id", array()), "html", null, true);
                echo "</th> 
        <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "titre", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "dateinsertion", array()), "d/m/Y"), "html", null, true);
                echo "</td> <!-- date ici pas converti -->
        <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "description", array()), 20, true, "..."), "html", null, true);
                echo "</td>
       <td><b>No  </b>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "utilisateur", array()), "id", array()), "html", null, true);
                echo "</td>
       
       ";
                // line 41
                if ((!(null === $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "image", array())))) {
                    // line 42
                    echo "        <td><img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "image", array()), "html", null, true);
                    echo "\" alt=\"\" width=\"100\" height=\"100\" class=\"img-border\"></td>
       ";
                }
                // line 44
                echo "        
        ";
                // line 45
                echo " 
        ";
                // line 46
                if ((null === $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "image", array()))) {
                    // line 47
                    echo "         <td> <img src=\"http://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "image", array()), "html", null, true);
                    echo "\"alt=\"\" width=\"100\" height=\"100\" class=\"img-border\" /></td>
        ";
                }
                // line 49
                echo "                      
        <td><a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_actualite_delete", array("id" => $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "id", array()))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/delete.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>
        <td><a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_actualite_edit", array("id" => $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "id", array()))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/update.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>

         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "         ";
        } else {
            // line 55
            echo "     <div style=\"font:38px/15px Georgia, Garamond, Serif;\"> 
         <h2><p> (  rien   &agrave;  afficher )</p></h2> </div>
         ";
        }
        // line 57
        echo " 
    </tr>        
    
 

</table>
  </div> 
</center> </div>
     
 <center><h2><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_actualite_new");
        echo "\" style=\"text-decoration:none\">
      <div style=\"font:38px/15px Georgia, Garamond, Serif;\">ajouter actualit&eacute;</div>
         </a></h2></center>
</body>
</html>
 
   ";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Actualite:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 46,  90 => 41,  81 => 38,  77 => 37,  669 => 428,  664 => 427,  659 => 426,  654 => 425,  649 => 424,  644 => 423,  639 => 421,  634 => 420,  629 => 419,  624 => 418,  619 => 417,  614 => 416,  571 => 429,  568 => 428,  565 => 427,  562 => 426,  559 => 425,  556 => 424,  553 => 423,  551 => 422,  548 => 421,  545 => 420,  542 => 419,  539 => 418,  536 => 417,  533 => 416,  517 => 402,  507 => 395,  467 => 358,  463 => 357,  456 => 353,  443 => 343,  439 => 342,  432 => 338,  419 => 328,  415 => 327,  408 => 323,  395 => 313,  391 => 312,  371 => 298,  367 => 297,  347 => 283,  343 => 282,  336 => 278,  300 => 245,  296 => 244,  288 => 239,  284 => 238,  228 => 188,  206 => 144,  190 => 131,  161 => 106,  134 => 85,  100 => 60,  53 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 308,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 293,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 207,  268 => 85,  264 => 84,  258 => 81,  252 => 209,  247 => 179,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 57,  132 => 54,  128 => 49,  107 => 36,  61 => 32,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 162,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 55,  119 => 42,  102 => 32,  71 => 19,  63 => 15,  59 => 14,  93 => 28,  88 => 6,  78 => 21,  38 => 6,  94 => 28,  89 => 52,  85 => 39,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  75 => 17,  67 => 15,  46 => 7,  27 => 4,  44 => 12,  31 => 2,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 66,  142 => 59,  138 => 54,  136 => 56,  121 => 51,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 7,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 16,  69 => 35,  47 => 9,  40 => 14,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 74,  115 => 50,  111 => 37,  108 => 65,  101 => 45,  98 => 44,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 6,  41 => 10,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 92,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 49,  109 => 34,  106 => 47,  103 => 32,  99 => 31,  95 => 28,  92 => 42,  86 => 28,  82 => 22,  80 => 41,  73 => 36,  64 => 17,  60 => 12,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 11,  42 => 15,  39 => 8,  36 => 5,  33 => 5,  30 => 7,);
    }
}
