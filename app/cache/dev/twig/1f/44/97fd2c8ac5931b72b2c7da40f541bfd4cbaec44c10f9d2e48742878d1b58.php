<?php

/* MyAppEspritBundle:Article:edit.html.twig */
class __TwigTemplate_1f4497fd2c8ac5931b72b2c7da40f541bfd4cbaec44c10f9d2e48742878d1b58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppEspritBundle:Default:template.html.twig");

        $this->blocks = array(
            'modifier_article' => array($this, 'block_modifier_article'),
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
    public function block_modifier_article($context, array $blocks = array())
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
\t\t\t<div class=\"step-dark-left\"><a href=\"\">Add  article details</a></div>
\t\t\t<div class=\"step-dark-right\">&nbsp;</div>
\t\t\t<div class=\"step-no-off\">2</div>
\t\t\t<div class=\"step-light-left\">Select related article</div>
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
                     <tr>
\t\t\t<th valign=\"top\">Nom de l'article:</th>
\t\t\t<td>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>   
                        <td>
\t\t\t<div class=\"error-left\"></div>
\t\t\t<div class=\"error-inner\">This field is required.</div>
\t\t\t</td>
\t\t</tr>
                <tr>
\t\t\t<th valign=\"top\">Image:</th>
\t\t\t<td>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>                      
\t\t</tr>
                
\t\t<tr>
\t\t\t<th valign=\"top\">Texte :</th>
\t\t\t<td>";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "texte"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "  </td>
                        
                        <td>
\t\t\t<div class=\"error-left\"></div>
\t\t\t<div class=\"error-inner\">This field is required.</div>
\t\t\t</td>
\t\t</tr>
                
\t\t<tr>
\t\t\t<th valign=\"top\">Role:</th>
                        <td>";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "  </td><td>
                         <ul class=\"greyarrow\"><li><h5><b>(  Change  to  enable  permission !  ) </b></h5></li></ul></td>  
\t\t</tr>
                
                <tr>
\t\t\t<th valign=\"top\">Rub Title:</th>
\t\t\t<td>";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rubrique"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>                      
\t\t</tr>
                <tr>
\t\t\t<th valign=\"top\">SubRub Title:</th>
\t\t\t<td>";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sousrubrique"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>    
                        <td><ul class=\"greyarrow\"><b>( To a subheading One item is allowed  )</b></ul></td>
\t\t</tr>
                
                <tr>
\t\t\t<th valign=\"top\">Select a date:</th>
\t\t<td>
\t\t
\t\t\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
\t\t\t<tr  valign=\"top\">
\t\t\t\t<td>
\t\t\t\t<form id=\"chooseDateForm\" action=\"";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'widget', array("attr" => array("class" => "inp-form")));
        echo " 
                               
\t\t\t\t</td>
\t\t\t\t 
\t\t\t\t<td>
                                    <a href=\"\" id=\"date-pick\">&nbsp;
                                        
   <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/forms/icon_calendar.jpg"), "html", null, true);
        echo "\"   alt=\"\" />                                      
                                      
                                    </a> 
                                </td>
\t\t\t</tr>
\t\t\t</table>
\t\t
\t\t</td>                      
\t\t</tr>
                
                
                
                <tr>
\t\t\t<th valign=\"top\"></th>
\t\t\t<td>";
        // line 117
        echo " </td>
                        <td> ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo " </td>
                        
                        
\t\t\t 
\t\t</tr>
                
                   
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
        // line 143
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
        // line 156
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
        // line 174
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
        // line 191
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
        // line 219
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
        return "MyAppEspritBundle:Article:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 219,  266 => 191,  225 => 156,  181 => 118,  178 => 117,  137 => 85,  104 => 46,  90 => 41,  81 => 38,  77 => 37,  646 => 414,  641 => 413,  636 => 412,  631 => 411,  626 => 410,  621 => 409,  616 => 407,  611 => 406,  606 => 405,  601 => 404,  596 => 403,  591 => 402,  548 => 415,  545 => 414,  542 => 413,  539 => 412,  536 => 411,  533 => 410,  530 => 409,  528 => 408,  525 => 407,  522 => 406,  519 => 405,  516 => 404,  513 => 403,  510 => 402,  494 => 388,  484 => 381,  433 => 339,  419 => 328,  415 => 327,  408 => 323,  395 => 313,  391 => 312,  371 => 298,  367 => 297,  347 => 283,  343 => 282,  336 => 278,  300 => 245,  296 => 244,  288 => 239,  284 => 238,  228 => 188,  206 => 144,  190 => 131,  161 => 103,  134 => 85,  100 => 60,  53 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 344,  440 => 343,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 308,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 293,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 207,  268 => 85,  264 => 84,  258 => 81,  252 => 209,  247 => 179,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 57,  132 => 54,  128 => 49,  107 => 36,  61 => 32,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 162,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 55,  119 => 42,  102 => 32,  71 => 19,  63 => 15,  59 => 14,  93 => 28,  88 => 6,  78 => 21,  38 => 6,  94 => 28,  89 => 52,  85 => 39,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  75 => 17,  67 => 15,  46 => 7,  27 => 4,  44 => 12,  31 => 2,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 96,  142 => 59,  138 => 54,  136 => 56,  121 => 75,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 7,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 16,  69 => 35,  47 => 9,  40 => 14,  37 => 10,  22 => 1,  246 => 174,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 74,  115 => 50,  111 => 37,  108 => 65,  101 => 45,  98 => 44,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 6,  41 => 10,  35 => 5,  32 => 4,  29 => 3,  209 => 143,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 92,  141 => 48,  133 => 55,  130 => 81,  125 => 44,  122 => 43,  116 => 41,  112 => 49,  109 => 34,  106 => 47,  103 => 32,  99 => 31,  95 => 28,  92 => 42,  86 => 28,  82 => 22,  80 => 41,  73 => 36,  64 => 17,  60 => 12,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 11,  42 => 15,  39 => 8,  36 => 5,  33 => 5,  30 => 7,);
    }
}
