<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig */
class __TwigTemplate_3dcb40a5171dac242645a025ba683c8ecb6ba059682a3573a42472ddb16814df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        if ((!$this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "hasassociationadmin"))) {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description")), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "inline")) {
            // line 15
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "formfielddescriptions"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 16
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children"), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name"), array(), "array"), 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 20
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list")) {
                // line 21
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" class=\"field-short-description\">
                ";
                // line 22
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value")), "method")) {
                    // line 23
                    echo "                    ";
                    echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "uniqid"), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "link_parameters"))), array());
                    // line 29
                    echo "                ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "placeholder"))) {
                    // line 30
                    echo "                    <span class=\"inner-field-short-description\">
                        ";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "placeholder"), array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                    </span>
                ";
                }
                // line 34
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 36
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
                echo "
            </span>
        ";
            } else {
                // line 39
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" >
                ";
                // line 40
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
                echo "
            </span>
        ";
            }
            // line 43
            echo "
        <span id=\"field_actions_";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"field-actions\">
            <span class=\"btn-group\">
                ";
            // line 46
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasroute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")))) {
                // line 47
                echo "
                    <a  href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_list_";
                // line 49
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-small sonata-ba-action\"
                        title=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "\"
                        >
                        <i class=\"icon-list\"></i>
                        ";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 57
            echo "
                ";
            // line 58
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") != "admin") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")))) {
                // line 59
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                // line 60
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-small sonata-ba-action\"
                        title=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "\"
                        >
                        <i class=\"icon-plus\"></i>
                        ";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 68
            echo "            </span>

            ";
            // line 70
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")))) {
                // line 71
                echo "                <a  href=\"\"
                    onclick=\"return remove_selected_element_";
                // line 72
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "(this);\"
                    class=\"btn btn-small sonata-ba-action\"
                    title=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "\"
                    >
                    <i class=\"icon-off\"></i>
                    ";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 80
            echo "        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">

        </div>
    </div>

    ";
            // line 87
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 74,  406 => 158,  373 => 142,  364 => 139,  359 => 138,  155 => 53,  318 => 122,  279 => 104,  237 => 86,  694 => 412,  685 => 406,  680 => 403,  668 => 395,  654 => 389,  647 => 382,  643 => 381,  633 => 377,  617 => 367,  609 => 362,  599 => 355,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  550 => 326,  531 => 312,  518 => 307,  514 => 306,  509 => 304,  466 => 280,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  383 => 224,  366 => 140,  331 => 187,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  664 => 218,  658 => 391,  638 => 213,  632 => 211,  627 => 374,  587 => 200,  582 => 198,  578 => 196,  576 => 195,  569 => 183,  566 => 182,  526 => 310,  523 => 156,  506 => 151,  495 => 148,  491 => 147,  481 => 290,  475 => 141,  468 => 140,  459 => 137,  450 => 135,  447 => 134,  434 => 130,  420 => 249,  417 => 126,  396 => 234,  376 => 119,  363 => 114,  328 => 124,  325 => 73,  317 => 70,  303 => 65,  261 => 91,  194 => 87,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 203,  666 => 200,  663 => 393,  655 => 215,  652 => 214,  635 => 191,  613 => 204,  605 => 201,  602 => 185,  590 => 178,  585 => 347,  568 => 175,  551 => 174,  547 => 173,  512 => 152,  507 => 157,  505 => 156,  498 => 149,  483 => 144,  473 => 150,  465 => 139,  462 => 138,  456 => 273,  451 => 141,  428 => 129,  425 => 128,  414 => 125,  403 => 157,  400 => 161,  349 => 133,  342 => 129,  339 => 100,  326 => 185,  311 => 89,  263 => 71,  191 => 69,  335 => 188,  259 => 70,  572 => 193,  561 => 174,  557 => 330,  549 => 174,  538 => 319,  521 => 162,  511 => 160,  508 => 159,  504 => 302,  499 => 156,  487 => 152,  477 => 150,  467 => 148,  463 => 133,  446 => 139,  441 => 105,  410 => 96,  392 => 83,  388 => 124,  380 => 83,  369 => 141,  324 => 92,  307 => 66,  291 => 169,  275 => 103,  226 => 67,  205 => 59,  352 => 135,  340 => 95,  332 => 125,  330 => 87,  320 => 84,  313 => 82,  310 => 81,  302 => 114,  287 => 72,  280 => 101,  249 => 67,  223 => 58,  216 => 28,  188 => 174,  23 => 18,  12 => 34,  58 => 22,  358 => 113,  351 => 135,  338 => 76,  327 => 86,  319 => 71,  315 => 118,  301 => 111,  299 => 112,  293 => 109,  289 => 59,  277 => 100,  271 => 55,  262 => 63,  251 => 101,  148 => 64,  253 => 95,  233 => 62,  212 => 74,  198 => 69,  192 => 65,  185 => 68,  165 => 72,  113 => 41,  97 => 63,  213 => 126,  239 => 83,  236 => 35,  232 => 84,  84 => 39,  124 => 41,  118 => 28,  76 => 57,  70 => 23,  184 => 63,  202 => 77,  195 => 68,  186 => 82,  114 => 71,  210 => 75,  153 => 56,  20 => 11,  502 => 155,  492 => 295,  449 => 123,  442 => 350,  426 => 102,  401 => 156,  394 => 152,  377 => 115,  370 => 100,  357 => 125,  353 => 294,  346 => 196,  329 => 95,  286 => 80,  282 => 79,  274 => 98,  270 => 4,  34 => 26,  242 => 140,  231 => 33,  200 => 70,  180 => 62,  174 => 60,  172 => 52,  160 => 70,  129 => 57,  127 => 56,  110 => 77,  265 => 99,  245 => 173,  152 => 92,  995 => 544,  989 => 448,  983 => 197,  977 => 121,  971 => 86,  964 => 24,  960 => 23,  955 => 21,  951 => 20,  947 => 19,  943 => 18,  939 => 17,  935 => 16,  931 => 15,  928 => 14,  924 => 12,  921 => 11,  861 => 10,  781 => 9,  775 => 6,  771 => 4,  768 => 3,  754 => 545,  752 => 544,  737 => 532,  730 => 186,  700 => 501,  678 => 398,  669 => 221,  660 => 470,  653 => 466,  645 => 461,  637 => 378,  628 => 449,  624 => 448,  618 => 190,  608 => 202,  598 => 432,  592 => 351,  584 => 199,  570 => 413,  562 => 408,  544 => 172,  534 => 386,  517 => 155,  503 => 361,  493 => 354,  486 => 292,  478 => 142,  470 => 135,  460 => 132,  452 => 272,  421 => 303,  411 => 296,  405 => 325,  390 => 150,  382 => 93,  356 => 262,  345 => 97,  321 => 123,  290 => 106,  281 => 105,  267 => 94,  256 => 89,  248 => 100,  167 => 48,  146 => 49,  65 => 30,  386 => 95,  378 => 144,  361 => 208,  354 => 123,  344 => 97,  333 => 117,  323 => 125,  316 => 121,  306 => 224,  304 => 174,  295 => 88,  292 => 87,  272 => 158,  260 => 98,  257 => 149,  250 => 93,  244 => 85,  234 => 80,  222 => 81,  218 => 79,  215 => 74,  211 => 81,  197 => 70,  175 => 77,  150 => 65,  126 => 42,  297 => 84,  266 => 95,  225 => 77,  181 => 80,  178 => 119,  137 => 46,  104 => 67,  90 => 27,  81 => 30,  77 => 27,  646 => 414,  641 => 413,  636 => 412,  631 => 411,  626 => 410,  621 => 206,  616 => 407,  611 => 203,  606 => 405,  601 => 404,  596 => 181,  591 => 402,  548 => 165,  545 => 414,  542 => 321,  539 => 162,  536 => 161,  533 => 169,  530 => 158,  528 => 167,  525 => 166,  522 => 406,  519 => 405,  516 => 161,  513 => 403,  510 => 158,  494 => 388,  484 => 381,  433 => 339,  419 => 98,  415 => 247,  408 => 124,  395 => 84,  391 => 312,  371 => 113,  367 => 131,  347 => 102,  343 => 91,  336 => 126,  300 => 113,  296 => 109,  288 => 107,  284 => 106,  228 => 78,  206 => 71,  190 => 175,  161 => 71,  134 => 59,  100 => 36,  53 => 20,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 131,  453 => 136,  444 => 132,  440 => 343,  437 => 131,  435 => 258,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 170,  398 => 119,  393 => 158,  387 => 122,  384 => 147,  381 => 121,  379 => 119,  374 => 114,  368 => 131,  365 => 141,  362 => 110,  360 => 293,  355 => 136,  341 => 131,  337 => 249,  322 => 275,  314 => 99,  312 => 177,  309 => 117,  305 => 115,  298 => 173,  294 => 90,  285 => 84,  283 => 102,  278 => 207,  268 => 54,  264 => 72,  258 => 81,  252 => 88,  247 => 66,  241 => 84,  229 => 73,  220 => 80,  214 => 61,  177 => 61,  169 => 57,  140 => 28,  132 => 58,  128 => 47,  107 => 24,  61 => 25,  273 => 96,  269 => 100,  254 => 68,  243 => 89,  240 => 88,  238 => 139,  235 => 74,  230 => 82,  227 => 134,  224 => 155,  221 => 75,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 48,  135 => 81,  119 => 43,  102 => 38,  71 => 29,  63 => 50,  59 => 23,  93 => 34,  88 => 60,  78 => 36,  38 => 17,  94 => 86,  89 => 40,  85 => 34,  68 => 31,  56 => 24,  87 => 33,  21 => 12,  26 => 13,  75 => 31,  67 => 27,  46 => 35,  27 => 16,  44 => 21,  31 => 22,  28 => 13,  201 => 72,  196 => 52,  183 => 121,  171 => 63,  166 => 100,  163 => 49,  158 => 37,  156 => 68,  151 => 45,  142 => 61,  138 => 50,  136 => 39,  121 => 53,  117 => 51,  105 => 47,  91 => 85,  62 => 29,  49 => 20,  24 => 13,  25 => 12,  19 => 11,  79 => 31,  72 => 56,  69 => 50,  47 => 19,  40 => 44,  37 => 12,  22 => 12,  246 => 86,  157 => 41,  145 => 52,  139 => 60,  131 => 48,  123 => 54,  120 => 46,  115 => 50,  111 => 40,  108 => 48,  101 => 73,  98 => 44,  96 => 40,  83 => 82,  74 => 34,  66 => 23,  55 => 22,  52 => 21,  50 => 20,  43 => 18,  41 => 14,  35 => 16,  32 => 15,  29 => 21,  209 => 73,  203 => 71,  199 => 53,  193 => 51,  189 => 64,  187 => 49,  182 => 80,  176 => 77,  173 => 112,  168 => 60,  164 => 72,  162 => 71,  154 => 67,  149 => 50,  147 => 90,  144 => 62,  141 => 94,  133 => 49,  130 => 57,  125 => 45,  122 => 44,  116 => 43,  112 => 49,  109 => 40,  106 => 35,  103 => 46,  99 => 30,  95 => 43,  92 => 61,  86 => 64,  82 => 33,  80 => 9,  73 => 29,  64 => 26,  60 => 25,  57 => 22,  54 => 154,  51 => 38,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 16,  30 => 15,);
    }
}
