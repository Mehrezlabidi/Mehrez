<?php

/* SonataAdminBundle:CRUD:show_choice.html.twig */
class __TwigTemplate_6f4372b88277800db6b168f72b1d1b73b45d6dc0bb7da492d0f27aebef953f9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 16
            echo "        ";
            if ((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "multiple", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "multiple", array()) == true)) && twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                // line 17
                echo "
            ";
                // line 18
                $context["result"] = "";
                // line 19
                echo "            ";
                $context["delimiter"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "delimiter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "delimiter", array()), ", ")) : (", "));
                // line 20
                echo "
            ";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 22
                    echo "                ";
                    if ((!twig_test_empty((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))))) {
                        // line 23
                        echo "                    ";
                        $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . (isset($context["delimiter"]) ? $context["delimiter"] : $this->getContext($context, "delimiter")));
                        // line 24
                        echo "                ";
                    }
                    // line 25
                    echo "
                ";
                    // line 26
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "choices", array(), "any", false, true), (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")), array(), "array", true, true)) {
                        // line 27
                        echo "                    ";
                        if ((!$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
                            // line 28
                            echo "                        ";
                            $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "choices", array()), (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")), array(), "array"));
                            // line 29
                            echo "                    ";
                        } else {
                            // line 30
                            echo "                        ";
                            $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "choices", array()), (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")), array(), "array"), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "catalogue", array())));
                            // line 31
                            echo "                    ";
                        }
                        // line 32
                        echo "                ";
                    } else {
                        // line 33
                        echo "                    ";
                        $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")));
                        // line 34
                        echo "                ";
                    }
                    // line 35
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "
            ";
                // line 37
                $context["value"] = (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"));
                // line 38
                echo "
        ";
            } elseif (twig_in_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), twig_get_array_keys_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "choices", array())))) {
                // line 40
                echo "            ";
                if ((!$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
                    // line 41
                    echo "                ";
                    $context["value"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "choices", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array");
                    // line 42
                    echo "            ";
                } else {
                    // line 43
                    echo "                ";
                    $context["value"] = $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "choices", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array"), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "catalogue", array()));
                    // line 44
                    echo "            ";
                }
                // line 45
                echo "        ";
            }
            // line 46
            echo "    ";
        }
        // line 47
        echo "
    ";
        // line 48
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            // line 49
            echo "        ";
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        // line 53
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  569 => 180,  558 => 178,  554 => 177,  546 => 174,  541 => 172,  535 => 170,  527 => 165,  518 => 162,  514 => 161,  508 => 160,  505 => 159,  501 => 158,  496 => 156,  489 => 154,  484 => 152,  477 => 151,  471 => 149,  458 => 132,  455 => 131,  451 => 124,  448 => 123,  445 => 122,  429 => 103,  418 => 98,  414 => 97,  406 => 95,  385 => 95,  376 => 82,  373 => 81,  366 => 131,  356 => 125,  290 => 109,  279 => 79,  263 => 72,  226 => 67,  205 => 59,  352 => 94,  340 => 90,  332 => 117,  330 => 87,  320 => 84,  313 => 82,  302 => 78,  287 => 108,  280 => 69,  249 => 55,  223 => 66,  216 => 25,  188 => 21,  23 => 11,  12 => 34,  58 => 25,  358 => 139,  351 => 121,  338 => 130,  327 => 86,  319 => 124,  315 => 83,  299 => 113,  293 => 75,  289 => 112,  281 => 80,  277 => 68,  262 => 63,  251 => 101,  248 => 70,  148 => 44,  253 => 1,  233 => 81,  212 => 74,  198 => 66,  192 => 55,  185 => 20,  165 => 64,  113 => 42,  97 => 41,  167 => 48,  213 => 82,  239 => 97,  236 => 102,  124 => 43,  118 => 46,  76 => 35,  70 => 23,  184 => 76,  202 => 77,  195 => 96,  186 => 54,  114 => 50,  153 => 48,  20 => 11,  502 => 398,  492 => 391,  449 => 354,  442 => 350,  426 => 340,  405 => 325,  401 => 324,  377 => 309,  370 => 100,  357 => 295,  353 => 294,  346 => 118,  329 => 279,  286 => 242,  282 => 241,  274 => 77,  270 => 4,  34 => 17,  231 => 109,  200 => 91,  180 => 104,  174 => 53,  172 => 52,  129 => 56,  127 => 34,  110 => 41,  265 => 64,  245 => 173,  152 => 63,  1004 => 544,  998 => 448,  992 => 197,  986 => 121,  980 => 86,  973 => 24,  969 => 23,  964 => 21,  960 => 20,  956 => 19,  952 => 18,  948 => 17,  944 => 16,  940 => 15,  937 => 14,  933 => 12,  930 => 11,  870 => 10,  785 => 9,  779 => 6,  775 => 4,  772 => 3,  758 => 545,  756 => 544,  741 => 532,  734 => 528,  704 => 501,  682 => 482,  673 => 476,  657 => 466,  641 => 456,  632 => 449,  628 => 448,  625 => 447,  622 => 446,  612 => 439,  602 => 432,  596 => 429,  588 => 424,  574 => 413,  566 => 408,  538 => 386,  521 => 372,  497 => 354,  490 => 350,  482 => 345,  464 => 134,  441 => 316,  425 => 102,  394 => 84,  349 => 254,  325 => 236,  310 => 81,  301 => 114,  271 => 76,  242 => 112,  232 => 101,  210 => 73,  160 => 48,  146 => 73,  84 => 34,  65 => 29,  386 => 279,  378 => 274,  361 => 97,  354 => 122,  344 => 117,  333 => 280,  323 => 116,  316 => 111,  306 => 115,  304 => 79,  295 => 111,  292 => 103,  272 => 97,  260 => 62,  257 => 61,  250 => 90,  244 => 180,  234 => 110,  222 => 81,  218 => 162,  215 => 160,  211 => 81,  197 => 56,  175 => 53,  150 => 58,  126 => 55,  297 => 106,  266 => 95,  225 => 87,  181 => 118,  178 => 72,  137 => 47,  104 => 42,  90 => 36,  81 => 33,  77 => 30,  669 => 428,  664 => 470,  659 => 426,  654 => 425,  649 => 461,  644 => 423,  639 => 421,  634 => 420,  629 => 419,  624 => 418,  619 => 417,  614 => 416,  571 => 429,  568 => 428,  565 => 427,  562 => 426,  559 => 425,  556 => 424,  553 => 423,  551 => 422,  548 => 393,  545 => 420,  542 => 419,  539 => 418,  536 => 417,  533 => 169,  517 => 402,  507 => 361,  467 => 135,  463 => 357,  456 => 328,  443 => 343,  439 => 342,  432 => 338,  419 => 336,  415 => 296,  408 => 323,  395 => 313,  391 => 83,  371 => 270,  367 => 99,  347 => 134,  343 => 91,  336 => 278,  300 => 245,  296 => 76,  288 => 239,  284 => 81,  228 => 88,  206 => 71,  190 => 77,  161 => 56,  134 => 56,  100 => 43,  53 => 24,  480 => 162,  474 => 150,  469 => 158,  461 => 133,  457 => 153,  453 => 355,  444 => 149,  440 => 105,  437 => 147,  435 => 146,  430 => 341,  427 => 143,  423 => 142,  413 => 134,  409 => 96,  407 => 131,  402 => 289,  398 => 129,  393 => 126,  387 => 107,  384 => 308,  381 => 93,  379 => 83,  374 => 116,  368 => 136,  365 => 141,  362 => 110,  360 => 127,  355 => 95,  341 => 131,  337 => 116,  322 => 275,  314 => 99,  312 => 110,  309 => 120,  305 => 119,  298 => 91,  294 => 214,  285 => 111,  283 => 70,  278 => 207,  268 => 75,  264 => 2,  258 => 81,  252 => 184,  247 => 105,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 54,  169 => 51,  140 => 41,  132 => 57,  128 => 47,  107 => 40,  61 => 26,  273 => 198,  269 => 96,  254 => 60,  243 => 68,  240 => 88,  238 => 206,  235 => 74,  230 => 82,  227 => 108,  224 => 155,  221 => 79,  219 => 84,  217 => 75,  208 => 60,  204 => 78,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  119 => 44,  102 => 43,  71 => 28,  63 => 25,  59 => 27,  93 => 40,  88 => 38,  78 => 36,  38 => 18,  94 => 40,  89 => 34,  85 => 37,  68 => 27,  56 => 27,  87 => 35,  21 => 11,  26 => 14,  75 => 31,  67 => 30,  46 => 22,  27 => 14,  44 => 19,  31 => 14,  28 => 13,  201 => 57,  196 => 65,  183 => 87,  171 => 121,  166 => 50,  163 => 49,  158 => 62,  156 => 41,  151 => 45,  142 => 42,  138 => 57,  136 => 39,  121 => 52,  117 => 45,  105 => 44,  91 => 39,  62 => 28,  49 => 23,  24 => 13,  25 => 13,  19 => 11,  79 => 34,  72 => 30,  69 => 33,  47 => 20,  40 => 19,  37 => 17,  22 => 12,  246 => 69,  157 => 47,  145 => 53,  139 => 51,  131 => 48,  123 => 47,  120 => 46,  115 => 40,  111 => 43,  108 => 45,  101 => 37,  98 => 36,  96 => 44,  83 => 32,  74 => 29,  66 => 26,  55 => 21,  52 => 18,  50 => 21,  43 => 21,  41 => 20,  35 => 20,  32 => 14,  29 => 15,  209 => 24,  203 => 92,  199 => 97,  193 => 135,  189 => 71,  187 => 60,  182 => 69,  176 => 102,  173 => 71,  168 => 72,  164 => 54,  162 => 104,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 48,  133 => 49,  130 => 35,  125 => 46,  122 => 45,  116 => 43,  112 => 47,  109 => 45,  106 => 40,  103 => 38,  99 => 45,  95 => 19,  92 => 35,  86 => 33,  82 => 38,  80 => 31,  73 => 34,  64 => 27,  60 => 24,  57 => 23,  54 => 22,  51 => 24,  48 => 22,  45 => 21,  42 => 18,  39 => 17,  36 => 16,  33 => 15,  30 => 15,);
    }
}
