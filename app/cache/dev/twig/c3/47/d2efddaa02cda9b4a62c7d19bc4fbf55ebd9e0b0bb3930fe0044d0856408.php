<?php

/* MyAppEspritBundle:Role:show.html.twig */
class __TwigTemplate_c347d2efddaa02cda9b4a62c7d19bc4fbf55ebd9e0b0bb3930fe0044d0856408 extends Twig_Template
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
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" /> 
    <title>Liste Role </title>
      <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/show.css"), "html", null, true);
        echo "\"/> 

</head>

<body>
    <div style=\"padding: 120px 50px 0 10px;font:20px/17px Georgia, Garamond, Serif;\">
       
<center >  
                      
";
        // line 17
        if ((twig_length_filter($this->env, (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role"))) > 0)) {
            // line 18
            echo "<table class=\"bordered\" >
    <thead>

    <tr>
        <th>#</th>              
        <th>Permission</th>
        
    </tr>
    </thead>
   
     ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 29
                echo "     <tr>
         <th>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "id"), "html", null, true);
                echo "</th> 
        
         
          ";
                // line 33
                if (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "permission") == 1)) {
                    // line 34
                    echo "          <td><b>access</b></td>
          ";
                } else {
                    // line 36
                    echo "          <td><div id=\"Produit1\"> denied</div></td>
          ";
                }
                // line 38
                echo "          
        <td><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_role_delete", array("id" => $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/delete.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>
        <td><a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_role_edit", array("id" => $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "id"))), "html", null, true);
                echo "\">  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/update.png"), "html", null, true);
                echo "\" alt=\"\" />  </a></td>

          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "         ";
        } else {
            // line 44
            echo "         <div style=\"font:38px/15px Georgia, Garamond, Serif;\">  
             
             <h2><p> (  rien   &agrave;   afficher )</p></h2> </div>

         ";
        }
        // line 48
        echo " 
    </tr>        

</table>    
</div></center>
    </div>
<center><h2><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_role_new");
        echo " \" style=\"text-decoration:none\">
       <div style=\"font:38px/15px Georgia, Garamond, Serif;\">        
            ajouter r&ocirc;le
        </div>
        
        </a></h2></center>
</body>
</html>
 
   ";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Role:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 54,  76 => 36,  70 => 33,  184 => 132,  202 => 98,  195 => 96,  186 => 90,  114 => 60,  153 => 100,  155 => 37,  20 => 1,  527 => 417,  471 => 367,  452 => 354,  445 => 350,  433 => 341,  429 => 340,  422 => 336,  404 => 324,  397 => 320,  380 => 309,  373 => 305,  356 => 294,  332 => 279,  289 => 242,  277 => 236,  213 => 184,  58 => 19,  34 => 7,  231 => 109,  200 => 91,  180 => 86,  174 => 84,  172 => 81,  129 => 66,  127 => 84,  110 => 48,  265 => 190,  245 => 173,  152 => 76,  1034 => 544,  1028 => 448,  1022 => 197,  1016 => 121,  1010 => 86,  1003 => 24,  999 => 23,  994 => 21,  990 => 20,  986 => 19,  982 => 18,  978 => 17,  974 => 16,  970 => 15,  967 => 14,  963 => 12,  960 => 11,  875 => 10,  785 => 9,  779 => 6,  775 => 4,  772 => 3,  758 => 545,  756 => 544,  741 => 532,  734 => 528,  704 => 501,  682 => 482,  673 => 476,  657 => 466,  641 => 456,  632 => 449,  628 => 448,  625 => 447,  622 => 446,  612 => 439,  602 => 432,  596 => 429,  588 => 424,  574 => 413,  566 => 408,  538 => 386,  521 => 372,  497 => 354,  490 => 350,  482 => 345,  464 => 333,  441 => 316,  425 => 303,  394 => 284,  349 => 290,  325 => 275,  310 => 224,  301 => 218,  271 => 197,  242 => 112,  232 => 170,  210 => 100,  160 => 79,  146 => 31,  84 => 62,  65 => 53,  386 => 279,  378 => 274,  361 => 124,  354 => 123,  344 => 117,  333 => 115,  323 => 112,  316 => 111,  306 => 108,  304 => 107,  295 => 105,  292 => 103,  272 => 97,  260 => 189,  257 => 92,  250 => 90,  244 => 89,  234 => 110,  222 => 81,  218 => 162,  215 => 160,  211 => 77,  197 => 68,  175 => 60,  150 => 75,  126 => 76,  297 => 106,  266 => 95,  225 => 166,  181 => 118,  178 => 84,  137 => 25,  104 => 55,  90 => 53,  81 => 38,  77 => 37,  669 => 428,  664 => 470,  659 => 426,  654 => 425,  649 => 461,  644 => 423,  639 => 421,  634 => 420,  629 => 419,  624 => 418,  619 => 417,  614 => 416,  571 => 429,  568 => 428,  565 => 427,  562 => 426,  559 => 425,  556 => 424,  553 => 423,  551 => 422,  548 => 393,  545 => 420,  542 => 419,  539 => 418,  536 => 417,  533 => 416,  517 => 410,  507 => 361,  467 => 358,  463 => 357,  456 => 355,  443 => 343,  439 => 342,  432 => 338,  419 => 328,  415 => 296,  408 => 325,  395 => 313,  391 => 312,  371 => 270,  367 => 297,  347 => 119,  343 => 282,  336 => 280,  300 => 245,  296 => 218,  288 => 239,  284 => 101,  228 => 188,  206 => 144,  190 => 131,  161 => 56,  134 => 85,  100 => 43,  53 => 19,  480 => 162,  474 => 340,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 293,  407 => 131,  402 => 289,  398 => 129,  393 => 126,  387 => 122,  384 => 310,  381 => 120,  379 => 119,  374 => 116,  368 => 131,  365 => 111,  362 => 110,  360 => 295,  355 => 106,  341 => 249,  337 => 116,  322 => 101,  314 => 99,  312 => 110,  309 => 97,  305 => 95,  298 => 91,  294 => 214,  285 => 241,  283 => 88,  278 => 207,  268 => 85,  264 => 84,  258 => 81,  252 => 184,  247 => 179,  241 => 176,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 80,  140 => 50,  132 => 100,  128 => 49,  107 => 36,  61 => 29,  273 => 235,  269 => 96,  254 => 92,  243 => 88,  240 => 88,  238 => 85,  235 => 74,  230 => 82,  227 => 108,  224 => 155,  221 => 77,  219 => 103,  217 => 185,  208 => 142,  204 => 72,  179 => 118,  159 => 61,  143 => 97,  135 => 67,  119 => 61,  102 => 37,  71 => 54,  67 => 29,  63 => 28,  59 => 14,  38 => 12,  94 => 48,  89 => 40,  85 => 29,  75 => 17,  68 => 35,  56 => 26,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 35,  78 => 43,  46 => 21,  27 => 2,  44 => 11,  31 => 8,  28 => 4,  201 => 92,  196 => 90,  183 => 87,  171 => 50,  166 => 81,  163 => 62,  158 => 77,  156 => 66,  151 => 96,  142 => 59,  138 => 64,  136 => 56,  121 => 75,  117 => 44,  105 => 65,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 34,  69 => 23,  47 => 9,  40 => 14,  37 => 10,  22 => 2,  246 => 174,  157 => 56,  145 => 46,  139 => 45,  131 => 82,  123 => 47,  120 => 94,  115 => 70,  111 => 37,  108 => 56,  101 => 59,  98 => 52,  96 => 31,  83 => 39,  74 => 14,  66 => 34,  55 => 15,  52 => 21,  50 => 44,  43 => 17,  41 => 10,  35 => 5,  32 => 4,  29 => 3,  209 => 95,  203 => 92,  199 => 97,  193 => 73,  189 => 88,  187 => 84,  182 => 119,  176 => 64,  173 => 122,  168 => 72,  164 => 115,  162 => 104,  154 => 76,  149 => 51,  147 => 58,  144 => 72,  141 => 48,  133 => 63,  130 => 81,  125 => 44,  122 => 74,  116 => 58,  112 => 49,  109 => 59,  106 => 47,  103 => 44,  99 => 50,  95 => 28,  92 => 42,  86 => 46,  82 => 44,  80 => 38,  73 => 36,  64 => 30,  60 => 28,  57 => 28,  54 => 26,  51 => 14,  48 => 13,  45 => 18,  42 => 19,  39 => 8,  36 => 18,  33 => 5,  30 => 7,);
    }
}
