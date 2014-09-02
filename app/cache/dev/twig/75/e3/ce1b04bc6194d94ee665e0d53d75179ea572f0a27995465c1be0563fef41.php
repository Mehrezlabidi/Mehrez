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
            if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id") == $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "id"))) {
                // line 8
                echo "
</br>
  <ul>
    <li>&nbsp;&nbsp;&nbsp;";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom"), "html", null, true);
                echo "</li></br>  
    <li><center> ";
                // line 12
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d/m/Y"), "html", null, true);
                echo "</center></li> 
  </ul>
 </br>
  
    &nbsp;&nbsp;&nbsp;
    
  ";
                // line 18
                if ((!(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image")))) {
                    // line 19
                    echo "        <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "html", null, true);
                    echo "\" alt=\"\" width=\"120\" height=\"120\" class=\"img-border\">
  ";
                }
                // line 21
                echo "  ";
                if ((null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"))) {
                    // line 22
                    echo "        <img src=\"\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "html", null, true);
                    echo "\"alt=\"\" width=\"120\" height=\"120\" class=\"img-border\" />
  ";
                }
                // line 23
                echo "  
   
    </br></br>
    &nbsp;&nbsp;&nbsp;";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "texte"), "html", null, true);
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
        return array (  34 => 7,  242 => 112,  231 => 109,  200 => 91,  180 => 86,  174 => 84,  172 => 83,  160 => 79,  129 => 66,  127 => 65,  110 => 57,  265 => 190,  245 => 173,  152 => 97,  995 => 544,  989 => 448,  983 => 197,  977 => 121,  971 => 86,  964 => 24,  960 => 23,  955 => 21,  951 => 20,  947 => 19,  943 => 18,  939 => 17,  935 => 16,  931 => 15,  928 => 14,  924 => 12,  921 => 11,  861 => 10,  781 => 9,  775 => 6,  771 => 4,  768 => 3,  754 => 545,  752 => 544,  737 => 532,  730 => 528,  700 => 501,  678 => 482,  669 => 476,  660 => 470,  653 => 466,  645 => 461,  637 => 456,  628 => 449,  624 => 448,  618 => 446,  608 => 439,  598 => 432,  592 => 429,  584 => 424,  570 => 413,  562 => 408,  544 => 393,  534 => 386,  517 => 372,  503 => 361,  493 => 354,  486 => 350,  478 => 345,  470 => 340,  460 => 333,  452 => 328,  421 => 303,  411 => 296,  405 => 293,  390 => 284,  382 => 279,  356 => 262,  345 => 254,  321 => 236,  290 => 214,  281 => 208,  267 => 197,  256 => 189,  248 => 184,  167 => 121,  146 => 73,  65 => 21,  386 => 135,  378 => 133,  361 => 124,  354 => 123,  344 => 117,  333 => 115,  323 => 112,  316 => 111,  306 => 224,  304 => 107,  295 => 105,  292 => 103,  272 => 97,  260 => 93,  257 => 92,  250 => 90,  244 => 89,  234 => 110,  222 => 81,  218 => 79,  215 => 78,  211 => 77,  197 => 68,  175 => 60,  150 => 75,  126 => 43,  297 => 218,  266 => 95,  225 => 156,  181 => 118,  178 => 117,  137 => 85,  104 => 46,  90 => 50,  81 => 38,  77 => 37,  646 => 414,  641 => 413,  636 => 412,  631 => 411,  626 => 410,  621 => 447,  616 => 407,  611 => 406,  606 => 405,  601 => 404,  596 => 403,  591 => 402,  548 => 415,  545 => 414,  542 => 413,  539 => 412,  536 => 411,  533 => 410,  530 => 409,  528 => 408,  525 => 407,  522 => 406,  519 => 405,  516 => 404,  513 => 403,  510 => 402,  494 => 388,  484 => 381,  433 => 339,  419 => 328,  415 => 327,  408 => 323,  395 => 313,  391 => 312,  371 => 132,  367 => 270,  347 => 119,  343 => 282,  336 => 278,  300 => 245,  296 => 218,  288 => 239,  284 => 101,  228 => 170,  206 => 157,  190 => 66,  161 => 56,  134 => 85,  100 => 77,  53 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 344,  440 => 343,  437 => 316,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 289,  393 => 126,  387 => 122,  384 => 308,  381 => 120,  379 => 119,  374 => 274,  368 => 131,  365 => 111,  362 => 110,  360 => 293,  355 => 106,  341 => 105,  337 => 249,  322 => 101,  314 => 99,  312 => 110,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 207,  268 => 85,  264 => 84,  258 => 81,  252 => 91,  247 => 179,  241 => 77,  229 => 73,  220 => 70,  214 => 162,  177 => 65,  169 => 82,  140 => 50,  132 => 54,  128 => 100,  107 => 36,  61 => 52,  273 => 96,  269 => 198,  254 => 92,  243 => 88,  240 => 88,  238 => 177,  235 => 74,  230 => 82,  227 => 108,  224 => 155,  221 => 166,  219 => 103,  217 => 75,  208 => 142,  204 => 72,  179 => 118,  159 => 61,  143 => 56,  135 => 67,  119 => 59,  102 => 37,  71 => 19,  63 => 28,  59 => 19,  93 => 28,  88 => 35,  78 => 32,  38 => 6,  94 => 51,  89 => 52,  85 => 34,  68 => 22,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  75 => 17,  67 => 29,  46 => 21,  27 => 4,  44 => 11,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 87,  171 => 59,  166 => 81,  163 => 62,  158 => 78,  156 => 113,  151 => 96,  142 => 108,  138 => 68,  136 => 56,  121 => 75,  117 => 44,  105 => 38,  91 => 27,  62 => 23,  49 => 7,  24 => 4,  25 => 5,  19 => 1,  79 => 26,  72 => 31,  69 => 54,  47 => 9,  40 => 14,  37 => 10,  22 => 1,  246 => 174,  157 => 56,  145 => 46,  139 => 45,  131 => 82,  123 => 47,  120 => 74,  115 => 50,  111 => 86,  108 => 56,  101 => 61,  98 => 52,  96 => 31,  83 => 48,  74 => 23,  66 => 34,  55 => 15,  52 => 21,  50 => 44,  43 => 6,  41 => 10,  35 => 5,  32 => 4,  29 => 3,  209 => 95,  203 => 92,  199 => 67,  193 => 73,  189 => 88,  187 => 84,  182 => 119,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 104,  154 => 76,  149 => 51,  147 => 58,  144 => 72,  141 => 48,  133 => 102,  130 => 81,  125 => 44,  122 => 76,  116 => 58,  112 => 49,  109 => 66,  106 => 47,  103 => 54,  99 => 31,  95 => 74,  92 => 42,  86 => 28,  82 => 22,  80 => 62,  73 => 36,  64 => 17,  60 => 30,  57 => 18,  54 => 26,  51 => 14,  48 => 12,  45 => 11,  42 => 19,  39 => 8,  36 => 18,  33 => 5,  30 => 7,);
    }
}
