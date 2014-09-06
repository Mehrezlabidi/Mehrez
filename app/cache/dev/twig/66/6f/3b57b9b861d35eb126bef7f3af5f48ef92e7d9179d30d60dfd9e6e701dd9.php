<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_666f3b57b9b861d35eb126bef7f3af5f48ef92e7d9179d30d60dfd9e6e701dd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 79,  406 => 158,  401 => 156,  364 => 139,  359 => 138,  290 => 106,  318 => 145,  279 => 104,  256 => 121,  237 => 86,  694 => 412,  685 => 406,  680 => 403,  678 => 398,  668 => 395,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  617 => 367,  609 => 362,  599 => 355,  581 => 345,  579 => 342,  577 => 341,  567 => 337,  550 => 326,  531 => 312,  518 => 307,  514 => 306,  509 => 304,  466 => 280,  424 => 254,  383 => 224,  366 => 140,  331 => 187,  267 => 94,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  658 => 391,  638 => 213,  627 => 374,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  569 => 183,  526 => 310,  523 => 156,  506 => 151,  495 => 148,  491 => 147,  481 => 290,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  450 => 135,  447 => 134,  434 => 130,  420 => 249,  417 => 126,  396 => 234,  390 => 150,  376 => 119,  363 => 114,  345 => 97,  328 => 124,  317 => 70,  303 => 140,  261 => 91,  194 => 87,  713 => 270,  707 => 211,  702 => 236,  696 => 206,  686 => 205,  681 => 203,  666 => 200,  663 => 393,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 204,  608 => 202,  605 => 201,  592 => 351,  590 => 178,  585 => 347,  547 => 173,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  505 => 156,  502 => 155,  498 => 149,  486 => 292,  483 => 144,  473 => 150,  465 => 139,  462 => 138,  451 => 141,  428 => 129,  414 => 125,  403 => 157,  400 => 161,  342 => 129,  339 => 100,  329 => 95,  326 => 185,  311 => 89,  286 => 133,  274 => 129,  263 => 125,  191 => 69,  335 => 188,  321 => 123,  259 => 70,  572 => 193,  561 => 174,  557 => 330,  549 => 174,  544 => 172,  530 => 158,  511 => 160,  508 => 159,  504 => 302,  499 => 156,  492 => 295,  487 => 152,  477 => 150,  470 => 135,  460 => 132,  449 => 123,  446 => 139,  426 => 102,  410 => 96,  392 => 83,  388 => 124,  382 => 93,  377 => 115,  369 => 141,  357 => 125,  324 => 92,  307 => 66,  291 => 169,  282 => 79,  275 => 103,  226 => 67,  205 => 59,  370 => 100,  352 => 135,  346 => 196,  340 => 95,  330 => 87,  320 => 84,  313 => 82,  302 => 114,  287 => 72,  280 => 131,  249 => 67,  223 => 58,  216 => 100,  188 => 174,  23 => 3,  12 => 34,  358 => 113,  351 => 135,  338 => 76,  327 => 86,  319 => 71,  315 => 118,  299 => 112,  293 => 109,  281 => 105,  262 => 63,  251 => 101,  248 => 116,  148 => 64,  270 => 4,  253 => 95,  233 => 62,  212 => 74,  198 => 69,  192 => 88,  185 => 86,  165 => 77,  113 => 41,  97 => 63,  167 => 48,  239 => 83,  236 => 109,  124 => 31,  118 => 28,  76 => 57,  70 => 27,  184 => 63,  202 => 77,  195 => 68,  186 => 82,  114 => 71,  153 => 72,  155 => 53,  20 => 1,  527 => 417,  471 => 367,  452 => 272,  445 => 267,  433 => 341,  429 => 255,  422 => 250,  404 => 324,  397 => 320,  380 => 83,  373 => 142,  356 => 294,  332 => 125,  289 => 59,  277 => 100,  213 => 126,  58 => 22,  34 => 5,  231 => 33,  200 => 70,  180 => 62,  174 => 60,  172 => 52,  129 => 57,  127 => 32,  110 => 51,  265 => 126,  245 => 173,  152 => 92,  1034 => 544,  1028 => 448,  1022 => 197,  1016 => 121,  1010 => 86,  1003 => 24,  999 => 23,  994 => 21,  990 => 20,  986 => 19,  982 => 18,  978 => 17,  974 => 16,  970 => 15,  967 => 14,  963 => 12,  960 => 11,  875 => 10,  785 => 9,  779 => 6,  775 => 4,  772 => 3,  758 => 545,  756 => 544,  741 => 532,  734 => 528,  704 => 210,  682 => 482,  673 => 476,  657 => 466,  641 => 456,  632 => 211,  628 => 448,  625 => 447,  622 => 446,  612 => 439,  602 => 185,  596 => 181,  588 => 424,  574 => 413,  566 => 182,  538 => 319,  521 => 162,  497 => 354,  490 => 350,  482 => 345,  464 => 333,  441 => 105,  425 => 128,  394 => 152,  349 => 133,  325 => 73,  310 => 81,  301 => 111,  271 => 55,  242 => 113,  232 => 84,  210 => 75,  160 => 76,  146 => 49,  84 => 32,  65 => 30,  386 => 95,  378 => 144,  361 => 208,  354 => 123,  344 => 97,  333 => 117,  323 => 125,  316 => 121,  306 => 141,  304 => 174,  295 => 88,  292 => 135,  272 => 158,  260 => 124,  257 => 149,  250 => 93,  244 => 85,  234 => 80,  222 => 81,  218 => 162,  215 => 74,  211 => 81,  197 => 90,  175 => 77,  150 => 65,  126 => 42,  297 => 84,  266 => 95,  225 => 77,  181 => 80,  178 => 119,  137 => 46,  104 => 49,  90 => 27,  81 => 25,  77 => 27,  669 => 221,  664 => 218,  659 => 426,  654 => 389,  649 => 461,  644 => 423,  639 => 421,  634 => 420,  629 => 419,  624 => 418,  619 => 417,  614 => 416,  571 => 338,  568 => 175,  565 => 427,  562 => 426,  559 => 425,  556 => 424,  553 => 423,  551 => 174,  548 => 165,  545 => 420,  542 => 321,  539 => 162,  536 => 161,  533 => 169,  517 => 155,  507 => 157,  467 => 148,  463 => 133,  456 => 273,  443 => 261,  439 => 260,  432 => 338,  419 => 98,  415 => 247,  408 => 124,  395 => 84,  391 => 312,  371 => 113,  367 => 131,  347 => 102,  343 => 91,  336 => 126,  300 => 139,  296 => 109,  288 => 107,  284 => 106,  228 => 78,  206 => 71,  190 => 175,  161 => 71,  134 => 59,  100 => 36,  53 => 24,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 131,  453 => 136,  444 => 132,  440 => 148,  437 => 131,  435 => 258,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 170,  398 => 119,  393 => 158,  387 => 122,  384 => 147,  381 => 121,  379 => 119,  374 => 114,  368 => 131,  365 => 141,  362 => 110,  360 => 295,  355 => 136,  341 => 131,  337 => 116,  322 => 101,  314 => 99,  312 => 143,  309 => 117,  305 => 115,  298 => 173,  294 => 214,  285 => 84,  283 => 102,  278 => 207,  268 => 127,  264 => 72,  258 => 81,  252 => 88,  247 => 66,  241 => 84,  229 => 73,  220 => 80,  214 => 99,  177 => 61,  169 => 57,  140 => 28,  132 => 59,  128 => 58,  107 => 24,  61 => 25,  273 => 235,  269 => 100,  254 => 68,  243 => 89,  240 => 88,  238 => 139,  235 => 74,  230 => 106,  227 => 134,  224 => 103,  221 => 75,  219 => 101,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 48,  135 => 35,  119 => 28,  102 => 38,  71 => 27,  67 => 32,  63 => 24,  59 => 28,  38 => 6,  94 => 39,  89 => 33,  85 => 34,  75 => 30,  68 => 31,  56 => 24,  87 => 33,  21 => 11,  26 => 2,  93 => 34,  88 => 60,  78 => 31,  46 => 19,  27 => 4,  44 => 21,  31 => 4,  28 => 3,  201 => 72,  196 => 52,  183 => 121,  171 => 63,  166 => 100,  163 => 49,  158 => 75,  156 => 68,  151 => 45,  142 => 61,  138 => 61,  136 => 60,  121 => 53,  117 => 51,  105 => 27,  91 => 85,  62 => 21,  49 => 13,  24 => 6,  25 => 3,  19 => 1,  79 => 31,  72 => 29,  69 => 33,  47 => 10,  40 => 18,  37 => 16,  22 => 1,  246 => 86,  157 => 41,  145 => 52,  139 => 60,  131 => 48,  123 => 57,  120 => 56,  115 => 50,  111 => 40,  108 => 48,  101 => 73,  98 => 47,  96 => 40,  83 => 82,  74 => 34,  66 => 25,  55 => 21,  52 => 10,  50 => 8,  43 => 7,  41 => 10,  35 => 5,  32 => 11,  29 => 3,  209 => 96,  203 => 93,  199 => 53,  193 => 51,  189 => 64,  187 => 87,  182 => 85,  176 => 82,  173 => 112,  168 => 60,  164 => 72,  162 => 71,  154 => 67,  149 => 50,  147 => 69,  144 => 68,  141 => 67,  133 => 49,  130 => 57,  125 => 45,  122 => 44,  116 => 43,  112 => 52,  109 => 40,  106 => 35,  103 => 46,  99 => 26,  95 => 43,  92 => 34,  86 => 43,  82 => 33,  80 => 33,  73 => 29,  64 => 23,  60 => 22,  57 => 12,  54 => 14,  51 => 24,  48 => 9,  45 => 22,  42 => 8,  39 => 7,  36 => 11,  33 => 5,  30 => 1,);
    }
}
