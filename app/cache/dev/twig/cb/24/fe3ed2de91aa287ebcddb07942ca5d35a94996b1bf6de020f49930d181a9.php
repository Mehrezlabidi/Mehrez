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
        return array (  202 => 98,  195 => 96,  186 => 90,  114 => 60,  210 => 100,  153 => 100,  20 => 1,  502 => 398,  492 => 391,  449 => 354,  442 => 350,  426 => 340,  401 => 324,  394 => 320,  377 => 309,  370 => 305,  357 => 295,  353 => 294,  346 => 290,  329 => 279,  286 => 242,  282 => 241,  274 => 236,  270 => 235,  34 => 7,  242 => 112,  231 => 109,  200 => 91,  180 => 86,  174 => 84,  172 => 81,  160 => 79,  129 => 66,  127 => 65,  110 => 57,  265 => 190,  245 => 173,  152 => 76,  995 => 544,  989 => 448,  983 => 197,  977 => 121,  971 => 86,  964 => 24,  960 => 23,  955 => 21,  951 => 20,  947 => 19,  943 => 18,  939 => 17,  935 => 16,  931 => 15,  928 => 14,  924 => 12,  921 => 11,  861 => 10,  781 => 9,  775 => 6,  771 => 4,  768 => 3,  754 => 545,  752 => 544,  737 => 532,  730 => 528,  700 => 501,  678 => 482,  669 => 476,  660 => 470,  653 => 466,  645 => 461,  637 => 456,  628 => 449,  624 => 448,  618 => 446,  608 => 439,  598 => 432,  592 => 429,  584 => 424,  570 => 413,  562 => 408,  544 => 393,  534 => 386,  517 => 372,  503 => 361,  493 => 354,  486 => 350,  478 => 345,  470 => 340,  460 => 333,  452 => 328,  421 => 303,  411 => 296,  405 => 325,  390 => 284,  382 => 279,  356 => 262,  345 => 254,  321 => 236,  290 => 214,  281 => 208,  267 => 197,  256 => 189,  248 => 184,  167 => 121,  146 => 73,  65 => 21,  386 => 135,  378 => 133,  361 => 124,  354 => 123,  344 => 117,  333 => 280,  323 => 112,  316 => 111,  306 => 224,  304 => 107,  295 => 105,  292 => 103,  272 => 97,  260 => 93,  257 => 92,  250 => 90,  244 => 89,  234 => 110,  222 => 81,  218 => 79,  215 => 78,  211 => 77,  197 => 68,  175 => 60,  150 => 75,  126 => 76,  297 => 218,  266 => 95,  225 => 156,  181 => 118,  178 => 84,  137 => 85,  104 => 55,  90 => 47,  81 => 38,  77 => 37,  646 => 414,  641 => 413,  636 => 412,  631 => 411,  626 => 410,  621 => 447,  616 => 407,  611 => 406,  606 => 405,  601 => 404,  596 => 403,  591 => 402,  548 => 415,  545 => 414,  542 => 413,  539 => 412,  536 => 411,  533 => 410,  530 => 409,  528 => 408,  525 => 407,  522 => 406,  519 => 405,  516 => 404,  513 => 403,  510 => 402,  494 => 388,  484 => 381,  433 => 339,  419 => 336,  415 => 327,  408 => 323,  395 => 313,  391 => 312,  371 => 132,  367 => 270,  347 => 119,  343 => 282,  336 => 278,  300 => 245,  296 => 218,  288 => 239,  284 => 101,  228 => 170,  206 => 157,  190 => 131,  161 => 56,  134 => 85,  100 => 77,  53 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 344,  440 => 343,  437 => 316,  435 => 146,  430 => 341,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 289,  393 => 126,  387 => 122,  384 => 308,  381 => 310,  379 => 119,  374 => 274,  368 => 131,  365 => 111,  362 => 110,  360 => 293,  355 => 106,  341 => 105,  337 => 249,  322 => 275,  314 => 99,  312 => 110,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 207,  268 => 85,  264 => 84,  258 => 81,  252 => 91,  247 => 179,  241 => 176,  229 => 73,  220 => 70,  214 => 185,  177 => 65,  169 => 80,  140 => 50,  132 => 54,  128 => 100,  107 => 36,  61 => 52,  273 => 96,  269 => 198,  254 => 92,  243 => 88,  240 => 88,  238 => 206,  235 => 74,  230 => 82,  227 => 108,  224 => 155,  221 => 166,  219 => 103,  217 => 75,  208 => 142,  204 => 72,  179 => 118,  159 => 61,  143 => 56,  135 => 67,  119 => 61,  102 => 37,  71 => 19,  63 => 28,  59 => 19,  93 => 28,  88 => 35,  78 => 43,  38 => 12,  94 => 48,  89 => 50,  85 => 34,  68 => 22,  56 => 26,  87 => 25,  21 => 2,  26 => 6,  75 => 17,  67 => 29,  46 => 21,  27 => 2,  44 => 11,  31 => 8,  28 => 2,  201 => 92,  196 => 90,  183 => 87,  171 => 59,  166 => 81,  163 => 62,  158 => 77,  156 => 113,  151 => 96,  142 => 108,  138 => 64,  136 => 56,  121 => 75,  117 => 44,  105 => 38,  91 => 27,  62 => 23,  49 => 7,  24 => 4,  25 => 5,  19 => 1,  79 => 26,  72 => 31,  69 => 54,  47 => 9,  40 => 14,  37 => 10,  22 => 1,  246 => 174,  157 => 56,  145 => 46,  139 => 45,  131 => 82,  123 => 47,  120 => 94,  115 => 70,  111 => 86,  108 => 56,  101 => 59,  98 => 52,  96 => 31,  83 => 48,  74 => 23,  66 => 34,  55 => 15,  52 => 21,  50 => 44,  43 => 6,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  209 => 95,  203 => 92,  199 => 97,  193 => 73,  189 => 88,  187 => 84,  182 => 119,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 104,  154 => 76,  149 => 51,  147 => 58,  144 => 72,  141 => 48,  133 => 63,  130 => 81,  125 => 44,  122 => 74,  116 => 58,  112 => 49,  109 => 59,  106 => 47,  103 => 54,  99 => 50,  95 => 74,  92 => 42,  86 => 46,  82 => 44,  80 => 62,  73 => 36,  64 => 17,  60 => 28,  57 => 18,  54 => 26,  51 => 14,  48 => 12,  45 => 11,  42 => 19,  39 => 8,  36 => 18,  33 => 3,  30 => 7,);
    }
}
