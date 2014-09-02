<?php

/* SonataDoctrineORMAdminBundle:Block:block_audit.html.twig */
class __TwigTemplate_82bcf3c07960652560d2e67353a184f166ba8236196f81adff8393d4d24b5812 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_audit_log", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>

    <div>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 18
            echo "            <div>
                ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "revision", array()), "rev", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "revision", array()), "username", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "revision", array()), "timestamp", array())), "html", null, true);
            echo "

                <ul>
                    ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "entities", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 23
                echo "                        <li>
                            ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "entity", array()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "revisionType", array()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "className", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "id", array()), "html", null, true);
                echo "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </ul>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  835 => 271,  832 => 270,  827 => 265,  820 => 261,  814 => 258,  810 => 256,  808 => 255,  805 => 254,  799 => 252,  797 => 251,  794 => 250,  788 => 248,  786 => 247,  783 => 246,  777 => 244,  766 => 240,  764 => 239,  761 => 238,  754 => 192,  748 => 191,  739 => 188,  729 => 186,  726 => 185,  721 => 184,  718 => 183,  714 => 277,  712 => 270,  705 => 237,  701 => 236,  698 => 235,  692 => 232,  689 => 231,  687 => 230,  676 => 224,  671 => 222,  668 => 221,  651 => 214,  637 => 213,  631 => 211,  626 => 208,  620 => 206,  610 => 203,  607 => 202,  604 => 201,  586 => 200,  583 => 199,  581 => 198,  577 => 196,  575 => 195,  560 => 174,  529 => 158,  522 => 156,  511 => 152,  494 => 148,  485 => 145,  452 => 136,  436 => 131,  433 => 130,  424 => 128,  416 => 126,  399 => 161,  392 => 158,  389 => 125,  383 => 122,  380 => 121,  375 => 119,  331 => 75,  318 => 71,  267 => 54,  256 => 49,  237 => 36,  713 => 214,  707 => 267,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  666 => 200,  663 => 218,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  592 => 179,  590 => 178,  585 => 177,  547 => 165,  530 => 168,  528 => 167,  525 => 157,  516 => 155,  512 => 159,  510 => 158,  498 => 134,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  446 => 134,  428 => 136,  403 => 121,  400 => 120,  388 => 117,  342 => 101,  339 => 100,  326 => 93,  324 => 73,  311 => 68,  307 => 87,  291 => 82,  191 => 50,  335 => 93,  321 => 91,  259 => 70,  569 => 180,  558 => 178,  554 => 177,  546 => 174,  541 => 163,  535 => 161,  527 => 165,  518 => 162,  514 => 161,  508 => 160,  505 => 151,  501 => 158,  496 => 156,  489 => 154,  484 => 152,  477 => 142,  471 => 149,  458 => 137,  455 => 131,  451 => 141,  448 => 123,  445 => 122,  429 => 103,  418 => 98,  414 => 127,  406 => 95,  385 => 95,  376 => 82,  373 => 81,  366 => 131,  356 => 125,  290 => 109,  279 => 79,  263 => 71,  226 => 32,  205 => 59,  352 => 94,  340 => 95,  332 => 97,  330 => 87,  320 => 84,  313 => 82,  302 => 65,  287 => 108,  280 => 82,  249 => 67,  223 => 58,  216 => 25,  188 => 21,  23 => 13,  12 => 34,  58 => 22,  358 => 106,  351 => 121,  338 => 94,  327 => 74,  319 => 90,  315 => 90,  299 => 113,  293 => 75,  289 => 81,  281 => 80,  277 => 78,  262 => 63,  251 => 101,  248 => 70,  148 => 97,  253 => 1,  233 => 62,  212 => 74,  198 => 66,  192 => 55,  185 => 20,  165 => 64,  113 => 46,  97 => 87,  167 => 48,  213 => 82,  239 => 97,  236 => 63,  124 => 23,  118 => 28,  76 => 13,  70 => 23,  184 => 173,  202 => 278,  195 => 96,  186 => 54,  114 => 88,  153 => 35,  20 => 11,  502 => 155,  492 => 132,  449 => 135,  442 => 350,  426 => 340,  405 => 325,  401 => 170,  377 => 115,  370 => 100,  357 => 113,  353 => 294,  346 => 118,  329 => 95,  286 => 80,  282 => 58,  274 => 57,  270 => 55,  34 => 53,  231 => 109,  200 => 182,  180 => 104,  174 => 118,  172 => 112,  129 => 24,  127 => 34,  110 => 25,  265 => 64,  245 => 173,  152 => 99,  1004 => 544,  998 => 448,  992 => 197,  986 => 121,  980 => 86,  973 => 24,  969 => 23,  964 => 21,  960 => 20,  956 => 19,  952 => 18,  948 => 17,  944 => 16,  940 => 15,  937 => 14,  933 => 12,  930 => 11,  870 => 10,  785 => 9,  779 => 6,  775 => 243,  772 => 242,  758 => 237,  756 => 544,  741 => 532,  734 => 187,  704 => 210,  682 => 227,  673 => 223,  657 => 216,  641 => 456,  632 => 449,  628 => 448,  625 => 447,  622 => 446,  612 => 204,  602 => 185,  596 => 181,  588 => 424,  574 => 413,  566 => 408,  538 => 162,  521 => 372,  497 => 149,  490 => 147,  482 => 144,  464 => 139,  441 => 316,  425 => 135,  394 => 118,  349 => 103,  325 => 236,  310 => 81,  301 => 114,  271 => 76,  242 => 112,  232 => 101,  210 => 73,  160 => 48,  146 => 34,  84 => 16,  65 => 5,  386 => 279,  378 => 274,  361 => 107,  354 => 112,  344 => 97,  333 => 280,  323 => 116,  316 => 70,  306 => 66,  304 => 79,  295 => 88,  292 => 61,  272 => 76,  260 => 50,  257 => 61,  250 => 67,  244 => 180,  234 => 110,  222 => 81,  218 => 29,  215 => 28,  211 => 81,  197 => 54,  175 => 43,  150 => 58,  126 => 55,  297 => 84,  266 => 95,  225 => 87,  181 => 47,  178 => 45,  137 => 27,  104 => 23,  90 => 27,  81 => 26,  77 => 27,  669 => 201,  664 => 470,  659 => 426,  654 => 215,  649 => 461,  644 => 423,  639 => 421,  634 => 420,  629 => 419,  624 => 418,  619 => 417,  614 => 416,  571 => 193,  568 => 183,  565 => 182,  562 => 426,  559 => 425,  556 => 169,  553 => 423,  551 => 174,  548 => 393,  545 => 420,  542 => 172,  539 => 171,  536 => 170,  533 => 169,  517 => 402,  507 => 157,  467 => 140,  463 => 357,  456 => 143,  443 => 132,  439 => 342,  432 => 338,  419 => 127,  415 => 296,  408 => 323,  395 => 159,  391 => 83,  371 => 113,  367 => 99,  347 => 102,  343 => 91,  336 => 99,  300 => 245,  296 => 76,  288 => 59,  284 => 81,  228 => 59,  206 => 71,  190 => 50,  161 => 38,  134 => 56,  100 => 43,  53 => 20,  480 => 143,  474 => 141,  469 => 158,  461 => 138,  457 => 153,  453 => 142,  444 => 149,  440 => 105,  437 => 147,  435 => 146,  430 => 137,  427 => 129,  423 => 128,  413 => 125,  409 => 124,  407 => 124,  402 => 289,  398 => 119,  393 => 126,  387 => 124,  384 => 116,  381 => 93,  379 => 83,  374 => 114,  368 => 115,  365 => 141,  362 => 114,  360 => 127,  355 => 105,  341 => 131,  337 => 76,  322 => 275,  314 => 99,  312 => 89,  309 => 120,  305 => 119,  298 => 64,  294 => 214,  285 => 84,  283 => 70,  278 => 207,  268 => 73,  264 => 72,  258 => 81,  252 => 47,  247 => 66,  241 => 31,  229 => 73,  220 => 56,  214 => 61,  177 => 119,  169 => 51,  140 => 28,  132 => 57,  128 => 47,  107 => 24,  61 => 26,  273 => 198,  269 => 75,  254 => 68,  243 => 65,  240 => 88,  238 => 64,  235 => 35,  230 => 33,  227 => 60,  224 => 155,  221 => 30,  219 => 84,  217 => 75,  208 => 57,  204 => 78,  179 => 120,  159 => 49,  143 => 29,  135 => 48,  119 => 44,  102 => 17,  71 => 29,  63 => 22,  59 => 23,  93 => 39,  88 => 33,  78 => 80,  38 => 17,  94 => 86,  89 => 34,  85 => 30,  68 => 6,  56 => 81,  87 => 17,  21 => 11,  26 => 14,  75 => 31,  67 => 28,  46 => 19,  27 => 16,  44 => 21,  31 => 14,  28 => 13,  201 => 57,  196 => 52,  183 => 87,  171 => 121,  166 => 110,  163 => 49,  158 => 37,  156 => 36,  151 => 45,  142 => 42,  138 => 93,  136 => 39,  121 => 91,  117 => 89,  105 => 44,  91 => 85,  62 => 24,  49 => 18,  24 => 3,  25 => 12,  19 => 11,  79 => 31,  72 => 54,  69 => 53,  47 => 17,  40 => 44,  37 => 12,  22 => 11,  246 => 69,  157 => 41,  145 => 53,  139 => 31,  131 => 25,  123 => 30,  120 => 46,  115 => 27,  111 => 40,  108 => 45,  101 => 37,  98 => 36,  96 => 40,  83 => 82,  74 => 78,  66 => 23,  55 => 22,  52 => 17,  50 => 78,  43 => 15,  41 => 14,  35 => 11,  32 => 21,  29 => 16,  209 => 22,  203 => 56,  199 => 53,  193 => 177,  189 => 175,  187 => 174,  182 => 121,  176 => 45,  173 => 42,  168 => 72,  164 => 109,  162 => 104,  154 => 46,  149 => 36,  147 => 46,  144 => 95,  141 => 94,  133 => 49,  130 => 35,  125 => 46,  122 => 45,  116 => 43,  112 => 26,  109 => 45,  106 => 40,  103 => 38,  99 => 30,  95 => 20,  92 => 19,  86 => 33,  82 => 10,  80 => 9,  73 => 24,  64 => 184,  60 => 26,  57 => 155,  54 => 154,  51 => 19,  48 => 67,  45 => 19,  42 => 18,  39 => 13,  36 => 17,  33 => 16,  30 => 17,);
    }
}
