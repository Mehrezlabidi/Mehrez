<?php

/* SonataAdminBundle:CRUD:list_choice.html.twig */
class __TwigTemplate_71fc8f4fc52c1ea06a59e61f3dbc74eb712670e450b4f1ee751649f927a81620 extends Twig_Template
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
        ob_start();
        // line 16
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 17
            echo "        ";
            if ((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "multiple", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "multiple") == true)) && twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                // line 18
                echo "
            ";
                // line 19
                $context["result"] = "";
                // line 20
                echo "            ";
                $context["delimiter"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "delimiter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "delimiter"), ", ")) : (", "));
                // line 21
                echo "
            ";
                // line 22
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 23
                    echo "                ";
                    if ((!twig_test_empty((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))))) {
                        // line 24
                        echo "                    ";
                        $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . (isset($context["delimiter"]) ? $context["delimiter"] : $this->getContext($context, "delimiter")));
                        // line 25
                        echo "                ";
                    }
                    // line 26
                    echo "
                ";
                    // line 27
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "choices", array(), "any", false, true), (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")), array(), "array", true, true)) {
                        // line 28
                        echo "                    ";
                        if ((!$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
                            // line 29
                            echo "                        ";
                            $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "choices"), (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")), array(), "array"));
                            // line 30
                            echo "                    ";
                        } else {
                            // line 31
                            echo "                        ";
                            $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "choices"), (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")), array(), "array"), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "catalogue")));
                            // line 32
                            echo "                    ";
                        }
                        // line 33
                        echo "                ";
                    } else {
                        // line 34
                        echo "                    ";
                        $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")));
                        // line 35
                        echo "                ";
                    }
                    // line 36
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "
            ";
                // line 38
                $context["value"] = (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"));
                // line 39
                echo "
        ";
            } elseif (twig_in_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), twig_get_array_keys_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "choices")))) {
                // line 41
                echo "            ";
                if ((!$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
                    // line 42
                    echo "                ";
                    $context["value"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "choices"), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array");
                    // line 43
                    echo "            ";
                } else {
                    // line 44
                    echo "                ";
                    $context["value"] = $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "choices"), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array"), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "catalogue"));
                    // line 45
                    echo "            ";
                }
                // line 46
                echo "        ";
            }
            // line 47
            echo "    ";
        }
        // line 48
        echo "
    ";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 180,  561 => 178,  557 => 177,  549 => 174,  538 => 170,  521 => 162,  511 => 160,  508 => 159,  504 => 158,  499 => 156,  487 => 152,  477 => 150,  467 => 134,  463 => 133,  446 => 122,  441 => 105,  410 => 96,  392 => 83,  388 => 107,  380 => 83,  369 => 136,  324 => 116,  307 => 115,  291 => 109,  275 => 77,  226 => 67,  205 => 59,  352 => 121,  340 => 90,  332 => 88,  330 => 87,  320 => 84,  313 => 82,  310 => 81,  302 => 114,  287 => 72,  280 => 79,  249 => 70,  223 => 66,  216 => 25,  188 => 21,  23 => 11,  12 => 34,  58 => 25,  358 => 139,  351 => 135,  338 => 130,  327 => 86,  319 => 124,  315 => 83,  301 => 117,  299 => 116,  293 => 75,  289 => 112,  277 => 68,  271 => 66,  262 => 63,  251 => 101,  148 => 44,  253 => 1,  233 => 81,  212 => 74,  198 => 66,  192 => 55,  185 => 20,  165 => 64,  113 => 48,  97 => 31,  213 => 82,  239 => 97,  236 => 102,  232 => 101,  84 => 34,  124 => 43,  118 => 46,  76 => 34,  70 => 23,  184 => 76,  202 => 77,  195 => 96,  186 => 54,  114 => 44,  210 => 73,  153 => 48,  20 => 11,  502 => 398,  492 => 154,  449 => 123,  442 => 350,  426 => 102,  401 => 324,  394 => 320,  377 => 82,  370 => 100,  357 => 125,  353 => 294,  346 => 92,  329 => 279,  286 => 242,  282 => 80,  274 => 236,  270 => 4,  34 => 17,  242 => 112,  231 => 109,  200 => 91,  180 => 104,  174 => 53,  172 => 52,  160 => 48,  129 => 49,  127 => 34,  110 => 36,  265 => 64,  245 => 173,  152 => 63,  995 => 544,  989 => 448,  983 => 197,  977 => 121,  971 => 86,  964 => 24,  960 => 23,  955 => 21,  951 => 20,  947 => 19,  943 => 18,  939 => 17,  935 => 16,  931 => 15,  928 => 14,  924 => 12,  921 => 11,  861 => 10,  781 => 9,  775 => 6,  771 => 4,  768 => 3,  754 => 545,  752 => 544,  737 => 532,  730 => 528,  700 => 501,  678 => 482,  669 => 476,  660 => 470,  653 => 466,  645 => 461,  637 => 456,  628 => 449,  624 => 448,  618 => 446,  608 => 439,  598 => 432,  592 => 429,  584 => 424,  570 => 413,  562 => 408,  544 => 172,  534 => 386,  517 => 161,  503 => 361,  493 => 354,  486 => 350,  478 => 345,  470 => 135,  460 => 132,  452 => 328,  421 => 303,  411 => 296,  405 => 325,  390 => 284,  382 => 93,  356 => 262,  345 => 254,  321 => 236,  290 => 214,  281 => 110,  267 => 197,  256 => 189,  248 => 100,  167 => 48,  146 => 73,  65 => 29,  386 => 95,  378 => 133,  361 => 127,  354 => 123,  344 => 117,  333 => 117,  323 => 125,  316 => 111,  306 => 224,  304 => 79,  295 => 105,  292 => 103,  272 => 76,  260 => 62,  257 => 61,  250 => 90,  244 => 180,  234 => 110,  222 => 81,  218 => 79,  215 => 160,  211 => 81,  197 => 56,  175 => 53,  150 => 58,  126 => 48,  297 => 218,  266 => 95,  225 => 87,  181 => 118,  178 => 72,  137 => 47,  104 => 42,  90 => 36,  81 => 33,  77 => 13,  646 => 414,  641 => 413,  636 => 412,  631 => 411,  626 => 410,  621 => 447,  616 => 407,  611 => 406,  606 => 405,  601 => 404,  596 => 403,  591 => 402,  548 => 415,  545 => 414,  542 => 413,  539 => 412,  536 => 169,  533 => 410,  530 => 165,  528 => 408,  525 => 407,  522 => 406,  519 => 405,  516 => 404,  513 => 403,  510 => 402,  494 => 388,  484 => 381,  433 => 339,  419 => 98,  415 => 97,  408 => 323,  395 => 84,  391 => 312,  371 => 132,  367 => 131,  347 => 118,  343 => 91,  336 => 278,  300 => 113,  296 => 111,  288 => 108,  284 => 101,  228 => 88,  206 => 71,  190 => 77,  161 => 56,  134 => 56,  100 => 43,  53 => 24,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 344,  440 => 343,  437 => 316,  435 => 146,  430 => 103,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 95,  402 => 130,  398 => 289,  393 => 126,  387 => 122,  384 => 308,  381 => 310,  379 => 119,  374 => 81,  368 => 131,  365 => 141,  362 => 110,  360 => 293,  355 => 122,  341 => 131,  337 => 249,  322 => 275,  314 => 99,  312 => 110,  309 => 120,  305 => 119,  298 => 91,  294 => 90,  285 => 81,  283 => 70,  278 => 207,  268 => 107,  264 => 72,  258 => 81,  252 => 91,  247 => 105,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 54,  169 => 51,  140 => 41,  132 => 44,  128 => 44,  107 => 46,  61 => 26,  273 => 96,  269 => 75,  254 => 60,  243 => 68,  240 => 88,  238 => 206,  235 => 74,  230 => 82,  227 => 108,  224 => 155,  221 => 79,  219 => 84,  217 => 75,  208 => 60,  204 => 78,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  119 => 31,  102 => 142,  71 => 32,  63 => 17,  59 => 27,  93 => 40,  88 => 37,  78 => 32,  38 => 14,  94 => 40,  89 => 17,  85 => 37,  68 => 30,  56 => 25,  87 => 35,  21 => 11,  26 => 14,  75 => 31,  67 => 30,  46 => 9,  27 => 14,  44 => 21,  31 => 16,  28 => 14,  201 => 57,  196 => 65,  183 => 87,  171 => 59,  166 => 50,  163 => 49,  158 => 62,  156 => 41,  151 => 45,  142 => 42,  138 => 57,  136 => 39,  121 => 42,  117 => 45,  105 => 41,  91 => 75,  62 => 28,  49 => 23,  24 => 12,  25 => 13,  19 => 11,  79 => 34,  72 => 30,  69 => 29,  47 => 22,  40 => 19,  37 => 18,  22 => 12,  246 => 69,  157 => 47,  145 => 43,  139 => 59,  131 => 45,  123 => 47,  120 => 46,  115 => 40,  111 => 43,  108 => 42,  101 => 39,  98 => 42,  96 => 37,  83 => 15,  74 => 19,  66 => 28,  55 => 24,  52 => 23,  50 => 23,  43 => 26,  41 => 19,  35 => 20,  32 => 14,  29 => 15,  209 => 24,  203 => 92,  199 => 97,  193 => 135,  189 => 71,  187 => 60,  182 => 69,  176 => 102,  173 => 71,  168 => 72,  164 => 54,  162 => 104,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 48,  133 => 51,  130 => 35,  125 => 40,  122 => 74,  116 => 30,  112 => 47,  109 => 45,  106 => 35,  103 => 44,  99 => 38,  95 => 19,  92 => 39,  86 => 65,  82 => 36,  80 => 25,  73 => 27,  64 => 27,  60 => 16,  57 => 15,  54 => 26,  51 => 14,  48 => 22,  45 => 21,  42 => 20,  39 => 18,  36 => 18,  33 => 17,  30 => 15,);
    }
}
