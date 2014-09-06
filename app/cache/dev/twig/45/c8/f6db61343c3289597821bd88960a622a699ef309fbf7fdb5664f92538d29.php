<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_45c8f6db61343c3289597821bd88960a622a699ef309fbf7fdb5664f92538d29 extends Twig_Template
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
        // line 18
        echo "
";
        // line 20
        echo "
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_append_form_element", (array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "code"), "elementId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "uniqid")) + $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        // line 40
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }

                jQuery('#field_container_";
        // line 49
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').replaceWith(html); // replace the html
                Admin.setup_select2(jQuery('#field_container_";
        // line 50
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 56
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 57
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 64
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 68
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 73
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = jQuery(\"#field_widget_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 77
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 122,  279 => 104,  256 => 96,  237 => 86,  694 => 412,  685 => 406,  680 => 403,  678 => 398,  668 => 395,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  617 => 367,  609 => 362,  599 => 355,  581 => 345,  579 => 342,  577 => 341,  567 => 337,  550 => 326,  531 => 312,  518 => 307,  514 => 306,  509 => 304,  466 => 280,  424 => 254,  383 => 224,  366 => 210,  331 => 187,  267 => 156,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 191,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 237,  699 => 235,  693 => 232,  690 => 231,  688 => 230,  683 => 227,  677 => 224,  674 => 223,  672 => 222,  658 => 391,  638 => 213,  627 => 374,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  569 => 183,  526 => 310,  523 => 156,  506 => 151,  495 => 148,  491 => 147,  481 => 290,  478 => 142,  475 => 141,  468 => 140,  459 => 137,  450 => 135,  447 => 134,  434 => 130,  420 => 249,  417 => 126,  396 => 234,  390 => 125,  376 => 119,  363 => 114,  345 => 97,  328 => 74,  317 => 70,  303 => 65,  261 => 50,  194 => 88,  713 => 270,  707 => 211,  702 => 236,  696 => 206,  686 => 205,  681 => 203,  666 => 200,  663 => 393,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 204,  608 => 202,  605 => 201,  592 => 351,  590 => 178,  585 => 347,  547 => 173,  528 => 167,  525 => 166,  516 => 161,  512 => 152,  510 => 158,  505 => 156,  502 => 155,  498 => 149,  486 => 292,  483 => 144,  473 => 150,  465 => 139,  462 => 138,  451 => 141,  428 => 129,  414 => 125,  403 => 121,  400 => 161,  342 => 101,  339 => 100,  329 => 95,  326 => 185,  311 => 89,  286 => 80,  274 => 77,  263 => 71,  191 => 69,  335 => 188,  321 => 123,  259 => 70,  572 => 193,  561 => 174,  557 => 330,  549 => 174,  544 => 172,  530 => 158,  511 => 160,  508 => 159,  504 => 302,  499 => 156,  492 => 295,  487 => 152,  477 => 150,  470 => 135,  460 => 132,  449 => 123,  446 => 139,  426 => 102,  410 => 96,  392 => 83,  388 => 124,  382 => 93,  377 => 115,  369 => 115,  357 => 125,  324 => 92,  307 => 66,  291 => 169,  282 => 79,  275 => 103,  226 => 67,  205 => 59,  370 => 100,  352 => 121,  346 => 196,  340 => 95,  330 => 87,  320 => 84,  313 => 82,  302 => 114,  287 => 72,  280 => 82,  249 => 67,  223 => 58,  216 => 28,  188 => 174,  23 => 18,  12 => 34,  358 => 113,  351 => 135,  338 => 76,  327 => 86,  319 => 71,  315 => 90,  299 => 112,  293 => 109,  281 => 105,  262 => 63,  251 => 101,  248 => 100,  148 => 64,  270 => 4,  253 => 95,  233 => 62,  212 => 74,  198 => 66,  192 => 55,  185 => 68,  165 => 59,  113 => 41,  97 => 63,  167 => 48,  239 => 97,  236 => 35,  124 => 23,  118 => 28,  76 => 57,  70 => 23,  184 => 47,  202 => 77,  195 => 96,  186 => 83,  114 => 71,  153 => 56,  155 => 37,  20 => 11,  527 => 417,  471 => 367,  452 => 272,  445 => 267,  433 => 341,  429 => 255,  422 => 250,  404 => 324,  397 => 320,  380 => 83,  373 => 305,  356 => 294,  332 => 75,  289 => 59,  277 => 78,  213 => 126,  58 => 22,  34 => 26,  231 => 33,  200 => 55,  180 => 120,  174 => 64,  172 => 52,  129 => 24,  127 => 56,  110 => 77,  265 => 99,  245 => 173,  152 => 92,  1034 => 544,  1028 => 448,  1022 => 197,  1016 => 121,  1010 => 86,  1003 => 24,  999 => 23,  994 => 21,  990 => 20,  986 => 19,  982 => 18,  978 => 17,  974 => 16,  970 => 15,  967 => 14,  963 => 12,  960 => 11,  875 => 10,  785 => 9,  779 => 6,  775 => 4,  772 => 3,  758 => 545,  756 => 544,  741 => 532,  734 => 528,  704 => 210,  682 => 482,  673 => 476,  657 => 466,  641 => 456,  632 => 211,  628 => 448,  625 => 447,  622 => 446,  612 => 439,  602 => 185,  596 => 181,  588 => 424,  574 => 413,  566 => 182,  538 => 319,  521 => 162,  497 => 354,  490 => 350,  482 => 345,  464 => 333,  441 => 105,  425 => 128,  394 => 118,  349 => 103,  325 => 73,  310 => 81,  301 => 117,  271 => 55,  242 => 140,  232 => 84,  210 => 75,  160 => 58,  146 => 34,  84 => 39,  65 => 30,  386 => 95,  378 => 274,  361 => 208,  354 => 123,  344 => 97,  333 => 117,  323 => 125,  316 => 121,  306 => 108,  304 => 174,  295 => 88,  292 => 87,  272 => 158,  260 => 98,  257 => 149,  250 => 93,  244 => 180,  234 => 110,  222 => 81,  218 => 162,  215 => 78,  211 => 81,  197 => 70,  175 => 77,  150 => 55,  126 => 55,  297 => 84,  266 => 95,  225 => 87,  181 => 80,  178 => 119,  137 => 59,  104 => 67,  90 => 27,  81 => 26,  77 => 27,  669 => 221,  664 => 218,  659 => 426,  654 => 389,  649 => 461,  644 => 423,  639 => 421,  634 => 420,  629 => 419,  624 => 418,  619 => 417,  614 => 416,  571 => 338,  568 => 175,  565 => 427,  562 => 426,  559 => 425,  556 => 424,  553 => 423,  551 => 174,  548 => 165,  545 => 420,  542 => 321,  539 => 162,  536 => 161,  533 => 169,  517 => 155,  507 => 157,  467 => 148,  463 => 133,  456 => 273,  443 => 261,  439 => 260,  432 => 338,  419 => 98,  415 => 247,  408 => 124,  395 => 84,  391 => 312,  371 => 113,  367 => 131,  347 => 102,  343 => 91,  336 => 99,  300 => 113,  296 => 111,  288 => 107,  284 => 106,  228 => 83,  206 => 71,  190 => 175,  161 => 71,  134 => 56,  100 => 36,  53 => 20,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 131,  453 => 136,  444 => 132,  440 => 148,  437 => 131,  435 => 258,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 170,  398 => 119,  393 => 158,  387 => 122,  384 => 122,  381 => 121,  379 => 119,  374 => 114,  368 => 131,  365 => 141,  362 => 110,  360 => 295,  355 => 112,  341 => 131,  337 => 116,  322 => 101,  314 => 99,  312 => 177,  309 => 117,  305 => 115,  298 => 173,  294 => 214,  285 => 84,  283 => 166,  278 => 207,  268 => 54,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 80,  214 => 61,  177 => 54,  169 => 74,  140 => 28,  132 => 58,  128 => 47,  107 => 24,  61 => 25,  273 => 235,  269 => 100,  254 => 68,  243 => 89,  240 => 88,  238 => 139,  235 => 74,  230 => 82,  227 => 134,  224 => 155,  221 => 79,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 29,  135 => 81,  119 => 43,  102 => 37,  71 => 29,  67 => 28,  63 => 50,  59 => 49,  38 => 17,  94 => 86,  89 => 40,  85 => 34,  75 => 31,  68 => 31,  56 => 24,  87 => 17,  21 => 12,  26 => 20,  93 => 68,  88 => 60,  78 => 36,  46 => 35,  27 => 16,  44 => 21,  31 => 22,  28 => 13,  201 => 72,  196 => 52,  183 => 121,  171 => 63,  166 => 100,  163 => 49,  158 => 37,  156 => 57,  151 => 45,  142 => 61,  138 => 50,  136 => 39,  121 => 53,  117 => 89,  105 => 47,  91 => 85,  62 => 29,  49 => 18,  24 => 13,  25 => 12,  19 => 11,  79 => 31,  72 => 56,  69 => 50,  47 => 21,  40 => 44,  37 => 12,  22 => 12,  246 => 69,  157 => 41,  145 => 52,  139 => 31,  131 => 48,  123 => 30,  120 => 46,  115 => 50,  111 => 40,  108 => 39,  101 => 73,  98 => 44,  96 => 40,  83 => 82,  74 => 34,  66 => 23,  55 => 22,  52 => 21,  50 => 20,  43 => 20,  41 => 14,  35 => 16,  32 => 15,  29 => 21,  209 => 24,  203 => 122,  199 => 53,  193 => 51,  189 => 71,  187 => 49,  182 => 69,  176 => 65,  173 => 112,  168 => 60,  164 => 72,  162 => 104,  154 => 67,  149 => 36,  147 => 90,  144 => 95,  141 => 94,  133 => 49,  130 => 57,  125 => 45,  122 => 44,  116 => 43,  112 => 26,  109 => 69,  106 => 35,  103 => 46,  99 => 30,  95 => 43,  92 => 61,  86 => 64,  82 => 33,  80 => 9,  73 => 29,  64 => 184,  60 => 26,  57 => 22,  54 => 154,  51 => 38,  48 => 40,  45 => 19,  42 => 18,  39 => 13,  36 => 17,  33 => 16,  30 => 15,);
    }
}
