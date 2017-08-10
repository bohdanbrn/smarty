<?php
/* Smarty version 3.1.30, created on 2017-08-10 11:54:54
  from "e:\OSPanel\domains\smarty\htdocs\captcha.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598c1f5e06c709_71916700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '668793bc11a36cd0bdd4744b0d86d4163758acce' => 
    array (
      0 => 'e:\\OSPanel\\domains\\smarty\\htdocs\\captcha.php',
      1 => 1468227032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598c1f5e06c709_71916700 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
	';?>session_start();
	$string = "";
	for ($i = 0; $i < 5; $i++)
		$string .= chr(rand(97, 122));
	
	$_SESSION['rand_code'] = $string;

	$dir = "fonts/";

	$image = imagecreatetruecolor(170, 60);
	$black = imagecolorallocate($image, 0, 0, 0);
	$color = imagecolorallocate($image, 191, 2, 91);
	$white = imagecolorallocate($image, 255, 255, 255);

	imagefilledrectangle($image,0,0,399,99,$white);
	imagettftext ($image, 30, 0, 10, 40, $color, $dir."verdana.ttf", $_SESSION['rand_code']);

	header("Content-type: image/png");
	imagepng($image);
<?php echo '?>';
}
}
