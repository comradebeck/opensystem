<?php if (!defined('GLOBAL_BASE_CONFIG')) { die('Direct access to this file has been disallowed. Please contact your system administrator'); } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo GLOBAL_SYSTEM_TITLE; ?> - <?php echo $vApplicationName ?></title>
<?php echo $vJavaScripts; ?>
<link rel="shortcut icon" href="<?php echo GLOBAL_IMG_FAVICON; ?>" />
<link href="<?php echo GLOBAL_URL_TEMPLATES; ?>css/style.css" type="text/css" rel="stylesheet"/>

</head>
<body>

	<div id="divPageWrapper">
		<div id="divHeadNav">
			<div id="divHeadNavTop">
				<div id="divHeadNavTop_Left">
					<span id="spanBullet"><a href="#">Home</a></span>
					<span id="spanBullet"><a href="#">My Account</a></span>
					<span id="spanBullet"><a href="<?php echo GLOBAL_URL_LOGOUT; ?>">Logout</a></span>
				</div>
				<div id="divHeadNavTop_Right">
					Welcome <span id="spanUserInfo">[<?php echo $_SESSION[GLOBAL_SESSION_USERINFOS]['fldUsername']; ?>] <?php echo $_SESSION[GLOBAL_SESSION_USERINFOS]['fldFirstName'] . ' ' . $_SESSION[GLOBAL_SESSION_USERINFOS]['fldLastName']; ?></span> - 
					<span id="spanDate"><?php echo date("l, d/m/Y"); ?></span>
				</div>
			</div>
			<div id="divHeadNavBottom">	
				<div id="divHeadNavBottom_Logo"></div>
				<div id="divHeadNavBottom_Icons">
					<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
						<tbody>
							<tr>
								<?php echo $vHeaderNavigation; ?>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		
		<div id="divStatusBarTop"><?php echo $vMessage; ?></div>
		
