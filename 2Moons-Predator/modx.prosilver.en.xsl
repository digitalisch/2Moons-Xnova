<?xml version="1.0" encoding="UTF-8"?>
<!-- MODX by the phpBB MOD Team XSL file v1.2.4 copyright 2005-2010 the phpBB MOD Team.
	This file is released under the GNU GPL version 2.  See license.txt.
	$Id: modx.prosilver.en.xsl 211 2010-02-27 20:05:11Z tumba25 $ -->
<!DOCTYPE xsl:stylesheet[
	<!ENTITY nbsp "&#160;">
]>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="2.0" xmlns:mod="http://www.phpbb.com/mods/xml/modx-1.2.5.xsd">
	<xsl:output method="html" omit-xml-declaration="no" indent="yes" />
	<xsl:variable name="title" select="mod:mod/mod:header/mod:title" />
	<xsl:variable name="version">
		<xsl:for-each select="mod:mod/mod:header/mod:mod-version">
			<xsl:value-of select="current()" />
		</xsl:for-each>
	</xsl:variable>

	<xsl:template match="mod:mod">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Language" content="en" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style type="text/css">

/* General markup styles
––––––––––––––––––––––––––––––*/
* {
	/* Reset browsers default margin, padding and font sizes */
	margin:0;
	padding:0;
	font-size:100%;
}

/*.rtl * {
	text-align:right;
	direction: rtl;
}*/

body, div, p, th, td, li, dd {
	font-size:x-small;
	voice-family:"\"}\"";
	voice-family:inherit;
	font-size:100%;
}
html {
	color:#CCC;
	background:#0D0D0D;
	/* Always show a scrollbar for short pages - stops the jump when the scrollbar appears. non-ie browsers */
	height:100%;
	margin-bottom:1px;
}

body {
	/* Text-Sizing with ems:http://www.clagnut.com/blog/348/ */
	font-family:Verdana;
	color:#CCC;
	background:#0D0D0D;
	font-size:10px;	/* This sets the default font size to be equivalent to 10px */
	margin:10px 15px;
	line-height: 14px;
}

img {
	border:0;
}

h1 {
	font-size:18px;
	text-decoration:none;
}

h2, caption {
	font-size:15px;
	text-decoration:none;
	margin:25px 0 15px;
}

.rtl h2, .rtl caption {
	text-align:right;
}

h3, h4, h5 {
	font-size:13px;
	text-decoration:none;
	margin:15px 0 5px;
}

p {
	margin-bottom:0.7em;
}

ul {
	list-style:disc;
	margin:0 0 1em 2em;
}

.rtl ul {
	margin:0 2em 1em 0;
}

hr {
	border:0 none;
	border-top:1px dashed #999999;
	margin-bottom:5px;
	padding-bottom:5px;
	height:1px;
}

.small {
	font-size:0.85em;
}

/* General links  */
a:link, a:visited {
	color:#CCC;
	text-decoration:underline;
}

a:link:hover {
	color:#CCC;
	text-decoration:none;
}

a:active {
	olor:#CCC;
	text-decoration:none;
}

/* Main blocks
––––––––––––––––––––––––––––––––––––––––*/
#wrap {
	padding:0 0 15px 0;
	min-width:615px;
}

#page-header {
	clear:both;
	text-align:right;
	background:url(data:image/png;base64,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) top left no-repeat;
	height:69px;
	font-size:0.85em;
	margin-bottom:10px;
	margin-left:5px;
}

.rtl #page-header {
	text-align:left;
	background:top right no-repeat;
}

#page-header h1 {
	color:#767676;
	font-family:"Trebuchet MS",Helvetica,sans-serif;
	font-size:1.70em;
	padding-top:10px;
}

#page-header p {
	font-size:1.00em;
}

#page-body {
	clear:both;
	min-width:700px;
}

#page-footer {
	clear:both;
	font-size:0.75em;
	text-align:center;
}

#content {
	padding:0 10px 10px 10px;
	position:relative;
}

#content h1 {
	color:#115098;
	line-height:1.2em;
	margin-bottom:0;
}

#main {
	width:100%;
	margin:0;
	min-height:350px;
}

.rtl #main {
	float:right;
	margin:0;
}

* html #main {
	height:350px;
}

/* Main Panel
–––––––––––––––––––––––––––––––––––––––– */
#acp {
	margin:4px 0;
	padding:3px 1px;
	min-width:550px;
}

.panel {
	background:#0D0D0D;;
	padding:0;
}

/* General form styles
––––––––––––––––––––––––––––––––––––––––*/
fieldset {
	margin:-23px 0 25px;
	padding:1px 0;
	border:1px solid #FFF;
	position:relative;
	background: #222222; /* Old browsers */
	background: -moz-linear-gradient(top, #222222 0, #030303 20px); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0,#222222), color-stop(20px,#030303)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #222222 0,#030303 20px); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #222222 0,#030303 20px); /* Opera11.10+ */
	background: -ms-linear-gradient(top, #222222 0,#030303 20px); /* IE10+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#222222', endColorstr='#030303',GradientType=0 ); /* IE6-9 */
	background: linear-gradient(top, #222222 0,#030303 20px); /* W3C */
}

* html fieldset {
	padding:0 10px 5px 10px;
}

legend {
	background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAsCAYAAACtzHIbAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAbJJREFUeNpcknkrhUEUxuecMx9MSUlKZAlliaQs0U1ZopuyRCgUoSxZEpHyn5QPZmY8Z5bbe03duvPrnOc5z3mHmLnFVI5z7seSMaKXkMC3FWm1gQwrAfgSkTYtYPwkAivt+c4UQjCo6DCGkgiRIWbpTIomcvfrPi2AlCKAD3R12aiTjN4BurXBZqNXgN4yazHqrwaAEQ/+S/Rk82wFPKBrOGpmcMciI5SNGOBGWMaIqkYsE4aKSIhGUzEQpVjoukxGhDvW5bw7h9E0a3cMoIBlRv9biMPIn7DwXNxQMcKmFlSC8mZgRLXsGQwKvPeHVpNqtRYB7CPAkgUQghZG2RXhZZUoibahu2qiashGwusmR4ruTFwP5YYq73zdwpJ1Pg0Jow10bWJ4EiXO+zVE3NIWq5KoWAHYUX21yqvjPZWI86o8zkFZbki6tUYi5QCL2NRReiG6XO/nsfBjUxKhYhaZT/MHKqvjs7S1HBPnouTTrwKZqdgeAyUwia4rdZdg4nLHAa7zqwuMJYwC3Davjvm+6dXhPFYBZIYaDyyDAXQ9N54iQB/AS+N5A/QAvJWOPwEGAAd15pWEJjLlAAAAAElFTkSuQmCC) repeat scroll 0 0 #D20000;
    border-top: 1px solid #FFFFFF;
    color: #FFFFFF;
    display: block;
    font-weight: bold;
    margin-top: 23px;
    padding: 4px 6px;
    vertical-align: middle;
    width: -moz-available;
}

optgroup, select {
	font-family: Verdana, Helvetica, Arial, sans-serif;
	font-size: 0.85em;
	font-weight: normal;
	font-style: normal;
	cursor: pointer;
	vertical-align: middle;
	width: auto;
}

optgroup {
	font-size: 1.00em;
	font-weight: bold;
}

option {
	padding:0 1em 0 0;
}

.rtl option {
	padding:0 0 0 1em;
}

fieldset.nobg {
	margin:15px 0 0 0;
	padding:0;
	border:none;
	background-color:transparent;
}

/* MOD-ABOUT STUFFS ~smithy_dll */


.mod-about span.corners-top, .mod-about span.corners-bottom, .mod-about span.corners-top span, .mod-about span.corners-bottom span {
	font-size:1px;
	line-height:1px;
	display:block;
	height:5px;
	background-repeat:no-repeat;
}


.mod-about { margin:7px 4px 10px; }
.mod-about dt { font-weight:bold; padding-right:4px; }
.rtl .mod-about dt { padding-left: 4px; }
.mod-about dl { margin:0 8px; }
.mod-about div { margin:3px 10px;}
/*div.inner .mod-about dl { margin:0; }*/
/*.nopadding { margin:0; }*/

#language { width:130px; }
#modDisclaimer .mod-about, #other-notes.mod-about {
    background: none repeat scroll 0 0 #CCCCCC;
    border: 2px solid red;
}
#modDisclaimer .mod-about, #other-notes.mod-about, #modDisclaimer .mod-about a, #other-notes.mod-about a {
    color: #000000;
}
#other-notes.mod-about strong.red { color:#DD3333; }
span.key { font-size:12px; line-height:14px; padding-bottom:2px; width:20px; border:outset 2px #999999; background-color:#EEEECC; display:block; float:left; text-align:center; margin-right:5px; }
.mod-edit { background-color:#D6E6F6; border:solid 1px #336699; margin:10px 0; padding:0 10px; }
.mod-inlineedit { background-color:#DDEEFF; border:solid 1px #6699CC; margin:10px 0; padding:0 10px; }

dl.author-info dd { margin-left:112px; margin-bottom:8px; }
.rtl dl.author-info dd { margin-left:112px; margin-bottom:8px; }
ol#file-copy, ol#file-delete { padding:5px; margin-left:20px; margin-right:20px; margin-bottom:10px; }
ol#file-copy li, ol#file-delete li { margin-left:30px; margin-right:30px; vertical-align:top;}
ol#file-copy span, ol#file-delete span { font-weight:bold; }
ol#file-copy dt, ol#file-delete dt {margin-right:5px; float:none !important }
ol#file-copy dl, ol#file-delete dl {width:100%}
h2#lang-fca, h2#lang-edts, h2#lang-diy, h2#lang-sql, h2#lang-installer-h2, h2#lang-del-head { margin-left:5px; }

/* Code block */
div.codebox {
	padding:3px;
	background-color:#FFFFFF;
	border:1px solid #d8d8d8;
	font-size:1em;
}

div.codebox div.codeHead {
	text-transform:uppercase;
	border-bottom:1px solid #CCCCCC;
	margin-bottom:3px;
	font-size:0.8em;
	font-weight:bold;
	display:block;
}

div.codebox div.codeHead a.codeSelect {
	padding-left:5px;
}

blockquote div.codebox {
	margin-left:0;
}

div.codebox pre {
	/* Also see tweaks.css */
	width:100%;
	overflow-x:scroll;
	display:block;
	height:auto;
	max-height:200px;
	/*white-space:normal;*/
	padding-top:5px;
	font:0.9em Monaco, "Andale Mono","Courier New", Courier, mono;
	line-height:1.3em;
	color:#606060;
	margin:2px 0;
}

/*.rtl div.codePre pre {
	text-align: left !important;
	direction: ltr !important;
}*/

dt {
	float: left;
	width:auto;
}

.rtl dt {
	float: right !important;
	text-align: right;
	width:auto;
}

dd + dd { padding-top: 5px; }

dt span { padding: 0 5px 0 0; }
.rtl dt span { padding: 0 0 0 5px; }

div.endMOD { padding:0 5px; }

#history_toggle_link {
	display:block;
}
.edit_toggle_link {
	display:block;
	text-align:right;
	margin-bottom:2px;
}
		</style>
		<title>2Moons MOD &#187; <xsl:value-of select="$title" /></title>
		<script type="text/javascript">
			var i = 0;

			/* passed from xslt */
			<xsl:for-each select="mod:header">
				<xsl:for-each select="mod:author-group">
					var authors_ll = [];
					<xsl:for-each select="mod:author">
						authors_ll.push('<xsl:value-of select="generate-id()"/>');
					</xsl:for-each>
				</xsl:for-each>

				var mhes_ll = [];
				var mhcls_ll = [];
				<xsl:for-each select="mod:history/mod:entry">
					mhes_ll.push('<xsl:value-of select="generate-id()"/>');
					<xsl:if test="count(mod:changelog) > 1">
						mhcls_ll.push('<xsl:value-of select="generate-id()"/>');
					</xsl:if>
				</xsl:for-each>

				var link_ll = [];
				<xsl:for-each select="mod:link-group/mod:link">
					link_ll.push('<xsl:value-of select="generate-id()"/>');
				</xsl:for-each>
			</xsl:for-each>

			var opens_ll = [];
			<xsl:for-each select="mod:action-group/mod:open">
				opens_ll.push('<xsl:value-of select="generate-id()"/>');
			</xsl:for-each>

			var codes_ll = [];
			<xsl:for-each select="mod:action-group/mod:sql">
				codes_ll.push('<xsl:value-of select="generate-id()"/>');
			</xsl:for-each>

			var edits_ll = [];
			<xsl:for-each select="mod:action-group/mod:open/mod:edit">
				edits_ll.push('<xsl:value-of select="generate-id()"/>');
			</xsl:for-each>

			var finds_ll = [];
			var removes_ll = [];
			var regex_ll = [];
			var ifinds_ll = [];
			var iremoves_ll = [];
			var iregex_ll = [];
			var addafters_ll = [];
			var iaddafters_ll = [];
			var addbefores_ll = [];
			var iaddbefores_ll = [];
			var replacewiths_ll = [];
			var ireplacewiths_ll = [];
			var increments_ll = [];
			var iincrements_ll = [];
			var comments_ll = [];
			<xsl:for-each select="mod:action-group/mod:open/mod:edit">
				<xsl:for-each select="mod:find">
					finds_ll.push('<xsl:value-of select="generate-id()"/>');
				</xsl:for-each>
				<xsl:for-each select="mod:remove">
					removes_ll.push('<xsl:value-of select="generate-id()"/>');
				</xsl:for-each>
				<xsl:if test="count(mod:comment) > 0">
					comments_ll.push('<xsl:value-of select="generate-id()"/>');
				</xsl:if>
				<xsl:for-each select="mod:find|mod:action">
					codes_ll.push('<xsl:value-of select="generate-id()"/>');
					<xsl:if test="name() = 'action'">
						<xsl:if test="@type = 'after-add'">
							addafters_ll.push('<xsl:value-of select="generate-id()"/>');
						</xsl:if>
						<xsl:if test="@type = 'before-add'">
							addbefores_ll.push('<xsl:value-of select="generate-id()"/>');
						</xsl:if>
						<xsl:if test="@type = 'replace-with'">
							replacewiths_ll.push('<xsl:value-of select="generate-id()"/>');
						</xsl:if>
						<xsl:if test="@type = 'operation'">
							increments_ll.push('<xsl:value-of select="generate-id()"/>');
						</xsl:if>
					</xsl:if>
				</xsl:for-each>
				<xsl:for-each select="mod:inline-edit">
					<xsl:for-each select="mod:inline-find">
						ifinds_ll.push('<xsl:value-of select="generate-id()"/>');
						<xsl:if test="@type = 'regex'">
							iregex_ll.push('<xsl:value-of select="generate-id()"/>');
						</xsl:if>
					</xsl:for-each>
					<xsl:for-each select="mod:inline-remove">
						iremoves_ll.push('<xsl:value-of select="generate-id()"/>');
					</xsl:for-each>
					<xsl:for-each select="mod:inline-find|mod:inline-action">
						codes_ll.push('<xsl:value-of select="generate-id()"/>');
						<xsl:if test="name() = 'inline-action'">
							<xsl:if test="@type = 'after-add'">
								iaddafters_ll.push('<xsl:value-of select="generate-id()"/>');
							</xsl:if>
							<xsl:if test="@type = 'before-add'">
								iaddbefores_ll.push('<xsl:value-of select="generate-id()"/>');
							</xsl:if>
							<xsl:if test="@type = 'replace-with'">
								ireplacewiths_ll.push('<xsl:value-of select="generate-id()"/>');
							</xsl:if>
							<xsl:if test="@type = 'operation'">
								iincrements_ll.push('<xsl:value-of select="generate-id()"/>');
							</xsl:if>
						</xsl:if>
					</xsl:for-each>
				</xsl:for-each>
			</xsl:for-each>

			 <xsl:for-each select="mod:action-group/mod:diy-instructions">
				codes_ll.push('<xsl:value-of select="generate-id()"/>');
			</xsl:for-each>

			var copies_ll = [];
			<xsl:for-each select="mod:action-group/mod:copy/mod:file">
				copies_ll.push('<xsl:value-of select="generate-id()"/>');
			</xsl:for-each>

			var delete_ll = [];
			<xsl:for-each select="mod:action-group/mod:delete/mod:file">
				delete_ll.push('<xsl:value-of select="generate-id()"/>');
			</xsl:for-each>

			<xsl:text disable-output-escaping="yes">
<![CDATA[
// The following line from http://www.ryancooper.com/resources/keycode.asp
document.onkeydown = mod_do_keypress;

var host = "http://www.phpbb.com/mods/modx/i18n/";

var enStrings = "dir=ltr\n" +
"h1=Installation instructions for\n" +
"edt-show=Show&nbsp;&gt;&gt;\n" +
"edt-hide=&lt;&lt;&nbsp;Hide\n" +
"V=version\n" +
"t=Title:\n" +
"d=Description:\n" +
"aV=Version:\n" +
"mint=minutes\n" +
"it=Installation time:\n" +
"il=Installation level:\n" +
"ile=Easy\n" +
"ili=Intermediate\n" +
"ila=Advanced\n" +
"au=Author\n" +
"aus=Authors\n" +
"a-un=Username:\n" +
"a-e=Email:\n" +
"a-n=Name:\n" +
"a-h=WWW:\n" +
"a-c=Contributions:\n" +
"a-c-f=From\n" +
"a-c-t=to\n" +
"a-c-s=Since\n" +
"fte=Files to edit\n" +
"icf=Included files\n" +
"icfn=No files have been included with this MOD.\n" +
"dcl=Disclaimer\n" +
"dclt=For security purposes, please check: <a href=\"http://2moons.cc/mods/mod-datenbank/\">http://2moons.cc/mods/mod-datenbank/</a> for the latest version of this MOD. Downloading this MOD from other sites could cause malicious code to enter into your 2Moons Forum. As such, 2Moons will not offer support for MODs not offered in our MODs database, located at: <a href=\"http://2moons.cc/mods/mod-datenbank/\">http://2moons.cc/mods/mod-datenbank/</a>\n" +
"isp=and English support\n" +
"ispt=Support can be obtained at <a href=\"http://2moons.cc/mods/mod-datenbank/\">http://2moons.cc/mods/mod-datenbank/</a> for released MODs.\n" +
"ant=Author notes:\n" +
"lic=License\n" +
"lict=This MOD has been licensed under the following license:\n" +
"ont=and other notes\n" +
"ontt1=Before adding this MOD to your forum, you should back up all files and databases related to this MOD.\n" +
"ontt2=This MOD was designed for 2Moons\n" +
"ontt3=and may not function as stated on other 2Moons versions.\n" +
"onttq=This MOD is development quality. It is not recommended that you install it on a live forum.\n" +
"sql=SQL\n" +
"fca=File copy\n" +
"c-copy=Copy:\n" +
"c-to=To:\n" +
"cde-c=Code:\n" +
"cde-sa=Select all\n" +
"edts=Edits\n" +
"edtt=Use your keyboard to navigate the code boxes. You may also hit '<em>s</em>' on your keyboard to go to the first code box.\n" +
"opn=Open:\n" +
"cm-cmt=Comments\n" +
"fnd=Find\n" +
"fndt=<strong>Tip:</strong> This may be a partial find and not the whole line.\n" +
"remove=Find and Delete\n" +
"removet=<strong>Tip:</strong> Find and delete this code.\n" +
"rplw=Replace with\n" +
"rplwt=<strong>Tip:</strong> Replace the preceding line(s) to find with the following lines.\n" +
"aft=Add after\n" +
"aftt=<strong>Tip:</strong> Add these lines on a new blank line after the preceding line(s) to find.\n" +
"bef=Add before\n" +
"beft=<strong>Tip:</strong> Add these lines on a new blank line before the preceding line(s) to find.\n" +
"inc=Operation\n" +
"inct=<strong>Tip:</strong> This allows you to alter integers.\n" +
"ifnd=In-line Find\n" +
"ifndt=<strong>Tip:</strong> This is a partial match of a line for in-line operations.\n" +
"iremove=In-line Find and Delete\n" +
"iremovet=<strong>Tip:</strong> Find this code in the line and delete it.\n" +
"irplw=In-line Replace with\n" +
"irplwt=\n" +
"iaft=In-line Add after\n" +
"iaftt=\n" +
"ibef=In-line Add before\n" +
"ibeft=\n" +
"iinc=In-line Operation\n" +
"iinct=<strong>Tip:</strong> This allows you to alter integers.\n" +
"diy=DIY instructions\n" +
"diyt=These are manual instructions that cannot be performed automatically. You should follow these instructions carefully.\n" +
"eom=Save all files. End of MOD.\n" +
"eomt=You have finished the installation for this MOD. Upload all changed files to your website. If the installation went bad, simply restore your backed up files.\n" +
"slg=Select language:\n" +
"dbms=Select Database Type:\n" +
"foot=MOD UA XSLT File Copyright &#169; 2007 The phpBB Group, this MOD is copyright to the authors listed above.\n" +
"regex=This find contains an advanced feature known as regular expressions.\n" +
"mhe-v=- Version\n" +
"mh=MOD history\n" +
"addtl-modx=Additional MODX files\n" +
"imn=This MOD has no additional MODX files.\n" +
"link-c=Contrib\n" +
"link-d=Dependency\n" +
"link-l=Language\n" +
"link-p=Parent\n" +
"link-te=Template\n" +
"link-txt=Text file\n" +
"link-tl=Template lang\n" +
"link-un=Uninstall instructions\n" +
"installer-h2=PHP install file\n" +
"installer-exp1=There is a PHP install file that needs to be run in order to complete the installation.\n" +
"installer-exp2=To run it point your browser to, for example,\n" +
"ispt-int=.\n" +
"del-heads=Delete files\n" +
"del-head=Delete file\n" +
"del-file=Delete\n" +
"atm=About this MOD";

var box = codes_ll;
var currentLanguage = "en";
var languagesLoaded = false;
var languages = ['en'];
var arrClasCnt = [
	['a-'	, authors_ll		],
	['c-'	, copies_ll			],
	['del-'	, delete_ll			],
	['cm-'	, comments_ll		],
	['opn'	, opens_ll			],
	['cde-'	, codes_ll			],
	['edt-'	, edits_ll			],
	['fnd'	, finds_ll			],
	['fnd'	, removes_ll			],
	['regex', regex_ll			],
	['rplw'	, replacewiths_ll	],
	['aft'	, addafters_ll		],
	['bef'	, addbefores_ll		],
	['inc'	, increments_ll		],
	['ifnd'	, ifinds_ll			],
	['ifnd'	, iremoves_ll			],
	['regex', iregex_ll			],
	['irplw', ireplacewiths_ll	],
	['iaft'	, iaddafters_ll		],
	['ibef'	, iaddbefores_ll	],
	['iinc'	, iincrements_ll	],
	['mhe'	, mhes_ll			],
	['link', link_ll]
];

function startup()
{
	sql_dropdown();
	change_dbms();
	changeLanguage(currentLanguage);
	document.getElementById('lang-selector').style.display = "block";
	init_mod_history();
}

function changeLanguage(langCode)
{
	langCode = langCode.toLowerCase();
	currentLanguage = langCode.split('-')[0];
	if (currentLanguage.toLowerCase() != 'en') // if change, only include up to first dash
	{
		load_language();
	}
	else
	{
		applyLanguage(enStrings.split("\n"));
	}
	xslLanguage(langCode);
}

function load_languages()
{
	if (languagesLoaded)
	{
		return;
	}
	languagesLoaded = true;

	$divname = document.getElementById('language');
	var loadingItem = document.createElement('option');
	$divname.appendChild(loadingItem);
	loadingItem.innerHTML = 'Loading...';
	$divname.remove(0);

	$output = 'load_languages';
	cachernd = parseInt(Math.random() * 99999999); // cache
	send('', host + 'languages.txt?rnd=' + cachernd);
}

function load_language()
{
	$output = 'load_language';
	cachernd = parseInt(Math.random() * 99999999); // cache
	send('', host + currentLanguage + '.txt?rnd=' + cachernd);
}

/*****************
* AJAX Functions *
*****************/
var $xmlhttp = http_object();
var $finished = 0;
var $send_queue = [];
var $running = false;
var $divname;
var $newform;
var $newurl;
var $output;

function http_object()
{
	if (window.XMLHttpRequest)
	{
		return new XMLHttpRequest();
	}
	else if (window.ActiveXObject)
	{
		return new ActiveXObject("Microsoft.XMLHTTP");
	}
}

function send($action, $url, $form, $div, $clear)
{
	$newform = $form;
	$newurl = $url;

	$send_queue.push("handle_send($newurl, $newform)");

	if (!$running)
	{
		run_ajax();
	}
	return;
}

function run_ajax()
{
	$running = true;
	for ($i = 0; $i < $send_queue.length; $i++)
	{
		if ($xmlhttp.readyState == 4 || $xmlhttp.readyState == 0)
		{
			eval($send_queue[$i]);
		}
		else
		{
			$xmlhttp.onreadystatechange = check_state;
		}
	}
}

function check_state()
{
	if ($xmlhttp.readyState == 4 || $xmlhtt.readyState == 0)
	{
		eval($send_queue[$finished]);
	}
	else
	{
		$xmlhttp.onreadystatechange = check_state;
	}
}

function handle_send($url, $f)
{
	if ($xmlhttp.readyState == 4 || $xmlhttp.readyState == 0)
	{
		$param = '';

		try
		{
			netscape.security.PrivilegeManager.enablePrivilege("UniversalBrowserRead");
			$allowed = true;
		}
		catch (e)
		{}

		try
		{
			$xmlhttp.open('POST', $url, true);
			$xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			$xmlhttp.onreadystatechange = handle_return;
			$xmlhttp.send($param);
		}
		catch (e)
		{
			$divname = document.getElementById('language');
			var loadingItem = document.createElement('option');
			$divname.appendChild(loadingItem);
			loadingItem.innerHTML = 'Unavailable';
			$divname.remove(0);
			$divname.disabled = true;
		}
	}
	return;
}

function handle_return()
{
	if ($xmlhttp.readyState == 4)
	{
		ajax_output($xmlhttp.responseText);

		$finished++;

		if ($send_queue[$finished])
		{
			check_state();
		}
		else
		{
			$send_queue = [];
			$finished = 0;
			$running = false;
		}
	}
	return;
}
/*********************
* END AJAX Functions *
*********************/

function ajax_output($response)
{
	switch ($output)
	{
		case 'load_language':
			var texts = $response.replace("\r\n", "\n").split("\n");
			applyLanguage(texts);
		break;

		case 'load_languages':
			languages = $response.replace("\r", "").split("\n");

			var i, l, s = 0;
			for (i in languages)
			{
				languages[i] = languages[i].replace("\r", "");
				languages[i] = languages[i].split("=");

				var langItem = document.createElement('option');
				$divname.appendChild(langItem);
				langItem.value = languages[i][0];
				var iso = languages[i][0].split('-');
				langItem.innerHTML = languages[i][1];
				if (iso.length == 2)
				{
					langItem.innerHTML += ' [' + iso[1].toUpperCase() + ']';
				}
				if (languages[i][0] == currentLanguage)
				{
					$divname.selectedIndex = s;
					$divname.text = languages[i][1];
				}
				s++;
			}

			$divname.focus();
			$divname.onchange =
			function()
			{
				changeLanguage(this.value.replace(" ", ""));
			};
			$divname.remove(0);
		break;
	}
}

function xslLangEl(langCode, obj_id)
{
	var i, c, a, k,  m = [], show = [], o = document.getElementById(obj_id);
	var lang_c = langCode.replace('_','-'), lang_s = langCode.substr(0, 2);
	var nodes = (o && o.childNodes) ? o.childNodes : '';

	for (i = 0; i < nodes.length; i++)
	{
		c = nodes[i];
		if (c.nodeType != 1)
		{
			continue;
		}
		a = (obj_id == 'link-group') ? c.getElementsByTagName('a') : null;
		k = (a && a[0].href) ? a[0].href : c.tagName;
		if (!c.lang || m[k] === true)
		{
			c.style.display = 'none';
			continue;
		}
		c.lang = c.lang.replace('_', '-').toLowerCase();

		if (m[k])							// Already have a partial match
		{
			if (c.lang != lang_c)			// This isn't an exact match
			{
				c.style.display = 'none';	// So hide it and keep looking
				continue;
			}
			m[k] = true;					// An exact match
		}
		else
		{
			m[k] = (c.lang == lang_c) ? true : (c.lang.substr(0, 2) == lang_s ? 1 : false);
		}
		if (!show[k] || m[k] || c.lang == 'en')
		{
			if (show[k])
			{
				show[k].style.display = 'none';
			}
			show[k] = c;
			c.style.display = '';
			if (a)
			{
				c.getElementsByTagName('span')[0].style.display = 'none';
				//c.firstChild.style.display = 'none'; // This line doesn't work in Safari
			}
		}
		else
		{
			c.style.display = 'none';
		}
	}
}

function xslLanguage(langCode)
{
	i18nedEls = new Array('title','description','author-notes','diy','link-group');
	var c, h, i;
	for (c in comments_ll)
	{
		i18nedEls.push('mod-comment[' + comments_ll[c] + ']');
	}

	for (h in mhcls_ll)
	{
		i18nedEls.push('mhcl[' + mhcls_ll[h] + ']');
	}

	for (i in i18nedEls)
	{
		xslLangEl(langCode, i18nedEls[i]);
	}
}

function in_array(array, value, position)
{
	for (var i = 0; i < array.length; i++)
	{
		// Matches identical (===), not just similar (==).
		if (array[i] === value)
		{
			return (position ? i : true);
		}
	}
	return false;
};

function applyLanguage(texts)
{
	var i;
	for (i in texts)
	{
		var lang = texts[i].split("=", 2), done = 0;
		if (lang.length == 2 && (lang[0] == 'edt-show' || lang[0] == 'edt-hide'))
		{
			toggle_strings[lang[0].replace('edt-', '')] = lang[1];
			if (++done >= 2)
			{
				break;
			}
		}
	}

	for (i in texts)
	{
		var lang = texts[i].split("=");
		if(lang[0] == 'dir')
		{
			set_dir(lang[1]);
		}
		if (lang.length < 2)
		{
			continue;
		}
		try
		{
			var jflag = false;
			for (var j = 0; j < arrClasCnt.length; j++)
			{
				var sw = '-' + lang[0];
				if (sw.match('-' + arrClasCnt[j][0]))
				{
					for (var k = 0; k < arrClasCnt[j][1].length; k++)
					{
						try
						{
							var o = document.getElementById('lang-' + lang[0] + '[' + arrClasCnt[j][1][k] + ']');
							o.innerHTML = lang[1];
							if (o.rel && (o.rel == 'show' || o.rel == 'hide') && (lang[0] == 'edt-show' || lang[0] == 'edt-hide'))
							{
								o.innerHTML = toggle_strings[o.rel];
							}
						}
						catch (e){}
					}
					jflag = true;
				}
			}
			if (!jflag)
			{
				var append = '';
				for (var p = 1; p < lang.length; p++)
				{
					append += (p > 1 ? '=' : '') + lang[p];
				}
				document.getElementById('lang-' + lang[0]).innerHTML = append;
			}
		}
		catch (o){}
	}
	try
	{
		document.getElementById('history_toggle_link').innerHTML = toggle_strings[(document.getElementById('mod_history_content').style.display == '' ? 'hide' : 'show')];
	} catch(o) {}
}

function set_dir(direction)
{
	direction = (direction == 'rtl') ? 'rtl' : 'ltr';
	document.body.style.direction=direction;

	var ie = /*@cc_on!@*/false;
	var dts = document.getElementsByTagName('dt');
	var uls = document.getElementsByTagName('ul');
	var h2s = document.getElementsByTagName('h2');
	var mod_dt = document.getElementsByName('left4px');
	var author_dd = document.getElementsByName('author-dd');
	var ltr_spec = document.getElementsByName('ltr-spec');
	var rtl_spec = document.getElementsByName('rtl-spec');

	var rtl_float = (ie) ? 'styleFloat' : 'cssFloat';

	if(direction == 'rtl')
	{
		for(j = 0; j < dts.length; j++)
		{
			if(ie)
			{
				dts[j].style.styleFloat='right';
			}
			else
			{
				dts[j].style.cssFloat='right';
			}
		}
		for(j = 0; j < h2s.length; j++)
		{
			h2s[j].style.textAlign='right';
		}
		for(j = 0; j < uls.length; j++)
		{
			uls[j].style.margin='0 2em 1em 0';
		}
		for(j = 0; j < ltr_spec.length; j++)
		{
			ltr_spec[j].style.display='none';
		}
		for(j = 0; j < rtl_spec.length; j++)
		{
			rtl_spec[j].style.display='inherit';
		}
		for(j = 0; j < author_dd.length; j++)
		{
			author_dd[j].style.marginRight='115px';
		}
		for(j = 0; j < mod_dt.length; j++)
		{
			mod_dt[j].style.paddingRight='0';
			mod_dt[j].style.paddingLeft='4px';
		}
	}
	else
	{
		for(j = 0; j < dts.length; j++)
		{
			if(ie)
			{
				dts[j].style.styleFloat='left';
			}
			else
			{
				dts[j].style.cssFloat='left';
			}
		}
		for(j = 0; j < h2s.length; j++)
		{
			h2s[j].style.textAlign='left';
		}
		for(j = 0; j < uls.length; j++)
		{
			uls[j].style.margin='0 0 1em 2em';
		}
		for(j = 0; j < ltr_spec.length; j++)
		{
			ltr_spec[j].style.display='inherit';
		}
		for(j = 0; j < rtl_spec.length; j++)
		{
			rtl_spec[j].style.display='none';
		}
		for(j = 0; j < author_dd.length; j++)
		{
			author_dd[j].style.marginleft='112px';
		}
		for(j = 0; j < mod_dt.length; j++)
		{
			mod_dt[j].style.paddingRight='4px';
			mod_dt[j].style.paddingLeft='0';
		}
	}
}

function select_code(a)
{
	// Get ID of code block
	var e = a.parentNode.parentNode.getElementsByTagName('PRE')[0];
	select_text(e.id);
}

var selectedElement = -1;
var boxes = box.length;
var pre_count = 0;

function select_text(id)
{
	var o = document.getElementById(id);
	if(!o)
	{
		return;
	}

	// Not IE
	if (window.getSelection)
	{
		var s = window.getSelection();
		// Safari
		if (s.setBaseAndExtent)
		{
			s.setBaseAndExtent(o, 0, o, o.innerText.length - 1);
		}
		// Firefox and Opera
		else
		{
			var r = document.createRange();
			r.selectNodeContents(o);
			s.removeAllRanges();
			s.addRange(r);
		}
	}
	// Some older browsers
	else if (document.getSelection)
	{
		var s = document.getSelection();
		var r = document.createRange();
		r.selectNodeContents(o);
		s.removeAllRanges();
		s.addRange(r);
	}
	// IE
	else if (document.selection)
	{
		var r = document.body.createTextRange();
		r.moveToElementText(o);
		r.select();
	}

	for(x = 0; x < box.length; x++)
	{
		if (box[x] == id)
		{
			selectedElement = x;
			break;
		}
	}
	return o;
}

/**
* Determines if an object is hidden. If a class is specified, checking will stop when that class is encountered.
*/
function is_hidden(o, className)
{
	o = typeof(o) == 'String' ? document.getElementById(o) : o;
	while (o)
	{
		if (o.style && o.style.display == 'none')
		{
			return true;
		}
		o = (o.parentNode && !(className && o.className == className)) ? o.parentNode : null;
	}
	return false;
}

// function findPosY taken from http://www.quirksmode.org/js/findpos.html
function findPosY(obj)
{
	var curtop = 0;
	if (obj.offsetParent)
	{
		while (obj.offsetParent)
		{
			curtop += obj.offsetTop
			obj = obj.offsetParent;
		}
	}
	else if (obj.y)
	{
		curtop += obj.y;
	}
	return curtop;
}

function selectBox()
{
	obj = select_text(box[selectedElement]);
	window.scrollTo(0, findPosY(obj) - 100);
}

function selectNextBox()
{
	// Find the next box that is not hidden
	for (var i = 0; i < boxes; i++)
	{
		selectedElement = (selectedElement + 1 >= boxes) ? 0 : selectedElement + 1;
		if (!is_hidden(document.getElementById(box[selectedElement]), 'mod-edit-contents'))
		{
			break;
		}
	}
	selectBox();
}

function selectPrevBox()
{
	// Find the previos box that is not hidden
	for (var i = 0; i < boxes; i++)
	{
		selectedElement = (selectedElement - 1 < 0) ? boxes - 1 : selectedElement - 1;
		if (!is_hidden(document.getElementById(box[selectedElement]), 'mod-edit-contents'))
		{
			break;
		}
	}
	selectBox();
}

function selectFirstBox()
{
	// Find the first box that is not hidden
	for (selectedElement = 0; selectedElement < boxes; selectedElement++)
	{
		if (!is_hidden(document.getElementById(box[selectedElement]), 'mod-edit-contents'))
		{
			break;
		}
	}
	selectBox();
}

function mod_do_keypress(e)
{
	var key = (window.event && !window.event.ctrlKey) ? window.event.keyCode : ((e && !e.ctrlKey) ? e.which : null);

	switch (key)
	{
		case 88:	// X
		case 187:	// plus (+)
		case 190:	// period/greater-than (.>)
			selectNextBox();
			return false;
		break;

		case 87:	// W
		case 189:	// minus (-)
		case 188:	// comma/less-than (,<)
			selectPrevBox();
			return false;
		break;

		case 83:	// S
		case 37:
			selectFirstBox();
			return false;
		break;
	}
	return true; // true allows browser to take care of any further key press combinations such as (ctrl|cmd) + c
}

/**
 * Update the MODX with the selected dbms
 *
 */
function change_dbms($form)
{
	$type = [
		'',
		'mysql',
		'mysql_41',
		'mysql_40',
		'firebird',
		'mssql',
		'oracle',
		'postgres',
		'sqllite'
	];
	$exists = 0;
	$tags = document.getElementsByTagName('dbms');

	if ($form)
	{
		sql_display($form.value);
		return;
	}

	if ($tags.length > 0)
	{
		for ($i = 0; $i < $tags.length; $i++)
		{
			if (!($dbms = $tags[$i].attributes['type'].nodeValue))
			{
				continue;
			}
			$position = in_array($type, $dbms, true);
			if ($position !== false)
			{
				$exists = (($exists > 0 && $position < $exists) || $exists == 0) ? $position : $exists;
			}
		}
		if ($exists > 0)
		{
			sql_display($type[$exists]);
		}
	}
}

/**
 * Display the dbms specific sql data with the dbms we have selected
 */
function sql_display($value)
{
	var $ie = /*@cc_on!@*/false;
	var $tags = document.getElementsByTagName('dbms');
	if($ie)
	{
		var $div_list = document.getElementsByTagName('div');
	}

	// show the dbms of type we have selected, hide all others except for non dbms specific
	for ($i = 0; $i < $tags.length; $i++)
	{
		if (!($dbms = $tags[$i].attributes['type'].nodeValue))
		{
			continue;
		}
		if(!$ie)
		{
			$tags[$i].style.display = ($dbms == $value) ? '' : 'none';
		}
		else
		{
			for($j = 0; $j < $div_list.length; $j++)
			{
				if($div_list[$j].name == $dbms)
				{
					$div_list[$j].style.display = ($dbms == $value) ? '' : 'none';
				}
			}
		}
	}
}

/**
 * Load the sql dropdown with all the database types supported by this MODX file
*/
function sql_dropdown()
{
	var $ie = /*@cc_on!@*/false;
	var $dbms_element = document.getElementById('dbms');
	var $dbms_selector = document.getElementById('dbms-selector');
	if (!$dbms_element || !$dbms_selector)
	{
		return;
	}

/*	if($ie)
	{
		$dbms_selector.style.display = 'none';
		return;
	}
*/
	$type = [
		'mysql',
		'mysql_41',
		'mysql_40',
		'firebird',
		'mssql',
		'oracle',
		'postgres',
		'sqllite'
	];
	$options = [];
	$ie_options = [];
	$ie_count = 0;
	$tags = document.getElementsByTagName('dbms');

	// Show the dbms of type we have selected, hide all others except for non dbms specific
	for ($i = 0; $i < $tags.length; $i++)
	{
		if (!($dbms = $tags[$i].attributes['type'].nodeValue))
		{
			continue;
		}
		if (($position = in_array($type, $dbms, true)) !== false)
		{
			$options[$position] = '<option value=' + $dbms + '>' + $dbms + '</option>';
			if($ie)
			{
				if(!in_array($ie_options, $dbms, false))
				{
					$ie_options[$ie_count++] = $dbms;
				}
			}
		}
	}

	if ($options.length > 0)
	{
		$selects = '';

		// sort options and output in the correct order
		for ($i = 0; $i < $type.length; $i++)
		{
			if ($options[$i])
			{
				$selects += $options[$i];
			}
		}
		$dbms_element.innerHTML=$selects;

		if($ie)
		{
			for($i in $ie_options)
			{
				$ie_option = document.createElement('option');
				$ie_option.text = $ie_options[$i];
				$ie_option.value = $ie_options[$i];
				$dbms_element.add($ie_option);
			}
		}
	}
	else
	{
		$dbms_selector.style.display = 'none';
	}
}
						//-->]]>
					</xsl:text>
/**
* Toggle the visibility of certain sections.
*/
var toggle_strings = {
	'show' : (enStrings.match(/^|\n(?:edt-show=)([^\n]*)\n|$/))[1],
	'hide' : (enStrings.match(/^|\n(?:edt-hide=)([^\n]*)\n|$/))[1]
}
function init_mod_history()
{
<xsl:if test="count(mod:header/mod:history/mod:entry) > 1">
	document.getElementById('mod_history_content').style.display = 'none';
	document.getElementById('history_toggle_area').style.display = '';
	document.getElementById('history_toggle_link').innerHTML = toggle_strings['show'];
</xsl:if>
}

function toggle_display(o, n)
{
	var v = o.rel == 'hide';
	n.style.display = n.style.display == '' ? 'none' : '';
	o.rel = v ? 'show' : 'hide';
	o.innerHTML = toggle_strings[o.rel];
	if (o.id.indexOf('lang-edt-') == 0)
	{
		o.style.textAlign = v ? 'left' : 'right';
	}
	return false;
}

function toggle_history(o)
{
	return toggle_display(o, document.getElementById("mod_history_content"));
}

function toggle_edit(o)
{
	var s = o.previousSibling;
	while (s.nodeType != 1)
	{
		s = s.previousSibling;
	}
	return toggle_display(o, s);
}
				</script>
		</head>
		<body onload="startup()">
		<div id="debug"></div>
		<div id="wrap">
			<div id="page-header">
				<h1><span id="lang-h1">Installation instructions for</span> '<xsl:value-of select="$title" />' <span id="lang-V">version</span>&nbsp;<xsl:value-of select="$version" /></h1>
			</div>
			<div id="page-body">
				<div id="acp">
					<div class="panel"><span class="corners-top"><span></span></span>
						<div id="content">
							<div id="main">
								<xsl:for-each select="mod:header">
									<xsl:call-template name="give-header"></xsl:call-template>
								</xsl:for-each>

								<div class="permissions" id="Fieldset1">
									<xsl:for-each select="mod:action-group">
										<xsl:call-template name="give-actions"></xsl:call-template>
									</xsl:for-each>
									<hr style="margin-bottom:0;" />
									<div class="endMOD">
										<h2 id="lang-eom">Save all files. End of MOD.</h2>
										<p id="lang-eomt">You have finished the installation for this MOD. Upload all changed files to your website. If the installation went bad, simply restore your backed up files.</p>
									</div>
								</div>
							</div>
						</div>
					<span class="corners-bottom"><span></span></span></div>
				</div>
			</div>
			<div id="page-footer">
				<p class="copyright" style="text-align: center; font-size: 10px;" id="lang-foot">MOD UA XSLT File Copyright &#169; 2008 The phpBB Group.  This MOD is copyright to the authors listed above.</p>
			</div>
		</div>
		</body>
		</html>
	</xsl:template>

	<xsl:template name="give-header">
		<fieldset>
			<legend id="lang-atm">About this MOD</legend>
			<div class="mod-about">
				<span class="corners-top"><span></span></span>
				<dl>
					<dt id="lang-t" name="left4px">Title:</dt>
					<dd>
						<xsl:if test="count(mod:title) > 1">
							<dl id="title" class="nopadding">
								<xsl:for-each select="mod:title">
									<dt><xsl:value-of select="@lang" /></dt>
									<dd style='white-space:pre;' lang="{@lang}">
										<p><xsl:value-of select="current()" /></p>
									</dd>
								</xsl:for-each>
							</dl>
						</xsl:if>
						<xsl:if test="count(mod:title) = 1">
							<p lang="{@lang}" style='white-space:pre;'><xsl:value-of select="mod:title" /></p>
						</xsl:if>
					</dd>
					<dt id="lang-d" name="left4px">Description:</dt>
					<dd>
						<xsl:if test="count(mod:description) > 1">
							<dl id="description" class="nopadding">
								<xsl:for-each select="mod:description">
									<dt><xsl:value-of select="@lang" /></dt>
									<dd lang="{@lang}">
										<p>
											<xsl:call-template name="add-line-breaks">
												<xsl:with-param name="string"><xsl:value-of select="current()" /></xsl:with-param>
											</xsl:call-template>
										</p>
									</dd>
								</xsl:for-each>
							</dl>
						</xsl:if>
						<xsl:if test="count(mod:description) = 1">
							<p lang="{@lang}">
								<xsl:call-template name="add-line-breaks">
									<xsl:with-param name="string"><xsl:value-of select="mod:description" /></xsl:with-param>
								</xsl:call-template>
							</p>
						</xsl:if>
					</dd>
					<dt id="lang-aV" name="left4px">Version:</dt>
					<dd class="mod-about">
						<p>
							<xsl:for-each select="mod:mod-version">
								<xsl:value-of select="$version" />
							</xsl:for-each>
						</p>
					</dd>
					<xsl:for-each select="mod:installation">
						<xsl:call-template name="give-installation"></xsl:call-template>
					</xsl:for-each>
					<xsl:if test="mod:author-notes != 'N/A' and mod:author-notes != 'n/a' and mod:author-notes != ''">
						<dt id="lang-ant" name="left4px">Author notes:</dt>
						<dd>
							<xsl:if test="count(mod:author-notes) > 1">
								<dl id="author-notes" class="nopadding">
									<xsl:for-each select="mod:author-notes">
										<dt><xsl:value-of select="@lang" /></dt>
										<dd lang="{@lang}">
											<p>
												<xsl:call-template name="add-line-breaks">
													<xsl:with-param name="string"><xsl:value-of select="current()" /></xsl:with-param>
												</xsl:call-template>
											</p>
										</dd>
									</xsl:for-each>
								</dl>
							</xsl:if>
							<xsl:if test="count(mod:author-notes) = 1">
								<p lang="{@lang}">
									<xsl:call-template name="add-line-breaks">
										<xsl:with-param name="string"><xsl:value-of select="mod:author-notes" /></xsl:with-param>
									</xsl:call-template>
								</p>
							</xsl:if>
						</dd>
					</xsl:if>
				</dl>
				<span class="corners-bottom"><span></span></span>
			</div>
		</fieldset>
		<fieldset>
			<xsl:for-each select="mod:author-group">
				<xsl:if test="count(mod:author) > 1">
					<legend id="lang-aus">Authors</legend>
				</xsl:if>
				<xsl:if test="count(mod:author) = 1">
					<legend id="lang-au">Author</legend>
				</xsl:if>
				<xsl:call-template name="give-authors"></xsl:call-template>
			</xsl:for-each>
		</fieldset>
		<xsl:if test="count(../mod:action-group/mod:open) > 0">
			<h3 id="lang-fte">Files to edit</h3>
			<xsl:for-each select="../mod:action-group">
				<xsl:call-template name="give-files-to-edit"></xsl:call-template>
			</xsl:for-each>
		</xsl:if>
		<h3 id="lang-icf">Included files</h3>
		<xsl:if test="count(../mod:action-group/mod:copy/mod:file) = 0">
			<p id="lang-icfn">No files have been included with this MOD.</p>
		</xsl:if>
		<xsl:for-each select="../mod:action-group">
			<xsl:call-template name="give-files-included"></xsl:call-template>
		</xsl:for-each>
		<h3 id="lang-addtl-modx">Additional MODX files</h3>
		<xsl:if test="count(mod:link-group/mod:link) = 0">
			<p id="lang-imn">This MOD has no additional MODX files.</p>
		</xsl:if>

		<ul class="link-group" id="link-group">
			<xsl:for-each select="mod:link-group/mod:link">
				<li lang="{@lang}">
					<span class="link-group-lang"><xsl:value-of select="@lang" />&nbsp;</span>
					<strong>
						<xsl:if test="@type = 'contrib'">
							<span id="lang-link-c[{generate-id()}]">Contrib</span>:
						</xsl:if>
						<xsl:if test="@type = 'dependency'">
							<span id="lang-link-d[{generate-id()}]">Dependency</span>:
						</xsl:if>
						<xsl:if test="@type = 'language'">
							<span id="lang-link-l[{generate-id()}]">Language</span>:
						</xsl:if>
						<xsl:if test="@type = 'parent'">
							<span id="lang-link-p[{generate-id()}]">Parent</span>:
						</xsl:if>
						<xsl:if test="@type = 'template'">
							<span id="lang-link-te[{generate-id()}]">Template</span>:
						</xsl:if>
						<xsl:if test="@type = 'template-lang'">
							<span id="lang-link-tl[{generate-id()}]">Template lang</span>:
						</xsl:if>
						<xsl:if test="@type = 'text'">
							<span id="lang-link-txt[{generate-id()}]">Text file</span>:
						</xsl:if>
						<xsl:if test="@type = 'uninstall'">
							<span id="lang-link-un[{generate-id()}]">Uninstall instructions</span>:
						</xsl:if>
					</strong>
					&nbsp;<a href="{@href}"><xsl:value-of select="current()" /></a>
				</li>
			</xsl:for-each>
		</ul>
		<hr />
		<div id="modDisclaimer">
			<h3><span id="lang-dcl">Disclaimer</span>&nbsp;<span id="lang-ont">and other notes</span></h3>
			<div class="mod-about">
				<span class="corners-top"><span></span></span>
				<div class="mod-about-padding">
					<p><span id="lang-dclt">For security purposes, please check: <a href="http://2moons.cc/mods/mod-datenbank/">http://2moons.cc/mods/mod-datenbank/</a> for the latest version of this MOD. Downloading this MOD from other sites could cause malicious code to enter into your 2Moons Forum. As such, 2Moons will not offer support for MODs not offered in our MODs database, located at: <a href="http://2moons.cc/mods/mod-datenbank/">http://2moons.cc/mods/mod-datenbank/</a></span></p>
					<p><span id="lang-ontt1">Before adding this MOD to your forum, you should back up all files and databases related to this MOD.</span></p>
					<p><span id="lang-ontt2">This MOD was designed for 2Moons</span><xsl:text> </xsl:text><xsl:value-of select="mod:installation/mod:target-version" /><xsl:text> </xsl:text>&nbsp;<span id="lang-ontt3">and may not function as stated on other 2Moons versions.</span></p>
					<xsl:for-each select="./mod:mod-version">
						<xsl:if test="substring-before(current(), '.') = 0">
							<p><strong class="red"><span id="lang-onttq">This MOD is development quality. It is not recommended that you install it on a live forum.</span></strong></p>
						</xsl:if>
					</xsl:for-each>
				</div>
				<span class="corners-bottom"><span></span></span>
			</div>
		</div>
		<div>
			<h3><span id="lang-lic">License</span>&nbsp;<span id="lang-isp">and English support</span></h3>
			<div class="mod-about">
				<span class="corners-top"><span></span></span>
				<div class="mod-about-padding">
					<p><span id="lang-lict">This MOD has been licensed under the following license:</span></p>
					<p style='white-space:pre;'><a href="license.txt"><xsl:value-of select="mod:license" /></a></p>
					<p><span id="lang-ispt">Support can be obtained at <a href="http://2moons.cc/mods/mod-datenbank/">http://2moons.cc/mods/mod-datenbank/</a> for released MODs.</span></p>
				</div>
				<span class="corners-bottom"><span></span></span>
			</div>
			<xsl:for-each select="mod:history">
				<xsl:call-template name="give-mod-history"></xsl:call-template>
			</xsl:for-each>
		</div>
	</xsl:template>

	<xsl:template name="give-authors">
		<xsl:for-each select="mod:author">
			<div class="mod-about">
				<span class="corners-top"><span></span></span>
					<dl class="author-info">
						<dt id="lang-a-un[{generate-id()}]" name="left4px">Username:</dt>

						<xsl:variable name="authorname" select="mod:username" />
						<xsl:for-each select="mod:username">
							<xsl:choose>
								<xsl:when test="@phpbbcom = 'no' or @phpbbcom = 'No' or @phpbbcom = 'NO'">
									<dd name="author-dd"><span dir="ltr"><xsl:value-of select="$authorname" /></span></dd>
								</xsl:when>

								<xsl:otherwise>
									<xsl:variable name="authorurl">
										<xsl:call-template name="validate-username">
											<xsl:with-param name="string-in" select="string($authorname)"/>
										</xsl:call-template>
									</xsl:variable>

									<xsl:variable name="browserEngine" select="system-property('xsl:vendor')" />
									<xsl:choose>
										<xsl:when test="$browserEngine='Opera'">
											<xsl:variable name="operaurl">
												<xsl:call-template name="validate-opera">
													<xsl:with-param name="string-in" select="string($authorurl)"/>
												</xsl:call-template>
											</xsl:variable>
											<dd name="author-dd"><a dir="ltr" href="http://2moons.cc/index.php?page=User&amp;username={$operaurl}"><xsl:value-of select="$authorname" /></a></dd>
										</xsl:when>
										<xsl:otherwise>
											<dd name="author-dd"><a dir="ltr" href="http://2moons.cc/index.php?page=User&amp;username={$authorurl}"><xsl:value-of select="$authorname" /></a></dd>
										</xsl:otherwise>

									</xsl:choose>
								</xsl:otherwise>

							</xsl:choose>
						</xsl:for-each>
						<xsl:if test="mod:email != 'N/A' and mod:email != 'n/a' and mod:email != ''">
							<dt id="lang-a-e[{generate-id()}]">Email:</dt>
							<dd name="author-dd"><a href="mailto:{mod:email}"><xsl:value-of select="mod:email" /></a></dd>
						</xsl:if>
						<xsl:if test="mod:realname != 'N/A' and mod:realname != 'n/a' and mod:realname != ''">
							<dt id="lang-a-n[{generate-id()}]">Name:</dt>
							<dd name="author-dd"><xsl:value-of select="mod:realname" /></dd>
						</xsl:if>
						<xsl:if test="mod:homepage != 'N/A' and mod:homepage != 'n/a' and mod:homepage!=''">
							<dt id="lang-a-h[{generate-id()}]">WWW:</dt>
							<dd name="author-dd"><a href="{mod:homepage}" dir="ltr"><xsl:value-of select="mod:homepage" /></a></dd>
						</xsl:if>
						<xsl:if test="count(mod:contributions-group) > 0">
							<dt id="lang-a-c[{generate-id()}]">Contributions:</dt>
							<xsl:for-each select="mod:contributions-group/mod:contributions">
								<dd name="author-dd">

									<span name="rtl-spec" style="display: none">
										<xsl:if test="@status = 'past' and @from != 'N/A' and @from != 'n/a' and @from!=''">
											<xsl:if test="@to != 'N/A' and @to != 'n/a' and @to!=''">
											<span id="lang-a-c-f[{generate-id()}]">From</span>:&nbsp;<xsl:value-of select="@from" />&nbsp;<span id="lang-a-c-t[{generate-id()}]]">to</span>:&nbsp;<xsl:value-of select="@to" />
											</xsl:if>
										</xsl:if>
										<xsl:if test="@status = 'current' and @from != 'N/A' and @from != 'n/a' and @from!=''">
											<span id="lang-a-c-s[{generate-id()}]]">Since</span>:&nbsp;<xsl:value-of select="@from" />
										</xsl:if>
										&nbsp;<strong style="text-transform: capitalize;"><xsl:value-of select="@position" /></strong>
									</span>

									<span name="ltr-spec">
										<strong style="text-transform: capitalize;"><xsl:value-of select="@position" /></strong>&nbsp;
										<xsl:if test="@status = 'past' and @from != 'N/A' and @from != 'n/a' and @from!=''">
											<xsl:if test="@to != 'N/A' and @to != 'n/a' and @to!=''">
											(<span id="lang-a-c-f[{generate-id()}]]">From</span>:&nbsp;<xsl:value-of select="@from" />&nbsp;<span id="lang-a-c-t[{generate-id()}]]">to</span>:&nbsp;<xsl:value-of select="@to" />)
											</xsl:if>
										</xsl:if>
										<xsl:if test="@status = 'current' and @from != 'N/A' and @from != 'n/a' and @from!=''">
											(<span id="lang-a-c-s[{generate-id()}]]">Since</span>:&nbsp;<xsl:value-of select="@from" />)
										</xsl:if>
									</span>

								</dd>
							</xsl:for-each>
						</xsl:if>
					</dl>
				<span class="corners-bottom"><span></span></span>
			</div>
		</xsl:for-each>
	</xsl:template>

	<xsl:template name="give-installation">
		<dt id="lang-il" name="left4px">Installation level:</dt>
		<dd class="mod-about">
			<div class="inner">
				<xsl:if test="mod:level='easy'">
					<p id="lang-ile">Easy</p>
				</xsl:if>
				<xsl:if test="mod:level='intermediate'">
					<p id="lang-ili">Intermediate</p>
				</xsl:if>
				<xsl:if test="mod:level='advanced'">
					<p id="lang-ila">Advanced</p>
				</xsl:if>
			</div>
		</dd>
		<dt id="lang-it" name="left4px">Installation time:</dt>
		<dd class="mod-about">
			<div class="inner">
				<p>~<xsl:value-of select="floor(mod:time div 60)" />&nbsp;<span id="lang-mint">minutes</span></p>
			</div>
		</dd>
	</xsl:template>

	<xsl:template name="give-mod-history">
		<xsl:if test="count(mod:entry) > 0">
			<fieldset>
			<legend id="lang-mh">MOD history</legend>
			<div class="mod-about" id="history_toggle_area" style="display:none;">
				<span class="corners-top"><span></span></span>
				<div class="mod-about-padding">
					<a href="#" id="history_toggle_link" rel="show" onclick="return toggle_history(this);"></a>
				</div>
				<span class="corners-bottom"><span></span></span>
			</div>
			<div id="mod_history_content">
			<xsl:for-each select="mod:entry">
				<xsl:call-template name="give-history-entry"></xsl:call-template>
			</xsl:for-each>
			</div>
			</fieldset>
		</xsl:if>
	</xsl:template>

	<xsl:template name="give-history-entry">
		<div class="mod-about">
			<span class="corners-top"><span></span></span>
			<dl class="mod-history">
				<dt>
					<p><strong><xsl:value-of select="substring(mod:date,1,10)" />&nbsp;<span id="lang-mhe-v[{generate-id()}]">- Version</span>
						<xsl:for-each select="mod:rev-version">
							<xsl:value-of select="current()" />
						</xsl:for-each>
						</strong></p>
				</dt>
				<dd><br clear="all" />
					<xsl:if test="count(mod:changelog) > 1">
						<dl id="mhcl[{generate-id()}]">
							<xsl:for-each select="mod:changelog">
								<xsl:call-template name="give-history-entry-changelog"></xsl:call-template>
							</xsl:for-each>
						</dl>
					</xsl:if>
					<xsl:if test="count(mod:changelog) = 1">
						<xsl:for-each select="mod:changelog">
							<xsl:call-template name="give-history-entry-changelog-single"></xsl:call-template>
						</xsl:for-each>
					</xsl:if>
				</dd>
			</dl>
			<span class="corners-bottom"><span></span></span>
		</div>
	</xsl:template>

	<xsl:template name="give-history-entry-changelog">
		<dt><xsl:value-of select="@lang" /></dt>
		<dd lang="{@lang}">
			<ul>
				<xsl:for-each select="mod:change">
					<li>
						<p><xsl:value-of select="current()" /></p>
					</li>
				</xsl:for-each>
			</ul>
		</dd>
	</xsl:template>

	<xsl:template name="give-history-entry-changelog-single">
		<ul>
			<xsl:for-each select="mod:change">
				<li>
					<p><xsl:value-of select="current()" /></p>
				</li>
			</xsl:for-each>
		</ul>
	</xsl:template>

	<xsl:template name="give-files-to-edit">
		<ul>
			<xsl:for-each select="mod:open">
				<xsl:call-template name="give-file"></xsl:call-template>
			</xsl:for-each>
		</ul>
	</xsl:template>

	<xsl:template name="give-files-included">
		<ul>
			<xsl:for-each select="mod:copy">
				<xsl:call-template name="give-file-copy"></xsl:call-template>
			</xsl:for-each>
		</ul>
	</xsl:template>

	<xsl:template name="give-file">
		<li><a href="#{@src}"><xsl:value-of select="@src" /></a><xsl:if test="position()!=last()">,</xsl:if></li>
	</xsl:template>

	<xsl:template name="give-file-copy">
		<xsl:for-each select="mod:file">
			<li><xsl:value-of select="@from" />
				<xsl:if test="position()!=last()">,
				</xsl:if>
			</li>
		</xsl:for-each>
	</xsl:template>

	<xsl:template name="give-actions">
	  <xsl:if test="count(mod:sql) > 0 or count(mod:copy) > 0 or count(mod:open) > 0">
	  <hr />
    </xsl:if>
		<xsl:if test="count(mod:sql) > 0">
			<form method="post" action="" id="dbms-selector">
				<fieldset class="nobg">
					<label for="dbms"> <span id="lang-dbms">Select Database Type:</span> </label>
					<select id="dbms" name="dbms" onchange="change_dbms(this);">
						<option value="mysql_41" selected="selected">MySQL 41</option>
						<option value="mysql_40">MySQL 40</option>
						<option value="firebird">Firebird</option>
						<option value="mssql">MSSQL</option>
						<option value="oracle">Oracle</option>
						<option value="postgres">Postgres</option>
						<option value="sqllite">SQLLite</option>
					</select>
				</fieldset>
			</form>
			<h2 id="lang-sql">SQL</h2>
			<div id="sql" class="mod-about">
				<span class="corners-top"><span></span></span>
					<xsl:for-each select="mod:sql">
						<xsl:call-template name="give-sql"></xsl:call-template>
					</xsl:for-each>
				<span class="corners-bottom"><span></span></span>
			</div>
		</xsl:if>
		<xsl:if test="count(mod:copy) > 0">
			<xsl:for-each select="mod:copy">
				<xsl:call-template name="give-filez"></xsl:call-template>
			</xsl:for-each>
		</xsl:if>
		<xsl:if test="count(mod:delete) > 0">
			<xsl:for-each select="mod:delete">
				<xsl:call-template name="away-filez"></xsl:call-template>
			</xsl:for-each>
		</xsl:if>
		<xsl:if test="count(mod:open) > 0">
			<h2 id="lang-edts">Edits</h2>
			<p><span class="key">s</span><span class="key">w</span><span class="key">x</span><span id="lang-edtt">Use your keyboard to navigate the code boxes. You may also hit '<em>s</em>' on your keyboard to go to the first code box.</span></p>
			<div id="edits">
				<div class="inner">
					<xsl:for-each select="mod:open">
						<xsl:call-template name="give-fileo"></xsl:call-template>
					</xsl:for-each>
				</div>
			</div>
		</xsl:if>
		<xsl:if test="count(mod:php-installer) > 0">
			<h2 id="lang-installer-h2">PHP install file</h2>
			<div class="mod-about">
				<span class="corners-top"><span></span></span>
					<div class="mod-about-padding">
						<p>
							<span id="lang-installer-exp1">There is a PHP install file that needs to be run in order to complete the installation.</span>
							<br />
							<span id="lang-installer-exp2">To run it point your browser to, for example,</span><span dir="ltr"> domain.tld/2Moons/<xsl:value-of select="mod:php-installer" /></span>
						</p>
						<div class="content">
							<div class="codebox">
								<div class="codeHead"><span id="lang-cde-c[{generate-id()}]">Code:</span><a href="#" onclick="select_code(this); return false;" class="codeSelect"><span id="lang-cde-sa[{generate-id()}]">Select All</span></a></div>
								<div class="codePre"><pre id="{generate-id()}" dir="ltr"><xsl:value-of select="mod:php-installer" /></pre></div>
							</div>
						</div>
					</div>
				<span class="corners-bottom"><span></span></span>
			</div>
		</xsl:if>
		<xsl:call-template name="give-manual" />
	</xsl:template>

	<xsl:template name="give-sql">
		<dbms type="{@dbms}">
			<div class="content" name="{@dbms}">
				<xsl:if test="@dbms != ''">
					<xsl:value-of select="@dbms" />:
				</xsl:if>
				<div class="codebox">
					<div class="codeHead"><span id="lang-cde-c[{generate-id()}]">Code:</span><a href="#" onclick="select_code(this); return false;" class="codeSelect"><span id="lang-cde-sa[{generate-id()}]">Select all</span></a></div>
					<div class="codePre"><pre id="{generate-id()}" dir="ltr"><xsl:value-of select="current()" /></pre></div>
				</div>
			</div>
		</dbms>
	</xsl:template>

	<xsl:template name="give-manual">
		<xsl:if test="count(mod:diy-instructions)">
			<h2 id="lang-diy">DIY instructions</h2>
			<div class="mod-about">
				<span class="corners-top"><span></span></span>
					<div class="mod-about-padding">
					<p><span id="lang-diyt">These are manual instructions that cannot be performed automatically. You should follow these instructions carefully.</span></p>
					</div>
					<div id="diy">
						<xsl:for-each select="mod:diy-instructions">
							<div lang="{@lang}" style="margin:0;">
								<div class="content">
									<div class="codebox">
										<div class="codeHead"><span id="lang-cde-c[{generate-id()}]">Code:</span><a href="#" onclick="select_code(this); return false;" class="codeSelect"><span id="lang-cde-sa[{generate-id()}]">Select All</span></a></div>
										<div class="codePre"><pre id="{generate-id()}"><xsl:value-of select="current()" /></pre></div>
									</div>
								</div>
							</div>
						</xsl:for-each>
					</div>
				<span class="corners-bottom"><span></span></span>
			</div>
		</xsl:if>
	</xsl:template>

	<xsl:template name="give-fileo">
		<div class="mod-about">
			<span class="corners-top"><span></span></span>
			<div class="editFile">
				<h3><span id="lang-opn[{generate-id()}]">Open:</span>&nbsp;<a name="{@src}"><xsl:value-of select="@src" /></a></h3>
				<xsl:for-each select="mod:edit">
					<div class="mod-edit">
						<div class="mod-edit-contents">
						<xsl:if test="count(mod:comment) > 0">
							<div class="mod-comment" style="margin:0;">
								<h4 id="lang-cm-cmt[{generate-id()}]">Comments</h4>
								<dl id="mod-comment[{generate-id()}]">
									<xsl:for-each select="mod:comment">
										<dt><span>
											<xsl:if test="count(../mod:comment) > 1">
												<xsl:value-of select="@lang" />
											</xsl:if>
											</span></dt>
										<dd lang="{@lang}"><xsl:value-of select="current()" /></dd>
									</xsl:for-each>
								</dl>
							</div>
						</xsl:if>
						<xsl:for-each select="mod:find|mod:remove|mod:action|mod:inline-edit">
							<xsl:if test="name() = 'find'">
								<h4 id="lang-fnd[{generate-id()}]">Find</h4>
								<p><span id="lang-fndt[{generate-id()}]"><strong>Tip:</strong> This may be a partial find and not the whole line.</span>
									<xsl:if test="@type = 'regex'">
										<br /><em id="lang-regex[{generate-id()}]">This find contains an advanced feature known as regular expressions.</em>
									</xsl:if>
								</p>
								<div class="codebox">
									<div class="codeHead"><span id="lang-cde-c[{generate-id()}]">Code:</span><a href="#" onclick="select_code(this); return false;" class="codeSelect"><span id="lang-cde-sa[{generate-id()}]">Select All</span></a></div>
									<div class="codePre"><pre id="{generate-id()}" dir="ltr"><xsl:value-of select="current()" /></pre></div>
								</div>
							</xsl:if>
							<xsl:if test="name() = 'remove'">
								<h4 id="lang-remove[{generate-id()}]" style="color: #FF0FFF;">Find and Delete</h4>
								<p><span id="lang-removet[{generate-id()}]"><strong>Tip:</strong>  Find and delete this code.</span></p>
								<div class="codebox">
									<div class="codeHead"><span id="lang-cde-c[{generate-id()}]">Code:</span><a href="#" onclick="select_code(this); return false;" class="codeSelect"><span id="lang-cde-sa[{generate-id()}]">Select All</span></a></div>
									<div class="codePre"><pre id="{generate-id()}" dir="ltr"><xsl:value-of select="current()" /></pre></div>
								</div>
							</xsl:if>
							<xsl:if test="name() = 'action'">
								<xsl:if test="@type = 'after-add'">
									<h4 id="lang-aft[{generate-id()}]" style="color: #009933;">Add after</h4>
									<p><span id="lang-aftt[{generate-id()}]"><strong>Tip:</strong> Add these lines on a new blank line after the preceding line(s) to find.</span></p>
								</xsl:if>
								<xsl:if test="@type = 'before-add'">
									<h4 id="lang-bef[{generate-id()}]" style="color: #AC1987;">Add before</h4>
									<p><span id="lang-beft[{generate-id()}]"><strong>Tip:</strong> Add these lines on a new blank line before the preceding line(s) to find.</span></p>
								</xsl:if>
								<xsl:if test="@type = 'replace-with'">
									<h4 id="lang-rplw[{generate-id()}]" style="color: #AE1616;">Replace with</h4>
									<p><span id="lang-rplwt[{generate-id()}]"><strong>Tip:</strong> Replace the preceding line(s) to find with the following lines.</span></p>
								</xsl:if>
								<xsl:if test="@type = 'operation'">
									<h4 id="lang-inc[{generate-id()}]" style="color: #333333;">Operation</h4>
									<p><span id="lang-inct[{generate-id()}]"><strong>Tip:</strong> This allows you to alter integers.</span></p>
								</xsl:if>
								<div class="codebox">
									<div class="codeHead"><span id="lang-cde-c[{generate-id()}]">Code:</span><a href="#" onclick="select_code(this); return false;" class="codeSelect"><span id="lang-cde-sa[{generate-id()}]">Select all</span></a></div>
									<div class="codePre"><pre id="{generate-id()}" dir="ltr"><xsl:value-of select="current()" /></pre></div>
								</div>
							</xsl:if>
							<xsl:if test="name() = 'inline-edit'">
								<div class="mod-inlineedit">
									<xsl:for-each select="mod:inline-find|mod:inline-remove|mod:inline-action|mod:inline-comment">
										<xsl:if test="name() = 'inline-find'">
											<h5 id="lang-ifnd[{generate-id()}]">In-line Find</h5>
											<p><span id="lang-ifndt[{generate-id()}]"><strong>Tip:</strong> This is a partial match of a line for in-line operations.</span>
												<xsl:if test="@type = 'regex'">
													<br /><em id="lang-regex[{generate-id()}]">This find contains an advanced feature known as regular expressions.</em>
												</xsl:if>
											</p>
											<div class="codebox">
												<div class="codeHead"><span id="lang-cde-c[{generate-id()}]">Code:</span><a href="#" onclick="select_code(this); return false;" class="codeSelect"><span id="lang-cde-sa[{generate-id()}]">Select all</span></a></div>
												<div class="codePre"><pre id="{generate-id()}" dir="ltr"><xsl:value-of select="current()" /></pre></div>
											</div>
										</xsl:if>
										<xsl:if test="name() = 'inline-remove'">
											<h5 id="lang-iremove[{generate-id()}]" style="color: #FF0FFF;">In-line Find and Delete</h5>
											<p><span id="lang-iremovet[{generate-id()}]"><strong>Tip:</strong> Find this code in the line and delete it.</span></p>
											<div class="codebox">
												<div class="codeHead"><span id="lang-cde-c[{generate-id()}]">Code:</span><a href="#" onclick="select_code(this); return false;" class="codeSelect"><span id="lang-cde-sa[{generate-id()}]">Select all</span></a></div>
												<div class="codePre"><pre id="{generate-id()}" dir="ltr"><xsl:value-of select="current()" /></pre></div>
											</div>
										</xsl:if>
										<xsl:if test="name() = 'inline-action'">
											<xsl:if test="@type = 'after-add'">
												<h5 id="lang-iaft[{generate-id()}]" style="color: #009933;">In-line Add after</h5>
												<p><span id="lang-iaftt[{generate-id()}]"></span></p>
											</xsl:if>
											<xsl:if test="@type = 'before-add'">
												<h5 id="lang-ibef[{generate-id()}]" style="color: #AC1987;">In-line Add before</h5>
												<p><span id="lang-ibeft[{generate-id()}]"></span></p>
											</xsl:if>
											<xsl:if test="@type = 'replace-with'">
												<h5 id="lang-irplw[{generate-id()}]" style="color: #AE1616;">In-line Replace with</h5>
												<p><span id="lang-irplwt[{generate-id()}]"></span></p>
											</xsl:if>
											<xsl:if test="@type = 'operation'">
												<h5 id="lang-iinc[{generate-id()}]" style="color: #333333;">In-line Operation</h5>
												<p><span id="lang-iinct[{generate-id()}]"><strong>Tip:</strong> This allows you to alter integers.</span></p>
											</xsl:if>
											<div class="codebox">
												<div class="codeHead"><span id="lang-cde-c[{generate-id()}]">Code:</span><a href="#" onclick="select_code(this); return false;" class="codeSelect"><span id="lang-cde-sa[{generate-id()}]">Select All</span></a></div>
												<div class="codePre"><pre id="{generate-id()}" dir="ltr"><xsl:value-of select="current()" /></pre></div>
											</div>
										</xsl:if>
										<xsl:if test="name() = 'inline-comment'">
											<dl id="comment[{generate-id()}]">
												<dt><span id="lang-cm-cmt[{generate-id()}]">Comments</span>&nbsp;<span><xsl:value-of select="@lang" /></span></dt>
												<dd lang="{@lang}"><xsl:value-of select="current()" /></dd>
											</dl>
										</xsl:if>
									</xsl:for-each>
								</div>
							</xsl:if>
						</xsl:for-each>
						</div>
						<a href="#" id="lang-edt-hide[{generate-id()}]" class="edit_toggle_link" rel="hide" onclick="return toggle_edit(this);">&lt;&lt;&nbsp;Hide</a>
					</div>
				</xsl:for-each>
			</div>
			<span class="corners-bottom"><span></span></span>
		</div>
	</xsl:template>

	<xsl:template name="give-filez">
		<h2 id="lang-fca">File copy</h2>
		<ol id="file-copy">
			<xsl:for-each select="mod:file">
				<li>
					<dl>
						<dt><span id="lang-c-copy[{generate-id()}]">Copy:</span>&nbsp;<xsl:value-of select="@from" /></dt>
						<dd><span id="lang-c-to[{generate-id()}]">To:</span>&nbsp;<xsl:value-of select="@to" /></dd>
					</dl>
				</li>
			</xsl:for-each>
		</ol>
	</xsl:template>

	<xsl:template name="away-filez">
		<xsl:choose>
			<xsl:when test="count(mod:file) > 1">
				<h2 id="lang-del-heads">Delete files</h2>
			</xsl:when>
			<xsl:otherwise>
				<h2 id="lang-del-head">Delete file</h2>
			</xsl:otherwise>
		</xsl:choose>
		<ol id="file-delete">
			<xsl:for-each select="mod:file">
				<li>
					<dl>
						<dt><span id="lang-del-file[{generate-id()}]">Delete:</span>&nbsp;<xsl:value-of select="@name" /></dt>
					</dl>
				</li>
			</xsl:for-each>
		</ol>
	</xsl:template>

	<!-- add-line-breaks borrowed from http://www.stylusstudio.com/xsllist/200103/post40180.html -->
	<xsl:template name="add-line-breaks">
		<xsl:param name="string" select="." />
		<xsl:choose>
			<xsl:when test="contains($string, '&#xA;')">
				<xsl:value-of select="substring-before($string, '&#xA;')" /><br />
				<xsl:call-template name="add-line-breaks"><xsl:with-param name="string" select="substring-after($string, '&#xA;')" /></xsl:call-template>
			</xsl:when>
			<xsl:otherwise>
				<xsl:value-of select="$string" />
			</xsl:otherwise>
		</xsl:choose>
	</xsl:template>

	<!-- replace function borrowed from http://www.dpawson.co.uk/xsl/sect2/replace.html#d9701e43 -->
	<xsl:template name="replaceCharsInString">
		<xsl:param name="stringIn"/>
		<xsl:param name="charsIn"/>
		<xsl:param name="charsOut"/>
		<xsl:choose>
			<xsl:when test="contains($stringIn,$charsIn)">
				<xsl:value-of select="concat(substring-before($stringIn,$charsIn),$charsOut)"/>
				<xsl:call-template name="replaceCharsInString">
					<xsl:with-param name="stringIn" select="substring-after($stringIn,$charsIn)"/>
					<xsl:with-param name="charsIn" select="$charsIn"/>
					<xsl:with-param name="charsOut" select="$charsOut"/>
				</xsl:call-template>
			</xsl:when>
			<xsl:otherwise>
				<xsl:value-of select="$stringIn"/>
			</xsl:otherwise>
		</xsl:choose>
	</xsl:template>

	<!-- Replace some chars -->
	<xsl:template name="validate-username">
		<xsl:param name="string-in"/>

		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">

		<xsl:call-template name="replaceCharsInString">
			<xsl:with-param name="stringIn" select="string($string-in)"/>
			<xsl:with-param name="charsIn" select="'#'"/>
			<xsl:with-param name="charsOut" select="'%23'"/>
		</xsl:call-template>

		</xsl:with-param><xsl:with-param name="charsIn" select="'&amp;'"/><xsl:with-param name="charsOut" select="'%26'"/></xsl:call-template> <!-- & -->
		</xsl:with-param><xsl:with-param name="charsIn" select="'+'"/><xsl:with-param name="charsOut" select="'%2B'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="' '"/><xsl:with-param name="charsOut" select="'%20'"/></xsl:call-template> <!-- space -->
	</xsl:template>

	<!-- This is only needed for Opera support, hiding it here at the bottom. -->
	<xsl:template name="validate-opera">
		<xsl:param name="string-in"/>

		<!-- This doesn't follow any coding guidelines. But is easier to read this way -->
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">
		<xsl:call-template name="replaceCharsInString"><xsl:with-param name="stringIn">

		<xsl:call-template name="replaceCharsInString">
			<xsl:with-param name="stringIn" select="string($string-in)"/>
			<xsl:with-param name="charsIn" select="'é'"/>
			<xsl:with-param name="charsOut" select="'%C3%A9'"/>
		</xsl:call-template>

		</xsl:with-param><xsl:with-param name="charsIn" select="'ÿ'"/><xsl:with-param name="charsOut" select="'%C3%BF'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'þ'"/><xsl:with-param name="charsOut" select="'%C3%BE'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'ý'"/><xsl:with-param name="charsOut" select="'%C3%BD'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'ü'"/><xsl:with-param name="charsOut" select="'%C3%BC'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'û'"/><xsl:with-param name="charsOut" select="'%C3%BB'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'ú'"/><xsl:with-param name="charsOut" select="'%C3%BA'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'ù'"/><xsl:with-param name="charsOut" select="'%C3%B9'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'ø'"/><xsl:with-param name="charsOut" select="'%C3%B8'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'÷'"/><xsl:with-param name="charsOut" select="'%C3%B7'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'ö'"/><xsl:with-param name="charsOut" select="'%C3%B6'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'õ'"/><xsl:with-param name="charsOut" select="'%C3%B5'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'ô'"/><xsl:with-param name="charsOut" select="'%C3%B4'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'ó'"/><xsl:with-param name="charsOut" select="'%C3%B3'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'ò'"/><xsl:with-param name="charsOut" select="'%C3%B2'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'ñ'"/><xsl:with-param name="charsOut" select="'%C3%B1'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'ð'"/><xsl:with-param name="charsOut" select="'%C3%B0'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'ï'"/><xsl:with-param name="charsOut" select="'%C3%AF'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'î'"/><xsl:with-param name="charsOut" select="'%C3%AE'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'í'"/><xsl:with-param name="charsOut" select="'%C3%AD'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'ì'"/><xsl:with-param name="charsOut" select="'%C3%AC'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'ë'"/><xsl:with-param name="charsOut" select="'%C3%AB'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'ê'"/><xsl:with-param name="charsOut" select="'%C3%AA'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'é'"/><xsl:with-param name="charsOut" select="'%C3%A9'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'è'"/><xsl:with-param name="charsOut" select="'%C3%A8'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'ç'"/><xsl:with-param name="charsOut" select="'%C3%A7'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'æ'"/><xsl:with-param name="charsOut" select="'%C3%A6'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'å'"/><xsl:with-param name="charsOut" select="'%C3%A5'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'ä'"/><xsl:with-param name="charsOut" select="'%C3%A4'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'ã'"/><xsl:with-param name="charsOut" select="'%C3%A3'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'â'"/><xsl:with-param name="charsOut" select="'%C3%A2'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'á'"/><xsl:with-param name="charsOut" select="'%C3%A1'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'à'"/><xsl:with-param name="charsOut" select="'%C3%A0'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'ß'"/><xsl:with-param name="charsOut" select="'%C3%9F'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Þ'"/><xsl:with-param name="charsOut" select="'%C3%9E'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Ý'"/><xsl:with-param name="charsOut" select="'%C3%9D'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Ü'"/><xsl:with-param name="charsOut" select="'%C3%9C'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Û'"/><xsl:with-param name="charsOut" select="'%C3%9B'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Ú'"/><xsl:with-param name="charsOut" select="'%C3%9A'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Ù'"/><xsl:with-param name="charsOut" select="'%C3%99'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Ø'"/><xsl:with-param name="charsOut" select="'%C3%98'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'×'"/><xsl:with-param name="charsOut" select="'%C3%97'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Ö'"/><xsl:with-param name="charsOut" select="'%C3%96'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Õ'"/><xsl:with-param name="charsOut" select="'%C3%95'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Ô'"/><xsl:with-param name="charsOut" select="'%C3%94'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Ó'"/><xsl:with-param name="charsOut" select="'%C3%93'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Ò'"/><xsl:with-param name="charsOut" select="'%C3%92'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Ñ'"/><xsl:with-param name="charsOut" select="'%C3%91'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Ð'"/><xsl:with-param name="charsOut" select="'%C3%90'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Ï'"/><xsl:with-param name="charsOut" select="'%C3%8F'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Î'"/><xsl:with-param name="charsOut" select="'%C3%8E'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Í'"/><xsl:with-param name="charsOut" select="'%C3%8D'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Ì'"/><xsl:with-param name="charsOut" select="'%C3%8C'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Ë'"/><xsl:with-param name="charsOut" select="'%C3%8B'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Ê'"/><xsl:with-param name="charsOut" select="'%C3%8A'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'É'"/><xsl:with-param name="charsOut" select="'%C3%89'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'È'"/><xsl:with-param name="charsOut" select="'%C3%88'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Ç'"/><xsl:with-param name="charsOut" select="'%C3%87'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Æ'"/><xsl:with-param name="charsOut" select="'%C3%86'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Å'"/><xsl:with-param name="charsOut" select="'%C3%85'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Ä'"/><xsl:with-param name="charsOut" select="'%C3%84'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Ã'"/><xsl:with-param name="charsOut" select="'%C3%83'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Â'"/><xsl:with-param name="charsOut" select="'%C3%82'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Á'"/><xsl:with-param name="charsOut" select="'%C3%81'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'À'"/><xsl:with-param name="charsOut" select="'%C3%80'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'¿'"/><xsl:with-param name="charsOut" select="'%C2%BF'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'¾'"/><xsl:with-param name="charsOut" select="'%C2%BE'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'½'"/><xsl:with-param name="charsOut" select="'%C2%BD'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'¼'"/><xsl:with-param name="charsOut" select="'%C2%BC'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'»'"/><xsl:with-param name="charsOut" select="'%C2%BB'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'º'"/><xsl:with-param name="charsOut" select="'%C2%BA'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'¹'"/><xsl:with-param name="charsOut" select="'%C2%B9'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'¸'"/><xsl:with-param name="charsOut" select="'%C2%B8'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'·'"/><xsl:with-param name="charsOut" select="'%C2%B7'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'¶'"/><xsl:with-param name="charsOut" select="'%C2%B6'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'µ'"/><xsl:with-param name="charsOut" select="'%C2%B5'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'´'"/><xsl:with-param name="charsOut" select="'%C2%B4'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'³'"/><xsl:with-param name="charsOut" select="'%C2%B3'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'²'"/><xsl:with-param name="charsOut" select="'%C2%B2'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'±'"/><xsl:with-param name="charsOut" select="'%C2%B1'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'°'"/><xsl:with-param name="charsOut" select="'%C2%B0'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'¯'"/><xsl:with-param name="charsOut" select="'%C2%AF'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'®'"/><xsl:with-param name="charsOut" select="'%C2%AE'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'¬'"/><xsl:with-param name="charsOut" select="'%C2%AC'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'«'"/><xsl:with-param name="charsOut" select="'%C2%AB'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'ª'"/><xsl:with-param name="charsOut" select="'%C2%AA'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'©'"/><xsl:with-param name="charsOut" select="'%C2%A9'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'¨'"/><xsl:with-param name="charsOut" select="'%C2%A8'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'§'"/><xsl:with-param name="charsOut" select="'%C2%A7'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'¦'"/><xsl:with-param name="charsOut" select="'%C2%A6'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'¥'"/><xsl:with-param name="charsOut" select="'%C2%A5'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'¤'"/><xsl:with-param name="charsOut" select="'%C2%A4'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'£'"/><xsl:with-param name="charsOut" select="'%C2%A3'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'¢'"/><xsl:with-param name="charsOut" select="'%C2%A2'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'¡'"/><xsl:with-param name="charsOut" select="'%C2%A1'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Ÿ'"/><xsl:with-param name="charsOut" select="'%C5%B8'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'ž'"/><xsl:with-param name="charsOut" select="'%C5%BE'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'œ'"/><xsl:with-param name="charsOut" select="'%C5%93'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'›'"/><xsl:with-param name="charsOut" select="'%E2%80%BA'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'š'"/><xsl:with-param name="charsOut" select="'%C5%A1'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'™'"/><xsl:with-param name="charsOut" select="'%E2%84%A2'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'˜'"/><xsl:with-param name="charsOut" select="'%CB%9C'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'—'"/><xsl:with-param name="charsOut" select="'%E2%80%94'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'–'"/><xsl:with-param name="charsOut" select="'%E2%80%93'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'•'"/><xsl:with-param name="charsOut" select="'%E2%80%A2'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'”'"/><xsl:with-param name="charsOut" select="'%E2%80%9D'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'“'"/><xsl:with-param name="charsOut" select="'%E2%80%9C'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'’'"/><xsl:with-param name="charsOut" select="'%E2%80%99'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'‘'"/><xsl:with-param name="charsOut" select="'%E2%80%98'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Ž'"/><xsl:with-param name="charsOut" select="'%C5%BD'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Œ'"/><xsl:with-param name="charsOut" select="'%C5%92'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'‹'"/><xsl:with-param name="charsOut" select="'%E2%80%B9'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'Š'"/><xsl:with-param name="charsOut" select="'%C5%A0'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'‰'"/><xsl:with-param name="charsOut" select="'%E2%80%B0'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'ˆ'"/><xsl:with-param name="charsOut" select="'%CB%86'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'‡'"/><xsl:with-param name="charsOut" select="'%E2%80%A1'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'†'"/><xsl:with-param name="charsOut" select="'%E2%80%A0'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'…'"/><xsl:with-param name="charsOut" select="'%E2%80%A6'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'„'"/><xsl:with-param name="charsOut" select="'%E2%80%9E'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'ƒ'"/><xsl:with-param name="charsOut" select="'%C6%92'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'‚'"/><xsl:with-param name="charsOut" select="'%E2%80%9A'"/></xsl:call-template>
		</xsl:with-param><xsl:with-param name="charsIn" select="'€'"/><xsl:with-param name="charsOut" select="'%E2%82%AC'"/></xsl:call-template>
	</xsl:template>

</xsl:stylesheet>