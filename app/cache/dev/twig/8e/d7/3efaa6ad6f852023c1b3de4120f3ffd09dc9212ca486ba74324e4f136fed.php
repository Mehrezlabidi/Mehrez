<?php

/* SonataAdminBundle:CRUD:batch_confirmation.html.twig */
class __TwigTemplate_8ed73efaa6ad6f852023c1b3de4120f3ffd09dc9212ca486ba74324e4f136fed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
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
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 18
        echo "    </div>
";
    }

    // line 21
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "    <div class=\"sonata-ba-delete\">
        <h1>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_batch_confirmation", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h1>

        ";
        // line 27
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "all_elements")) {
            // line 28
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_batch_all_confirmation", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        ";
        } else {
            // line 30
            echo "            ";
            echo $this->env->getExtension('translator')->getTranslator()->transChoice("message_batch_confirmation", twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "idx")), array("%count%" => twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "idx"))), "SonataAdminBundle");
            // line 31
            echo "        ";
        }
        // line 32
        echo "
        <div class=\"well well-small form-actions\">
            <form action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters"))), "method"), "html", null, true);
        echo "\" method=\"POST\" >
                <input type=\"hidden\" name=\"confirmation\" value=\"ok\" />
                <input type=\"hidden\" name=\"data\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))), "html", null, true);
        echo "\" />
                <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                <div style=\"display: none\">
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </div>

                <button type=\"submit\" class=\"btn btn-danger\"><i class=\"icon-trash icon-white\"></i> ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_execute_batch_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>

                ";
        // line 45
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 46
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                    <a class=\"btn btn-success\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
                        <i class=\"icon-th-list icon-white\"></i> ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 52
        echo "            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:batch_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 180,  561 => 178,  557 => 177,  549 => 174,  538 => 170,  521 => 162,  511 => 160,  508 => 159,  504 => 158,  499 => 156,  487 => 152,  477 => 150,  467 => 134,  463 => 133,  446 => 122,  441 => 105,  410 => 96,  392 => 83,  388 => 107,  380 => 83,  369 => 136,  324 => 116,  307 => 115,  291 => 109,  275 => 77,  226 => 67,  205 => 59,  352 => 121,  340 => 90,  332 => 88,  330 => 87,  320 => 84,  313 => 82,  310 => 81,  302 => 114,  287 => 72,  280 => 79,  249 => 70,  223 => 66,  216 => 25,  188 => 21,  23 => 11,  12 => 34,  58 => 22,  358 => 139,  351 => 135,  338 => 130,  327 => 86,  319 => 124,  315 => 83,  301 => 117,  299 => 116,  293 => 75,  289 => 112,  277 => 68,  271 => 66,  262 => 63,  251 => 101,  148 => 44,  253 => 1,  233 => 81,  212 => 74,  198 => 66,  192 => 55,  185 => 20,  165 => 64,  113 => 48,  97 => 31,  213 => 82,  239 => 97,  236 => 102,  232 => 101,  84 => 36,  124 => 43,  118 => 46,  76 => 32,  70 => 23,  184 => 76,  202 => 77,  195 => 96,  186 => 54,  114 => 46,  210 => 73,  153 => 48,  20 => 11,  502 => 398,  492 => 154,  449 => 123,  442 => 350,  426 => 102,  401 => 324,  394 => 320,  377 => 82,  370 => 100,  357 => 125,  353 => 294,  346 => 92,  329 => 279,  286 => 242,  282 => 80,  274 => 236,  270 => 4,  34 => 16,  242 => 112,  231 => 109,  200 => 91,  180 => 104,  174 => 53,  172 => 52,  160 => 48,  129 => 42,  127 => 34,  110 => 36,  265 => 64,  245 => 173,  152 => 63,  995 => 544,  989 => 448,  983 => 197,  977 => 121,  971 => 86,  964 => 24,  960 => 23,  955 => 21,  951 => 20,  947 => 19,  943 => 18,  939 => 17,  935 => 16,  931 => 15,  928 => 14,  924 => 12,  921 => 11,  861 => 10,  781 => 9,  775 => 6,  771 => 4,  768 => 3,  754 => 545,  752 => 544,  737 => 532,  730 => 528,  700 => 501,  678 => 482,  669 => 476,  660 => 470,  653 => 466,  645 => 461,  637 => 456,  628 => 449,  624 => 448,  618 => 446,  608 => 439,  598 => 432,  592 => 429,  584 => 424,  570 => 413,  562 => 408,  544 => 172,  534 => 386,  517 => 161,  503 => 361,  493 => 354,  486 => 350,  478 => 345,  470 => 135,  460 => 132,  452 => 328,  421 => 303,  411 => 296,  405 => 325,  390 => 284,  382 => 93,  356 => 262,  345 => 254,  321 => 236,  290 => 214,  281 => 110,  267 => 197,  256 => 189,  248 => 100,  167 => 48,  146 => 73,  65 => 25,  386 => 95,  378 => 133,  361 => 127,  354 => 123,  344 => 117,  333 => 117,  323 => 125,  316 => 111,  306 => 224,  304 => 79,  295 => 105,  292 => 103,  272 => 76,  260 => 62,  257 => 61,  250 => 90,  244 => 180,  234 => 110,  222 => 81,  218 => 79,  215 => 160,  211 => 81,  197 => 56,  175 => 53,  150 => 58,  126 => 55,  297 => 218,  266 => 95,  225 => 87,  181 => 118,  178 => 72,  137 => 47,  104 => 42,  90 => 20,  81 => 30,  77 => 13,  646 => 414,  641 => 413,  636 => 412,  631 => 411,  626 => 410,  621 => 447,  616 => 407,  611 => 406,  606 => 405,  601 => 404,  596 => 403,  591 => 402,  548 => 415,  545 => 414,  542 => 413,  539 => 412,  536 => 169,  533 => 410,  530 => 165,  528 => 408,  525 => 407,  522 => 406,  519 => 405,  516 => 404,  513 => 403,  510 => 402,  494 => 388,  484 => 381,  433 => 339,  419 => 98,  415 => 97,  408 => 323,  395 => 84,  391 => 312,  371 => 132,  367 => 131,  347 => 118,  343 => 91,  336 => 278,  300 => 113,  296 => 111,  288 => 108,  284 => 101,  228 => 88,  206 => 71,  190 => 77,  161 => 56,  134 => 56,  100 => 43,  53 => 24,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 344,  440 => 343,  437 => 316,  435 => 146,  430 => 103,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 95,  402 => 130,  398 => 289,  393 => 126,  387 => 122,  384 => 308,  381 => 310,  379 => 119,  374 => 81,  368 => 131,  365 => 141,  362 => 110,  360 => 293,  355 => 122,  341 => 131,  337 => 249,  322 => 275,  314 => 99,  312 => 110,  309 => 120,  305 => 119,  298 => 91,  294 => 90,  285 => 81,  283 => 70,  278 => 207,  268 => 107,  264 => 72,  258 => 81,  252 => 91,  247 => 105,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 54,  169 => 51,  140 => 41,  132 => 44,  128 => 44,  107 => 46,  61 => 27,  273 => 96,  269 => 75,  254 => 60,  243 => 68,  240 => 88,  238 => 206,  235 => 74,  230 => 82,  227 => 108,  224 => 155,  221 => 79,  219 => 84,  217 => 75,  208 => 60,  204 => 78,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  119 => 31,  102 => 142,  71 => 30,  63 => 28,  59 => 26,  93 => 138,  88 => 37,  78 => 29,  38 => 14,  94 => 40,  89 => 17,  85 => 37,  68 => 26,  56 => 25,  87 => 29,  21 => 11,  26 => 12,  75 => 32,  67 => 30,  46 => 9,  27 => 14,  44 => 21,  31 => 15,  28 => 14,  201 => 57,  196 => 65,  183 => 87,  171 => 59,  166 => 50,  163 => 49,  158 => 62,  156 => 41,  151 => 45,  142 => 42,  138 => 57,  136 => 39,  121 => 42,  117 => 49,  105 => 45,  91 => 75,  62 => 27,  49 => 23,  24 => 12,  25 => 13,  19 => 11,  79 => 34,  72 => 31,  69 => 30,  47 => 22,  40 => 13,  37 => 18,  22 => 12,  246 => 69,  157 => 47,  145 => 43,  139 => 59,  131 => 45,  123 => 52,  120 => 48,  115 => 40,  111 => 30,  108 => 144,  101 => 37,  98 => 140,  96 => 139,  83 => 15,  74 => 19,  66 => 28,  55 => 25,  52 => 24,  50 => 23,  43 => 20,  41 => 19,  35 => 20,  32 => 3,  29 => 14,  209 => 24,  203 => 92,  199 => 97,  193 => 135,  189 => 71,  187 => 60,  182 => 69,  176 => 102,  173 => 71,  168 => 72,  164 => 54,  162 => 104,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 48,  133 => 51,  130 => 35,  125 => 40,  122 => 74,  116 => 30,  112 => 47,  109 => 45,  106 => 35,  103 => 41,  99 => 23,  95 => 19,  92 => 39,  86 => 65,  82 => 36,  80 => 14,  73 => 27,  64 => 28,  60 => 19,  57 => 26,  54 => 26,  51 => 29,  48 => 15,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 16,  30 => 15,);
    }
}