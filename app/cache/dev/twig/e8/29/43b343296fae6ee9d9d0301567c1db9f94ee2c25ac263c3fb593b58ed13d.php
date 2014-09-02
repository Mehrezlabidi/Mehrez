<?php

/* SonataAdminBundle:CRUD:base_history.html.twig */
class __TwigTemplate_e82943b343296fae6ee9d9d0301567c1db9f94ee2c25ac263c3fb593b58ed13d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
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
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "
    <div class=\"span5\">
        <table class=\"table\" id=\"revisions\">
            <thead>
                <tr>
                    <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_revision", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_timestamp", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 37
            echo "                    <tr>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "rev"), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "history_revision_timestamp"), "method"));
            $template->display($context);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "username"), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history_view_revision", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => array("revision" => $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "rev"))), "method"), "html", null, true);
            echo "\" class=\"revision-link\" rel=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "rev"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_view_revision", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a></td>
                    </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </tbody>
        </table>
    </div>
    <div id=\"revision-detail\" class=\"span7 revision-detail\">

    </div>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {

            jQuery('a.revision-link').bind('click', function(event) {
                event.stopPropagation();
                event.preventDefault();

                jQuery('#revision-detail').html('');
                jQuery('table#revisions tbody tr').removeClass('current');
                jQuery(this).parent('').removeClass('current');

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    dataType: 'html',
                    success: function(data) {
                        jQuery('#revision-detail').html(data);
                    }
                });

                return false;
            })
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 94,  340 => 90,  332 => 88,  330 => 87,  320 => 84,  313 => 82,  310 => 81,  302 => 78,  287 => 72,  280 => 69,  249 => 55,  223 => 27,  216 => 25,  188 => 21,  23 => 1,  12 => 34,  58 => 22,  358 => 139,  351 => 135,  338 => 130,  327 => 86,  319 => 124,  315 => 83,  301 => 117,  299 => 116,  293 => 75,  289 => 112,  277 => 68,  271 => 66,  262 => 63,  251 => 101,  148 => 60,  253 => 1,  233 => 81,  212 => 74,  198 => 66,  192 => 23,  185 => 20,  165 => 64,  113 => 39,  97 => 31,  213 => 82,  239 => 97,  236 => 102,  232 => 101,  84 => 28,  124 => 43,  118 => 46,  76 => 32,  70 => 23,  184 => 76,  202 => 77,  195 => 96,  186 => 90,  114 => 71,  210 => 73,  153 => 48,  20 => 1,  502 => 398,  492 => 391,  449 => 354,  442 => 350,  426 => 340,  401 => 324,  394 => 320,  377 => 309,  370 => 100,  357 => 295,  353 => 294,  346 => 92,  329 => 279,  286 => 242,  282 => 241,  274 => 236,  270 => 4,  34 => 16,  242 => 112,  231 => 109,  200 => 91,  180 => 104,  174 => 60,  172 => 51,  160 => 52,  129 => 42,  127 => 54,  110 => 36,  265 => 64,  245 => 173,  152 => 63,  995 => 544,  989 => 448,  983 => 197,  977 => 121,  971 => 86,  964 => 24,  960 => 23,  955 => 21,  951 => 20,  947 => 19,  943 => 18,  939 => 17,  935 => 16,  931 => 15,  928 => 14,  924 => 12,  921 => 11,  861 => 10,  781 => 9,  775 => 6,  771 => 4,  768 => 3,  754 => 545,  752 => 544,  737 => 532,  730 => 528,  700 => 501,  678 => 482,  669 => 476,  660 => 470,  653 => 466,  645 => 461,  637 => 456,  628 => 449,  624 => 448,  618 => 446,  608 => 439,  598 => 432,  592 => 429,  584 => 424,  570 => 413,  562 => 408,  544 => 393,  534 => 386,  517 => 372,  503 => 361,  493 => 354,  486 => 350,  478 => 345,  470 => 340,  460 => 333,  452 => 328,  421 => 303,  411 => 296,  405 => 325,  390 => 284,  382 => 279,  356 => 262,  345 => 254,  321 => 236,  290 => 214,  281 => 110,  267 => 197,  256 => 189,  248 => 100,  167 => 48,  146 => 73,  65 => 15,  386 => 135,  378 => 133,  361 => 97,  354 => 123,  344 => 117,  333 => 280,  323 => 125,  316 => 111,  306 => 224,  304 => 79,  295 => 105,  292 => 103,  272 => 97,  260 => 62,  257 => 61,  250 => 90,  244 => 180,  234 => 110,  222 => 81,  218 => 79,  215 => 160,  211 => 81,  197 => 74,  175 => 53,  150 => 58,  126 => 55,  297 => 218,  266 => 95,  225 => 87,  181 => 118,  178 => 72,  137 => 47,  104 => 42,  90 => 20,  81 => 27,  77 => 20,  646 => 414,  641 => 413,  636 => 412,  631 => 411,  626 => 410,  621 => 447,  616 => 407,  611 => 406,  606 => 405,  601 => 404,  596 => 403,  591 => 402,  548 => 415,  545 => 414,  542 => 413,  539 => 412,  536 => 411,  533 => 410,  530 => 409,  528 => 408,  525 => 407,  522 => 406,  519 => 405,  516 => 404,  513 => 403,  510 => 402,  494 => 388,  484 => 381,  433 => 339,  419 => 336,  415 => 327,  408 => 323,  395 => 313,  391 => 312,  371 => 132,  367 => 99,  347 => 134,  343 => 91,  336 => 278,  300 => 245,  296 => 76,  288 => 239,  284 => 101,  228 => 88,  206 => 71,  190 => 77,  161 => 56,  134 => 56,  100 => 36,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 344,  440 => 343,  437 => 316,  435 => 146,  430 => 341,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 289,  393 => 126,  387 => 122,  384 => 308,  381 => 310,  379 => 119,  374 => 274,  368 => 131,  365 => 141,  362 => 110,  360 => 293,  355 => 95,  341 => 131,  337 => 249,  322 => 275,  314 => 99,  312 => 110,  309 => 120,  305 => 119,  298 => 91,  294 => 90,  285 => 111,  283 => 70,  278 => 207,  268 => 107,  264 => 2,  258 => 81,  252 => 91,  247 => 105,  241 => 31,  229 => 73,  220 => 70,  214 => 185,  177 => 54,  169 => 58,  140 => 53,  132 => 44,  128 => 44,  107 => 40,  61 => 28,  273 => 96,  269 => 198,  254 => 60,  243 => 98,  240 => 88,  238 => 206,  235 => 74,  230 => 82,  227 => 108,  224 => 155,  221 => 79,  219 => 84,  217 => 75,  208 => 72,  204 => 78,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  119 => 39,  102 => 39,  71 => 32,  63 => 30,  59 => 29,  93 => 21,  88 => 37,  78 => 36,  38 => 18,  94 => 39,  89 => 37,  85 => 28,  68 => 24,  56 => 12,  87 => 29,  21 => 11,  26 => 14,  75 => 25,  67 => 31,  46 => 9,  27 => 14,  44 => 20,  31 => 23,  28 => 22,  201 => 80,  196 => 65,  183 => 87,  171 => 59,  166 => 57,  163 => 60,  158 => 62,  156 => 41,  151 => 61,  142 => 58,  138 => 57,  136 => 58,  121 => 42,  117 => 50,  105 => 39,  91 => 39,  62 => 25,  49 => 23,  24 => 13,  25 => 12,  19 => 11,  79 => 33,  72 => 30,  69 => 32,  47 => 14,  40 => 6,  37 => 24,  22 => 12,  246 => 54,  157 => 58,  145 => 56,  139 => 59,  131 => 45,  123 => 48,  120 => 48,  115 => 40,  111 => 41,  108 => 42,  101 => 37,  98 => 38,  96 => 19,  83 => 35,  74 => 19,  66 => 30,  55 => 24,  52 => 24,  50 => 15,  43 => 21,  41 => 19,  35 => 17,  32 => 3,  29 => 2,  209 => 24,  203 => 92,  199 => 97,  193 => 135,  189 => 71,  187 => 60,  182 => 69,  176 => 102,  173 => 71,  168 => 72,  164 => 54,  162 => 104,  154 => 40,  149 => 62,  147 => 46,  144 => 45,  141 => 48,  133 => 51,  130 => 57,  125 => 40,  122 => 74,  116 => 47,  112 => 47,  109 => 45,  106 => 35,  103 => 41,  99 => 50,  95 => 37,  92 => 32,  86 => 17,  82 => 36,  80 => 42,  73 => 24,  64 => 28,  60 => 13,  57 => 18,  54 => 26,  51 => 16,  48 => 15,  45 => 14,  42 => 19,  39 => 25,  36 => 17,  33 => 16,  30 => 15,);
    }
}
