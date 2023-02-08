<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="<?=LANGUAGE_ID?>">
<head>
	<?$APPLICATION->ShowHead()?>
	<title><?$APPLICATION->ShowTitle()?></title>
	<?$APPLICATION->SetAdditionalCSS("/local/templates/.default/template_style.css");?>
    <?
    use Bitrix\Main\Page\Asset;
    Asset::getInstance()->addJs("/local/templates/.default/js/jquery-1.8.2.min.js");
    Asset::getInstance()->addJs("/local/templates/.default/js/slides.min.jquery.js");
    Asset::getInstance()->addJs("/local/templates/.default/js/jquery.carouFredSel-6.1.0-packed.js");
    Asset::getInstance()->addJs("/local/templates/.default/js/functions.js");
    ?>
	
	<!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
<?$APPLICATION->ShowPanel();?>
	<div class="wrap">
		<div class="hd_header_area">
			<div class="hd_header">
				<table>
					<tr>
						<td rowspan="2" class="hd_companyname">
							<h1><a href=""><?=GetMessage('Furniture_store')?></a></h1>
						</td>
						<td rowspan="2" class="hd_txarea">
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "inc",
								"EDIT_TEMPLATE" => "",
								"PATH" => "/local/templates/Page/components/header-phone.php"
							)
						);?>
						<td style="width:232px">
							<form action="">
								<div class="hd_search_form" style="float:right;">
									<input placeholder="<?=GetMessage('Search')?>" type="text"/>
									<input type="submit" value=""/>
								</div>
							</form>
						</td>
					</tr>
					<tr>
						<td style="padding-top: 11px;">
							<span class="hd_singin"><a id="hd_singin_but_open" href=""><?=GetMessage('Sign_in')?></a>
							<div class="hd_loginform">
								<span class="hd_title_loginform"><?=GetMessage('Sign_in')?></span>
								<form name="" method="" action="">
					
									<input placeholder="Логин"  type="text">
									<input  placeholder="Пароль"  type="password">			
									<a href="/" class="hd_forgotpassword"><?=GetMessage('Forgot_your_password')?></a>
									
									<div class="head_remember_me" style="margin-top: 10px">
										<input id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" type="checkbox">
										<label for="USER_REMEMBER_frm" title="Запомнить меня на этом компьютере"><?=GetMessage('Remember_me')?></label>
									</div>				
									<input value="Войти" name="Login" style="margin-top: 20px;" type="submit">
									</form>
								<span class="hd_close_loginform"><?=GetMessage('close')?></span>
							</div>
							</span><br>
							<a href="" class="hd_signup"><?=GetMessage('Register')?></a>
						</td>
					</tr>
				</table>
				<div class="nv_topnav">
					<ul>
						<li><a href=""   class="menu-img-fon"  style="background-image: url(/local/templates/.default/images/nv_home.png);" ><span></span></a></li>
						<li><a href=""><span><?=GetMessage('Company')?></span></a>
							<ul>
								<li><a href=""><?=GetMessage('Paragraph')?> 1</a></li>
								<li><a href=""><?=GetMessage('Paragraph')?> 2</a></li>
								<li><a href=""><?=GetMessage('Paragraph')?> 3</a></li>
								<li><a href=""><?=GetMessage('Paragraph')?> 4</a></li>
							</ul>
						</li>
						<li><a href=""><span><?=GetMessage('News')?></span></a></li>
						<li><a href=""><span><?=GetMessage('Catalog')?></span></a></li>
						<li><a href=""><span><?=GetMessage('Stock')?></span></a>
							<ul>
								<li><a href=""><?=GetMessage('Paragraph')?> 1</a>
									<ul>
										<li><a href=""><?=GetMessage('Paragraph')?> 1</a></li>
										<li><a href=""><?=GetMessage('Paragraph')?> 2</a></li>
									</ul>
								</li>
								<li><a href=""><?=GetMessage('Paragraph')?> 2</a></li>
								<li><a href=""><?=GetMessage('Paragraph')?> 3</a></li>
								<li><a href=""><?=GetMessage('Paragraph')?> 4</a></li>
							</ul>
						</li>
						<li><a href=""><span><?=GetMessage('Partners')?></span></a></li>
						<li><a href=""><span><?=GetMessage('Contacts')?></span></a></li>
						<div class="clearboth"></div>
					</ul>
				</div>
			</div>
		</div>
		
		<!--- // end header area --->
		<div class="bc_breadcrumbs">
			<ul>
				<li><a href=""><span><?=GetMessage('Catalog')?></a></li>
				<li><a href=""><?=GetMessage('Furniture')?></a></li>
				<li><a href=""><?=GetMessage('Exhibitions_and_events')?></a></li>
			</ul>
			<div class="clearboth"></div>
		</div>
		<div class="main_container page">
			<div class="mn_container">
				<div class="mn_content">
					<div class="main_post">
						<div class="main_title">
							<p class="title">Заголовок страницы</p>
						</div>