<?php

/* MyAppEspritBundle:Sousrubrique:edit.html.twig */
class __TwigTemplate_661a43f35baac6addc234cef3cffb80428a87e37677d49ba0cde0280d402413b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppEspritBundle:Default:template.html.twig");

        $this->blocks = array(
            'modifier_sousrubrique' => array($this, 'block_modifier_sousrubrique'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppEspritBundle:Default:template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_modifier_sousrubrique($context, array $blocks = array())
    {
        echo " 
  <form role=\"form\" method=\"post\" ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >
<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" id=\"content-table\">
<tr>
\t<th rowspan=\"3\" class=\"sized\">
            
              <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/shared/side_shadowleft.jpg"), "html", null, true);
        echo "\" width=\"20\" height=\"300\" alt=\"\" />   
         
        </th>
\t<th class=\"topleft\"></th>
\t<td id=\"tbl-border-top\">&nbsp;</td>
\t<th class=\"topright\"></th>
\t<th rowspan=\"3\" class=\"sized\">
          
            
       <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/shared/side_shadowright.jpg"), "html", null, true);
        echo "\" width=\"20\" height=\"300\" alt=\"\" />       
        </th>
</tr>
<tr>
\t<td id=\"tbl-border-left\"></td>
\t<td>
\t<!--  start content-table-inner -->
\t<div id=\"content-table-inner\">
\t
\t<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">
\t<tr valign=\"top\">
\t<td>
\t
\t
\t\t<!--  start step-holder -->
\t\t<div id=\"step-holder\">
\t\t\t<div class=\"step-no\">1</div>
\t\t\t<div class=\"step-dark-left\"><a href=\"\">Add _sousrub details</a></div>
\t\t\t<div class=\"step-dark-right\">&nbsp;</div>
\t\t\t<div class=\"step-no-off\">2</div>
\t\t\t<div class=\"step-light-left\">Select related _sousrub</div>
\t\t\t<div class=\"step-light-right\">&nbsp;</div>
\t\t\t<div class=\"step-no-off\">3</div>
\t\t\t<div class=\"step-light-left\">Edit / Delete</div>
\t\t\t<div class=\"step-light-round\">&nbsp;</div>
\t\t\t<div class=\"clear\"></div>
\t\t</div>
\t\t<!--  end step-holder -->
\t
\t\t<!-- start id-form -->
\t\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"  id=\"id-form\">
\t\t<tr>
\t\t\t<th valign=\"top\">Sub_Rubrique Title:</th>
\t\t\t<td>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "  </td>
                        
                        <td>
\t\t\t<div class=\"error-left\"></div>
\t\t\t<div class=\"error-inner\">This field is required.</div>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th valign=\"top\">Position:</th>
\t\t\t<td>";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
                        
                        
\t\t\t<td>
\t\t\t<div class=\"error-left\"></div>
\t\t\t<div class=\"error-inner\">This field is required.</div>
\t\t\t</td>
\t\t</tr>
                <tr>
\t\t\t<th valign=\"top\">Etat</th>
                        <td>";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "state"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
                        <td><ul class=\"greyarrow\"><b>( Check to enable access )</b></ul></td>
                         \t 
\t\t</tr>
                
                
                <tr>
\t\t\t<th valign=\"top\">Rubrique :</th>
\t\t\t<td>";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rubrique"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
                        
                        
\t\t\t 
\t\t</tr>
                            ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo " 
                   
\t\t<th>&nbsp;</th>
\t\t<td valign=\"top\">
\t\t\t<input type=\"submit\"  value=\"\" class=\"form-submit\" />
\t\t\t<input type=\"reset\" value=\"\" class=\"form-reset\"  />
\t\t</td>
\t\t<td></td>
\t</tr>
\t</table>
\t<!-- end id-form  -->

\t</td>
\t<td>

\t<!--  start related-activities -->
\t<div id=\"related-activities\">
\t\t
\t\t<!--  start related-act-top -->
\t\t<div id=\"related-act-top\">
      <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/forms/header_related_act.gif"), "html", null, true);
        echo "\"  width=\"271\" height=\"43\" alt=\"\" />                 
\t 
\t\t</div>
\t\t<!-- end related-act-top -->
\t\t
\t\t<!--  start related-act-bottom -->
\t\t<div id=\"related-act-bottom\">
\t\t
\t\t\t<!--  start related-act-inner -->
\t\t\t<div id=\"related-act-inner\">
\t\t\t
\t\t\t\t<div class=\"left\">
                                    <a href=\"\">
    <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/forms/icon_plus.gif"), "html", null, true);
        echo "\"  width=\"21\" height=\"21\" alt=\"\" />                                     
                                       
                                    </a></div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<h5>Add another product</h5>
\t\t\t\t\tLorem ipsum dolor sit amet consectetur
\t\t\t\t\tadipisicing elitsed do eiusmod tempor.
\t\t\t\t\t<ul class=\"greyarrow\">
\t\t\t\t\t\t<li><a href=\"\">Click here to visit</a></li> 
\t\t\t\t\t\t<li><a href=\"\">Click here to visit</a> </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t<div class=\"lines-dotted-short\"></div>
\t\t\t\t
\t\t\t\t<div class=\"left\"><a href=\"\">
                                 
   <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/forms/icon_minus.gif"), "html", null, true);
        echo "\"  width=\"21\" height=\"21\" alt=\"\" />                                     
                                        
                                    </a></div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<h5>Delete products</h5>
\t\t\t\t\tLorem ipsum dolor sit amet consectetur
\t\t\t\t\tadipisicing elitsed do eiusmod tempor.
\t\t\t\t\t<ul class=\"greyarrow\">
\t\t\t\t\t\t<li><a href=\"\">Click here to visit</a></li> 
\t\t\t\t\t\t<li><a href=\"\">Click here to visit</a> </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t<div class=\"lines-dotted-short\"></div>
\t\t\t\t
\t\t\t\t<div class=\"left\"><a href=\"\">
     <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/forms/icon_edit.gif"), "html", null, true);
        echo "\"  width=\"21\" height=\"21\" alt=\"\" />                                   
                                         
                                    </a></div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<h5>Edit categories</h5>
\t\t\t\t\tLorem ipsum dolor sit amet consectetur
\t\t\t\t\tadipisicing elitsed do eiusmod tempor.
\t\t\t\t\t<ul class=\"greyarrow\">
\t\t\t\t\t\t<li><a href=\"\">Click here to visit</a></li> 
\t\t\t\t\t\t<li><a href=\"\">Click here to visit</a> </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t
\t\t\t</div>
\t\t\t<!-- end related-act-inner -->
\t\t\t<div class=\"clear\"></div>
\t\t
\t\t</div>
\t\t<!-- end related-act-bottom -->
\t
\t</div>
\t<!-- end related-activities -->

</td>
</tr>
<tr>
<td>
      <img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/shared/blank.gif"), "html", null, true);
        echo "\" width=\"695\" height=\"1\" alt=\"blank\" /> 
   
</td>
<td></td>
</tr>
</table>
 
<div class=\"clear\"></div>
 

</div>
<!--  end content-table-inner  -->
</td>
<td id=\"tbl-border-right\"></td>
</tr>
<tr>
\t<th class=\"sized bottomleft\"></th>
\t<td id=\"tbl-border-bottom\">&nbsp;</td>
\t<th class=\"sized bottomright\"></th>
</tr>
</table>
</form>
";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Sousrubrique:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 152,  239 => 103,  236 => 102,  232 => 101,  84 => 46,  124 => 78,  118 => 61,  76 => 36,  70 => 33,  184 => 76,  202 => 98,  195 => 96,  186 => 90,  114 => 71,  210 => 84,  153 => 101,  20 => 1,  502 => 398,  492 => 391,  449 => 354,  442 => 350,  426 => 340,  401 => 324,  394 => 320,  377 => 309,  370 => 305,  357 => 295,  353 => 294,  346 => 290,  329 => 279,  286 => 242,  282 => 241,  274 => 236,  270 => 235,  34 => 7,  242 => 112,  231 => 109,  200 => 91,  180 => 86,  174 => 84,  172 => 117,  160 => 79,  129 => 66,  127 => 84,  110 => 48,  265 => 190,  245 => 173,  152 => 76,  995 => 544,  989 => 448,  983 => 197,  977 => 121,  971 => 86,  964 => 24,  960 => 23,  955 => 21,  951 => 20,  947 => 19,  943 => 18,  939 => 17,  935 => 16,  931 => 15,  928 => 14,  924 => 12,  921 => 11,  861 => 10,  781 => 9,  775 => 6,  771 => 4,  768 => 3,  754 => 545,  752 => 544,  737 => 532,  730 => 528,  700 => 501,  678 => 482,  669 => 476,  660 => 470,  653 => 466,  645 => 461,  637 => 456,  628 => 449,  624 => 448,  618 => 446,  608 => 439,  598 => 432,  592 => 429,  584 => 424,  570 => 413,  562 => 408,  544 => 393,  534 => 386,  517 => 372,  503 => 361,  493 => 354,  486 => 350,  478 => 345,  470 => 340,  460 => 333,  452 => 328,  421 => 303,  411 => 296,  405 => 325,  390 => 284,  382 => 279,  356 => 262,  345 => 254,  321 => 236,  290 => 214,  281 => 208,  267 => 197,  256 => 189,  248 => 184,  167 => 121,  146 => 73,  65 => 21,  386 => 135,  378 => 133,  361 => 124,  354 => 123,  344 => 117,  333 => 280,  323 => 112,  316 => 111,  306 => 224,  304 => 107,  295 => 105,  292 => 103,  272 => 97,  260 => 93,  257 => 92,  250 => 90,  244 => 180,  234 => 110,  222 => 81,  218 => 79,  215 => 160,  211 => 77,  197 => 68,  175 => 60,  150 => 67,  126 => 76,  297 => 218,  266 => 95,  225 => 156,  181 => 118,  178 => 72,  137 => 85,  104 => 55,  90 => 53,  81 => 38,  77 => 37,  646 => 414,  641 => 413,  636 => 412,  631 => 411,  626 => 410,  621 => 447,  616 => 407,  611 => 406,  606 => 405,  601 => 404,  596 => 403,  591 => 402,  548 => 415,  545 => 414,  542 => 413,  539 => 412,  536 => 411,  533 => 410,  530 => 409,  528 => 408,  525 => 407,  522 => 406,  519 => 405,  516 => 404,  513 => 403,  510 => 402,  494 => 388,  484 => 381,  433 => 339,  419 => 336,  415 => 327,  408 => 323,  395 => 313,  391 => 312,  371 => 132,  367 => 270,  347 => 119,  343 => 282,  336 => 278,  300 => 245,  296 => 218,  288 => 239,  284 => 101,  228 => 170,  206 => 157,  190 => 77,  161 => 56,  134 => 85,  100 => 43,  53 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 344,  440 => 343,  437 => 316,  435 => 146,  430 => 341,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 289,  393 => 126,  387 => 122,  384 => 308,  381 => 310,  379 => 119,  374 => 274,  368 => 131,  365 => 111,  362 => 110,  360 => 293,  355 => 106,  341 => 105,  337 => 249,  322 => 275,  314 => 99,  312 => 110,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 207,  268 => 85,  264 => 84,  258 => 81,  252 => 91,  247 => 105,  241 => 177,  229 => 73,  220 => 70,  214 => 185,  177 => 65,  169 => 114,  140 => 50,  132 => 54,  128 => 63,  107 => 36,  61 => 29,  273 => 96,  269 => 198,  254 => 92,  243 => 88,  240 => 88,  238 => 206,  235 => 74,  230 => 82,  227 => 108,  224 => 155,  221 => 93,  219 => 103,  217 => 75,  208 => 142,  204 => 81,  179 => 118,  159 => 69,  143 => 97,  135 => 67,  119 => 61,  102 => 53,  71 => 19,  63 => 31,  59 => 29,  93 => 28,  88 => 35,  78 => 43,  38 => 12,  94 => 48,  89 => 52,  85 => 34,  68 => 22,  56 => 26,  87 => 47,  21 => 2,  26 => 6,  75 => 17,  67 => 29,  46 => 21,  27 => 2,  44 => 11,  31 => 8,  28 => 4,  201 => 80,  196 => 90,  183 => 87,  171 => 59,  166 => 81,  163 => 62,  158 => 77,  156 => 104,  151 => 96,  142 => 65,  138 => 64,  136 => 56,  121 => 75,  117 => 44,  105 => 65,  91 => 27,  62 => 23,  49 => 7,  24 => 4,  25 => 5,  19 => 1,  79 => 26,  72 => 34,  69 => 54,  47 => 9,  40 => 14,  37 => 10,  22 => 1,  246 => 174,  157 => 56,  145 => 46,  139 => 45,  131 => 82,  123 => 62,  120 => 94,  115 => 72,  111 => 56,  108 => 56,  101 => 61,  98 => 51,  96 => 50,  83 => 39,  74 => 23,  66 => 34,  55 => 15,  52 => 21,  50 => 44,  43 => 17,  41 => 10,  35 => 5,  32 => 4,  29 => 3,  209 => 95,  203 => 92,  199 => 97,  193 => 135,  189 => 88,  187 => 84,  182 => 119,  176 => 64,  173 => 71,  168 => 72,  164 => 115,  162 => 104,  154 => 68,  149 => 51,  147 => 66,  144 => 72,  141 => 48,  133 => 84,  130 => 81,  125 => 79,  122 => 74,  116 => 58,  112 => 49,  109 => 59,  106 => 55,  103 => 44,  99 => 50,  95 => 74,  92 => 49,  86 => 46,  82 => 44,  80 => 45,  73 => 36,  64 => 30,  60 => 28,  57 => 28,  54 => 26,  51 => 14,  48 => 12,  45 => 18,  42 => 19,  39 => 8,  36 => 18,  33 => 5,  30 => 7,);
    }
}
