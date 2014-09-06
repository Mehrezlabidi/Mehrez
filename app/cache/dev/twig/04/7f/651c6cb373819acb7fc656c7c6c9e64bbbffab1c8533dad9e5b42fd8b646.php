<?php

/* SonataBlockBundle:Block:block_core_rss.html.twig */
class __TwigTemplate_047f651c6cb373819acb7fc656c7c6c9e64bbbffab1c8533dad9e5b42fd8b646 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <h3 class=\"sonata-feed-title\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title"), "html", null, true);
        echo "</h3>

    <div class=\"sonata-feeds-container\">
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) ? $context["feeds"] : $this->getContext($context, "feeds")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 18
            echo "            <div>
                <strong><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "link"), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "title"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "title"), "html", null, true);
            echo "</a></strong>
                <div>";
            // line 20
            echo $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "description");
            echo "</div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "                No feeds available.
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 81,  239 => 103,  236 => 102,  124 => 78,  118 => 55,  76 => 41,  70 => 33,  184 => 76,  202 => 98,  195 => 96,  186 => 90,  114 => 71,  153 => 101,  155 => 37,  20 => 11,  527 => 417,  471 => 367,  452 => 354,  445 => 350,  433 => 341,  429 => 340,  422 => 336,  404 => 324,  397 => 320,  380 => 309,  373 => 305,  356 => 294,  332 => 279,  289 => 242,  277 => 236,  213 => 152,  58 => 19,  34 => 7,  231 => 109,  200 => 91,  180 => 86,  174 => 84,  172 => 117,  129 => 58,  127 => 84,  110 => 48,  265 => 190,  245 => 173,  152 => 76,  1034 => 544,  1028 => 448,  1022 => 197,  1016 => 121,  1010 => 86,  1003 => 24,  999 => 23,  994 => 21,  990 => 20,  986 => 19,  982 => 18,  978 => 17,  974 => 16,  970 => 15,  967 => 14,  963 => 12,  960 => 11,  875 => 10,  785 => 9,  779 => 6,  775 => 4,  772 => 3,  758 => 545,  756 => 544,  741 => 532,  734 => 528,  704 => 501,  682 => 482,  673 => 476,  657 => 466,  641 => 456,  632 => 449,  628 => 448,  625 => 447,  622 => 446,  612 => 439,  602 => 432,  596 => 429,  588 => 424,  574 => 413,  566 => 408,  538 => 386,  521 => 372,  497 => 354,  490 => 350,  482 => 345,  464 => 333,  441 => 316,  425 => 303,  394 => 284,  349 => 290,  325 => 275,  310 => 224,  301 => 218,  271 => 197,  242 => 112,  232 => 101,  210 => 84,  160 => 79,  146 => 31,  84 => 46,  65 => 53,  386 => 279,  378 => 274,  361 => 124,  354 => 123,  344 => 117,  333 => 115,  323 => 112,  316 => 111,  306 => 108,  304 => 107,  295 => 105,  292 => 103,  272 => 97,  260 => 189,  257 => 92,  250 => 90,  244 => 180,  234 => 110,  222 => 81,  218 => 162,  215 => 160,  211 => 77,  197 => 68,  175 => 83,  150 => 67,  126 => 76,  297 => 106,  266 => 95,  225 => 166,  181 => 118,  178 => 72,  137 => 25,  104 => 55,  90 => 53,  81 => 38,  77 => 27,  669 => 428,  664 => 470,  659 => 426,  654 => 425,  649 => 461,  644 => 423,  639 => 421,  634 => 420,  629 => 419,  624 => 418,  619 => 417,  614 => 416,  571 => 429,  568 => 428,  565 => 427,  562 => 426,  559 => 425,  556 => 424,  553 => 423,  551 => 422,  548 => 393,  545 => 420,  542 => 419,  539 => 418,  536 => 417,  533 => 416,  517 => 410,  507 => 361,  467 => 358,  463 => 357,  456 => 355,  443 => 343,  439 => 342,  432 => 338,  419 => 328,  415 => 296,  408 => 325,  395 => 313,  391 => 312,  371 => 270,  367 => 297,  347 => 119,  343 => 282,  336 => 280,  300 => 245,  296 => 218,  288 => 239,  284 => 101,  228 => 188,  206 => 144,  190 => 77,  161 => 56,  134 => 85,  100 => 43,  53 => 19,  480 => 162,  474 => 340,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 293,  407 => 131,  402 => 289,  398 => 129,  393 => 126,  387 => 122,  384 => 310,  381 => 120,  379 => 119,  374 => 116,  368 => 131,  365 => 111,  362 => 110,  360 => 295,  355 => 106,  341 => 249,  337 => 116,  322 => 101,  314 => 99,  312 => 110,  309 => 97,  305 => 95,  298 => 91,  294 => 214,  285 => 241,  283 => 88,  278 => 207,  268 => 85,  264 => 84,  258 => 81,  252 => 184,  247 => 105,  241 => 177,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 114,  140 => 50,  132 => 59,  128 => 63,  107 => 52,  61 => 29,  273 => 235,  269 => 96,  254 => 92,  243 => 88,  240 => 88,  238 => 85,  235 => 74,  230 => 82,  227 => 108,  224 => 155,  221 => 93,  219 => 103,  217 => 185,  208 => 142,  204 => 81,  179 => 118,  159 => 69,  143 => 97,  135 => 67,  119 => 61,  102 => 51,  71 => 54,  67 => 25,  63 => 31,  59 => 27,  38 => 12,  94 => 47,  89 => 52,  85 => 29,  75 => 17,  68 => 35,  56 => 23,  87 => 47,  21 => 2,  26 => 13,  93 => 28,  88 => 45,  78 => 43,  46 => 21,  27 => 13,  44 => 19,  31 => 8,  28 => 4,  201 => 80,  196 => 90,  183 => 87,  171 => 50,  166 => 81,  163 => 62,  158 => 77,  156 => 104,  151 => 96,  142 => 65,  138 => 62,  136 => 56,  121 => 75,  117 => 44,  105 => 65,  91 => 28,  62 => 23,  49 => 19,  24 => 4,  25 => 12,  19 => 1,  79 => 18,  72 => 34,  69 => 23,  47 => 9,  40 => 14,  37 => 10,  22 => 2,  246 => 174,  157 => 56,  145 => 46,  139 => 45,  131 => 82,  123 => 62,  120 => 94,  115 => 72,  111 => 56,  108 => 56,  101 => 25,  98 => 24,  96 => 50,  83 => 43,  74 => 24,  66 => 34,  55 => 25,  52 => 20,  50 => 44,  43 => 17,  41 => 18,  35 => 5,  32 => 12,  29 => 14,  209 => 95,  203 => 92,  199 => 97,  193 => 135,  189 => 88,  187 => 84,  182 => 119,  176 => 64,  173 => 71,  168 => 72,  164 => 80,  162 => 104,  154 => 68,  149 => 71,  147 => 66,  144 => 72,  141 => 48,  133 => 84,  130 => 81,  125 => 79,  122 => 74,  116 => 58,  112 => 54,  109 => 59,  106 => 55,  103 => 44,  99 => 50,  95 => 28,  92 => 46,  86 => 46,  82 => 44,  80 => 42,  73 => 36,  64 => 30,  60 => 23,  57 => 28,  54 => 26,  51 => 22,  48 => 21,  45 => 18,  42 => 18,  39 => 8,  36 => 17,  33 => 5,  30 => 7,);
    }
}
