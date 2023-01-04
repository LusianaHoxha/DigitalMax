<?php

include 'header.php';

?> <div id="content"> <?php

if (is_front_page()):
	include 'pages/home.php';
elseif (is_page('chi-siamo')):
	include 'pages/chi_siamo.php';
elseif(is_page('certificazioni')):
	include 'pages/certificazioni.php';
elseif(is_page('partner-tecnologici')):
	include 'pages/partner-tecnologici.php';
elseif(is_page('service')):
	include 'pages/service.php';
elseif(is_page('privacy-page')):
	include 'pages/privacy-page.php';
elseif(is_page('contatti')):
	include 'pages/contatti.php';
elseif(is_page('tools')):
	include 'pages/tools.php';
else:
	include '404.php';
endif;

?> </div> <?php
include 'footer.php';
?>