<?php

/* MyAppEspritBundle:Article:showbyid.html.twig */
class __TwigTemplate_75e3ce1b04bc6194d94ee665e0d53d75179ea572f0a27995465c1be0563fef41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppEspritBundle:Article:lister.html.twig");

        $this->blocks = array(
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppEspritBundle:Article:lister.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_article($context, array $blocks = array())
    {
        // line 6
        echo "         
 ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()) == $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "id", array()))) {
                // line 8
                echo "
 
  <ul>
    <li>&nbsp;&nbsp;&nbsp;";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom", array()), "html", null, true);
                echo "</li>  
    <li><center> ";
                // line 12
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "d/m/Y"), "html", null, true);
                echo "</center></li> 
  </ul>
  
  
    &nbsp;&nbsp;&nbsp;
    
  ";
                // line 18
                if ((!(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array())))) {
                    // line 19
                    echo "        <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array()), "html", null, true);
                    echo "\" alt=\"\" width=\"120\" height=\"120\" class=\"img-border\">
  ";
                }
                // line 21
                echo "  ";
                if ((null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array()))) {
                    // line 22
                    echo "        <img src=\"\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array()), "html", null, true);
                    echo "\"alt=\"\" width=\"120\" height=\"120\" class=\"img-border\" />
  ";
                }
                // line 23
                echo "  
   
    </br></br>
    &nbsp;&nbsp;&nbsp;";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "texte", array()), "html", null, true);
                echo " 
    
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Article:showbyid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  231 => 109,  200 => 91,  180 => 86,  174 => 84,  172 => 83,  129 => 66,  127 => 65,  110 => 57,  265 => 190,  245 => 173,  152 => 97,  1004 => 544,  998 => 448,  992 => 197,  986 => 121,  980 => 86,  973 => 24,  969 => 23,  964 => 21,  960 => 20,  956 => 19,  952 => 18,  948 => 17,  944 => 16,  940 => 15,  937 => 14,  933 => 12,  930 => 11,  870 => 10,  785 => 9,  779 => 6,  775 => 4,  772 => 3,  758 => 545,  756 => 544,  741 => 532,  734 => 528,  704 => 501,  682 => 482,  673 => 476,  657 => 466,  641 => 456,  632 => 449,  628 => 448,  625 => 447,  622 => 446,  612 => 439,  602 => 432,  596 => 429,  588 => 424,  574 => 413,  566 => 408,  538 => 386,  521 => 372,  497 => 354,  490 => 350,  482 => 345,  464 => 333,  441 => 316,  425 => 303,  394 => 284,  349 => 254,  325 => 236,  310 => 224,  301 => 218,  271 => 197,  242 => 112,  232 => 170,  210 => 157,  160 => 79,  146 => 73,  84 => 62,  65 => 21,  386 => 279,  378 => 274,  361 => 124,  354 => 123,  344 => 117,  333 => 115,  323 => 112,  316 => 111,  306 => 108,  304 => 107,  295 => 105,  292 => 103,  272 => 97,  260 => 189,  257 => 92,  250 => 90,  244 => 89,  234 => 110,  222 => 81,  218 => 162,  215 => 78,  211 => 77,  197 => 68,  175 => 60,  150 => 75,  126 => 43,  297 => 106,  266 => 95,  225 => 166,  181 => 118,  178 => 117,  137 => 102,  104 => 77,  90 => 50,  81 => 38,  77 => 37,  669 => 428,  664 => 470,  659 => 426,  654 => 425,  649 => 461,  644 => 423,  639 => 421,  634 => 420,  629 => 419,  624 => 418,  619 => 417,  614 => 416,  571 => 429,  568 => 428,  565 => 427,  562 => 426,  559 => 425,  556 => 424,  553 => 423,  551 => 422,  548 => 393,  545 => 420,  542 => 419,  539 => 418,  536 => 417,  533 => 416,  517 => 402,  507 => 361,  467 => 358,  463 => 357,  456 => 328,  443 => 343,  439 => 342,  432 => 338,  419 => 328,  415 => 296,  408 => 323,  395 => 313,  391 => 312,  371 => 270,  367 => 297,  347 => 119,  343 => 282,  336 => 278,  300 => 245,  296 => 218,  288 => 239,  284 => 101,  228 => 188,  206 => 144,  190 => 66,  161 => 56,  134 => 85,  100 => 60,  53 => 19,  480 => 162,  474 => 340,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 293,  407 => 131,  402 => 289,  398 => 129,  393 => 126,  387 => 122,  384 => 308,  381 => 120,  379 => 119,  374 => 116,  368 => 131,  365 => 111,  362 => 110,  360 => 262,  355 => 106,  341 => 249,  337 => 116,  322 => 101,  314 => 99,  312 => 110,  309 => 97,  305 => 95,  298 => 91,  294 => 214,  285 => 208,  283 => 88,  278 => 207,  268 => 85,  264 => 84,  258 => 81,  252 => 184,  247 => 179,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 82,  140 => 50,  132 => 100,  128 => 49,  107 => 36,  61 => 52,  273 => 198,  269 => 96,  254 => 92,  243 => 88,  240 => 88,  238 => 85,  235 => 74,  230 => 82,  227 => 108,  224 => 155,  221 => 77,  219 => 103,  217 => 75,  208 => 142,  204 => 72,  179 => 118,  159 => 61,  143 => 56,  135 => 67,  119 => 59,  102 => 37,  71 => 54,  63 => 28,  59 => 19,  93 => 28,  88 => 35,  78 => 32,  38 => 6,  94 => 51,  89 => 52,  85 => 34,  68 => 22,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  75 => 17,  67 => 29,  46 => 21,  27 => 4,  44 => 11,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 87,  171 => 121,  166 => 81,  163 => 62,  158 => 78,  156 => 66,  151 => 96,  142 => 59,  138 => 68,  136 => 56,  121 => 75,  117 => 44,  105 => 38,  91 => 27,  62 => 23,  49 => 7,  24 => 4,  25 => 5,  19 => 1,  79 => 26,  72 => 31,  69 => 35,  47 => 9,  40 => 14,  37 => 10,  22 => 1,  246 => 174,  157 => 56,  145 => 46,  139 => 45,  131 => 82,  123 => 47,  120 => 74,  115 => 86,  111 => 37,  108 => 56,  101 => 61,  98 => 52,  96 => 31,  83 => 48,  74 => 23,  66 => 34,  55 => 15,  52 => 21,  50 => 44,  43 => 6,  41 => 10,  35 => 5,  32 => 4,  29 => 3,  209 => 95,  203 => 92,  199 => 67,  193 => 73,  189 => 88,  187 => 84,  182 => 119,  176 => 64,  173 => 122,  168 => 72,  164 => 59,  162 => 104,  154 => 76,  149 => 51,  147 => 58,  144 => 72,  141 => 48,  133 => 49,  130 => 81,  125 => 44,  122 => 76,  116 => 58,  112 => 49,  109 => 66,  106 => 47,  103 => 54,  99 => 74,  95 => 28,  92 => 42,  86 => 28,  82 => 22,  80 => 33,  73 => 36,  64 => 17,  60 => 30,  57 => 18,  54 => 26,  51 => 14,  48 => 12,  45 => 11,  42 => 19,  39 => 8,  36 => 18,  33 => 5,  30 => 7,);
    }
}
