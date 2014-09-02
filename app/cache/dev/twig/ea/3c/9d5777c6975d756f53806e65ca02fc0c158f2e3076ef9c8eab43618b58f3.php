<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_ea3c9d5777c6975d756f53806e65ca02fc0c158f2e3076ef9c8eab43618b58f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Web Configurator Bundle";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 327,  308 => 287,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  746 => 478,  710 => 475,  698 => 471,  682 => 467,  679 => 466,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  532 => 410,  529 => 409,  527 => 408,  389 => 160,  334 => 141,  276 => 111,  255 => 101,  431 => 189,  348 => 140,  207 => 75,  170 => 84,  406 => 158,  373 => 156,  364 => 139,  359 => 138,  155 => 47,  318 => 111,  279 => 104,  237 => 86,  694 => 470,  685 => 406,  680 => 403,  668 => 395,  654 => 389,  647 => 382,  643 => 381,  633 => 377,  617 => 367,  609 => 362,  599 => 355,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 414,  550 => 326,  531 => 312,  518 => 307,  514 => 306,  509 => 304,  466 => 280,  445 => 267,  443 => 261,  439 => 195,  429 => 188,  424 => 254,  422 => 184,  383 => 224,  366 => 140,  331 => 140,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 479,  740 => 188,  735 => 187,  727 => 476,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 473,  699 => 235,  693 => 232,  690 => 469,  688 => 230,  683 => 227,  677 => 465,  674 => 223,  672 => 222,  664 => 218,  658 => 391,  638 => 213,  632 => 211,  627 => 374,  587 => 200,  582 => 198,  578 => 196,  576 => 195,  569 => 183,  566 => 182,  526 => 310,  523 => 156,  506 => 151,  495 => 148,  491 => 147,  481 => 290,  475 => 141,  468 => 140,  459 => 137,  450 => 135,  447 => 134,  434 => 130,  420 => 249,  417 => 126,  396 => 234,  376 => 119,  363 => 153,  328 => 139,  325 => 129,  317 => 70,  303 => 106,  261 => 91,  194 => 68,  713 => 270,  707 => 211,  704 => 210,  702 => 472,  696 => 206,  686 => 468,  681 => 203,  666 => 200,  663 => 393,  655 => 215,  652 => 214,  635 => 191,  613 => 204,  605 => 201,  602 => 185,  590 => 178,  585 => 347,  568 => 175,  551 => 174,  547 => 173,  512 => 152,  507 => 157,  505 => 156,  498 => 149,  483 => 144,  473 => 150,  465 => 139,  462 => 202,  456 => 273,  451 => 141,  428 => 129,  425 => 128,  414 => 125,  403 => 157,  400 => 161,  349 => 133,  342 => 137,  339 => 100,  326 => 138,  311 => 89,  263 => 95,  191 => 67,  335 => 134,  259 => 103,  572 => 193,  561 => 174,  557 => 330,  549 => 411,  538 => 319,  521 => 162,  511 => 160,  508 => 159,  504 => 302,  499 => 156,  487 => 152,  477 => 150,  467 => 148,  463 => 133,  446 => 197,  441 => 196,  410 => 96,  392 => 83,  388 => 124,  380 => 158,  369 => 141,  324 => 113,  307 => 128,  291 => 102,  275 => 105,  226 => 84,  205 => 59,  352 => 135,  340 => 145,  332 => 116,  330 => 87,  320 => 127,  313 => 82,  310 => 81,  302 => 125,  287 => 72,  280 => 131,  249 => 67,  223 => 58,  216 => 79,  188 => 90,  23 => 3,  12 => 34,  58 => 13,  358 => 151,  351 => 120,  338 => 135,  327 => 114,  319 => 71,  315 => 131,  301 => 111,  299 => 112,  293 => 120,  289 => 113,  277 => 100,  271 => 55,  262 => 98,  251 => 101,  148 => 64,  253 => 100,  233 => 87,  212 => 78,  198 => 69,  192 => 88,  185 => 74,  165 => 83,  113 => 40,  97 => 41,  213 => 78,  239 => 83,  236 => 109,  232 => 88,  84 => 27,  124 => 31,  118 => 49,  76 => 28,  70 => 26,  184 => 63,  202 => 94,  195 => 68,  186 => 82,  114 => 71,  210 => 77,  153 => 77,  20 => 1,  502 => 155,  492 => 295,  449 => 198,  442 => 350,  426 => 102,  401 => 172,  394 => 168,  377 => 115,  370 => 100,  357 => 123,  353 => 328,  346 => 196,  329 => 131,  286 => 112,  282 => 79,  274 => 110,  270 => 102,  34 => 4,  242 => 113,  231 => 83,  200 => 72,  180 => 62,  174 => 65,  172 => 57,  160 => 76,  129 => 57,  127 => 35,  110 => 38,  265 => 105,  245 => 173,  152 => 46,  995 => 544,  989 => 448,  983 => 197,  977 => 121,  971 => 86,  964 => 24,  960 => 23,  955 => 21,  951 => 20,  947 => 19,  943 => 18,  939 => 17,  935 => 16,  931 => 15,  928 => 14,  924 => 12,  921 => 11,  861 => 10,  781 => 9,  775 => 485,  771 => 4,  768 => 3,  754 => 545,  752 => 544,  737 => 532,  730 => 186,  700 => 501,  678 => 398,  669 => 221,  660 => 464,  653 => 466,  645 => 461,  637 => 378,  628 => 449,  624 => 448,  618 => 190,  608 => 202,  598 => 432,  592 => 351,  584 => 199,  570 => 413,  562 => 408,  544 => 172,  534 => 386,  517 => 404,  503 => 361,  493 => 354,  486 => 292,  478 => 142,  470 => 135,  460 => 132,  452 => 272,  421 => 303,  411 => 296,  405 => 325,  390 => 150,  382 => 93,  356 => 262,  345 => 147,  321 => 135,  290 => 119,  281 => 114,  267 => 101,  256 => 96,  248 => 97,  167 => 71,  146 => 49,  65 => 17,  386 => 159,  378 => 157,  361 => 152,  354 => 123,  344 => 119,  333 => 117,  323 => 128,  316 => 121,  306 => 286,  304 => 174,  295 => 88,  292 => 135,  272 => 158,  260 => 124,  257 => 149,  250 => 93,  244 => 85,  234 => 80,  222 => 83,  218 => 79,  215 => 74,  211 => 81,  197 => 69,  175 => 58,  150 => 55,  126 => 42,  297 => 104,  266 => 95,  225 => 77,  181 => 65,  178 => 59,  137 => 46,  104 => 37,  90 => 37,  81 => 23,  77 => 25,  646 => 414,  641 => 413,  636 => 412,  631 => 411,  626 => 410,  621 => 206,  616 => 407,  611 => 203,  606 => 449,  601 => 446,  596 => 181,  591 => 402,  548 => 165,  545 => 414,  542 => 321,  539 => 162,  536 => 161,  533 => 169,  530 => 158,  528 => 167,  525 => 166,  522 => 406,  519 => 405,  516 => 161,  513 => 403,  510 => 158,  494 => 388,  484 => 381,  433 => 339,  419 => 98,  415 => 180,  408 => 176,  395 => 84,  391 => 312,  371 => 156,  367 => 339,  347 => 102,  343 => 146,  336 => 126,  300 => 105,  296 => 121,  288 => 118,  284 => 106,  228 => 78,  206 => 71,  190 => 76,  161 => 63,  134 => 39,  100 => 36,  53 => 11,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 131,  453 => 199,  444 => 132,  440 => 343,  437 => 131,  435 => 258,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 170,  398 => 119,  393 => 158,  387 => 164,  384 => 147,  381 => 121,  379 => 119,  374 => 114,  368 => 131,  365 => 141,  362 => 110,  360 => 293,  355 => 329,  341 => 118,  337 => 249,  322 => 275,  314 => 99,  312 => 130,  309 => 129,  305 => 115,  298 => 120,  294 => 90,  285 => 84,  283 => 115,  278 => 98,  268 => 127,  264 => 72,  258 => 94,  252 => 88,  247 => 66,  241 => 93,  229 => 87,  220 => 81,  214 => 99,  177 => 61,  169 => 57,  140 => 28,  132 => 59,  128 => 58,  107 => 37,  61 => 23,  273 => 96,  269 => 107,  254 => 68,  243 => 92,  240 => 88,  238 => 139,  235 => 89,  230 => 106,  227 => 86,  224 => 81,  221 => 75,  219 => 101,  217 => 79,  208 => 76,  204 => 78,  179 => 66,  159 => 70,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 23,  63 => 21,  59 => 22,  93 => 38,  88 => 30,  78 => 24,  38 => 7,  94 => 21,  89 => 30,  85 => 23,  68 => 12,  56 => 16,  87 => 33,  21 => 2,  26 => 3,  75 => 28,  67 => 18,  46 => 14,  27 => 7,  44 => 11,  31 => 3,  28 => 3,  201 => 72,  196 => 92,  183 => 121,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 45,  142 => 61,  138 => 56,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 34,  62 => 16,  49 => 12,  24 => 2,  25 => 35,  19 => 1,  79 => 29,  72 => 21,  69 => 26,  47 => 9,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 41,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 40,  111 => 47,  108 => 47,  101 => 33,  98 => 34,  96 => 35,  83 => 30,  74 => 22,  66 => 25,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 96,  203 => 73,  199 => 93,  193 => 51,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 67,  149 => 50,  147 => 75,  144 => 42,  141 => 73,  133 => 49,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 39,  109 => 52,  106 => 51,  103 => 46,  99 => 23,  95 => 39,  92 => 31,  86 => 43,  82 => 26,  80 => 29,  73 => 23,  64 => 11,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 11,  42 => 8,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
