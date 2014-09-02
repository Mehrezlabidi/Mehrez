<?php

/* SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_6b7b6964ce9eafebb5d8f94f1ef426ce12f3c1c4a8b4dfb0e566a6339b1b7125 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:Form:form_admin_fields.html.twig");

        $this->blocks = array(
            'sonata_admin_orm_one_to_one_widget' => array($this, 'block_sonata_admin_orm_one_to_one_widget'),
            'sonata_admin_orm_many_to_many_widget' => array($this, 'block_sonata_admin_orm_many_to_many_widget'),
            'sonata_admin_orm_many_to_one_widget' => array($this, 'block_sonata_admin_orm_many_to_one_widget'),
            'sonata_admin_orm_one_to_many_widget' => array($this, 'block_sonata_admin_orm_one_to_many_widget'),
            'sonata_type_model_widget' => array($this, 'block_sonata_type_model_widget'),
            'sonata_type_model_list_widget' => array($this, 'block_sonata_type_model_list_widget'),
            'sonata_type_admin_widget' => array($this, 'block_sonata_type_admin_widget'),
            'sonata_type_collection_widget' => array($this, 'block_sonata_type_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_sonata_admin_orm_one_to_one_widget($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig")->display($context);
    }

    // line 20
    public function block_sonata_admin_orm_many_to_many_widget($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig")->display($context);
    }

    // line 24
    public function block_sonata_admin_orm_many_to_one_widget($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig")->display($context);
    }

    // line 28
    public function block_sonata_admin_orm_one_to_many_widget($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig")->display($context);
    }

    // line 32
    public function block_sonata_type_model_widget($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        // line 37
        echo "
    ";
        // line 39
        echo "
    ";
        // line 40
        if (twig_test_empty($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"))) {
            // line 41
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 43
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 45
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 47
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 49
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            // line 52
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
    }

    // line 56
    public function block_sonata_type_model_list_widget($context, array $blocks = array())
    {
        // line 57
        echo "    <div id=\"field_container_";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-container\">
        <span id=\"field_actions_";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-actions\">
            <span id=\"field_widget_";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-short-description\">
                ";
        // line 60
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value")), "method")) {
            // line 61
            echo "                    ";
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "uniqid"), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "link_parameters"))), array());
            // line 67
            echo "                ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "placeholder"))) {
            // line 68
            echo "                    <span class=\"inner-field-short-description\">
                        ";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "placeholder"), array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </span>
                ";
        }
        // line 72
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 75
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")))) {
            // line 76
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_list_";
            // line 77
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-small sonata-ba-action\"
                        title=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"icon-list\"></i>
                        ";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 85
        echo "
                ";
        // line 86
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")))) {
            // line 87
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_add_";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-small sonata-ba-action\"
                        title=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"icon-plus\"></i>
                        ";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 96
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 99
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "DELETE"), "method")) && (isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")))) {
            // line 100
            echo "                    <a  href=\"\"
                        onclick=\"return remove_selected_element_";
            // line 101
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-small sonata-ba-action\"
                        title=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"icon-off\"></i>
                        ";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 109
        echo "            </span>
        </span>

        <span style=\"display: none\" >
            ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">

        </div>
    </div>

    ";
        // line 121
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
    }

    // line 124
    public function block_sonata_type_admin_widget($context, array $blocks = array())
    {
        // line 125
        echo "    ";
        // line 126
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 127
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 129
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 131
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 133
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 135
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "
    ";
        }
    }

    // line 139
    public function block_sonata_type_collection_widget($context, array $blocks = array())
    {
        // line 140
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 141
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 143
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 145
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo " - type : sonata_type_collection - mapping : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "mappingtype"), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 79,  406 => 158,  373 => 142,  364 => 139,  359 => 138,  155 => 53,  318 => 145,  279 => 104,  237 => 86,  694 => 412,  685 => 406,  680 => 403,  668 => 395,  654 => 389,  647 => 382,  643 => 381,  633 => 377,  617 => 367,  609 => 362,  599 => 355,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  550 => 326,  531 => 312,  518 => 307,  514 => 306,  509 => 304,  466 => 280,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  383 => 224,  366 => 140,  331 => 187,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  664 => 218,  658 => 391,  638 => 213,  632 => 211,  627 => 374,  587 => 200,  582 => 198,  578 => 196,  576 => 195,  569 => 183,  566 => 182,  526 => 310,  523 => 156,  506 => 151,  495 => 148,  491 => 147,  481 => 290,  475 => 141,  468 => 140,  459 => 137,  450 => 135,  447 => 134,  434 => 130,  420 => 249,  417 => 126,  396 => 234,  376 => 119,  363 => 114,  328 => 124,  325 => 73,  317 => 70,  303 => 140,  261 => 91,  194 => 87,  713 => 270,  707 => 211,  704 => 210,  702 => 236,  696 => 206,  686 => 205,  681 => 203,  666 => 200,  663 => 393,  655 => 215,  652 => 214,  635 => 191,  613 => 204,  605 => 201,  602 => 185,  590 => 178,  585 => 347,  568 => 175,  551 => 174,  547 => 173,  512 => 152,  507 => 157,  505 => 156,  498 => 149,  483 => 144,  473 => 150,  465 => 139,  462 => 138,  456 => 273,  451 => 141,  428 => 129,  425 => 128,  414 => 125,  403 => 157,  400 => 161,  349 => 133,  342 => 129,  339 => 100,  326 => 185,  311 => 89,  263 => 125,  191 => 69,  335 => 188,  259 => 70,  572 => 193,  561 => 174,  557 => 330,  549 => 174,  538 => 319,  521 => 162,  511 => 160,  508 => 159,  504 => 302,  499 => 156,  487 => 152,  477 => 150,  467 => 148,  463 => 133,  446 => 139,  441 => 105,  410 => 96,  392 => 83,  388 => 124,  380 => 83,  369 => 141,  324 => 92,  307 => 66,  291 => 169,  275 => 103,  226 => 67,  205 => 59,  352 => 135,  340 => 95,  332 => 125,  330 => 87,  320 => 84,  313 => 82,  310 => 81,  302 => 114,  287 => 72,  280 => 131,  249 => 67,  223 => 58,  216 => 100,  188 => 174,  23 => 18,  12 => 34,  58 => 23,  358 => 113,  351 => 135,  338 => 76,  327 => 86,  319 => 71,  315 => 118,  301 => 111,  299 => 112,  293 => 109,  289 => 59,  277 => 100,  271 => 55,  262 => 63,  251 => 101,  148 => 64,  253 => 95,  233 => 62,  212 => 74,  198 => 69,  192 => 88,  185 => 86,  165 => 77,  113 => 41,  97 => 63,  213 => 126,  239 => 83,  236 => 109,  232 => 84,  84 => 39,  124 => 31,  118 => 28,  76 => 57,  70 => 33,  184 => 63,  202 => 77,  195 => 68,  186 => 82,  114 => 71,  210 => 75,  153 => 72,  20 => 11,  502 => 155,  492 => 295,  449 => 123,  442 => 350,  426 => 102,  401 => 156,  394 => 152,  377 => 115,  370 => 100,  357 => 125,  353 => 294,  346 => 196,  329 => 95,  286 => 133,  282 => 79,  274 => 129,  270 => 4,  34 => 16,  242 => 113,  231 => 33,  200 => 70,  180 => 62,  174 => 60,  172 => 52,  160 => 76,  129 => 57,  127 => 32,  110 => 51,  265 => 126,  245 => 173,  152 => 92,  995 => 544,  989 => 448,  983 => 197,  977 => 121,  971 => 86,  964 => 24,  960 => 23,  955 => 21,  951 => 20,  947 => 19,  943 => 18,  939 => 17,  935 => 16,  931 => 15,  928 => 14,  924 => 12,  921 => 11,  861 => 10,  781 => 9,  775 => 6,  771 => 4,  768 => 3,  754 => 545,  752 => 544,  737 => 532,  730 => 186,  700 => 501,  678 => 398,  669 => 221,  660 => 470,  653 => 466,  645 => 461,  637 => 378,  628 => 449,  624 => 448,  618 => 190,  608 => 202,  598 => 432,  592 => 351,  584 => 199,  570 => 413,  562 => 408,  544 => 172,  534 => 386,  517 => 155,  503 => 361,  493 => 354,  486 => 292,  478 => 142,  470 => 135,  460 => 132,  452 => 272,  421 => 303,  411 => 296,  405 => 325,  390 => 150,  382 => 93,  356 => 262,  345 => 97,  321 => 123,  290 => 106,  281 => 105,  267 => 94,  256 => 121,  248 => 116,  167 => 48,  146 => 49,  65 => 30,  386 => 95,  378 => 144,  361 => 208,  354 => 123,  344 => 97,  333 => 117,  323 => 125,  316 => 121,  306 => 141,  304 => 174,  295 => 88,  292 => 135,  272 => 158,  260 => 124,  257 => 149,  250 => 93,  244 => 85,  234 => 80,  222 => 81,  218 => 79,  215 => 74,  211 => 81,  197 => 90,  175 => 77,  150 => 65,  126 => 42,  297 => 84,  266 => 95,  225 => 77,  181 => 80,  178 => 119,  137 => 46,  104 => 49,  90 => 27,  81 => 25,  77 => 27,  646 => 414,  641 => 413,  636 => 412,  631 => 411,  626 => 410,  621 => 206,  616 => 407,  611 => 203,  606 => 405,  601 => 404,  596 => 181,  591 => 402,  548 => 165,  545 => 414,  542 => 321,  539 => 162,  536 => 161,  533 => 169,  530 => 158,  528 => 167,  525 => 166,  522 => 406,  519 => 405,  516 => 161,  513 => 403,  510 => 158,  494 => 388,  484 => 381,  433 => 339,  419 => 98,  415 => 247,  408 => 124,  395 => 84,  391 => 312,  371 => 113,  367 => 131,  347 => 102,  343 => 91,  336 => 126,  300 => 139,  296 => 109,  288 => 107,  284 => 106,  228 => 78,  206 => 71,  190 => 175,  161 => 71,  134 => 59,  100 => 36,  53 => 20,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 131,  453 => 136,  444 => 132,  440 => 343,  437 => 131,  435 => 258,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 170,  398 => 119,  393 => 158,  387 => 122,  384 => 147,  381 => 121,  379 => 119,  374 => 114,  368 => 131,  365 => 141,  362 => 110,  360 => 293,  355 => 136,  341 => 131,  337 => 249,  322 => 275,  314 => 99,  312 => 143,  309 => 117,  305 => 115,  298 => 173,  294 => 90,  285 => 84,  283 => 102,  278 => 207,  268 => 127,  264 => 72,  258 => 81,  252 => 88,  247 => 66,  241 => 84,  229 => 73,  220 => 80,  214 => 99,  177 => 61,  169 => 57,  140 => 28,  132 => 59,  128 => 58,  107 => 24,  61 => 25,  273 => 96,  269 => 100,  254 => 68,  243 => 89,  240 => 88,  238 => 139,  235 => 74,  230 => 106,  227 => 134,  224 => 103,  221 => 75,  219 => 101,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 48,  135 => 35,  119 => 28,  102 => 38,  71 => 29,  63 => 24,  59 => 28,  93 => 34,  88 => 60,  78 => 40,  38 => 17,  94 => 86,  89 => 40,  85 => 34,  68 => 31,  56 => 24,  87 => 33,  21 => 12,  26 => 14,  75 => 39,  67 => 32,  46 => 21,  27 => 16,  44 => 19,  31 => 15,  28 => 14,  201 => 72,  196 => 52,  183 => 121,  171 => 63,  166 => 100,  163 => 49,  158 => 75,  156 => 68,  151 => 45,  142 => 61,  138 => 61,  136 => 60,  121 => 53,  117 => 51,  105 => 27,  91 => 85,  62 => 29,  49 => 21,  24 => 13,  25 => 12,  19 => 11,  79 => 31,  72 => 37,  69 => 24,  47 => 19,  40 => 18,  37 => 17,  22 => 12,  246 => 86,  157 => 41,  145 => 52,  139 => 60,  131 => 48,  123 => 57,  120 => 56,  115 => 50,  111 => 40,  108 => 48,  101 => 73,  98 => 47,  96 => 40,  83 => 82,  74 => 34,  66 => 25,  55 => 21,  52 => 20,  50 => 20,  43 => 20,  41 => 18,  35 => 16,  32 => 16,  29 => 15,  209 => 96,  203 => 93,  199 => 53,  193 => 51,  189 => 64,  187 => 87,  182 => 85,  176 => 82,  173 => 112,  168 => 60,  164 => 72,  162 => 71,  154 => 67,  149 => 50,  147 => 69,  144 => 68,  141 => 67,  133 => 49,  130 => 57,  125 => 45,  122 => 44,  116 => 43,  112 => 52,  109 => 40,  106 => 35,  103 => 46,  99 => 26,  95 => 43,  92 => 45,  86 => 43,  82 => 33,  80 => 41,  73 => 29,  64 => 23,  60 => 22,  57 => 20,  54 => 25,  51 => 24,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 17,  33 => 16,  30 => 15,);
    }
}
