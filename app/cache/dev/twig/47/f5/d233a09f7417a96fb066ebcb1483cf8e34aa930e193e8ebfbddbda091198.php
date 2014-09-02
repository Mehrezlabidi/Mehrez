<?php

/* SonataAdminBundle:Core:dashboard.html.twig */
class __TwigTemplate_47f5d233a09f7417a96fb066ebcb1483cf8e34aa930e193e8ebfbddbda091198 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_dashboard", array(), "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <div class=\"row-fluid\">
        ";
        // line 18
        $context["has_center"] = false;
        // line 19
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 20
            echo "            ";
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "position") == "center")) {
                // line 21
                echo "                ";
                $context["has_center"] = true;
                // line 22
                echo "            ";
            }
            // line 23
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
        <div class=\"";
        // line 25
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            echo "span3";
        } else {
            echo "span6";
        }
        echo "\">
            ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 27
            echo "                ";
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "position") == "left")) {
                // line 28
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "settings"))));
                echo "
                ";
            }
            // line 30
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>

        ";
        // line 33
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            // line 34
            echo "            <div class=\"span4\">
                ";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 36
                echo "                    ";
                if (($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "position") == "center")) {
                    // line 37
                    echo "                        ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "settings"))));
                    echo "
                    ";
                }
                // line 39
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "            </div>
        ";
        }
        // line 42
        echo "
        <div class=\"";
        // line 43
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            echo "span4";
        } else {
            echo "span6";
        }
        echo "\">
            ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 45
            echo "                ";
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "position") == "right")) {
                // line 46
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "settings"))));
                echo "
                ";
            }
            // line 48
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 22,  358 => 139,  351 => 135,  338 => 130,  327 => 126,  319 => 124,  315 => 123,  301 => 117,  299 => 116,  293 => 113,  289 => 112,  277 => 109,  271 => 108,  262 => 105,  251 => 101,  148 => 60,  253 => 1,  233 => 81,  212 => 74,  198 => 66,  192 => 64,  185 => 59,  165 => 64,  113 => 37,  97 => 31,  213 => 82,  239 => 97,  236 => 102,  232 => 101,  84 => 16,  124 => 52,  118 => 55,  76 => 32,  70 => 25,  184 => 76,  202 => 77,  195 => 96,  186 => 90,  114 => 71,  210 => 73,  153 => 48,  20 => 11,  502 => 398,  492 => 391,  449 => 354,  442 => 350,  426 => 340,  401 => 324,  394 => 320,  377 => 309,  370 => 305,  357 => 295,  353 => 294,  346 => 290,  329 => 279,  286 => 242,  282 => 241,  274 => 236,  270 => 4,  34 => 15,  242 => 112,  231 => 109,  200 => 91,  180 => 56,  174 => 67,  172 => 51,  160 => 44,  129 => 42,  127 => 54,  110 => 36,  265 => 106,  245 => 173,  152 => 76,  995 => 544,  989 => 448,  983 => 197,  977 => 121,  971 => 86,  964 => 24,  960 => 23,  955 => 21,  951 => 20,  947 => 19,  943 => 18,  939 => 17,  935 => 16,  931 => 15,  928 => 14,  924 => 12,  921 => 11,  861 => 10,  781 => 9,  775 => 6,  771 => 4,  768 => 3,  754 => 545,  752 => 544,  737 => 532,  730 => 528,  700 => 501,  678 => 482,  669 => 476,  660 => 470,  653 => 466,  645 => 461,  637 => 456,  628 => 449,  624 => 448,  618 => 446,  608 => 439,  598 => 432,  592 => 429,  584 => 424,  570 => 413,  562 => 408,  544 => 393,  534 => 386,  517 => 372,  503 => 361,  493 => 354,  486 => 350,  478 => 345,  470 => 340,  460 => 333,  452 => 328,  421 => 303,  411 => 296,  405 => 325,  390 => 284,  382 => 279,  356 => 262,  345 => 254,  321 => 236,  290 => 214,  281 => 110,  267 => 197,  256 => 189,  248 => 100,  167 => 48,  146 => 73,  65 => 26,  386 => 135,  378 => 133,  361 => 124,  354 => 123,  344 => 117,  333 => 280,  323 => 125,  316 => 111,  306 => 224,  304 => 107,  295 => 105,  292 => 103,  272 => 97,  260 => 104,  257 => 103,  250 => 90,  244 => 180,  234 => 110,  222 => 81,  218 => 79,  215 => 160,  211 => 81,  197 => 74,  175 => 53,  150 => 67,  126 => 45,  297 => 218,  266 => 95,  225 => 87,  181 => 118,  178 => 72,  137 => 37,  104 => 40,  90 => 20,  81 => 16,  77 => 36,  646 => 414,  641 => 413,  636 => 412,  631 => 411,  626 => 410,  621 => 447,  616 => 407,  611 => 406,  606 => 405,  601 => 404,  596 => 403,  591 => 402,  548 => 415,  545 => 414,  542 => 413,  539 => 412,  536 => 411,  533 => 410,  530 => 409,  528 => 408,  525 => 407,  522 => 406,  519 => 405,  516 => 404,  513 => 403,  510 => 402,  494 => 388,  484 => 381,  433 => 339,  419 => 336,  415 => 327,  408 => 323,  395 => 313,  391 => 312,  371 => 132,  367 => 270,  347 => 134,  343 => 132,  336 => 278,  300 => 245,  296 => 218,  288 => 239,  284 => 101,  228 => 88,  206 => 71,  190 => 77,  161 => 56,  134 => 56,  100 => 41,  53 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 344,  440 => 343,  437 => 316,  435 => 146,  430 => 341,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 289,  393 => 126,  387 => 122,  384 => 308,  381 => 310,  379 => 119,  374 => 274,  368 => 131,  365 => 141,  362 => 110,  360 => 293,  355 => 106,  341 => 131,  337 => 249,  322 => 275,  314 => 99,  312 => 110,  309 => 120,  305 => 119,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 207,  268 => 107,  264 => 2,  258 => 81,  252 => 91,  247 => 105,  241 => 177,  229 => 73,  220 => 70,  214 => 185,  177 => 54,  169 => 69,  140 => 44,  132 => 43,  128 => 63,  107 => 52,  61 => 23,  273 => 96,  269 => 198,  254 => 102,  243 => 98,  240 => 88,  238 => 206,  235 => 74,  230 => 82,  227 => 108,  224 => 155,  221 => 79,  219 => 84,  217 => 75,  208 => 72,  204 => 78,  179 => 72,  159 => 49,  143 => 59,  135 => 48,  119 => 39,  102 => 42,  71 => 29,  63 => 31,  59 => 27,  93 => 21,  88 => 36,  78 => 26,  38 => 18,  94 => 39,  89 => 37,  85 => 28,  68 => 30,  56 => 21,  87 => 47,  21 => 2,  26 => 14,  75 => 33,  67 => 24,  46 => 21,  27 => 14,  44 => 21,  31 => 3,  28 => 14,  201 => 80,  196 => 65,  183 => 87,  171 => 59,  166 => 81,  163 => 68,  158 => 62,  156 => 41,  151 => 61,  142 => 58,  138 => 57,  136 => 56,  121 => 51,  117 => 50,  105 => 39,  91 => 30,  62 => 25,  49 => 9,  24 => 13,  25 => 12,  19 => 11,  79 => 37,  72 => 10,  69 => 32,  47 => 19,  40 => 20,  37 => 19,  22 => 12,  246 => 99,  157 => 64,  145 => 59,  139 => 57,  131 => 55,  123 => 62,  120 => 36,  115 => 33,  111 => 30,  108 => 28,  101 => 33,  98 => 38,  96 => 19,  83 => 43,  74 => 23,  66 => 29,  55 => 21,  52 => 20,  50 => 25,  43 => 21,  41 => 20,  35 => 15,  32 => 14,  29 => 15,  209 => 95,  203 => 92,  199 => 97,  193 => 135,  189 => 71,  187 => 60,  182 => 69,  176 => 64,  173 => 71,  168 => 72,  164 => 80,  162 => 104,  154 => 40,  149 => 71,  147 => 46,  144 => 45,  141 => 48,  133 => 84,  130 => 81,  125 => 40,  122 => 74,  116 => 43,  112 => 47,  109 => 53,  106 => 35,  103 => 34,  99 => 50,  95 => 22,  92 => 46,  86 => 17,  82 => 27,  80 => 42,  73 => 36,  64 => 28,  60 => 24,  57 => 27,  54 => 26,  51 => 22,  48 => 21,  45 => 18,  42 => 17,  39 => 16,  36 => 19,  33 => 16,  30 => 15,);
    }
}
