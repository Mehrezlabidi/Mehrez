<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_7ffe36629b62d6b9c11f462fdbc187c02a04f441ea17c216d33096bc8869809f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
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
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World"));
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World"));
        echo "\">Access the secured area</a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_login");
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 140,  170 => 79,  390 => 150,  369 => 141,  364 => 139,  359 => 138,  328 => 124,  261 => 91,  155 => 53,  194 => 87,  275 => 103,  694 => 412,  685 => 406,  680 => 403,  678 => 398,  658 => 391,  647 => 382,  643 => 381,  633 => 377,  627 => 374,  617 => 367,  609 => 362,  599 => 355,  579 => 342,  567 => 337,  557 => 330,  550 => 326,  531 => 312,  526 => 310,  509 => 304,  504 => 302,  481 => 290,  466 => 280,  422 => 250,  420 => 249,  396 => 234,  835 => 271,  832 => 270,  827 => 265,  820 => 261,  814 => 258,  810 => 256,  808 => 255,  805 => 254,  799 => 252,  797 => 251,  794 => 250,  788 => 248,  786 => 247,  783 => 246,  777 => 244,  766 => 240,  764 => 239,  761 => 238,  754 => 192,  748 => 191,  739 => 188,  729 => 186,  726 => 185,  721 => 184,  718 => 183,  714 => 277,  712 => 270,  705 => 237,  701 => 236,  698 => 235,  692 => 232,  689 => 231,  687 => 230,  676 => 224,  671 => 222,  668 => 395,  651 => 214,  637 => 378,  631 => 211,  626 => 208,  620 => 206,  610 => 203,  607 => 202,  604 => 201,  586 => 200,  583 => 199,  581 => 345,  577 => 341,  575 => 195,  560 => 174,  529 => 158,  522 => 156,  511 => 152,  494 => 148,  485 => 145,  452 => 272,  436 => 131,  433 => 130,  424 => 254,  416 => 126,  399 => 161,  392 => 158,  389 => 125,  383 => 224,  380 => 121,  375 => 119,  331 => 187,  318 => 145,  267 => 94,  256 => 121,  237 => 86,  713 => 214,  707 => 267,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  666 => 200,  663 => 393,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  592 => 351,  590 => 178,  585 => 347,  547 => 165,  530 => 168,  528 => 167,  525 => 157,  516 => 155,  512 => 159,  510 => 158,  498 => 134,  486 => 292,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  446 => 134,  428 => 136,  403 => 157,  400 => 120,  388 => 117,  342 => 129,  339 => 100,  326 => 185,  324 => 73,  311 => 68,  307 => 87,  291 => 169,  191 => 69,  335 => 188,  321 => 123,  259 => 70,  569 => 180,  558 => 178,  554 => 177,  546 => 174,  541 => 163,  535 => 161,  527 => 165,  518 => 307,  514 => 306,  508 => 160,  505 => 151,  501 => 158,  496 => 156,  489 => 154,  484 => 152,  477 => 142,  471 => 149,  458 => 137,  455 => 131,  451 => 141,  448 => 123,  445 => 267,  429 => 255,  418 => 98,  414 => 127,  406 => 158,  385 => 95,  376 => 82,  373 => 142,  366 => 140,  356 => 125,  290 => 106,  279 => 104,  263 => 125,  226 => 32,  205 => 59,  352 => 135,  340 => 95,  332 => 125,  330 => 87,  320 => 84,  313 => 82,  302 => 65,  287 => 108,  280 => 131,  249 => 67,  223 => 58,  216 => 100,  188 => 21,  23 => 3,  12 => 34,  58 => 19,  358 => 106,  351 => 121,  338 => 94,  327 => 74,  319 => 90,  315 => 118,  299 => 112,  293 => 109,  289 => 81,  281 => 105,  277 => 100,  262 => 63,  251 => 101,  248 => 116,  148 => 64,  253 => 95,  233 => 62,  212 => 74,  198 => 69,  192 => 88,  185 => 86,  165 => 77,  113 => 41,  97 => 37,  167 => 48,  213 => 126,  239 => 83,  236 => 109,  124 => 31,  118 => 43,  76 => 17,  70 => 27,  184 => 63,  202 => 278,  195 => 68,  186 => 82,  114 => 71,  153 => 72,  20 => 1,  502 => 155,  492 => 295,  449 => 135,  442 => 350,  426 => 340,  405 => 325,  401 => 156,  377 => 115,  370 => 100,  357 => 113,  353 => 294,  346 => 196,  329 => 95,  286 => 133,  282 => 58,  274 => 129,  270 => 55,  34 => 5,  231 => 109,  200 => 70,  180 => 62,  174 => 60,  172 => 112,  129 => 57,  127 => 28,  110 => 22,  265 => 126,  245 => 173,  152 => 92,  1004 => 544,  998 => 448,  992 => 197,  986 => 121,  980 => 86,  973 => 24,  969 => 23,  964 => 21,  960 => 20,  956 => 19,  952 => 18,  948 => 17,  944 => 16,  940 => 15,  937 => 14,  933 => 12,  930 => 11,  870 => 10,  785 => 9,  779 => 6,  775 => 243,  772 => 242,  758 => 237,  756 => 544,  741 => 532,  734 => 187,  704 => 210,  682 => 227,  673 => 223,  657 => 216,  641 => 456,  632 => 449,  628 => 448,  625 => 447,  622 => 446,  612 => 204,  602 => 185,  596 => 181,  588 => 424,  574 => 413,  566 => 408,  538 => 319,  521 => 372,  497 => 149,  490 => 147,  482 => 144,  464 => 139,  441 => 316,  425 => 135,  394 => 152,  349 => 133,  325 => 236,  310 => 81,  301 => 111,  271 => 76,  242 => 113,  232 => 84,  210 => 75,  160 => 76,  146 => 49,  84 => 29,  65 => 21,  386 => 279,  378 => 144,  361 => 208,  354 => 112,  344 => 97,  333 => 280,  323 => 116,  316 => 121,  306 => 141,  304 => 174,  295 => 88,  292 => 135,  272 => 158,  260 => 124,  257 => 149,  250 => 93,  244 => 85,  234 => 80,  222 => 81,  218 => 29,  215 => 74,  211 => 81,  197 => 90,  175 => 77,  150 => 65,  126 => 42,  297 => 84,  266 => 95,  225 => 77,  181 => 80,  178 => 45,  137 => 46,  104 => 49,  90 => 32,  81 => 25,  77 => 27,  669 => 201,  664 => 470,  659 => 426,  654 => 389,  649 => 461,  644 => 423,  639 => 421,  634 => 420,  629 => 419,  624 => 418,  619 => 417,  614 => 416,  571 => 338,  568 => 183,  565 => 182,  562 => 426,  559 => 425,  556 => 169,  553 => 423,  551 => 174,  548 => 393,  545 => 420,  542 => 321,  539 => 171,  536 => 170,  533 => 169,  517 => 402,  507 => 157,  467 => 140,  463 => 357,  456 => 273,  443 => 261,  439 => 260,  432 => 338,  419 => 127,  415 => 247,  408 => 323,  395 => 159,  391 => 83,  371 => 113,  367 => 99,  347 => 102,  343 => 91,  336 => 126,  300 => 139,  296 => 109,  288 => 107,  284 => 106,  228 => 78,  206 => 71,  190 => 50,  161 => 71,  134 => 59,  100 => 36,  53 => 11,  480 => 143,  474 => 285,  469 => 158,  461 => 138,  457 => 153,  453 => 142,  444 => 149,  440 => 105,  437 => 147,  435 => 258,  430 => 137,  427 => 129,  423 => 128,  413 => 125,  409 => 124,  407 => 242,  402 => 289,  398 => 119,  393 => 126,  387 => 124,  384 => 147,  381 => 93,  379 => 83,  374 => 114,  368 => 115,  365 => 141,  362 => 114,  360 => 127,  355 => 136,  341 => 131,  337 => 76,  322 => 275,  314 => 99,  312 => 143,  309 => 117,  305 => 115,  298 => 173,  294 => 214,  285 => 84,  283 => 102,  278 => 207,  268 => 127,  264 => 72,  258 => 81,  252 => 88,  247 => 66,  241 => 84,  229 => 73,  220 => 80,  214 => 99,  177 => 61,  169 => 57,  140 => 28,  132 => 59,  128 => 49,  107 => 24,  61 => 12,  273 => 198,  269 => 100,  254 => 68,  243 => 89,  240 => 88,  238 => 139,  235 => 35,  230 => 106,  227 => 134,  224 => 103,  221 => 75,  219 => 101,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 48,  135 => 35,  119 => 28,  102 => 17,  71 => 27,  63 => 20,  59 => 13,  93 => 34,  88 => 31,  78 => 26,  38 => 6,  94 => 34,  89 => 33,  85 => 34,  68 => 31,  56 => 11,  87 => 33,  21 => 11,  26 => 9,  75 => 27,  67 => 32,  46 => 19,  27 => 4,  44 => 15,  31 => 3,  28 => 3,  201 => 72,  196 => 52,  183 => 87,  171 => 63,  166 => 100,  163 => 49,  158 => 75,  156 => 68,  151 => 45,  142 => 61,  138 => 61,  136 => 60,  121 => 53,  117 => 19,  105 => 18,  91 => 85,  62 => 21,  49 => 10,  24 => 6,  25 => 3,  19 => 1,  79 => 31,  72 => 37,  69 => 33,  47 => 8,  40 => 6,  37 => 5,  22 => 1,  246 => 86,  157 => 41,  145 => 52,  139 => 60,  131 => 48,  123 => 46,  120 => 20,  115 => 50,  111 => 41,  108 => 19,  101 => 73,  98 => 47,  96 => 40,  83 => 82,  74 => 34,  66 => 25,  55 => 18,  52 => 10,  50 => 8,  43 => 7,  41 => 5,  35 => 5,  32 => 11,  29 => 3,  209 => 96,  203 => 93,  199 => 53,  193 => 177,  189 => 64,  187 => 87,  182 => 85,  176 => 82,  173 => 42,  168 => 60,  164 => 72,  162 => 71,  154 => 67,  149 => 50,  147 => 69,  144 => 68,  141 => 67,  133 => 49,  130 => 57,  125 => 45,  122 => 44,  116 => 42,  112 => 52,  109 => 40,  106 => 40,  103 => 46,  99 => 26,  95 => 36,  92 => 34,  86 => 33,  82 => 28,  80 => 33,  73 => 16,  64 => 13,  60 => 22,  57 => 12,  54 => 14,  51 => 24,  48 => 9,  45 => 8,  42 => 7,  39 => 7,  36 => 5,  33 => 3,  30 => 3,);
    }
}
