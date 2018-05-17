<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="google-site-verification" content="oFx0XHRtaSP28TMLoDFb15aygvQT8_AhRIN2Ozv4GEU" />
	<meta charset="utf-8">
	<title>Welcome to chill your mind</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styles.css">
	<script type='text/javascript' src="<?php echo base_url(); ?>js/displayer.js"></script>
</head>
<body>
	<div id="left_bar">
		<div class="icon_holder">
			<a href="http://www.mindlounge.in" style="text-decoration: none; color: white">
				<span style="font-family: 'Lato', sans-serif; font-weight: bold;font-size: 30px;">
					MIND
				</span>
				<span style="font-family: 'Lato', sans-serif; font-weight: 100;font-size: 30px;margin-left: -5px;letter-spacing: -1px;">
					LOUNGE
				</span>
			</a>
		</div>
		<div id="category_section">
			<ul>
				<?php foreach($categories as $index => $category): ?>
					<li>
						<span class="category_names">
							<?php echo $category;?>
						</span>
						<div class="category_highlighter <?php echo strtolower($category)?>"></div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
	<div id="header">
		<div class="menu_holder">
			<table align="center">
				<tr>
					<td class="menu_tab <?php if (strpos(base_url('home'), $_SERVER['REQUEST_URI']) || (strpos(base_url('/'), $_SERVER['REQUEST_URI']))) echo 'active'; else echo '';?>">
						<a href="<?php echo base_url('home');?>" style="text-decoration: none">Home</a>
					</td>
					<td class="menu_tab <?php if (($_SERVER['REQUEST_URI'] !== '/') && strpos(base_url('blogs'), $_SERVER['REQUEST_URI'])) echo 'active'; else echo '';?>" >
						<a href="<?php echo base_url('blogs');?>" style="text-decoration: none">Blog</a>
					</td>
					<!-- <td class="menu_tab"><a>Products</a></td> -->
					<td class="menu_tab"><a style="color: gray">Services</a></td>
					<td class="menu_tab"><a>About Us</a></td>
				</tr>
			</table>
		</div>
		<div class="logout_holder">
		</div>
	</div>
	<div id="magic_line">
	</div>