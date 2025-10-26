<?php
	error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
	$websiteAutoUrl =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$appName='schoolBolt'; 
	$clientName='The Everest Top Group Of Schools';
	/////////////////////////////////////////////////////////////////////////////////
	$clientWebsiteUrl='https://peakaninternationalschool.com';
	$clientWebsiteContactUsUrl=$clientWebsiteUrl.'/contact-us';
	$websiteUrl='https://peakaninternationalschool.com/portal'; /// For Live Server Url //
	$websitePath = $_SERVER['DOCUMENT_ROOT'].'/portal';
	$codeVersion= 1.3;
	/////////////////////////////////////////////////////////////////////////////////
	$userOsBrowser = $_SERVER['HTTP_USER_AGENT'];
	/////////////////////////////////////////////////////////////////////////////////
	function getUserIP() {
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			return $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			return $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
			return $_SERVER['REMOTE_ADDR'];
		}
	}
	$userIpAddress =getUserIP();
	/////////////////////////////////////////////////////////////////////////////////
	function getBrowserId() {
		$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';  // Browser and OS info
		$acceptLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';  // Language
		// Combine all data and create a hash
		$browserId = hash('sha256', $userAgent . $acceptLanguage);
		return $browserId;
	}
	$userDeviceId=getBrowserId();
?>


<script>
var websiteUrl = "<?php echo $websiteUrl;?>";
var clientId = "bca1c0a3fbc579255ebfecc2c620f1c2"; /// for dev
var clientAddress = "<?php echo $websiteAutoUrl;?>";
var apiKey = 'a7c37b6289b9dd879b2c005118d3ef14'; /// For API Key //
var endPoint = 'https://schoolbolt.com/api/production'; /// Server End Point url
var userOsBrowser = "<?php echo $userOsBrowser;?>"; /// For User OS Browser //
var userIpAddress = "<?php echo $userIpAddress;?>"; /// For User IP Address //
var userDeviceId = "<?php echo $userDeviceId;?>"; /// For User Device Id //

var payStackTransferUrl = 'https://api.paystack.co/transfer'; /// API Transfer EndPoint

var adminLocalUrl = websiteUrl + '/config/admin/code';
var parentPortalLocalUrl = websiteUrl + '/config/parent/code';
var adminPortalLocalUrl = websiteUrl + '/config/admin/operations/code';
var adminPortalUrl = websiteUrl + '/admin'; /// For Portal Url //
var adminUrl = websiteUrl + '/admin/login'; /// For Admin Url //
var parentLoginUrl = websiteUrl + '/parent/login'; /// For Parent Portal Url //
var parentPortalUrl = websiteUrl + '/parent'; /// For Parent Login Url //
var studentPixPath = websiteUrl + '/uploaded_files/studentPix'; /// For Student Pix Path //
var schoolLogoPixPath = websiteUrl + '/uploaded_files/branchLogo'; /// For School Pix Path //
var principalSignaturePixPath = websiteUrl + '/uploaded_files/branchPrincipalSignature'; /// For School Pix Path //
</script>