 <?php
	error_reporting(0);
	session_start();
	$hostname = 'localhost';
	$uname = 'root';
	$pass = '';
	$db_name = 'shopping';
	$con = mysql_connect($hostname,$uname,$pass);
	mysql_select_db($db_name,$con);	
	$use=$_SESSION['user'];
	$selec="SELECT * FROM  `customers` WHERE `name`='$use'";
	 $res=mysql_query($selec,$con);
	 $r=mysql_fetch_array($res);
?>
<html>
<head>
<title>Uptown Fresh</title>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/startstop-slider.js"></script>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="icon" href="images/logo.png" type="text/css">
<style>
body {
	font-family: Arial, Helvetica, sans-serif;
	background: #FFF;
}
.wrap {
	width:1325px%;
	
}
.header {
	background-color:#FFFFFF;
}
.headertop_desc{
	padding:20px 0;
	border-bottom:1px solid #EEE;
	height:20px;
}
.call{
	float:left;
	margin-top:-22px;
}
.call p{
	font-size:0.9em;
	color:#9C9C9C;
}
.account_desc{
	float:right;
	margin-top:-25px;
}

.account_desc li{
	display:inline;
	border-left:1px dotted #CCC;
	
}
.account_desc li:first-child{
	border:none;
}
.account_desc li a{
	font-size:0.823em;
	color:#06F;
	padding:0 10px;
	font-family: 'ambleregular';
	text-decoration:none;
}
.account_desc li a:hover{
	color:#E4292F;
}

/**** Cart ****/
.cart{
	float:right;
	 position: relative;
	 padding-right:40px;
	 margin-top:20px;
}
.cart p{
	font-size:0.9em;
	color:#303030;
	display:inline-block;
}
.cart p span{
	font-size:1.5em;
	color:#E4292F;
}
.wrapper-dropdown-2 {
    display:inline-block;
    margin: 0 auto;
    font-size:0.9em;
    color:#303030;
    padding:0px 5px;
    cursor: pointer;
    outline: none;
}
.wrapper-dropdown-2:after {
    content: "";
    width: 0;
    height: 0;
    position: absolute;
    right:5px;
    top: 50%;
    margin-top:0px;
    border-width: 6px 6px 0 6px;
    border-style: solid;
    border-color:#E4292F transparent;
}
.wrapper-dropdown-2 .dropdown {
    position: absolute;
    top: 100%;
    width:75%;
    right: 0px;
    z-index:1;
    background:#EEE;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
    list-style: none;
    opacity: 0;
    pointer-events: none;
}
.wrapper-dropdown-2 .dropdown li{
    display: block;
    text-decoration: none;
    color: #333;
    font-size:0.823em;
    padding: 10px;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}
.wrapper-dropdown-2 .dropdown li:hover a {
    color:red;
    background:#AAA;
}
.wrapper-dropdown-2.active:after {
    border-width: 0 6px 6px 6px;
}
.wrapper-dropdown-2.active .dropdown {
    opacity: 1;
    pointer-events: auto;
}
   /**** End Cart ****/


.header_top
{
	padding:30px 0;
	border-bottom:1px solid #EEE;
}
.logo
{
	float:left;
	margin-top:-40px;
}
.cart 
{
	float:right;
	margin-top:-20px;
}

.header_bottom {
	background-color:#333;
	border-radius: 60px;
	overflow:hidden;
	-webkit-border-radius: 6px;
	-moz-border-rfadius: 6px;
	-o-border-radius: 6px;
	line-height:5px;	
}
.menu {
	float:left;
}
.menu li {
	float:left;
	display:inline;
}
.menu ul
{
	margin:0px;
	padding:0px;
	overflow:hidden;
}
.menu li a {
	font-family:"Lucida Console", Monaco, monospace;
	text-transform:uppercase;
	font-size:1em;
	color:#FFF;
	overflow:hidden;
	display:block;
	padding:20px 20px;
	border-right: 2px ridge #585858;
	transition: all .9s;
	 -webkit-transition: all .9s;
   -moz-transition: all .9s;
   -o-transition: all .9s;
   -ms-transition: all .9s;
}
.menu li a:hover{
	background:#FF0000;
}
.menu li:first-child  a{
	border-radius:6px 0 0 6px;
}
.search_box {
	float: right;
	border: 1px solid #3C3C3C;
	background: #FFF;
	border-radius: 0.3em;
	position: relative;
	width:25%;
}
.search_box form input[type="text"] {
	border: none;
	outline: none;
	background: none;
	font-size:12px;
	color: #acacac;
	width:75%;
	padding:5px;
}
.search_box form input[type="submit"] {
	border: none;
	cursor: pointer;
	background: url(../images/search.png) no-repeat 0px 7px;
	position: absolute;
	right: 0;
	width: 20px;
	height: 25px;
}


.header_slide{
	margin:25px 20px 0px;
	overflow:hidden;
}

.header_bottom_left{
	float:left;
	width:25%;
}

.categories{
	margin-left:-20px;
	border:1px solid #EEE;
}

.categories h3{
	font-size:1.2em;
	color:#FFF;

	padding:10px;
	background:#B81D22;
	text-transform:uppercase;
	font-family:"Arial Black", Gadget, sans-serif;	
}

.categories ul{
	list-style:none;
}
.categories li a{
	display:block;
	font-size:0.8em;
	padding:8px 15px;
    color: #999999;
	text-decoration:none;
    font-family: 'ambleregular';
    margin:0 15px;
    background:url(../images/drop_arrow.png) no-repeat 0;
    border-bottom: 1px solid #EEE;
    text-transform:uppercase;	
}

.categories li:last-child a{
	border:none;
}

.categories li a:hover{
	color:#B81D22;
}


.header_bottom_right{
	float:left;
	width:74%;
	padding-left:1%;
}


.main{
	margin-top:80px;
}
.main1
{
	padding-top:10px;
}
/***** Content *****/
.content {
	padding: 20px 0;
	background: #FFF;
}
.content h2 {
	color: #383838;
	margin-bottom: 0.5em;
	font-size:1.5em;
	line-height: 1.2;
	font-family: 'ambleregular';
	font-weight: normal;
	margin-top: 0px;
	text-transform: uppercase;
}
.content_top{
	padding: 30px 20px;
	border: 1px solid #EBE8E8;
	border-radius: 3px;
}
.content_bottom {
	padding: 30px 20px;
	border: 1px solid #EBE8E8;
	border-radius: 3px;
	margin-top: 2.6%;
}
.heading {
	float: left;
	margin-top:-33;
}

.heading h3 {
	font-family: 'ambleregular';
	font-size:22px;
	color:#383838;
	text-transform: uppercase;
}
.see {
	float: right;
	margin-top:-15;
}
.see p a{
	display: inline;
	font-size: 0.8125em;
	color: #333;
	background: url(../images/list-img.png) no-repeat right 3px;
    padding:0px 10px 0px 0px;
}
.see p a:hover{
	color: #E4292F;
}


.grid_1_of_4 {
	display: block;
	float: left;
	margin: 10 5 5 5;
	box-shadow: 0px 0px 3px rgb(150, 150, 150);
	-webkit-box-shadow: 0px 0px 3px rgb(150, 150, 150);
	-moz-box-shadow: 0px 0px 3px rgb(150, 150, 150);
	-o-box-shadow: 0px 0px 3px rgb(150, 150, 150);
}
.grid_1_of_4:first-child {
	margin-left:10;
}
.images_1_of_4 {
	width: 20.8%;
	padding: 1.5%;
	text-align: center;
	position: relative;
}
.images_1_of_4  img {
	max-width:230;
}
.images_1_of_4  h2 {
	color:#6A82A4;
	font-family: 'ambleregular';
	font-size:1.1em;
	margin-top:10px;
	font-weight: normal;
}
.images_1_of_4  p {
	font-size: 0.8125em;
	padding: 0.4em 0;
	color: #333;
}
.images_1_of_4  p span.price {
	font-size: 18px;
	font-family: 'ambleregular';
	color:#CC3636;
}
.price-details{
	margin-top:30px;
	border-top:1px solid #CD1F25;
}
.price-number{
	float: left;
	padding-top: 0;
}
.price-details p span.rupees{
	font-size:1.6em;
	font-family: 'ambleregular';
	color:#383838;
}
.add-cart{
	float:right;
	display: inline-block;
	
}
.add-cart h4 a{
	font-size:0.9em;
	display: block;
	padding:10px 15px;
	margin-top:-22;
	font-family: 'ambleregular';
	background:#CD1F25;
	color: #FFF;
	text-decoration: none;
	outline: 0;
	-webkit-transition: all 0.5s ease-in-out;
	-moz-transition: all 0.5s ease-in-out;
	-o-transition: all 0.5s ease-in-out;
	transition: all 0.5s ease-in-out;
}
.add-cart h4 a:hover{
	  text-shadow: 0px 0px 1px #000;
	  background:#0000FF;
}

.span_1_of_4 {
	width: 20.5%;
	padding:1.5% 1.5% 0 0;
	border-left:1px solid #CECECE;
}
.span_1_of_4  h4 {
	color:#4F4F4F;
	margin-bottom: .5em;
	font-size: 1.2em;
	line-height: 1.2;
	font-family: 'ambleregular';
	font-weight: normal;
	margin-top: 0px;
	letter-spacing: -1px;
	text-transform: uppercase;
	border-bottom: 1px solid #CECECE;
	padding-bottom: 0.5em;
	padding-left:20px;
}
.span_1_of_4 ul{
	padding-left:20px;
}
.span_1_of_4  li a {
	font-size: 0.8125em;
	padding: 0.4em 0;
	color:#2A5C86;
	font-family: 'ambleregular';
	display: block;
}
.span_1_of_4  li span{
	font-size:1em;
	font-family: 'ambleregular';
	color:#2A5C86;
	cursor:pointer;
	margin:10px 0;
	display:block;
}
.span_1_of_4  li a:hover, .span_1_of_4  li span:hover {
	color:#DD0F0E;
}

.footer {
	position: relative;
	background: #FCFCFC;
    border-top: 1px solid #CECECE;
    margin:20px auto;
}
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}
.group:before, .group:after {
	content: "";
	display: table;
}
.group:after {
	clear: both;
}
.group {
	zoom: 1;
}
.col_1_of_4 {
	display: block;
	float: left;
	margin:0% 0 1% 3.6%;
}
.col_1_of_4:first-child {
	margin-left: 0;
}

.span_2_of_3 {
	width: 63.1%;
	padding: 1.5%;
}

.span_1_of_3 {
	width: 29.2%;
	padding: 1.5%;
}
.span_2_of_3  h2, .span_1_of_3  h2 {
	margin-bottom: 0.5em;
	line-height: 1.2;
	font-family: 'ambleregular';
	font-weight: normal;
	margin-top: 0px;
}
.contact-form {
	position: relative;
	padding-bottom: 30px;
}
.contact-form div {
	padding: 5px 0;
}
.contact-form span {
	display: block;
	font-size: 0.8125em;
	color: #757575;
	padding-bottom: 5px;
	font-family: verdana, arial, helvetica, helve, sans-serif;
}
.contact-form input[type="text"], .contact-form textarea {
	padding: 8px;
	display: block;
	width:98%;
	background:none;
	border:1px solid #CACACA;
	outline: none;
	color: #464646;
	font-size:1em;
	font-weight:bold;
	font-family: Arial, Helvetica, sans-serif;
	-webkit-appearance: none;
}
.contact-form textarea {
	resize: none;
	height: 120px;
}
.contact-form input[type="submit"] {
	font-size:1em;
	padding:10px 15px;
	font-family: 'ambleregular';
	background:#CD1F25;
	color: #FFF;
	border:none;
	text-decoration: none;
	outline: 0;
	cursor:pointer;
	-webkit-transition: all 0.5s ease-in-out;
	-moz-transition: all 0.5s ease-in-out;
	-o-transition: all 0.5s ease-in-out;
	transition: all 0.5s ease-in-out;
	position: absolute;
	right: 0;
}
.contact-form input[type="submit"]:hover {
	text-shadow: 0px 0px 1px #000;
	background: #292929;
}

.company_address p {
	font-size: 0.8125em;
	color: #757575;
	padding: 0.2em 0;
	font-family: Arial, Helvetica, sans-serif;
}
.company_address p span {
	text-decoration: underline;
	color: #444;
	cursor: pointer;
}
.map {
	border: 1px solid #C7C7C7;
	margin-bottom: 15px;
}
.social-icons {
	padding-top: 8%;
}
.social-icons li {
	width: 30px;
	height: 30px;
	padding: 0px 0 0 5px;
	margin: 0;
	display: inline-block;
	cursor: pointer;
}
.copy_right {
	text-align: center;
	border-top: 1px solid #EEE;
	padding: 10px 0;
	font-family:Verdana, Geneva, Arial, Helvetica, sans-serif;
}
.copy_right p {
	font-size:0.823em;
	color: #747474;
}
.copy_right p a {
	color:#DD0F0E;
	font-family: 'ambleregular';
	text-decoration: underline;
}
.copy_right p a:hover {
	color:#222;
	text-decoration: none;
}



/*  About  ============================================================================= */
.col_1_of_3 {
	display: block;
	float: left;
	margin: 0% 0 0% 1.6%;
}
.col_1_of_3:first-child {
	margin-left: 0;
}
.span_1_of_3 {
	width: 29.2%;
	padding: 1.5%;
}
.span_1_of_3 img {
	max-width: 100%;
}
.span_1_of_3  h3 {
	color: #383838;
	margin-bottom: 0.5em;
	font-size: 1.5em;
	line-height: 1.2;
	font-family: 'ambleregular';
	font-weight: normal;
	margin-top: 0px;
	text-transform: uppercase;
 }
.span_1_of_3  p {
	font-size: 0.8125em;
	padding: 0.5em 0;
	color:#727272;
	line-height: 1.8em;
	font-family: Arial, Helvetica, sans-serif;
}
.year {
	float: left;
	width:50px;
}
.year p {
	color: #E4292F;
	font-size: 0.95em;
}
.span_1_of_3  p.history {
	float: left;
	width: 85%;
	font-size: 0.8125em;
	color:#727272;
	line-height: 1.8em;
}
.span_1_of_3 .list li a {
	font-size: 0.82em;
	padding:7px 15px;
	color: #E4292F;
	background: url(../images/drop_arrow.png) no-repeat 0px 10px;
	display: block;
	font-family:Verdana, Geneva, Arial, Helvetica, sans-serif;
}
.span_1_of_3 .list li a:hover {
	text-decoration:underline;
}
/*end of about page

*/
/*  Preview  ============================================================================= */

.cont-desc {
	display: block;
	float: left;
	clear: both;
}
.rightsidebar {
	display: block;
	float: left;
	margin: 0% 0 0% 1.6%;
}
.cont-desc:first-child {
	margin-left: 0;
}
.desc {
	display: block;
	float: left;
	margin: 0% 0 0% 2.6%;
}
.product-details{
	margin:30px 0;
}
.span_1_of_2 {
	width: 67.1%;
	padding: 1.5%;
}
.images_3_of_2 {
	width: 44.2%;
	float: left;
	text-align: center;
}
.span_3_of_2 {
	width: 53.2%;
}
.span_3_of_1 {
	width: 25.2%;
	padding: 1.5%;
}
.images_3_of_2  img {
	max-width: 100%;
}
.span_3_of_2  h2 {
	font-family: 'ambleregular';
	font-size: 1.1em;
	color:#CD1F25;
	font-weight: normal;
	margin-top: 0px;
	text-transform: uppercase;
}
.span_3_of_2  p{
	font-size: 0.8125em;
	padding: 0.3em 0;
	color: #969696;
	line-height: 1.6em;
	font-family: verdana, arial, helvetica, helve, sans-serif;
}
.price p {
	font-size: 0.8125em;
	padding:20px 0;
	color: #666;
	vertical-align: top;
}
.price p span {
	font-size:3em;
	font-family: 'ambleregular';
	color:#CD1F25;;
}
.available p {
	font-size: 0.9em;
	color: #333;
	font-weight: bold;
	padding-bottom: 10px;
}
.available li {
	display: inline;
	font-size: 0.8125em;
	padding: 1.5% 2%;
	color: #353535;
}
.available li select {
	display: inline;
	font-size: 1em;
	color: #333;
	margin-left: 3px;
}
.share-desc{
	margin-bottom:15px;
}
.share{
	float:left;
}
.share p {
	padding-top: 10px;
	font-size: 0.9em;
	color: #333;
	font-weight: bold;
}
.share li {
	display: inline-block;
	margin: 5px 6px;
	background:#222;
	border-radius:5px;
}
.share li img {
	vertical-align:middle; 
}
.wish-list{
	padding:15px 0;
	border-bottom: 1px solid #E6E6E6;
	border-top: 1px solid #E6E6E6;
}
.wish-list li{
	display:inline-block;
	margin-right:45px;
}
.wish-list li a{
	color: #383838;
	font-size:1em;
	font-family: 'ambleregular';
	padding-left:22px;
	text-decoration: underline;
}
.wish-list li a:hover {
	color: #E4292F;
}
.wish-list li.wish{
	background:url(../images/wishlist.png) no-repeat 0;
}
.wish-list li.compare{
	background:url(../images/compare.png) no-repeat 0;
}
.product-desc, .product-tags {
	clear: both;
	padding-top: 20px;
}
.product-desc p {
	font-size: 0.8em;
	padding:5px 0;
	color: #969696;
	line-height: 1.8em;
	font-family: verdana, arial, helvetica, helve, sans-serif;
}
.product-desc p span{
	font-weight:bold;
}
.product-tags h4 {
	padding: 10px 0;
	font-size: 0.9em;
	color: #333;
	font-weight: bold;
}
.input-box {
	background: url(../images/tag.png) no-repeat 0 8px;
	padding-left: 35px;
}
.input-box input[type="text"] {
	padding: 8px;
	display: block;
	width: 95%;
	background: #fcfcfc;
	border: none;
	outline: none;
	color: #464646;
	font-size: 0.8125em;
	font-family: Arial, Helvetica, sans-serif;
	box-shadow: inset 0px 0px 3px #999;
	-webkit-box-shadow: inset 0px 0px 3px #999;
	-moz-box-shadow: inset 0px 0px 3px #999;
	-o-box-shadow: inset 0px 0px 3px #999;
	-webkit-appearance: none;
}
.product-tags .button {
	margin-top: 15px;
	line-height: 3em;
}
.span_3_of_2 .button {
	float: right;
	margin-top: 1%;
	line-height: 2em;
}
.product-tags .button a {
	font-size:1em;
	padding:10px 15px;
	font-family: 'ambleregular';
	background:#CD1F25;
	color: #FFF;
	text-decoration: none;
	outline: 0;
	-webkit-transition: all 0.5s ease-in-out;
	-moz-transition: all 0.5s ease-in-out;
	-o-transition: all 0.5s ease-in-out;
	transition: all 0.5s ease-in-out;
}
.span_3_of_2 .button a:hover, .product-tags .button a:hover {
	text-shadow: 0px 0px 1px #000;
    background: #292929;
}
.product-tags p{
	font-size: 0.85em;
	padding:5px  0;
	color: #969696;
	line-height: 1.8em;
}


/****** News **************************/
.image {
	clear: both;
	padding: 0px;
	margin: 0px;
	padding:1.5%;
}
.group:before,
.group:after {
    content:"";
    display:table;
}
.group:after {
    clear:both;
}
.group {
    zoom:1;
}
.grid {
	display: block;
	float:left;
	margin: 0% 0 0% 1.6%;
}
.grid:first-child { margin-left: 0; }

.images_3_of_1 {
	width:30.2%;
}
.news_desc{
	width: 68.1%;
}
.images_3_of_1  img {
	max-width:100%;
	display:block;
	border:1px solid #E0E0E0;
}
.news_desc  h3{
	color:#B81D22;
	margin-bottom:0.3em;
	font-size:1.2em;
	text-transform:uppercase;
	font-family: 'ambleregular';
}
.news_desc h4 span a{
	text-decoration:underline;
}
.news_desc h4 span a:hover{
	color:#B81D22;
	text-decoration:none;
}
.news_desc h4 ,.news_desc h4 a{
	font-size:0.95em;
	color:#303030;;
	padding-bottom:5px;
}
.news_desc  p{
	font-size:0.85em;
	padding:5px 0;
	color:#747474;
	line-height: 1.8em;
}
.news_desc p a{
	font-size:1em;
	color:#B81D22;
}
/*** Page numbers ***/
.content-pagenation{
	padding:35px 0;
	text-align:right;
}
.content-pagenation li {
	display: inline-block;
}
.content-pagenation li a {
	color:#303030;
	font-size: 0.8em;
	font-family:Verdana, Geneva, Arial, Helvetica, sans-serif;
	background: #FFF;
	padding: 10px 12px;
	box-shadow: 0px 0px 5px #ADADAD;
	-webkit-box-shadow: 0px 0px 2px #ADADAD;
	-moz-box-shadow: 0px 0px 2px #ADADAD;
	-o-box-shadow: 0px 0px 2px #ADADAD;
	-webkit-transition: all .5s;
	-moz-transition: all .5s;
	-o-transition: all .5s;
	-ms-transition: all .5s;
	transition: all .5s;
}
.content-pagenation li a:hover,.content-pagenation li.active a{
	background:#303030;
	color:#FFF;
}


/*photoes big*/
                #myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */


/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

</style>
</head>
<body>
<div class="wrap">
	<div class="header">
    	<div class="headertop_desc">
        	<div class="call">
            	<p>
                <?php
						include('connection.php');
						$use=$_SESSION['user'];
						$select="SELECT * FROM `customers` where name='$use'";
						$res=mysql_query($select,$con);
						$r=mysql_fetch_array($res);
                ?>
                    <b>Need help?</b> call us <font color="#EE0000">+254 711154321</font>
                    <b>or Email</b> us at <font color="#EE0000">support@uptownfresh.com</font>
                    </p>
            </div>
        	<div class="account_desc">
				<ul><li>
                	<?php if(!$_SESSION['user']) {?>
					<a href="login.php"><font size="+1">Login/signup</font></a>
                    <?php }
					else {?>
                    <div class="dropdown" style="margin-top:-30px">
              <button class="dropbtn" style="height:70px; background-color:#FFF"><img src="Admin/Users/<?php echo $r['photo']?>" height="50px" width="50px" style="border-radius:50%" alt="">&nbsp;&nbsp;&nbsp;&nbsp;<font color="#CC3300" size="+2" ><?php echo $_SESSION['user'];?></font></button>
  <div class="dropdown-content">
    <a href="index.php?page=profile"><p><font size="+1">Profile</font></p></a>
    <?php if($_SESSION['user'] && $r['Mode']=='admin')
							{ ?><a href="Admin"><p><font size="+1">Admin panel</font></p><?php } ?>
    <a href="index.php?page=logout"><p><font size="+1">LogOut</font></p></a>
  </div>
</div>
					<?php 
					} ?> </li>
				</ul>
			</div>
        </div>
        <div class="clear"></div>
		</div>
		<br>
		<div class="header_top">
			<div style="margin top:-10px"  class="logo">
				<a href="index.php"><img src="../images/logo.png" height="100px" width="100px" alt="" /></a>
			</div>
			  <div style="float:right; margin-top:-25px">
                  <a href="index.php?page=wishlist"><img style="height: 30px; width: 30px" src="../images/wishlist.svg">
                       <a href="index.php?page=cart"><img style="height: 30px; width: 30px" src="../images/cart.svg"></a>
			  </div>
			  <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>
	 <div class="clear"></div>
  </div>
  <br>
	<div class="header_bottom">
	     	<div class="clear"></div>
	     </div>	
	
</div>