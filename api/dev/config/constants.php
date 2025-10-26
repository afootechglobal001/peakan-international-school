<?php
//=========================================================================================================================
$thename='Peakan International School';
$apiKey = isset($_SERVER['HTTP_APIKEY']) ? $_SERVER['HTTP_APIKEY'] : null;
$expected_api_key='cb2321c2-64bd-434a-ac30-0acbad030d61';

$ip_address=$_SERVER['REMOTE_ADDR']; //ip used
$system_name=gethostname();//computer used

/// all constance
//$websiteUrl='https://peakaninternationalschool.com';
$websiteUrl='http://localhost/schoolBolt/peakan-international-school';

$documentStoragePath=$websiteUrl.'/api/uploaded-files/dev';

$staffProfilePixPath = '../../../uploaded-files/dev/staff-pix/';
$eventProfilePixPath = '../../../uploaded-files/dev/event-pix/';
$galleryProfilePixPath = '../../../uploaded-files/dev/gallery-pix/';
$seoflyerPixPath = '../../../../uploaded-files/dev/seo-flyer-pix/';
$publishPicturesPath = '../../../../uploaded-files/dev/page-pictures/';
$blogProfilePixPath = '../../../uploaded-files/dev/blog-pix/';
?>