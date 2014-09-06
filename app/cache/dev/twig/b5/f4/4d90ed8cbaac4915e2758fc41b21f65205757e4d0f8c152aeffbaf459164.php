<?php

/* MyAppEspritBundle:Article:lister.html.twig */
class __TwigTemplate_b5f44d90ed8cbaac4915e2758fc41b21f65205757e4d0f8c152aeffbaf459164 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppEspritBundle::layout.html.twig");

        $this->blocks = array(
            'menu_gauche' => array($this, 'block_menu_gauche'),
            'menu_haut' => array($this, 'block_menu_haut'),
            'menu_droite' => array($this, 'block_menu_droite'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppEspritBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_menu_gauche($context, array $blocks = array())
    {
        echo "  
         
 ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            echo " ";
            if (($this->getAttribute($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "menu"), "id") == 2)) {
                // line 19
                echo "  <div id='cssmenu'>  
<ul>
     <li class='active has-sub'><a href='#'>";
                // line 21
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "title"))), "html", null, true);
                echo "</a>            
\t <ul>    
             
             
             
                    ";
                // line 26
                echo "         
               ";
                // line 27
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")));
                foreach ($context['_seq'] as $context["_key"] => $context["sousrubrique"]) {
                    echo "                      
                    ";
                    // line 28
                    if (($this->getAttribute($this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))) {
                        echo "     
                            <li class='has-sub'><a href='#'>";
                        // line 29
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "title")), "html", null, true);
                        echo "</a>
                            
                                   <ul> ";
                        // line 31
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
                        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                            echo " 
                                              ";
                            // line 32
                            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "sousrubrique")) > 0)) {
                                // line 33
                                echo "                                                    ";
                                if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "sousrubrique"), "id") == $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "id"))) {
                                    echo " 
                                                         ";
                                    // line 34
                                    echo "                                                                    
                                                              <li> <a href=\"";
                                    // line 35
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                                    echo "\">";
                                    if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "role"), "id") == 1)) {
                                        echo "<h3>";
                                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom")), "html", null, true);
                                        echo "</h3>";
                                    } else {
                                        echo "<strike>";
                                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom")), "html", null, true);
                                        echo "</strike>";
                                    }
                                    echo "</a></li>                                                                  
                                                          ";
                                    // line 37
                                    echo "                                                     ";
                                }
                                // line 38
                                echo "                                               ";
                            }
                            // line 39
                            echo "                                       ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo " 
\t\t\t\t   </ul>
                            </li>
                    ";
                    }
                    // line 42
                    echo "         
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousrubrique'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo " 
                            
                            
                            
                            
                       ";
                // line 49
                echo "               ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    echo " 
                  ";
                    // line 50
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique")) > 0)) {
                        echo "   
                      ";
                        // line 51
                        if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))) {
                            echo " 
                            
                                 <li>
                                       <a href=\"";
                            // line 54
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                            echo "\">
                                ";
                            // line 55
                            if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "role"), "id") == 1)) {
                                echo "<h3>";
                                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom")), "html", null, true);
                                echo "</h3>  
                                ";
                            } else {
                                // line 56
                                echo "<strike>";
                                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom")), "html", null, true);
                                echo "</strike>";
                            }
                            echo "                              
                                      </a>
                                </li>     
                      ";
                        }
                        // line 59
                        echo "  
                  ";
                    }
                    // line 60
                    echo " 
                
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "  
  
\t </ul>                   
    </li>                
             ";
            }
            // line 66
            echo "  
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</ul>   
    </div>                   
";
    }

    // line 73
    public function block_menu_haut($context, array $blocks = array())
    {
        echo " 

   <ul id=\"menu\"> 
 
           ";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 78
            echo "                       ";
            if (($this->getAttribute($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "menu"), "id") == 1)) {
                // line 79
                echo "

       <li>  <a href=\"#url\">";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "title"))), "html", null, true);
                echo " </a> 
         <ul>
              ";
                // line 84
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")));
                foreach ($context['_seq'] as $context["_key"] => $context["sousrubrique"]) {
                    echo " 
                               ";
                    // line 85
                    if (($this->getAttribute($this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))) {
                        echo " 
                \t        
\t\t        <li>
                            <a href=\"#url\" >";
                        // line 88
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "title")), "html", null, true);
                        echo "</a>
                                  <ul> ";
                        // line 89
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
                        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                            echo " 
                                              ";
                            // line 90
                            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "sousrubrique")) > 0)) {
                                // line 91
                                echo "                                                    ";
                                if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "sousrubrique"), "id") == $this->getAttribute((isset($context["sousrubrique"]) ? $context["sousrubrique"] : $this->getContext($context, "sousrubrique")), "id"))) {
                                    echo " 
                                                         ";
                                    // line 92
                                    echo "                                                                    
                                                              <li><a href=\"";
                                    // line 93
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom")), "html", null, true);
                                    echo "</a></li>
                                                          ";
                                    // line 95
                                    echo "                                                     ";
                                }
                                // line 96
                                echo "                                               ";
                            }
                            // line 97
                            echo "                                       ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo " 
\t\t\t\t   </ul>\t
                        
                        </li>                  
                             ";
                    }
                    // line 101
                    echo " 
                
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousrubrique'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo " 
             ";
                // line 105
                echo "\t     ";
                // line 106
                echo "              ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    echo " 
                         ";
                    // line 107
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique")) > 0)) {
                        // line 108
                        echo "                               ";
                        if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "rubrique"), "id") == $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "id"))) {
                            echo " 
\t\t                          <li>
                                                    <a href=\"";
                            // line 110
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_app_esprit_article_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                            echo "\">
                                           ";
                            // line 111
                            if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "role"), "id") == 1)) {
                                echo "<h3>";
                                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom")), "html", null, true);
                                echo "</h3>  
                                           ";
                            } else {
                                // line 112
                                echo "<strike>";
                                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom")), "html", null, true);
                                echo "</strike>";
                            }
                            echo "                              
                                                                       </a>
                                           </li>                   
                             ";
                        }
                        // line 115
                        echo " 
                        ";
                    }
                    // line 116
                    echo " 
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                echo " 
             ";
                // line 119
                echo "          </ul>
         
         
         </li>
                     ";
            }
            // line 123
            echo "    
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo " 
 \t 
      </ul>                  
";
    }

    // line 131
    public function block_menu_droite($context, array $blocks = array())
    {
        // line 132
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            echo "       
<li class=\"bg_list_un\"><a href=\"#\" style=\"text-decoration:none\">";
            // line 133
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "title")), "html", null, true);
            echo " </a></li>\t\t\t\t\t 
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "           ";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Article:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 135,  378 => 133,  361 => 124,  354 => 123,  344 => 117,  333 => 115,  323 => 112,  316 => 111,  306 => 108,  304 => 107,  295 => 105,  292 => 103,  272 => 97,  260 => 93,  257 => 92,  250 => 90,  244 => 89,  234 => 85,  222 => 81,  218 => 79,  215 => 78,  211 => 77,  197 => 68,  175 => 60,  150 => 54,  126 => 43,  297 => 106,  266 => 95,  225 => 156,  181 => 118,  178 => 117,  137 => 85,  104 => 46,  90 => 41,  81 => 38,  77 => 37,  669 => 428,  664 => 427,  659 => 426,  654 => 425,  649 => 424,  644 => 423,  639 => 421,  634 => 420,  629 => 419,  624 => 418,  619 => 417,  614 => 416,  571 => 429,  568 => 428,  565 => 427,  562 => 426,  559 => 425,  556 => 424,  553 => 423,  551 => 422,  548 => 421,  545 => 420,  542 => 419,  539 => 418,  536 => 417,  533 => 416,  517 => 402,  507 => 395,  467 => 358,  463 => 357,  456 => 353,  443 => 343,  439 => 342,  432 => 338,  419 => 328,  415 => 327,  408 => 323,  395 => 313,  391 => 312,  371 => 132,  367 => 297,  347 => 119,  343 => 282,  336 => 278,  300 => 245,  296 => 244,  288 => 239,  284 => 101,  228 => 188,  206 => 144,  190 => 66,  161 => 56,  134 => 85,  100 => 60,  53 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 308,  381 => 120,  379 => 119,  374 => 116,  368 => 131,  365 => 111,  362 => 110,  360 => 293,  355 => 106,  341 => 105,  337 => 116,  322 => 101,  314 => 99,  312 => 110,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 207,  268 => 85,  264 => 84,  258 => 81,  252 => 91,  247 => 179,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 50,  132 => 54,  128 => 49,  107 => 36,  61 => 32,  273 => 96,  269 => 96,  254 => 92,  243 => 88,  240 => 88,  238 => 85,  235 => 74,  230 => 82,  227 => 84,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 55,  119 => 42,  102 => 37,  71 => 19,  67 => 29,  63 => 28,  59 => 14,  38 => 6,  94 => 28,  89 => 52,  85 => 34,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 35,  78 => 32,  46 => 21,  27 => 4,  44 => 12,  31 => 2,  28 => 4,  201 => 92,  196 => 90,  183 => 62,  171 => 59,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 96,  142 => 59,  138 => 54,  136 => 56,  121 => 75,  117 => 44,  105 => 38,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 31,  69 => 35,  47 => 9,  40 => 14,  37 => 10,  22 => 2,  246 => 174,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 74,  115 => 50,  111 => 37,  108 => 39,  101 => 45,  98 => 44,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 10,  35 => 5,  32 => 4,  29 => 3,  209 => 143,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 55,  149 => 51,  147 => 58,  144 => 51,  141 => 48,  133 => 49,  130 => 81,  125 => 44,  122 => 43,  116 => 41,  112 => 49,  109 => 34,  106 => 47,  103 => 32,  99 => 31,  95 => 28,  92 => 42,  86 => 28,  82 => 22,  80 => 33,  73 => 36,  64 => 17,  60 => 6,  57 => 27,  54 => 26,  51 => 14,  48 => 13,  45 => 11,  42 => 19,  39 => 8,  36 => 18,  33 => 5,  30 => 16,);
    }
}
