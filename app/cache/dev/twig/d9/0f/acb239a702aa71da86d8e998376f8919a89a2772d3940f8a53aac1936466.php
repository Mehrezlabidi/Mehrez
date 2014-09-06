<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig */
class __TwigTemplate_d90facb239a702aa71da86d8e998376f8919a89a2772d3940f8a53aac1936466 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if (((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "id", array(0 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "EDIT", 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "edit"), "method"))) {
            // line 16
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 74,  406 => 158,  401 => 156,  364 => 139,  359 => 138,  290 => 106,  318 => 122,  279 => 104,  256 => 89,  237 => 86,  694 => 412,  685 => 406,  680 => 403,  678 => 398,  668 => 395,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  617 => 367,  609 => 362,  599 => 355,  581 => 345,  579 => 342,  577 => 341,  567 => 337,  550 => 326,  531 => 312,  518 => 307,  514 => 306,  509 => 304,  466 => 280,  424 => 254,  383 => 224,  366 => 140,  331 => 187,  267 => 94,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  658 => 391,  638 => 213,  627 => 374,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  569 => 183,  526 => 310,  523 => 156,  506 => 151,  495 => 148,  491 => 147,  481 => 290,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  450 => 135,  447 => 134,  434 => 130,  420 => 249,  417 => 126,  396 => 234,  390 => 150,  376 => 119,  363 => 114,  345 => 97,  328 => 124,  317 => 70,  303 => 65,  261 => 91,  194 => 87,  713 => 270,  707 => 211,  702 => 236,  696 => 206,  686 => 205,  681 => 203,  666 => 200,  663 => 393,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 204,  608 => 202,  605 => 201,  592 => 351,  590 => 178,  585 => 347,  547 => 173,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  505 => 156,  502 => 155,  498 => 149,  486 => 292,  483 => 144,  473 => 150,  465 => 139,  462 => 138,  451 => 141,  428 => 129,  414 => 125,  403 => 157,  400 => 161,  342 => 129,  339 => 100,  329 => 95,  326 => 185,  311 => 89,  286 => 80,  274 => 98,  263 => 71,  191 => 69,  335 => 188,  321 => 123,  259 => 70,  572 => 193,  561 => 174,  557 => 330,  549 => 174,  544 => 172,  530 => 158,  511 => 160,  508 => 159,  504 => 302,  499 => 156,  492 => 295,  487 => 152,  477 => 150,  470 => 135,  460 => 132,  449 => 123,  446 => 139,  426 => 102,  410 => 96,  392 => 83,  388 => 124,  382 => 93,  377 => 115,  369 => 141,  357 => 125,  324 => 92,  307 => 66,  291 => 169,  282 => 79,  275 => 103,  226 => 67,  205 => 59,  370 => 100,  352 => 135,  346 => 196,  340 => 95,  330 => 87,  320 => 84,  313 => 82,  302 => 114,  287 => 72,  280 => 101,  249 => 67,  223 => 58,  216 => 28,  188 => 174,  23 => 18,  12 => 34,  358 => 113,  351 => 135,  338 => 76,  327 => 86,  319 => 71,  315 => 118,  299 => 112,  293 => 109,  281 => 105,  262 => 63,  251 => 101,  248 => 100,  148 => 64,  270 => 4,  253 => 95,  233 => 62,  212 => 74,  198 => 69,  192 => 65,  185 => 68,  165 => 72,  113 => 41,  97 => 63,  167 => 48,  239 => 83,  236 => 35,  124 => 31,  118 => 28,  76 => 57,  70 => 23,  184 => 63,  202 => 77,  195 => 68,  186 => 82,  114 => 71,  153 => 56,  155 => 53,  20 => 11,  527 => 417,  471 => 367,  452 => 272,  445 => 267,  433 => 341,  429 => 255,  422 => 250,  404 => 324,  397 => 320,  380 => 83,  373 => 142,  356 => 294,  332 => 125,  289 => 59,  277 => 100,  213 => 126,  58 => 22,  34 => 16,  231 => 33,  200 => 70,  180 => 62,  174 => 60,  172 => 52,  129 => 57,  127 => 32,  110 => 77,  265 => 99,  245 => 173,  152 => 92,  1034 => 544,  1028 => 448,  1022 => 197,  1016 => 121,  1010 => 86,  1003 => 24,  999 => 23,  994 => 21,  990 => 20,  986 => 19,  982 => 18,  978 => 17,  974 => 16,  970 => 15,  967 => 14,  963 => 12,  960 => 11,  875 => 10,  785 => 9,  779 => 6,  775 => 4,  772 => 3,  758 => 545,  756 => 544,  741 => 532,  734 => 528,  704 => 210,  682 => 482,  673 => 476,  657 => 466,  641 => 456,  632 => 211,  628 => 448,  625 => 447,  622 => 446,  612 => 439,  602 => 185,  596 => 181,  588 => 424,  574 => 413,  566 => 182,  538 => 319,  521 => 162,  497 => 354,  490 => 350,  482 => 345,  464 => 333,  441 => 105,  425 => 128,  394 => 152,  349 => 133,  325 => 73,  310 => 81,  301 => 111,  271 => 55,  242 => 140,  232 => 84,  210 => 75,  160 => 70,  146 => 49,  84 => 39,  65 => 30,  386 => 95,  378 => 144,  361 => 208,  354 => 123,  344 => 97,  333 => 117,  323 => 125,  316 => 121,  306 => 108,  304 => 174,  295 => 88,  292 => 87,  272 => 158,  260 => 98,  257 => 149,  250 => 93,  244 => 85,  234 => 80,  222 => 81,  218 => 162,  215 => 74,  211 => 81,  197 => 70,  175 => 77,  150 => 65,  126 => 42,  297 => 84,  266 => 95,  225 => 77,  181 => 80,  178 => 119,  137 => 46,  104 => 67,  90 => 27,  81 => 25,  77 => 27,  669 => 221,  664 => 218,  659 => 426,  654 => 389,  649 => 461,  644 => 423,  639 => 421,  634 => 420,  629 => 419,  624 => 418,  619 => 417,  614 => 416,  571 => 338,  568 => 175,  565 => 427,  562 => 426,  559 => 425,  556 => 424,  553 => 423,  551 => 174,  548 => 165,  545 => 420,  542 => 321,  539 => 162,  536 => 161,  533 => 169,  517 => 155,  507 => 157,  467 => 148,  463 => 133,  456 => 273,  443 => 261,  439 => 260,  432 => 338,  419 => 98,  415 => 247,  408 => 124,  395 => 84,  391 => 312,  371 => 113,  367 => 131,  347 => 102,  343 => 91,  336 => 126,  300 => 113,  296 => 109,  288 => 107,  284 => 106,  228 => 78,  206 => 71,  190 => 175,  161 => 71,  134 => 59,  100 => 36,  53 => 20,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 131,  453 => 136,  444 => 132,  440 => 148,  437 => 131,  435 => 258,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 170,  398 => 119,  393 => 158,  387 => 122,  384 => 147,  381 => 121,  379 => 119,  374 => 114,  368 => 131,  365 => 141,  362 => 110,  360 => 295,  355 => 136,  341 => 131,  337 => 116,  322 => 101,  314 => 99,  312 => 177,  309 => 117,  305 => 115,  298 => 173,  294 => 214,  285 => 84,  283 => 102,  278 => 207,  268 => 54,  264 => 72,  258 => 81,  252 => 88,  247 => 66,  241 => 84,  229 => 73,  220 => 80,  214 => 61,  177 => 61,  169 => 57,  140 => 28,  132 => 58,  128 => 47,  107 => 24,  61 => 25,  273 => 235,  269 => 100,  254 => 68,  243 => 89,  240 => 88,  238 => 139,  235 => 74,  230 => 82,  227 => 134,  224 => 155,  221 => 75,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 48,  135 => 35,  119 => 28,  102 => 38,  71 => 29,  67 => 27,  63 => 50,  59 => 23,  38 => 17,  94 => 86,  89 => 40,  85 => 34,  75 => 31,  68 => 31,  56 => 24,  87 => 33,  21 => 12,  26 => 14,  93 => 34,  88 => 60,  78 => 24,  46 => 35,  27 => 16,  44 => 21,  31 => 15,  28 => 14,  201 => 72,  196 => 52,  183 => 121,  171 => 63,  166 => 100,  163 => 49,  158 => 37,  156 => 68,  151 => 45,  142 => 61,  138 => 36,  136 => 39,  121 => 53,  117 => 51,  105 => 27,  91 => 85,  62 => 29,  49 => 21,  24 => 13,  25 => 12,  19 => 11,  79 => 31,  72 => 56,  69 => 50,  47 => 19,  40 => 18,  37 => 12,  22 => 12,  246 => 86,  157 => 41,  145 => 52,  139 => 60,  131 => 48,  123 => 54,  120 => 46,  115 => 50,  111 => 40,  108 => 48,  101 => 73,  98 => 44,  96 => 40,  83 => 82,  74 => 34,  66 => 23,  55 => 22,  52 => 17,  50 => 20,  43 => 19,  41 => 14,  35 => 17,  32 => 16,  29 => 15,  209 => 73,  203 => 71,  199 => 53,  193 => 51,  189 => 64,  187 => 49,  182 => 80,  176 => 77,  173 => 112,  168 => 60,  164 => 72,  162 => 71,  154 => 67,  149 => 50,  147 => 90,  144 => 62,  141 => 94,  133 => 49,  130 => 57,  125 => 45,  122 => 44,  116 => 43,  112 => 49,  109 => 40,  106 => 35,  103 => 46,  99 => 26,  95 => 43,  92 => 61,  86 => 64,  82 => 33,  80 => 9,  73 => 29,  64 => 23,  60 => 22,  57 => 20,  54 => 18,  51 => 38,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 16,  30 => 15,);
    }
}
