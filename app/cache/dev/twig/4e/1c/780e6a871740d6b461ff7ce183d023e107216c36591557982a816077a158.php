<?php

/* MyAppEspritBundle:Default:template.html.twig */
class __TwigTemplate_4e1c780e6a871740d6b461ff7ce183d023e107216c36591557982a816077a158 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ajout_menu' => array($this, 'block_ajout_menu'),
            'ajout_rubrique' => array($this, 'block_ajout_rubrique'),
            'ajout_sousrubrique' => array($this, 'block_ajout_sousrubrique'),
            'ajout_role' => array($this, 'block_ajout_role'),
            'ajout_article' => array($this, 'block_ajout_article'),
            'ajout_actualite' => array($this, 'block_ajout_actualite'),
            'modifier_menu' => array($this, 'block_modifier_menu'),
            'modifier_rubrique' => array($this, 'block_modifier_rubrique'),
            'modifier_sousrubrique' => array($this, 'block_modifier_sousrubrique'),
            'modifier_role' => array($this, 'block_modifier_role'),
            'modifier_article' => array($this, 'block_modifier_article'),
            'modifier_actualite' => array($this, 'block_modifier_actualite'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "

<!DOCTYPE html>
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
<link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" /> 
<title>Administration</title>
 
 <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/screen.css"), "html", null, true);
        echo "\"/> 
<!--[if IE]>
<link rel=\"stylesheet\" media=\"all\" type=\"text/css\" href=\"css/pro_dropline_ie.css\" />
<![endif]-->

<!--  jquery core -->
<script src=\"js/jquery/jquery-1.4.1.min.js\" type=\"text/javascript\"></script>

<!--  checkbox styling script -->
<script src=\"js/jquery/ui.core.js\" type=\"text/javascript\"></script>
<script src=\"js/jquery/ui.checkbox.js\" type=\"text/javascript\"></script>
<script src=\"js/jquery/jquery.bind.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\$(function(){
\t\$('input').checkBox();
\t\$('#toggle-all').click(function(){
 \t\$('#toggle-all').toggleClass('toggle-checked');
\t\$('#mainform input[type=checkbox]').checkBox('toggle');
\treturn false;
\t});
});
</script>  

<![if !IE 7]>

<!--  styled select box script version 1 -->
<script src=\"js/jquery/jquery.selectbox-0.5.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\$(document).ready(function() {
\t\$('.styledselect').selectbox({ inputClass: \"selectbox_styled\" });
});
</script>
 

<![endif]>

<!--  styled select box script version 2 --> 
<script src=\"js/jquery/jquery.selectbox-0.5_style_2.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\$(document).ready(function() {
\t\$('.styledselect_form_1').selectbox({ inputClass: \"styledselect_form_1\" });
\t\$('.styledselect_form_2').selectbox({ inputClass: \"styledselect_form_2\" });
});
</script>

<!--  styled select box script version 3 --> 
<script src=\"js/jquery/jquery.selectbox-0.5_style_2.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\$(document).ready(function() {
\t\$('.styledselect_pages').selectbox({ inputClass: \"styledselect_pages\" });
});
</script>

<!--  styled file upload script --> 
<script src=\"js/jquery/jquery.filestyle.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" charset=\"utf-8\">
  \$(function() {
      \$(\"input.file_1\").filestyle({ 
          image: \"images/forms/choose-file.gif\",
          imageheight : 21,
          imagewidth : 78,
          width : 310
      });
  });
</script>

<!-- Custom jquery scripts -->
<script src=\"js/jquery/custom_jquery.js\" type=\"text/javascript\"></script>
 
<!-- Tooltips -->
<script src=\"js/jquery/jquery.tooltip.js\" type=\"text/javascript\"></script>
<script src=\"js/jquery/jquery.dimensions.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\$(function() {
\t\$('a.info-tooltip ').tooltip({
\t\ttrack: true,
\t\tdelay: 0,
\t\tfixPNG: true, 
\t\tshowURL: false,
\t\tshowBody: \" - \",
\t\ttop: -35,
\t\tleft: 5
\t});
});
</script> 

 <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/datePicker.css"), "html", null, true);
        echo "\"/> 
<!--  date picker script -->
 
<script src=\"js/jquery/date.js\" type=\"text/javascript\"></script>
<script src=\"js/jquery/jquery.datePicker.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" charset=\"utf-8\">
        \$(function()
{

// initialise the \"Select date\" link
\$('#date-pick')
\t.datePicker(
\t\t// associate the link with a date picker
\t\t{
\t\t\tcreateButton:false,
\t\t\tstartDate:'01/01/2005',
\t\t\tendDate:'31/12/2020'
\t\t}
\t).bind(
\t\t// when the link is clicked display the date picker
\t\t'click',
\t\tfunction()
\t\t{
\t\t\tupdateSelects(\$(this).dpGetSelected()[0]);
\t\t\t\$(this).dpDisplay();
\t\t\treturn false;
\t\t}
\t).bind(
\t\t// when a date is selected update the SELECTs
\t\t'dateSelected',
\t\tfunction(e, selectedDate, \$td, state)
\t\t{
\t\t\tupdateSelects(selectedDate);
\t\t}
\t).bind(
\t\t'dpClosed',
\t\tfunction(e, selected)
\t\t{
\t\t\tupdateSelects(selected[0]);
\t\t}
\t);

var updateSelects = function (selectedDate)
{
\tvar selectedDate = new Date(selectedDate);
\t\$('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
\t\$('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
\t\$('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
}
// listen for when the selects are changed and update the picker
\$('#d, #m, #y')
\t.bind(
\t\t'change',
\t\tfunction()
\t\t{
\t\t\tvar d = new Date(
\t\t\t\t\t\t\$('#y').val(),
\t\t\t\t\t\t\$('#m').val()-1,
\t\t\t\t\t\t\$('#d').val()
\t\t\t\t\t);
\t\t\t\$('#date-pick').dpSetSelected(d.asString());
\t\t}
\t);

// default the position of the selects to today
var today = new Date();
updateSelects(today.getTime());

// and update the datePicker to reflect it...
\$('#d').trigger('change');
});
</script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src=\"js/jquery/jquery.pngFix.pack.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\$(document).ready(function(){
\$(document).pngFix( );
});
</script>
</head>
<body> 
<!-- Start: page-top-outer -->
<div id=\"page-top-outer\">    

<!-- Start: page-top -->
<div id=\"page-top\">

\t<!-- start logo -->
\t<div id=\"logo\">
\t<a href=\"\">
       <!--  <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/shared/logo.png"), "html", null, true);
        echo "\" width=\"156\" height=\"40\" alt=\"\" />  -->
            </a>
\t</div>
\t<!-- end logo -->

\t<!--  start top-search -->
\t<div id=\"top-search\">
\t\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<tr>
\t\t<td><input type=\"text\" value=\"Search\" onblur=\"if (this.value=='') { this.value='Search'; }\" onfocus=\"if (this.value=='Search') { this.value=''; }\" class=\"top-search-inp\" /></td>
\t\t<td>
\t\t<select  class=\"styledselect\">
\t\t\t<option value=\"\"> Menu</option>
\t\t\t<option value=\"\"> Rubrique</option>
\t\t\t<option value=\"\"> Sous Rubrique</option>
\t\t\t<option value=\"\">Actualite</option>
\t\t\t<option value=\"\">Article</option>
                        <option value=\"\">Role</option>
\t\t</select> 
\t\t</td>
\t\t<td>
 <input type=\"image\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/shared/top_search_btn.gif"), "html", null, true);
        echo "\"  />                   

\t\t</td>
\t\t</tr>
\t\t</table>
\t</div>
 \t<!--  end top-search -->
 \t<div class=\"clear\"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->

<div class=\"clear\">&nbsp;</div>
 
<!--  start nav-outer-repeat................................................................................................. START -->
<div class=\"nav-outer-repeat\"> 
<!--  start nav-outer -->
<div class=\"nav-outer\"> 

\t\t<!-- start nav-right -->
\t\t<div id=\"nav-right\">

\t\t\t<div class=\"nav-divider\">&nbsp;</div>
\t\t\t<div class=\"showhide-account\">
                            
  
  <a href=\"";
        // line 238
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">  
  <img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/shared/nav/nav_myaccount.gif"), "html", null, true);
        echo "\" width=\"93\" height=\"14\" alt=\"\" />
    </a>                    
                        </div>
\t\t\t<div class=\"nav-divider\">&nbsp;</div>
\t\t       <div class=\"showhide-account\">
      <a href=\"";
        // line 244
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">                          
  <img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/shared/nav/nav_logout.gif"), "html", null, true);
        echo "\" width=\"64\" height=\"14\" alt=\"\"  />                       
       </a>                       
                        </div>
\t\t\t<div class=\"clear\">&nbsp;</div>

\t\t\t<!--  start account-content -->\t
\t\t\t<div class=\"account-content\">
\t\t\t<div class=\"account-drop-inner\">
\t\t\t\t<a href=\"\" id=\"acc-settings\">Settings</a>
\t\t\t\t<div class=\"clear\">&nbsp;</div>
\t\t\t\t<div class=\"acc-line\">&nbsp;</div>
\t\t\t\t<a href=\"\" id=\"acc-details\">Personal details </a>
\t\t\t\t<div class=\"clear\">&nbsp;</div>
\t\t\t\t<div class=\"acc-line\">&nbsp;</div>
\t\t\t\t<a href=\"\" id=\"acc-project\">Project details</a>
\t\t\t\t<div class=\"clear\">&nbsp;</div>
\t\t\t\t<div class=\"acc-line\">&nbsp;</div>
\t\t\t\t<a href=\"\" id=\"acc-inbox\">Inbox</a>
\t\t\t\t<div class=\"clear\">&nbsp;</div>
\t\t\t\t<div class=\"acc-line\">&nbsp;</div>
\t\t\t\t<a href=\"\" id=\"acc-stats\">Statistics</a> 
\t\t\t</div>
\t\t\t</div>
\t\t\t<!--  end account-content -->

\t\t</div>
\t\t<!-- end nav-right -->


\t\t<!--  start nav -->
\t\t<div class=\"nav\">
\t\t<div class=\"table\">

 <ul class=\"select\"><li><a href=\"";
        // line 278
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_menu_show");
        echo "\"><b>Menu</b><!--[if IE 7]><!--></a><!--<![endif]-->
\t\t<!--[if lte IE 6]><table><tr><td><![endif]-->
\t\t<div class=\"select_sub\">
\t\t\t<ul class=\"sub\">
\t\t\t\t<li><a href=\"";
        // line 282
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_menu_new");
        echo "\">ajout un menu</a></li>
\t\t\t\t<li><a href=\"";
        // line 283
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_menu_show");
        echo "\">afficher liste des menus</a></li>
\t\t\t
\t\t\t</ul>
\t\t</div>
\t\t<!--[if lte IE 6]></td></tr></table></a><![endif]-->
\t\t</li>
\t\t</ul>

\t\t<div class=\"nav-divider\">&nbsp;</div>

  <ul class=\"current\"><li><a href=\"";
        // line 293
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_rubrique_show");
        echo "\"><b>Rubrique</b><!--[if IE 7]><!--></a><!--<![endif]-->
\t\t<!--[if lte IE 6]><table><tr><td><![endif]-->
\t\t<div class=\"select_sub show\">
\t\t\t<ul class=\"sub\">
\t\t\t\t<li><a href=\"";
        // line 297
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_rubrique_new");
        echo "\">ajouter une rubrique</a></li>
\t\t\t\t<li><a href=\"";
        // line 298
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_rubrique_show");
        echo "\">afficher liste des rubriques</a></li>

                        </ul>
\t\t</div>
\t\t<!--[if lte IE 6]></td></tr></table></a><![endif]-->
\t\t</li>
\t\t</ul>

\t\t<div class=\"nav-divider\">&nbsp;</div>

 <ul class=\"select\"><li><a href=\"";
        // line 308
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_sousrubrique_show");
        echo "\"><b>Sous Rubrique</b><!--[if IE 7]><!--></a><!--<![endif]-->
\t\t<!--[if lte IE 6]><table><tr><td><![endif]-->
\t\t<div class=\"select_sub\">
\t\t\t<ul class=\"sub\">
\t\t\t\t<li><a href=\"";
        // line 312
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_sousrubrique_new");
        echo "\">ajouter une Sous rubrique</a></li>
\t\t\t\t<li><a href=\"";
        // line 313
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_sousrubrique_show");
        echo "\">afficher liste des sous rubriques</a></li>

                        </ul>
\t\t</div>
\t\t<!--[if lte IE 6]></td></tr></table></a><![endif]-->
\t\t</li>
\t\t</ul>

\t\t<div class=\"nav-divider\">&nbsp;</div>

 <ul class=\"select\"><li><a href=\"";
        // line 323
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_article_show");
        echo "\"><b>Article</b><!--[if IE 7]><!--></a><!--<![endif]-->
\t\t<!--[if lte IE 6]><table><tr><td><![endif]-->
\t\t<div class=\"select_sub\">
\t\t\t<ul class=\"sub\">
\t\t\t\t<li><a href=\"";
        // line 327
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_article_new");
        echo "\">ajouter un article</a></li>
\t\t\t\t<li><a href=\"";
        // line 328
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_article_show");
        echo "\">afficher liste des articles</a></li>

                                
\t\t\t</ul>
\t\t</div>
\t\t<!--[if lte IE 6]></td></tr></table></a><![endif]-->
\t\t</li>
\t\t</ul>
\t<div class=\"nav-divider\">&nbsp;</div>

 <ul class=\"select\"><li><a href=\"";
        // line 338
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_role_show");
        echo "\"><b>Role</b><!--[if IE 7]><!--></a><!--<![endif]-->
\t\t<!--[if lte IE 6]><table><tr><td><![endif]-->
\t\t<div class=\"select_sub\">
\t\t\t<ul class=\"sub\">
\t\t\t\t<li><a href=\"";
        // line 342
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_role_new");
        echo "\">ajouter un role</a></li>
\t\t\t\t<li><a href=\"";
        // line 343
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_role_show");
        echo "\">afficher liste des roles</a></li>

                                
\t\t\t</ul>
\t\t</div>
\t\t<!--[if lte IE 6]></td></tr></table></a><![endif]-->
\t\t</li>
\t\t</ul>
\t\t<div class=\"nav-divider\">&nbsp;</div>

 <ul class=\"select\"><li><a href=\"";
        // line 353
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_actualite_show");
        echo "\"><b>Actualit&eacute; </b><!--[if IE 7]><!--></a><!--<![endif]-->
\t\t<!--[if lte IE 6]><table><tr><td><![endif]-->
\t\t<div class=\"select_sub\">
\t\t\t<ul class=\"sub\">
\t\t\t\t<li><a href=\"";
        // line 357
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_actualite_new");
        echo "\">ajouter  une actualit&eacute;</a></li>
\t\t\t\t<li><a href=\"";
        // line 358
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_actualite_show");
        echo "\">afficher liste des actualit&eacute;s</a></li>

                        </ul>
\t\t</div>
\t\t<!--[if lte IE 6]></td></tr></table></a><![endif]-->
\t\t</li>
\t\t</ul>

\t\t<div class=\"clear\"></div>
\t\t</div>
\t\t<div class=\"clear\"></div>
\t\t</div>
\t\t<!--  start nav -->

</div>
<div class=\"clear\"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

  <div class=\"clear\"></div>
 
<!-- start content-outer ........................................................................................................................START -->
<div id=\"content-outer\">
<!-- start content -->
<div id=\"content\">

\t<!--  start page-heading -->
\t<div id=\"page-heading\">
\t\t<h1>Private CMS</h1>
\t</div>
\t<!-- end page-heading -->

\t<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" id=\"content-table\">
\t<tr>
\t\t<th rowspan=\"3\" class=\"sized\">
                   
  <img src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/shared/side_shadowleft.jpg"), "html", null, true);
        echo "\" width=\"20\" height=\"300\" alt=\"\"  />                  
                </th>
\t\t<th class=\"topleft\"></th>
\t\t<td id=\"tbl-border-top\">&nbsp;</td>
\t\t<th class=\"topright\"></th>
\t\t<th rowspan=\"3\" class=\"sized\">
                   
        <img src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/images/shared/side_shadowright.jpg"), "html", null, true);
        echo "\" width=\"20\" height=\"300\" alt=\"\"  />           
                </th>
\t</tr>
\t<tr>
\t\t<td id=\"tbl-border-left\"></td>
\t\t<td>
\t\t<!--  start content-table-inner ...................................................................... START -->
\t\t<div id=\"content-table-inner\">

\t\t\t<!--  start table-content  -->
\t\t\t<div id=\"table-content\">
\t\t\t <!-- <h2>Sub Heading </h2> -->
 \t 
                           ";
        // line 416
        echo "                          ";
        $this->displayBlock('ajout_menu', $context, $blocks);
        // line 417
        echo "                          ";
        $this->displayBlock('ajout_rubrique', $context, $blocks);
        // line 418
        echo "                          ";
        $this->displayBlock('ajout_sousrubrique', $context, $blocks);
        // line 419
        echo "                          ";
        $this->displayBlock('ajout_role', $context, $blocks);
        // line 420
        echo "                          ";
        $this->displayBlock('ajout_article', $context, $blocks);
        // line 421
        echo "                          ";
        $this->displayBlock('ajout_actualite', $context, $blocks);
        // line 422
        echo "                               ";
        // line 423
        echo "                           ";
        $this->displayBlock('modifier_menu', $context, $blocks);
        // line 424
        echo "                          ";
        $this->displayBlock('modifier_rubrique', $context, $blocks);
        // line 425
        echo "                          ";
        $this->displayBlock('modifier_sousrubrique', $context, $blocks);
        // line 426
        echo "                          ";
        $this->displayBlock('modifier_role', $context, $blocks);
        // line 427
        echo "                          ";
        $this->displayBlock('modifier_article', $context, $blocks);
        // line 428
        echo "                          ";
        $this->displayBlock('modifier_actualite', $context, $blocks);
        // line 429
        echo "                         
\t\t\t</div>
\t\t\t<!--  end table-content  -->

\t\t\t<div class=\"clear\"></div>

\t\t</div>
\t\t<!--  end content-table-inner ............................................END  -->
\t\t</td>
\t\t<td id=\"tbl-border-right\"></td>
\t</tr>
\t<tr>
\t\t<th class=\"sized bottomleft\"></th>
\t\t<td id=\"tbl-border-bottom\">&nbsp;</td>
\t\t<th class=\"sized bottomright\"></th>
\t</tr>
\t</table>
\t<div class=\"clear\">&nbsp;</div>

</div>
<!--  end content -->
<div class=\"clear\">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->

<div class=\"clear\">&nbsp;</div>
    
<!-- start footer -->         
<div id=\"footer\">
<!-- <div id=\"footer-pad\">&nbsp;</div> -->
\t<!--  start footer-left -->
\t<div id=\"footer-left\">
\tAdmin Skin &copy; Copyright Internet Dreams Ltd. <a href=\"\">www.netdreams.co.uk</a>. All rights reserved.</div>
\t<!--  end footer-left -->
\t<div class=\"clear\">&nbsp;</div>
</div>
<!-- end footer -->
 
</body>
</html>";
    }

    // line 416
    public function block_ajout_menu($context, array $blocks = array())
    {
    }

    // line 417
    public function block_ajout_rubrique($context, array $blocks = array())
    {
    }

    // line 418
    public function block_ajout_sousrubrique($context, array $blocks = array())
    {
    }

    // line 419
    public function block_ajout_role($context, array $blocks = array())
    {
    }

    // line 420
    public function block_ajout_article($context, array $blocks = array())
    {
    }

    // line 421
    public function block_ajout_actualite($context, array $blocks = array())
    {
    }

    // line 423
    public function block_modifier_menu($context, array $blocks = array())
    {
    }

    // line 424
    public function block_modifier_rubrique($context, array $blocks = array())
    {
    }

    // line 425
    public function block_modifier_sousrubrique($context, array $blocks = array())
    {
    }

    // line 426
    public function block_modifier_role($context, array $blocks = array())
    {
    }

    // line 427
    public function block_modifier_article($context, array $blocks = array())
    {
    }

    // line 428
    public function block_modifier_actualite($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Default:template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  669 => 428,  664 => 427,  659 => 426,  654 => 425,  649 => 424,  644 => 423,  639 => 421,  634 => 420,  629 => 419,  624 => 418,  619 => 417,  614 => 416,  571 => 429,  568 => 428,  565 => 427,  562 => 426,  559 => 425,  556 => 424,  553 => 423,  551 => 422,  548 => 421,  545 => 420,  542 => 419,  539 => 418,  536 => 417,  533 => 416,  517 => 402,  507 => 395,  467 => 358,  463 => 357,  456 => 353,  443 => 343,  439 => 342,  432 => 338,  419 => 328,  415 => 327,  408 => 323,  395 => 313,  391 => 312,  371 => 298,  367 => 297,  347 => 283,  343 => 282,  336 => 278,  300 => 245,  296 => 244,  288 => 239,  284 => 238,  228 => 188,  206 => 144,  190 => 131,  161 => 106,  134 => 97,  100 => 60,  53 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 308,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 293,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 207,  268 => 85,  264 => 84,  258 => 81,  252 => 209,  247 => 179,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 162,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  63 => 15,  59 => 14,  93 => 28,  88 => 6,  78 => 21,  38 => 6,  94 => 28,  89 => 52,  85 => 25,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  75 => 17,  67 => 15,  46 => 7,  27 => 4,  44 => 12,  31 => 2,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 7,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 16,  47 => 9,  40 => 8,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 74,  115 => 43,  111 => 37,  108 => 65,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 6,  41 => 10,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 92,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 41,  73 => 19,  64 => 17,  60 => 12,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 11,  42 => 7,  39 => 8,  36 => 5,  33 => 5,  30 => 7,);
    }
}
