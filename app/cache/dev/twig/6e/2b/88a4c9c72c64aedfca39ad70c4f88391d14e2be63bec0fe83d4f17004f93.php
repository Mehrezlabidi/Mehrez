<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig */
class __TwigTemplate_6e2b88a4c9c72c64aedfca39ad70c4f88391d14e2be63bec0fe83d4f17004f93 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "hasassociationadmin", array())) {
            // line 12
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" >
            ";
            // line 14
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array()) == "inline")) {
                // line 15
                echo "                ";
                if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline", array()) == "table")) {
                    // line 16
                    echo "                    ";
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array())) > 0)) {
                        // line 17
                        echo "                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    ";
                        // line 20
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), 0, array(), "array"), "children", array()));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 21
                            echo "                                        ";
                            if (((isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")) == "_delete")) {
                                // line 22
                                echo "                                            <th>";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
                                echo "</th>
                                        ";
                            } else {
                                // line 24
                                echo "                                            <th ";
                                echo (($this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : $this->getContext($context, "nested_field")), "vars", array()), "required", array(), "array")) ? ("class=\"required\"") : (""));
                                echo ">
                                                ";
                                // line 25
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : $this->getContext($context, "nested_field")), "vars", array()), "sonata_admin", array(), "array"), "admin", array()), "trans", array(0 => $this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : $this->getContext($context, "nested_field")), "vars", array()), "label", array())), "method"), "html", null, true);
                                echo "
                                            </th>
                                        ";
                            }
                            // line 28
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 29
                        echo "                                </tr>
                            </thead>
                            <tbody class=\"sonata-ba-tbody\">
                                ";
                        // line 32
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
                        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                            // line 33
                            echo "                                    <tr>
                                        ";
                            // line 34
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["nested_group_field"]) ? $context["nested_group_field"] : $this->getContext($context, "nested_group_field")), "children", array()));
                            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                                // line 35
                                echo "                                            <td class=\"sonata-ba-td-";
                                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                                echo "-";
                                echo twig_escape_filter($this->env, (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), "html", null, true);
                                echo " control-group";
                                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : $this->getContext($context, "nested_field")), "vars", array()), "errors", array())) > 0)) {
                                    echo " error";
                                }
                                echo "\">
                                                ";
                                // line 36
                                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "associationadmin", array(), "any", false, true), "hasformfielddescriptions", array(0 => (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name"))), "method", true, true)) {
                                    // line 37
                                    echo "                                                    ";
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : $this->getContext($context, "nested_field")), 'widget');
                                    echo "

                                                    ";
                                    // line 39
                                    $context["dummy"] = $this->getAttribute((isset($context["nested_group_field"]) ? $context["nested_group_field"] : $this->getContext($context, "nested_group_field")), "setrendered", array());
                                    // line 40
                                    echo "                                                ";
                                } else {
                                    // line 41
                                    echo "                                                    ";
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : $this->getContext($context, "nested_field")), 'widget');
                                    echo "
                                                ";
                                }
                                // line 43
                                echo "                                                ";
                                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nested_field"]) ? $context["nested_field"] : $this->getContext($context, "nested_field")), "vars", array()), "errors", array())) > 0)) {
                                    // line 44
                                    echo "                                                    <div class=\"help-inline sonata-ba-field-error-messages\">
                                                        ";
                                    // line 45
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : $this->getContext($context, "nested_field")), 'errors');
                                    echo "
                                                    </div>
                                                ";
                                }
                                // line 48
                                echo "                                            </td>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 50
                            echo "                                    </tr>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 52
                        echo "                            </tbody>
                        </table>
                    ";
                    }
                    // line 55
                    echo "                ";
                } elseif ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array())) > 0)) {
                    // line 56
                    echo "                    <div>
                        ";
                    // line 57
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
                    foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                        // line 58
                        echo "                            ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["nested_group_field"]) ? $context["nested_group_field"] : $this->getContext($context, "nested_group_field")), "children", array()));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 59
                            echo "                                ";
                            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "associationadmin", array(), "any", false, true), "hasformfielddescriptions", array(0 => (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name"))), "method", true, true)) {
                                // line 60
                                echo "                                    ";
                                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : $this->getContext($context, "nested_field")), 'row', array("inline" => "natural", "edit" => "inline"));
                                // line 63
                                echo "
                                    ";
                                // line 64
                                $context["dummy"] = $this->getAttribute((isset($context["nested_group_field"]) ? $context["nested_group_field"] : $this->getContext($context, "nested_group_field")), "setrendered", array());
                                // line 65
                                echo "                                ";
                            } else {
                                // line 66
                                echo "                                    ";
                                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : $this->getContext($context, "nested_field")), 'row');
                                echo "
                                ";
                            }
                            // line 68
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 69
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 70
                    echo "                    </div>
                ";
                }
                // line 72
                echo "            ";
            } else {
                // line 73
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
                echo "
            ";
            }
            // line 75
            echo "
        </span>

        ";
            // line 78
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array()) == "inline")) {
                // line 79
                echo "
            ";
                // line 80
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")))) {
                    // line 81
                    echo "                <span id=\"field_actions_";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "\" >
                    <a
                        href=\"";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_retrieve_";
                    // line 84
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "(this);\"
                        class=\"btn sonata-ba-action\"
                        title=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                    echo "\"
                        >
                        <i class=\"icon-plus\"></i>
                        ";
                    // line 89
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                    echo "
                    </a>
                </span>
            ";
                }
                // line 93
                echo "
            ";
                // line 95
                echo "            ";
                $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig")->display($context);
                // line 96
                echo "
        ";
            } else {
                // line 98
                echo "            <div id=\"field_container_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" class=\"field-container\">
                <span id=\"field_widget_";
                // line 99
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" >
                    ";
                // line 100
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
                echo "
                </span>

                <span id=\"field_actions_";
                // line 103
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" class=\"field-actions\">
                    ";
                // line 104
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")))) {
                    // line 105
                    echo "                        <a
                            href=\"";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                            onclick=\"return start_field_dialog_form_add_";
                    // line 107
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "(this);\"
                            class=\"btn btn-small sonata-ba-action\"
                            title=\"";
                    // line 109
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                    echo "\"
                            >
                            <i class=\"icon-plus\"></i>
                            ";
                    // line 112
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                    echo "
                        </a>
                    ";
                }
                // line 115
                echo "                </span>

                <div style=\"display: none\" id=\"field_dialog_";
                // line 117
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\">
                </div>
            </div>

            ";
                // line 121
                $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
                // line 122
                echo "        ";
            }
            // line 123
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 103,  694 => 412,  685 => 406,  680 => 403,  678 => 398,  658 => 391,  647 => 382,  643 => 381,  633 => 377,  627 => 374,  617 => 367,  609 => 362,  599 => 355,  579 => 342,  567 => 337,  557 => 330,  550 => 326,  531 => 312,  526 => 310,  509 => 304,  504 => 302,  481 => 290,  466 => 280,  422 => 250,  420 => 249,  396 => 234,  835 => 271,  832 => 270,  827 => 265,  820 => 261,  814 => 258,  810 => 256,  808 => 255,  805 => 254,  799 => 252,  797 => 251,  794 => 250,  788 => 248,  786 => 247,  783 => 246,  777 => 244,  766 => 240,  764 => 239,  761 => 238,  754 => 192,  748 => 191,  739 => 188,  729 => 186,  726 => 185,  721 => 184,  718 => 183,  714 => 277,  712 => 270,  705 => 237,  701 => 236,  698 => 235,  692 => 232,  689 => 231,  687 => 230,  676 => 224,  671 => 222,  668 => 395,  651 => 214,  637 => 378,  631 => 211,  626 => 208,  620 => 206,  610 => 203,  607 => 202,  604 => 201,  586 => 200,  583 => 199,  581 => 345,  577 => 341,  575 => 195,  560 => 174,  529 => 158,  522 => 156,  511 => 152,  494 => 148,  485 => 145,  452 => 272,  436 => 131,  433 => 130,  424 => 254,  416 => 126,  399 => 161,  392 => 158,  389 => 125,  383 => 224,  380 => 121,  375 => 119,  331 => 187,  318 => 122,  267 => 156,  256 => 96,  237 => 86,  713 => 214,  707 => 267,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  666 => 200,  663 => 393,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  592 => 351,  590 => 178,  585 => 347,  547 => 165,  530 => 168,  528 => 167,  525 => 157,  516 => 155,  512 => 159,  510 => 158,  498 => 134,  486 => 292,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  446 => 134,  428 => 136,  403 => 121,  400 => 120,  388 => 117,  342 => 101,  339 => 100,  326 => 185,  324 => 73,  311 => 68,  307 => 87,  291 => 169,  191 => 69,  335 => 188,  321 => 123,  259 => 70,  569 => 180,  558 => 178,  554 => 177,  546 => 174,  541 => 163,  535 => 161,  527 => 165,  518 => 307,  514 => 306,  508 => 160,  505 => 151,  501 => 158,  496 => 156,  489 => 154,  484 => 152,  477 => 142,  471 => 149,  458 => 137,  455 => 131,  451 => 141,  448 => 123,  445 => 267,  429 => 255,  418 => 98,  414 => 127,  406 => 95,  385 => 95,  376 => 82,  373 => 81,  366 => 210,  356 => 125,  290 => 109,  279 => 104,  263 => 71,  226 => 32,  205 => 59,  352 => 94,  340 => 95,  332 => 97,  330 => 87,  320 => 84,  313 => 82,  302 => 65,  287 => 108,  280 => 82,  249 => 67,  223 => 58,  216 => 25,  188 => 21,  23 => 18,  12 => 34,  58 => 22,  358 => 106,  351 => 121,  338 => 94,  327 => 74,  319 => 90,  315 => 90,  299 => 112,  293 => 109,  289 => 81,  281 => 105,  277 => 78,  262 => 63,  251 => 101,  248 => 70,  148 => 97,  253 => 95,  233 => 62,  212 => 74,  198 => 66,  192 => 55,  185 => 68,  165 => 59,  113 => 41,  97 => 63,  167 => 48,  213 => 126,  239 => 97,  236 => 63,  124 => 23,  118 => 28,  76 => 13,  70 => 23,  184 => 173,  202 => 278,  195 => 96,  186 => 111,  114 => 71,  153 => 56,  20 => 11,  502 => 155,  492 => 295,  449 => 135,  442 => 350,  426 => 340,  405 => 325,  401 => 170,  377 => 115,  370 => 100,  357 => 113,  353 => 294,  346 => 196,  329 => 95,  286 => 80,  282 => 58,  274 => 57,  270 => 55,  34 => 53,  231 => 109,  200 => 182,  180 => 104,  174 => 64,  172 => 112,  129 => 24,  127 => 76,  110 => 40,  265 => 99,  245 => 173,  152 => 92,  1004 => 544,  998 => 448,  992 => 197,  986 => 121,  980 => 86,  973 => 24,  969 => 23,  964 => 21,  960 => 20,  956 => 19,  952 => 18,  948 => 17,  944 => 16,  940 => 15,  937 => 14,  933 => 12,  930 => 11,  870 => 10,  785 => 9,  779 => 6,  775 => 243,  772 => 242,  758 => 237,  756 => 544,  741 => 532,  734 => 187,  704 => 210,  682 => 227,  673 => 223,  657 => 216,  641 => 456,  632 => 449,  628 => 448,  625 => 447,  622 => 446,  612 => 204,  602 => 185,  596 => 181,  588 => 424,  574 => 413,  566 => 408,  538 => 319,  521 => 372,  497 => 149,  490 => 147,  482 => 144,  464 => 139,  441 => 316,  425 => 135,  394 => 118,  349 => 103,  325 => 236,  310 => 81,  301 => 114,  271 => 76,  242 => 140,  232 => 84,  210 => 75,  160 => 58,  146 => 34,  84 => 16,  65 => 5,  386 => 279,  378 => 274,  361 => 208,  354 => 112,  344 => 97,  333 => 280,  323 => 116,  316 => 121,  306 => 66,  304 => 174,  295 => 88,  292 => 61,  272 => 158,  260 => 98,  257 => 149,  250 => 93,  244 => 180,  234 => 110,  222 => 81,  218 => 29,  215 => 78,  211 => 81,  197 => 70,  175 => 43,  150 => 55,  126 => 55,  297 => 84,  266 => 95,  225 => 87,  181 => 47,  178 => 45,  137 => 27,  104 => 67,  90 => 27,  81 => 26,  77 => 27,  669 => 201,  664 => 470,  659 => 426,  654 => 389,  649 => 461,  644 => 423,  639 => 421,  634 => 420,  629 => 419,  624 => 418,  619 => 417,  614 => 416,  571 => 338,  568 => 183,  565 => 182,  562 => 426,  559 => 425,  556 => 169,  553 => 423,  551 => 174,  548 => 393,  545 => 420,  542 => 321,  539 => 171,  536 => 170,  533 => 169,  517 => 402,  507 => 157,  467 => 140,  463 => 357,  456 => 273,  443 => 261,  439 => 260,  432 => 338,  419 => 127,  415 => 247,  408 => 323,  395 => 159,  391 => 83,  371 => 113,  367 => 99,  347 => 102,  343 => 91,  336 => 99,  300 => 245,  296 => 76,  288 => 107,  284 => 106,  228 => 83,  206 => 71,  190 => 50,  161 => 38,  134 => 56,  100 => 36,  53 => 20,  480 => 143,  474 => 285,  469 => 158,  461 => 138,  457 => 153,  453 => 142,  444 => 149,  440 => 105,  437 => 147,  435 => 258,  430 => 137,  427 => 129,  423 => 128,  413 => 125,  409 => 124,  407 => 242,  402 => 289,  398 => 119,  393 => 126,  387 => 124,  384 => 116,  381 => 93,  379 => 83,  374 => 114,  368 => 115,  365 => 141,  362 => 114,  360 => 127,  355 => 105,  341 => 131,  337 => 76,  322 => 275,  314 => 99,  312 => 177,  309 => 117,  305 => 115,  298 => 173,  294 => 214,  285 => 84,  283 => 166,  278 => 207,  268 => 73,  264 => 72,  258 => 81,  252 => 47,  247 => 66,  241 => 31,  229 => 73,  220 => 80,  214 => 61,  177 => 119,  169 => 51,  140 => 28,  132 => 57,  128 => 47,  107 => 24,  61 => 25,  273 => 198,  269 => 100,  254 => 68,  243 => 89,  240 => 88,  238 => 139,  235 => 35,  230 => 33,  227 => 134,  224 => 155,  221 => 30,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 49,  143 => 29,  135 => 81,  119 => 43,  102 => 37,  71 => 29,  63 => 22,  59 => 23,  93 => 39,  88 => 60,  78 => 32,  38 => 17,  94 => 86,  89 => 35,  85 => 34,  68 => 6,  56 => 24,  87 => 17,  21 => 12,  26 => 13,  75 => 31,  67 => 28,  46 => 19,  27 => 16,  44 => 21,  31 => 22,  28 => 13,  201 => 72,  196 => 52,  183 => 87,  171 => 63,  166 => 100,  163 => 49,  158 => 37,  156 => 57,  151 => 45,  142 => 42,  138 => 50,  136 => 39,  121 => 75,  117 => 89,  105 => 44,  91 => 85,  62 => 24,  49 => 18,  24 => 3,  25 => 12,  19 => 11,  79 => 31,  72 => 54,  69 => 50,  47 => 21,  40 => 44,  37 => 12,  22 => 11,  246 => 69,  157 => 41,  145 => 52,  139 => 31,  131 => 48,  123 => 30,  120 => 46,  115 => 27,  111 => 40,  108 => 39,  101 => 37,  98 => 36,  96 => 40,  83 => 82,  74 => 52,  66 => 23,  55 => 22,  52 => 17,  50 => 22,  43 => 20,  41 => 14,  35 => 16,  32 => 15,  29 => 21,  209 => 22,  203 => 122,  199 => 53,  193 => 177,  189 => 175,  187 => 174,  182 => 121,  176 => 65,  173 => 42,  168 => 60,  164 => 109,  162 => 104,  154 => 46,  149 => 36,  147 => 90,  144 => 95,  141 => 94,  133 => 49,  130 => 35,  125 => 45,  122 => 44,  116 => 43,  112 => 26,  109 => 69,  106 => 40,  103 => 38,  99 => 30,  95 => 20,  92 => 61,  86 => 33,  82 => 33,  80 => 9,  73 => 29,  64 => 184,  60 => 26,  57 => 155,  54 => 154,  51 => 38,  48 => 67,  45 => 19,  42 => 18,  39 => 13,  36 => 17,  33 => 16,  30 => 14,);
    }
}
