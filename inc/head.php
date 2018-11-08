<?php

if(isset($_GET['pge']) AND !empty($_GET['pge'])){
	$pge = intval(htmlspecialchars($_GET['pge']));
}else{
	$pge=0;
}
unset($_GET);
//Technique ?><meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<?php //Référencement ?><title>Omnipr3z Computing</title>
<meta name="description" content="Solutions informatiques, Web Developpement" />
<meta name="keywords" content="css transforms, circular navigation, round navigation, circular menu, tutorial" />
<meta name="author" content="Omnipr3z Computing" />
<?php //Favicon ?><link rel="shortcut icon" href="../img/ico/favicon.ico">
<?php //RESET CSS ?><link rel="stylesheet" type="text/css" href="css/normalize.css" />
<?php //STYLE CSS ?><link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/compo.css" />
<link rel="stylesheet" type="text/css" href="css/custom.css" />
<?php //SCRIPTS ?><script src="js/modernizr-2.6.2.min.js"></script>
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-7243260-2']);
	_gaq.push(['_trackPageview']);
	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>