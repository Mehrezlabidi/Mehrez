<?php

/* SonataAdminBundle:Core:search.html.twig */
class __TwigTemplate_280a90347c229d7ffadcb66e63c28f836f88578691f729a74d036e8d5272b8c0 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <!--
    <div class=\"row-fluid\">
        <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
        echo "\" method=\"GET\"  class=\"form-search\">
            <div class=\"input-append\">
                <input type=\"text\" name=\"q\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "html", null, true);
        echo "\" class=\"input-large search-query\"/>
                <button type=\"submit\" class=\"btn\">Search</button>
            </div>
        </form>
    </div>
    -->

    <h1>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        echo "</h1>

    ";
        // line 30
        if ((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))) {
            // line 31
            echo "        ";
            $context["count"] = 0;
            // line 32
            echo "        <div class=\"row-fluid\">

            ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 35
                echo "                ";
                $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 36
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                        // line 37
                        echo "                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
                        // line 38
                        echo "                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "
                ";
                // line 40
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 41
                    echo "                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 42
                        echo "                        ";
                        if ((((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) % 3) == 0)) {
                            // line 43
                            echo "                            </div><div class=\"row-fluid\">
                        ";
                        }
                        // line 45
                        echo "
                        ";
                        // line 46
                        $context["count"] = ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1);
                        // line 47
                        echo "                        ";
                        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method")))) {
                            // line 48
                            echo "                            ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "admin_code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code"), "page" => 0, "per_page" => 10)));
                            // line 55
                            echo "
                        ";
                        }
                        // line 57
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo "                ";
                }
                // line 59
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "        </div>
    ";
        }
        // line 62
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 139,  351 => 135,  338 => 130,  327 => 126,  319 => 124,  315 => 123,  299 => 116,  293 => 113,  281 => 110,  262 => 105,  251 => 101,  248 => 100,  148 => 60,  270 => 4,  253 => 1,  233 => 81,  212 => 74,  198 => 66,  192 => 64,  185 => 59,  165 => 64,  113 => 37,  97 => 31,  167 => 48,  239 => 97,  236 => 102,  124 => 52,  118 => 46,  76 => 32,  70 => 25,  184 => 76,  202 => 77,  195 => 96,  186 => 90,  114 => 71,  153 => 48,  155 => 37,  20 => 11,  527 => 417,  471 => 367,  452 => 354,  445 => 350,  433 => 341,  429 => 340,  422 => 336,  404 => 324,  397 => 320,  380 => 309,  373 => 305,  356 => 294,  332 => 279,  289 => 112,  277 => 109,  213 => 82,  58 => 22,  34 => 15,  231 => 109,  200 => 91,  180 => 56,  174 => 67,  172 => 51,  129 => 42,  127 => 54,  110 => 36,  265 => 106,  245 => 173,  152 => 76,  1034 => 544,  1028 => 448,  1022 => 197,  1016 => 121,  1010 => 86,  1003 => 24,  999 => 23,  994 => 21,  990 => 20,  986 => 19,  982 => 18,  978 => 17,  974 => 16,  970 => 15,  967 => 14,  963 => 12,  960 => 11,  875 => 10,  785 => 9,  779 => 6,  775 => 4,  772 => 3,  758 => 545,  756 => 544,  741 => 532,  734 => 528,  704 => 501,  682 => 482,  673 => 476,  657 => 466,  641 => 456,  632 => 449,  628 => 448,  625 => 447,  622 => 446,  612 => 439,  602 => 432,  596 => 429,  588 => 424,  574 => 413,  566 => 408,  538 => 386,  521 => 372,  497 => 354,  490 => 350,  482 => 345,  464 => 333,  441 => 316,  425 => 303,  394 => 284,  349 => 290,  325 => 275,  310 => 224,  301 => 117,  271 => 108,  242 => 112,  232 => 101,  210 => 73,  160 => 44,  146 => 31,  84 => 16,  65 => 26,  386 => 279,  378 => 274,  361 => 124,  354 => 123,  344 => 117,  333 => 115,  323 => 125,  316 => 111,  306 => 108,  304 => 107,  295 => 105,  292 => 103,  272 => 97,  260 => 104,  257 => 103,  250 => 90,  244 => 180,  234 => 110,  222 => 81,  218 => 162,  215 => 160,  211 => 81,  197 => 74,  175 => 53,  150 => 67,  126 => 55,  297 => 106,  266 => 95,  225 => 87,  181 => 118,  178 => 72,  137 => 37,  104 => 40,  90 => 20,  81 => 16,  77 => 36,  669 => 428,  664 => 470,  659 => 426,  654 => 425,  649 => 461,  644 => 423,  639 => 421,  634 => 420,  629 => 419,  624 => 418,  619 => 417,  614 => 416,  571 => 429,  568 => 428,  565 => 427,  562 => 426,  559 => 425,  556 => 424,  553 => 423,  551 => 422,  548 => 393,  545 => 420,  542 => 419,  539 => 418,  536 => 417,  533 => 416,  517 => 410,  507 => 361,  467 => 358,  463 => 357,  456 => 355,  443 => 343,  439 => 342,  432 => 338,  419 => 328,  415 => 296,  408 => 325,  395 => 313,  391 => 312,  371 => 270,  367 => 297,  347 => 134,  343 => 132,  336 => 280,  300 => 245,  296 => 218,  288 => 239,  284 => 101,  228 => 88,  206 => 71,  190 => 77,  161 => 56,  134 => 56,  100 => 41,  53 => 24,  480 => 162,  474 => 340,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 293,  407 => 131,  402 => 289,  398 => 129,  393 => 126,  387 => 122,  384 => 310,  381 => 120,  379 => 119,  374 => 116,  368 => 131,  365 => 141,  362 => 110,  360 => 295,  355 => 106,  341 => 131,  337 => 116,  322 => 101,  314 => 99,  312 => 110,  309 => 120,  305 => 119,  298 => 91,  294 => 214,  285 => 111,  283 => 88,  278 => 207,  268 => 107,  264 => 2,  258 => 81,  252 => 184,  247 => 105,  241 => 177,  229 => 73,  220 => 70,  214 => 69,  177 => 54,  169 => 69,  140 => 44,  132 => 43,  128 => 63,  107 => 52,  61 => 28,  273 => 235,  269 => 96,  254 => 102,  243 => 98,  240 => 88,  238 => 85,  235 => 74,  230 => 82,  227 => 108,  224 => 155,  221 => 79,  219 => 84,  217 => 185,  208 => 72,  204 => 78,  179 => 72,  159 => 49,  143 => 59,  135 => 48,  119 => 39,  102 => 42,  71 => 32,  67 => 24,  63 => 31,  59 => 27,  38 => 18,  94 => 39,  89 => 37,  85 => 28,  75 => 34,  68 => 31,  56 => 21,  87 => 47,  21 => 2,  26 => 14,  93 => 21,  88 => 37,  78 => 26,  46 => 19,  27 => 14,  44 => 21,  31 => 3,  28 => 14,  201 => 80,  196 => 65,  183 => 87,  171 => 50,  166 => 81,  163 => 68,  158 => 62,  156 => 41,  151 => 61,  142 => 58,  138 => 57,  136 => 58,  121 => 51,  117 => 50,  105 => 39,  91 => 38,  62 => 25,  49 => 9,  24 => 13,  25 => 12,  19 => 11,  79 => 35,  72 => 10,  69 => 32,  47 => 19,  40 => 20,  37 => 19,  22 => 12,  246 => 99,  157 => 64,  145 => 60,  139 => 59,  131 => 55,  123 => 48,  120 => 47,  115 => 45,  111 => 43,  108 => 42,  101 => 40,  98 => 39,  96 => 19,  83 => 43,  74 => 23,  66 => 30,  55 => 21,  52 => 20,  50 => 25,  43 => 21,  41 => 20,  35 => 15,  32 => 14,  29 => 15,  209 => 95,  203 => 92,  199 => 97,  193 => 135,  189 => 71,  187 => 60,  182 => 69,  176 => 64,  173 => 71,  168 => 72,  164 => 80,  162 => 104,  154 => 40,  149 => 62,  147 => 46,  144 => 45,  141 => 48,  133 => 84,  130 => 57,  125 => 40,  122 => 74,  116 => 43,  112 => 47,  109 => 53,  106 => 35,  103 => 41,  99 => 50,  95 => 22,  92 => 46,  86 => 17,  82 => 36,  80 => 42,  73 => 36,  64 => 28,  60 => 24,  57 => 27,  54 => 26,  51 => 21,  48 => 21,  45 => 18,  42 => 17,  39 => 16,  36 => 19,  33 => 16,  30 => 15,);
    }
}
