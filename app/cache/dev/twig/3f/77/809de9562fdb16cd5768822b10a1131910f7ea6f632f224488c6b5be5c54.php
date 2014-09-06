<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_3f77809de9562fdb16cd5768822b10a1131910f7ea6f632f224488c6b5be5c54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars"), "id"), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars"), "errors"))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if (((isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")) == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "name")) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br />
        ";
        }
        // line 23
        echo "    ";
    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 100,  352 => 94,  346 => 92,  340 => 90,  330 => 87,  320 => 84,  313 => 82,  302 => 78,  287 => 72,  280 => 69,  249 => 55,  223 => 27,  216 => 25,  188 => 21,  23 => 1,  12 => 34,  358 => 139,  351 => 135,  338 => 130,  327 => 86,  319 => 124,  315 => 83,  299 => 116,  293 => 75,  281 => 110,  262 => 63,  251 => 101,  248 => 100,  148 => 60,  270 => 4,  253 => 1,  233 => 81,  212 => 74,  198 => 66,  192 => 23,  185 => 20,  165 => 64,  113 => 39,  97 => 31,  167 => 48,  239 => 97,  236 => 102,  124 => 43,  118 => 46,  76 => 32,  70 => 23,  184 => 76,  202 => 77,  195 => 96,  186 => 90,  114 => 71,  153 => 48,  155 => 37,  20 => 1,  527 => 417,  471 => 367,  452 => 354,  445 => 350,  433 => 341,  429 => 340,  422 => 336,  404 => 324,  397 => 320,  380 => 309,  373 => 305,  356 => 294,  332 => 88,  289 => 112,  277 => 68,  213 => 82,  58 => 22,  34 => 16,  231 => 109,  200 => 91,  180 => 104,  174 => 60,  172 => 51,  129 => 42,  127 => 54,  110 => 36,  265 => 64,  245 => 173,  152 => 63,  1034 => 544,  1028 => 448,  1022 => 197,  1016 => 121,  1010 => 86,  1003 => 24,  999 => 23,  994 => 21,  990 => 20,  986 => 19,  982 => 18,  978 => 17,  974 => 16,  970 => 15,  967 => 14,  963 => 12,  960 => 11,  875 => 10,  785 => 9,  779 => 6,  775 => 4,  772 => 3,  758 => 545,  756 => 544,  741 => 532,  734 => 528,  704 => 501,  682 => 482,  673 => 476,  657 => 466,  641 => 456,  632 => 449,  628 => 448,  625 => 447,  622 => 446,  612 => 439,  602 => 432,  596 => 429,  588 => 424,  574 => 413,  566 => 408,  538 => 386,  521 => 372,  497 => 354,  490 => 350,  482 => 345,  464 => 333,  441 => 316,  425 => 303,  394 => 284,  349 => 290,  325 => 275,  310 => 81,  301 => 117,  271 => 66,  242 => 112,  232 => 101,  210 => 73,  160 => 52,  146 => 31,  84 => 28,  65 => 15,  386 => 279,  378 => 274,  361 => 97,  354 => 123,  344 => 117,  333 => 115,  323 => 125,  316 => 111,  306 => 108,  304 => 79,  295 => 105,  292 => 103,  272 => 97,  260 => 62,  257 => 61,  250 => 90,  244 => 180,  234 => 110,  222 => 81,  218 => 162,  215 => 160,  211 => 81,  197 => 74,  175 => 53,  150 => 58,  126 => 55,  297 => 106,  266 => 95,  225 => 87,  181 => 118,  178 => 72,  137 => 47,  104 => 42,  90 => 20,  81 => 27,  77 => 20,  669 => 428,  664 => 470,  659 => 426,  654 => 425,  649 => 461,  644 => 423,  639 => 421,  634 => 420,  629 => 419,  624 => 418,  619 => 417,  614 => 416,  571 => 429,  568 => 428,  565 => 427,  562 => 426,  559 => 425,  556 => 424,  553 => 423,  551 => 422,  548 => 393,  545 => 420,  542 => 419,  539 => 418,  536 => 417,  533 => 416,  517 => 410,  507 => 361,  467 => 358,  463 => 357,  456 => 355,  443 => 343,  439 => 342,  432 => 338,  419 => 328,  415 => 296,  408 => 325,  395 => 313,  391 => 312,  371 => 270,  367 => 99,  347 => 134,  343 => 91,  336 => 280,  300 => 245,  296 => 76,  288 => 239,  284 => 101,  228 => 88,  206 => 71,  190 => 77,  161 => 56,  134 => 56,  100 => 36,  53 => 16,  480 => 162,  474 => 340,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 293,  407 => 131,  402 => 289,  398 => 129,  393 => 126,  387 => 122,  384 => 310,  381 => 120,  379 => 119,  374 => 116,  368 => 131,  365 => 141,  362 => 110,  360 => 295,  355 => 95,  341 => 131,  337 => 116,  322 => 101,  314 => 99,  312 => 110,  309 => 120,  305 => 119,  298 => 91,  294 => 214,  285 => 111,  283 => 70,  278 => 207,  268 => 107,  264 => 2,  258 => 81,  252 => 184,  247 => 105,  241 => 31,  229 => 73,  220 => 70,  214 => 69,  177 => 54,  169 => 58,  140 => 53,  132 => 44,  128 => 44,  107 => 40,  61 => 28,  273 => 235,  269 => 96,  254 => 60,  243 => 98,  240 => 88,  238 => 85,  235 => 74,  230 => 82,  227 => 108,  224 => 155,  221 => 79,  219 => 84,  217 => 185,  208 => 72,  204 => 78,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  119 => 39,  102 => 39,  71 => 32,  67 => 31,  63 => 16,  59 => 29,  38 => 14,  94 => 39,  89 => 37,  85 => 28,  75 => 25,  68 => 24,  56 => 12,  87 => 29,  21 => 11,  26 => 14,  93 => 21,  88 => 37,  78 => 21,  46 => 9,  27 => 14,  44 => 20,  31 => 23,  28 => 22,  201 => 80,  196 => 65,  183 => 87,  171 => 50,  166 => 57,  163 => 60,  158 => 62,  156 => 41,  151 => 61,  142 => 58,  138 => 57,  136 => 58,  121 => 42,  117 => 50,  105 => 39,  91 => 39,  62 => 25,  49 => 28,  24 => 13,  25 => 12,  19 => 11,  79 => 33,  72 => 19,  69 => 32,  47 => 14,  40 => 24,  37 => 24,  22 => 11,  246 => 54,  157 => 58,  145 => 56,  139 => 59,  131 => 45,  123 => 48,  120 => 48,  115 => 40,  111 => 41,  108 => 42,  101 => 37,  98 => 38,  96 => 19,  83 => 35,  74 => 19,  66 => 17,  55 => 24,  52 => 24,  50 => 15,  43 => 25,  41 => 19,  35 => 17,  32 => 3,  29 => 2,  209 => 24,  203 => 92,  199 => 97,  193 => 135,  189 => 71,  187 => 60,  182 => 69,  176 => 102,  173 => 71,  168 => 72,  164 => 54,  162 => 104,  154 => 40,  149 => 62,  147 => 46,  144 => 45,  141 => 48,  133 => 51,  130 => 57,  125 => 40,  122 => 74,  116 => 47,  112 => 47,  109 => 45,  106 => 35,  103 => 41,  99 => 50,  95 => 37,  92 => 28,  86 => 25,  82 => 23,  80 => 42,  73 => 24,  64 => 28,  60 => 15,  57 => 14,  54 => 26,  51 => 29,  48 => 15,  45 => 26,  42 => 19,  39 => 25,  36 => 17,  33 => 16,  30 => 15,);
    }
}
