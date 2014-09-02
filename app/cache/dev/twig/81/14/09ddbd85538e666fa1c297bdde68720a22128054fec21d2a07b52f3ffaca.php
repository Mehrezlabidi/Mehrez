<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_811409ddbd85538e666fa1c297bdde68720a22128054fec21d2a07b52f3ffaca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'show' => array($this, 'block_show'),
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
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
    }

    // line 25
    public function block_show($context, array $blocks = array())
    {
        // line 26
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 28
            echo "            <table class=\"table table-bordered\">
                ";
            // line 29
            if ((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) {
                // line 30
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 36
            echo "
                ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["view_group"]) ? $context["view_group"] : $this->getContext($context, "view_group")), "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 38
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 39
                if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
                    // line 40
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 42
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  569 => 180,  558 => 178,  554 => 177,  546 => 174,  541 => 172,  535 => 170,  527 => 165,  518 => 162,  514 => 161,  508 => 160,  505 => 159,  501 => 158,  496 => 156,  489 => 154,  484 => 152,  477 => 151,  471 => 149,  458 => 132,  455 => 131,  451 => 124,  448 => 123,  445 => 122,  429 => 103,  418 => 98,  414 => 97,  406 => 95,  385 => 95,  376 => 82,  373 => 81,  366 => 131,  356 => 125,  290 => 109,  279 => 79,  263 => 72,  226 => 67,  205 => 59,  352 => 94,  340 => 90,  332 => 117,  330 => 87,  320 => 84,  313 => 82,  302 => 78,  287 => 108,  280 => 69,  249 => 55,  223 => 66,  216 => 25,  188 => 21,  23 => 12,  12 => 34,  58 => 22,  358 => 139,  351 => 121,  338 => 130,  327 => 86,  319 => 124,  315 => 83,  299 => 113,  293 => 75,  289 => 112,  281 => 80,  277 => 68,  262 => 63,  251 => 101,  248 => 70,  148 => 44,  253 => 1,  233 => 81,  212 => 74,  198 => 66,  192 => 55,  185 => 20,  165 => 64,  113 => 39,  97 => 31,  167 => 48,  213 => 82,  239 => 97,  236 => 102,  124 => 43,  118 => 46,  76 => 32,  70 => 23,  184 => 76,  202 => 77,  195 => 96,  186 => 54,  114 => 46,  153 => 48,  20 => 11,  502 => 398,  492 => 391,  449 => 354,  442 => 350,  426 => 340,  405 => 325,  401 => 324,  377 => 309,  370 => 100,  357 => 295,  353 => 294,  346 => 118,  329 => 279,  286 => 242,  282 => 241,  274 => 77,  270 => 4,  34 => 16,  231 => 109,  200 => 91,  180 => 104,  174 => 53,  172 => 52,  129 => 42,  127 => 34,  110 => 41,  265 => 64,  245 => 173,  152 => 63,  1004 => 544,  998 => 448,  992 => 197,  986 => 121,  980 => 86,  973 => 24,  969 => 23,  964 => 21,  960 => 20,  956 => 19,  952 => 18,  948 => 17,  944 => 16,  940 => 15,  937 => 14,  933 => 12,  930 => 11,  870 => 10,  785 => 9,  779 => 6,  775 => 4,  772 => 3,  758 => 545,  756 => 544,  741 => 532,  734 => 528,  704 => 501,  682 => 482,  673 => 476,  657 => 466,  641 => 456,  632 => 449,  628 => 448,  625 => 447,  622 => 446,  612 => 439,  602 => 432,  596 => 429,  588 => 424,  574 => 413,  566 => 408,  538 => 386,  521 => 372,  497 => 354,  490 => 350,  482 => 345,  464 => 134,  441 => 316,  425 => 102,  394 => 84,  349 => 254,  325 => 236,  310 => 81,  301 => 114,  271 => 76,  242 => 112,  232 => 101,  210 => 73,  160 => 48,  146 => 73,  84 => 28,  65 => 25,  386 => 279,  378 => 274,  361 => 97,  354 => 122,  344 => 117,  333 => 280,  323 => 116,  316 => 111,  306 => 115,  304 => 79,  295 => 111,  292 => 103,  272 => 97,  260 => 62,  257 => 61,  250 => 90,  244 => 180,  234 => 110,  222 => 81,  218 => 162,  215 => 160,  211 => 81,  197 => 56,  175 => 53,  150 => 58,  126 => 55,  297 => 106,  266 => 95,  225 => 87,  181 => 118,  178 => 72,  137 => 47,  104 => 42,  90 => 20,  81 => 30,  77 => 20,  669 => 428,  664 => 470,  659 => 426,  654 => 425,  649 => 461,  644 => 423,  639 => 421,  634 => 420,  629 => 419,  624 => 418,  619 => 417,  614 => 416,  571 => 429,  568 => 428,  565 => 427,  562 => 426,  559 => 425,  556 => 424,  553 => 423,  551 => 422,  548 => 393,  545 => 420,  542 => 419,  539 => 418,  536 => 417,  533 => 169,  517 => 402,  507 => 361,  467 => 135,  463 => 357,  456 => 328,  443 => 343,  439 => 342,  432 => 338,  419 => 336,  415 => 296,  408 => 323,  395 => 313,  391 => 83,  371 => 270,  367 => 99,  347 => 134,  343 => 91,  336 => 278,  300 => 245,  296 => 76,  288 => 239,  284 => 81,  228 => 88,  206 => 71,  190 => 77,  161 => 56,  134 => 56,  100 => 42,  53 => 16,  480 => 162,  474 => 150,  469 => 158,  461 => 133,  457 => 153,  453 => 355,  444 => 149,  440 => 105,  437 => 147,  435 => 146,  430 => 341,  427 => 143,  423 => 142,  413 => 134,  409 => 96,  407 => 131,  402 => 289,  398 => 129,  393 => 126,  387 => 107,  384 => 308,  381 => 93,  379 => 83,  374 => 116,  368 => 136,  365 => 141,  362 => 110,  360 => 127,  355 => 95,  341 => 131,  337 => 116,  322 => 275,  314 => 99,  312 => 110,  309 => 120,  305 => 119,  298 => 91,  294 => 214,  285 => 111,  283 => 70,  278 => 207,  268 => 75,  264 => 2,  258 => 81,  252 => 184,  247 => 105,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 54,  169 => 51,  140 => 41,  132 => 43,  128 => 44,  107 => 44,  61 => 28,  273 => 198,  269 => 96,  254 => 60,  243 => 68,  240 => 88,  238 => 206,  235 => 74,  230 => 82,  227 => 108,  224 => 155,  221 => 79,  219 => 84,  217 => 75,  208 => 60,  204 => 78,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  119 => 31,  102 => 142,  71 => 30,  63 => 16,  59 => 26,  93 => 138,  88 => 74,  78 => 29,  38 => 14,  94 => 40,  89 => 38,  85 => 37,  68 => 26,  56 => 25,  87 => 29,  21 => 11,  26 => 13,  75 => 32,  67 => 31,  46 => 9,  27 => 14,  44 => 20,  31 => 15,  28 => 14,  201 => 57,  196 => 65,  183 => 87,  171 => 121,  166 => 50,  163 => 49,  158 => 62,  156 => 41,  151 => 45,  142 => 42,  138 => 57,  136 => 39,  121 => 42,  117 => 50,  105 => 143,  91 => 75,  62 => 27,  49 => 23,  24 => 13,  25 => 13,  19 => 11,  79 => 33,  72 => 19,  69 => 29,  47 => 22,  40 => 15,  37 => 18,  22 => 12,  246 => 69,  157 => 47,  145 => 43,  139 => 59,  131 => 44,  123 => 33,  120 => 48,  115 => 40,  111 => 43,  108 => 144,  101 => 37,  98 => 140,  96 => 139,  83 => 64,  74 => 19,  66 => 28,  55 => 24,  52 => 24,  50 => 23,  43 => 20,  41 => 19,  35 => 20,  32 => 3,  29 => 14,  209 => 24,  203 => 92,  199 => 97,  193 => 135,  189 => 71,  187 => 60,  182 => 69,  176 => 102,  173 => 71,  168 => 72,  164 => 54,  162 => 104,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 48,  133 => 51,  130 => 35,  125 => 40,  122 => 74,  116 => 30,  112 => 47,  109 => 45,  106 => 40,  103 => 41,  99 => 50,  95 => 37,  92 => 39,  86 => 65,  82 => 36,  80 => 42,  73 => 27,  64 => 28,  60 => 19,  57 => 14,  54 => 26,  51 => 29,  48 => 15,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 16,  30 => 15,);
    }
}
