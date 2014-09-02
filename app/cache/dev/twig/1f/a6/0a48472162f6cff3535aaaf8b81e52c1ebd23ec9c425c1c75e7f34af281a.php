<?php

/* WebProfilerBundle:Profiler:profiler.css.twig */
class __TwigTemplate_1fa60a48472162f6cff3535aaaf8b81e52c1ebd23ec9c425c1c75e7f34af281a extends Twig_Template
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
        // line 1
        echo "/*
Copyright (c) 2008, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.6.0
*/
html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,button,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var,optgroup{font-style:inherit;font-weight:inherit;}del,ins{text-decoration:none;}li{list-style:none;}caption,th{text-align:left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;}sup{vertical-align:baseline;}sub{vertical-align:baseline;}legend{color:#000;}input,button,textarea,select,optgroup,option{font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;}input,button,textarea,select{*font-size:100%;}
html, body {
    background-color: #efefef;
}
body {
    font: 1em \"Lucida Sans Unicode\", \"Lucida Grande\", Verdana, Arial, Helvetica, sans-serif;
    text-align: left;
}
p {
    font-size: 14px;
    line-height: 20px;
    color: #313131;
    padding-bottom: 20px
}
strong {
    color: #313131;
    font-weight: bold;
}
em {
    font-style: italic;
}
a {
    color: #6c6159;
}
a img {
    border: none;
}
a:hover {
    text-decoration: underline;
}
button::-moz-focus-inner {
    padding: 0;
    border: none;
}
button {
    overflow: visible;
    width: auto;
    background-color: transparent;
    font-weight: bold;
}
caption {
    margin-bottom: 7px;
}
table, tr, th, td {
    border-collapse: collapse;
    border: 1px solid #d0dbb3;
}
table {
    width: 100%;
    margin: 10px 0 30px;
}
table th {
    font-weight: bold;
    background-color: #f1f7e2;
}
table th, table td {
    font-size: 12px;
    padding: 8px 10px;
}
fieldset {
    border: none;
}
abbr {
    border-bottom: 1px dotted #000;
    cursor: help;
}
.clear {
    clear: both;
    height: 0;
    font-size: 0;
    line-height: 0;
}
.clear-fix:after
{
    content: \"\\0020\";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}
* html .clear-fix
{
    height: 1%;
}
.clear-fix
{
    display: block;
}
#content {
    padding: 0 50px;
    margin: 0 auto 20px;
    font-family: Arial, Helvetica, sans-serif;
    min-width: 970px;
}
#header {
    padding: 20px 30px 20px;
}
#header h1 {
    float: left;
}
.search {
    float: right;
}
#menu-profiler {
    border-right: 1px solid #dfdfdf;
}
#menu-profiler li {
    border-bottom: 1px solid #dfdfdf;
    position: relative;
    padding-bottom: 0;
    display: block;
    background-color: #f6f6f6;
    z-index: 10000;
}
#menu-profiler li a {
    color: #404040;
    display: block;
    font-size: 13px;
    text-transform: uppercase;
    text-decoration: none;
    cursor: pointer;
}
#menu-profiler li a span.label {
    display: block;
    padding: 20px 0px 16px 65px;
    min-height: 16px;
    overflow: hidden;
}
#menu-profiler li a span.icon {
    display: block;
    position: absolute;
    left: 0;
    top: 12px;
    width: 60px;
    text-align: center;
}
#menu-profiler li.selected a,
#menu-profiler li a:hover {
    background: #d1d1d1 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA7CAAAAACfn7+eAAAACXZwQWcAAAABAAAAOwDiPIGUAAAAJElEQVQIW2N4y8TA9B+KGZDYEP5/FD4Eo7IgNLJqZDUIMRRTAcmVHUZf/1g/AAAAAElFTkSuQmCC) repeat-x 0 0;
}
#navigation div:first-child,
#menu-profiler li:first-child,
#menu-profiler li:first-child a,
#menu-profiler li:first-child a span.label {
    border-radius: 16px 0 0 0;
}
#menu-profiler li a span.count {
    padding: 0;
    position: absolute;
    right: 10px;
    top: 20px;
}
#collector-wrapper {
    float: left;
    width: 100%;
}
#collector-content {
    margin-left: 250px;
    padding: 30px 40px 40px;
}
#navigation {
    float: left;
    width: 250px;
    margin-left: -100%;
}
#collector-content table td {
    background-color: white;
}
h1 {
    font-family: Georgia, \"Times New Roman\", Times, serif;
    color: #404040;
}
h2, h3 {
    font-weight: bold;
    margin-bottom: 20px;
}
li {
    padding-bottom: 10px;
}
#main {
    border-radius: 16px;
    margin-bottom: 20px;
}
#menu-profiler span.count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: #fff;
    margin-right: 2px;
    font-size: 11px;
}
#resume {
    background-color: #f6f6f6;
    border-bottom: 1px solid #dfdfdf;
    padding: 18px 10px 0px;
    margin-left: 250px;
    height: 34px;
    color: #313131;
    font-size: 12px;
    border-top-right-radius: 16px;
}
a#resume-view-all {
    display: inline-block;
    padding: 0.2em 0.7em;
    margin-right: 0.5em;
    background-color: #666;
    border-radius: 16px;
    color: white;
    font-weight: bold;
    text-decoration: none;
}
table th.value {
    width: 450px;
    background-color: #dfeeb8;
}
#content h2 {
    font-size: 24px;
    color: #313131;
    font-weight: bold;
}
#content #main {
    padding: 0;
    background-color: #FFF;
    border: 1px solid #dfdfdf;
}
#content #main p {
    color: #313131;
    font-size: 14px;
    padding-bottom: 20px;
}
.sf-toolbarreset {
    border-top: 0;
    padding: 0;
}
.sf-reset .block-exception-detected .text-exception {
    left: 10px;
    right: 10px;
    width: 95%;
}
.sf-reset .block-exception-detected .illustration-exception {
    display: none;
}
ul.alt {
    margin: 10px 0 30px;
}
ul.alt li {
    padding: 5px 7px;
    font-size: 13px;
}
ul.alt li.even {
    background: #f1f7e2;
}
ul.alt li.error {
    background-color: #f66;
    margin-bottom: 1px;
}
ul.alt li.warning {
    background-color: #ffcc00;
    margin-bottom: 1px;
}
ul.sf-call-stack li {
    text-size: small;
    padding: 0 0 0 20px;
}
td.main, td.menu {
    text-align: left;
    margin: 0;
    padding: 0;
    border: 0;
    vertical-align: top;
}
.search {
    float: right;
    padding-top: 20px;
}
.search label {
    line-height: 28px;
    vertical-align: middle;
}
.search input {
    width: 195px;
    font-size: 12px;
    border: 1px solid #dadada;
    background: #FFF url(data:image/gif;base64,R0lGODlhAQAFAKIAAPX19e/v7/39/fr6+urq6gAAAAAAAAAAACH5BAAAAAAALAAAAAABAAUAAAMESAEjCQA7) repeat-x left top;
    padding: 5px 6px;
    color: #565656;
}
.search input[type=\"search\"] {
    -webkit-appearance: textfield;
}
#navigation div:first-child {
    margin: 0 0 20px;
    border-top: 0;
}
#navigation .search {
    padding-top: 15px;
    float: none;
    background: none repeat scroll 0 0 #f6f6f6;
    color: #333;
    margin: 20px 0;
    border: 1px solid #dfdfdf;
    border-left: none;
}
#navigation .search h3 {
    font-family: Arial, Helvetica, sans-serif;
    text-transform: uppercase;
    margin-left: 10px;
    font-size: 13px;
}
#navigation .search form {
    padding: 15px 0;
}
#navigation .search button {
    float: right;
    margin-right: 20px;
}
#navigation .search label {
    display: block;
    float: left;
    width: 50px;
}
#navigation .search input,
#navigation .search select,
#navigation .search label,
#navigation .search a {
    font-size: 12px;
}
#navigation .search form {
    padding-left: 10px;
}
#navigation .search input {
    width: 160px;
}
#navigation .import label {
    float: none;
    display: inline;
}
#navigation .import input {
    width: 100px;
}
.timeline {
    background-color: #fbfbfb;
    margin-bottom: 15px;
    margin-top: 5px;
}
#collector-content .routing tr.matches td {
    background-color: #0e0;
}
#collector-content .routing tr.almost td {
    background-color: #fa0;
}
.loading {
    background: transparent url(data:image/gif;base64,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) scroll no-repeat 50% 50%;
    height: 30px;
    display: none;
}
.sf-profiler-timeline .legends {
    font-size: 12px;
    line-height: 1.5em;
}
.sf-profiler-timeline .legends span {
    border-left-width: 10px;
    border-left-style: solid;
    padding: 0 10px 0 5px;
}
.sf-profiler-timeline canvas {
    border: 1px solid #999;
    border-width: 1px 0;
}
.collapsed-menu-parents #resume,
.collapsed-menu-parents #collector-content {
    margin-left: 60px !important;
}
.collapsed-menu {
    width: 60px !important;
}
.collapsed-menu span :not(.icon) {
    display: none !important;
}
.collapsed-menu span.icon img {
    display: inline !important;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:profiler.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  806 => 488,  803 => 487,  792 => 485,  784 => 482,  771 => 481,  745 => 475,  742 => 474,  723 => 472,  706 => 471,  690 => 466,  675 => 462,  656 => 460,  645 => 458,  630 => 452,  621 => 449,  616 => 447,  597 => 442,  563 => 410,  523 => 404,  513 => 400,  363 => 153,  276 => 111,  345 => 147,  334 => 141,  255 => 101,  431 => 189,  348 => 121,  207 => 75,  303 => 106,  170 => 84,  390 => 150,  369 => 141,  364 => 139,  359 => 138,  328 => 139,  261 => 91,  155 => 47,  194 => 68,  275 => 105,  694 => 467,  685 => 406,  680 => 403,  678 => 463,  658 => 391,  647 => 382,  643 => 381,  633 => 377,  627 => 374,  617 => 367,  609 => 362,  599 => 355,  579 => 342,  567 => 337,  557 => 330,  550 => 326,  531 => 312,  526 => 310,  509 => 304,  504 => 302,  481 => 290,  466 => 280,  422 => 184,  420 => 249,  396 => 234,  835 => 271,  832 => 270,  827 => 265,  820 => 261,  814 => 258,  810 => 256,  808 => 255,  805 => 254,  799 => 252,  797 => 251,  794 => 250,  788 => 484,  786 => 247,  783 => 246,  777 => 244,  766 => 240,  764 => 239,  761 => 238,  754 => 192,  748 => 191,  739 => 188,  729 => 186,  726 => 185,  721 => 184,  718 => 183,  714 => 277,  712 => 270,  705 => 237,  701 => 236,  698 => 468,  692 => 232,  689 => 231,  687 => 230,  676 => 224,  671 => 222,  668 => 395,  651 => 214,  637 => 378,  631 => 211,  626 => 208,  620 => 206,  610 => 203,  607 => 202,  604 => 201,  586 => 200,  583 => 199,  581 => 345,  577 => 341,  575 => 195,  560 => 174,  529 => 158,  522 => 156,  511 => 152,  494 => 148,  485 => 145,  452 => 272,  436 => 131,  433 => 130,  424 => 254,  416 => 126,  399 => 161,  392 => 158,  389 => 160,  383 => 224,  380 => 158,  375 => 119,  331 => 140,  318 => 111,  267 => 101,  256 => 96,  237 => 86,  713 => 214,  707 => 267,  702 => 469,  696 => 206,  686 => 465,  681 => 203,  666 => 200,  663 => 393,  655 => 194,  652 => 193,  635 => 191,  618 => 448,  613 => 188,  608 => 187,  605 => 186,  592 => 351,  590 => 178,  585 => 347,  547 => 165,  530 => 168,  528 => 406,  525 => 405,  516 => 155,  512 => 159,  510 => 158,  498 => 134,  486 => 292,  483 => 129,  473 => 150,  465 => 147,  462 => 202,  446 => 197,  428 => 136,  403 => 157,  400 => 120,  388 => 117,  342 => 137,  339 => 100,  326 => 138,  324 => 113,  311 => 68,  307 => 128,  291 => 102,  191 => 67,  335 => 134,  321 => 135,  259 => 103,  569 => 180,  558 => 178,  554 => 177,  546 => 174,  541 => 163,  535 => 161,  527 => 165,  518 => 402,  514 => 306,  508 => 160,  505 => 151,  501 => 158,  496 => 156,  489 => 154,  484 => 152,  477 => 142,  471 => 149,  458 => 137,  455 => 131,  451 => 141,  448 => 123,  445 => 267,  429 => 188,  418 => 98,  414 => 127,  406 => 158,  385 => 95,  376 => 82,  373 => 156,  366 => 140,  356 => 125,  290 => 119,  279 => 104,  263 => 95,  226 => 84,  205 => 59,  352 => 135,  340 => 145,  332 => 116,  330 => 87,  320 => 127,  313 => 82,  302 => 125,  287 => 108,  280 => 131,  249 => 67,  223 => 58,  216 => 79,  188 => 90,  23 => 3,  12 => 34,  58 => 25,  358 => 151,  351 => 141,  338 => 119,  327 => 114,  319 => 90,  315 => 131,  299 => 112,  293 => 120,  289 => 113,  281 => 114,  277 => 100,  262 => 98,  251 => 101,  248 => 97,  148 => 64,  253 => 100,  233 => 87,  212 => 78,  198 => 69,  192 => 88,  185 => 74,  165 => 83,  113 => 48,  97 => 41,  167 => 71,  213 => 78,  239 => 83,  236 => 109,  124 => 31,  118 => 49,  76 => 34,  70 => 15,  184 => 63,  202 => 94,  195 => 68,  186 => 82,  114 => 71,  153 => 77,  20 => 1,  502 => 155,  492 => 295,  449 => 198,  442 => 350,  426 => 340,  405 => 325,  401 => 172,  377 => 115,  370 => 100,  357 => 123,  353 => 149,  346 => 196,  329 => 131,  286 => 112,  282 => 58,  274 => 110,  270 => 102,  34 => 5,  231 => 83,  200 => 72,  180 => 62,  174 => 65,  172 => 57,  129 => 57,  127 => 35,  110 => 22,  265 => 105,  245 => 173,  152 => 46,  1004 => 544,  998 => 448,  992 => 197,  986 => 121,  980 => 86,  973 => 24,  969 => 23,  964 => 21,  960 => 20,  956 => 19,  952 => 18,  948 => 17,  944 => 16,  940 => 15,  937 => 14,  933 => 12,  930 => 11,  870 => 10,  785 => 9,  779 => 6,  775 => 243,  772 => 242,  758 => 237,  756 => 544,  741 => 532,  734 => 187,  704 => 210,  682 => 464,  673 => 461,  657 => 216,  641 => 456,  632 => 449,  628 => 448,  625 => 450,  622 => 446,  612 => 204,  602 => 445,  596 => 181,  588 => 424,  574 => 413,  566 => 408,  538 => 319,  521 => 372,  497 => 149,  490 => 147,  482 => 144,  464 => 139,  441 => 196,  425 => 135,  394 => 168,  349 => 133,  325 => 129,  310 => 81,  301 => 111,  271 => 76,  242 => 113,  232 => 88,  210 => 77,  160 => 76,  146 => 49,  84 => 40,  65 => 11,  386 => 159,  378 => 157,  361 => 152,  354 => 112,  344 => 97,  333 => 280,  323 => 128,  316 => 121,  306 => 107,  304 => 174,  295 => 88,  292 => 135,  272 => 158,  260 => 124,  257 => 149,  250 => 93,  244 => 85,  234 => 80,  222 => 83,  218 => 29,  215 => 74,  211 => 81,  197 => 69,  175 => 58,  150 => 55,  126 => 42,  297 => 104,  266 => 95,  225 => 77,  181 => 65,  178 => 59,  137 => 46,  104 => 32,  90 => 42,  81 => 23,  77 => 27,  669 => 201,  664 => 470,  659 => 426,  654 => 389,  649 => 461,  644 => 423,  639 => 421,  634 => 420,  629 => 419,  624 => 418,  619 => 417,  614 => 416,  571 => 338,  568 => 183,  565 => 182,  562 => 426,  559 => 425,  556 => 169,  553 => 423,  551 => 174,  548 => 393,  545 => 407,  542 => 321,  539 => 171,  536 => 170,  533 => 169,  517 => 402,  507 => 157,  467 => 140,  463 => 357,  456 => 273,  443 => 261,  439 => 195,  432 => 338,  419 => 127,  415 => 180,  408 => 176,  395 => 159,  391 => 83,  371 => 156,  367 => 155,  347 => 102,  343 => 146,  336 => 126,  300 => 105,  296 => 121,  288 => 118,  284 => 106,  228 => 78,  206 => 71,  190 => 76,  161 => 63,  134 => 39,  100 => 36,  53 => 12,  480 => 143,  474 => 285,  469 => 158,  461 => 138,  457 => 153,  453 => 199,  444 => 149,  440 => 105,  437 => 147,  435 => 258,  430 => 137,  427 => 129,  423 => 128,  413 => 125,  409 => 124,  407 => 242,  402 => 289,  398 => 119,  393 => 126,  387 => 164,  384 => 147,  381 => 93,  379 => 83,  374 => 114,  368 => 115,  365 => 141,  362 => 114,  360 => 127,  355 => 150,  341 => 131,  337 => 76,  322 => 275,  314 => 99,  312 => 130,  309 => 129,  305 => 115,  298 => 120,  294 => 214,  285 => 84,  283 => 115,  278 => 98,  268 => 127,  264 => 72,  258 => 94,  252 => 88,  247 => 66,  241 => 93,  229 => 87,  220 => 81,  214 => 99,  177 => 61,  169 => 57,  140 => 28,  132 => 59,  128 => 49,  107 => 24,  61 => 12,  273 => 198,  269 => 107,  254 => 68,  243 => 92,  240 => 88,  238 => 139,  235 => 89,  230 => 106,  227 => 86,  224 => 81,  221 => 75,  219 => 101,  217 => 79,  208 => 76,  204 => 78,  179 => 66,  159 => 70,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 13,  63 => 18,  59 => 16,  93 => 34,  88 => 25,  78 => 18,  38 => 18,  94 => 21,  89 => 33,  85 => 23,  68 => 12,  56 => 16,  87 => 41,  21 => 11,  26 => 9,  75 => 19,  67 => 14,  46 => 34,  27 => 7,  44 => 11,  31 => 8,  28 => 3,  201 => 72,  196 => 92,  183 => 87,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 45,  142 => 61,  138 => 56,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 27,  49 => 14,  24 => 6,  25 => 35,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 6,  37 => 6,  22 => 1,  246 => 136,  157 => 41,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 50,  111 => 47,  108 => 19,  101 => 31,  98 => 45,  96 => 30,  83 => 33,  74 => 27,  66 => 25,  55 => 38,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 5,  32 => 4,  29 => 3,  209 => 96,  203 => 73,  199 => 93,  193 => 177,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 67,  149 => 50,  147 => 75,  144 => 42,  141 => 73,  133 => 49,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 46,  99 => 23,  95 => 36,  92 => 28,  86 => 33,  82 => 19,  80 => 27,  73 => 33,  64 => 23,  60 => 22,  57 => 39,  54 => 14,  51 => 37,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
