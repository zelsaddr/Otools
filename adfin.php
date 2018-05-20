<?php
@system("clear");
function getHeader($url){
	$http_response_headers($url);
}
function get_http_response_code($domain1) {
  $headers = get_headers($domain1);
  return substr($headers[0], 9, 3);
}
$banner = "
	=================================
	 ╔═╗╔╦╗╔╦╗╦╔╗╔  ╔═╗╦╔╗╔╔╦╗╔═╗╦═╗
	 ╠═╣ ║║║║║║║║║  ╠╣ ║║║║ ║║║╣ ╠╦╝
	 ╩ ╩═╩╝╩ ╩╩╝╚╝  ╚  ╩╝╚╝═╩╝╚═╝╩╚═
	=================================
	Coded By 0xCor3 | Security Ghost
	=================================\n";
print $banner;
echo "Site : "; $domen = trim(fgets(STDIN));
$list = array('operator/','sika/','develop/','a/','ketua/','redaktur/','admin/','administrator/','adminweb/','user/','users/','dinkesadmin/','retel/','author/','panel/','paneladmin/','panellogin/','redaksi/','cp-admin/','master/','master/index.php','master/login.php','operator/index.php','sika/index.php','develop/index.php','ketua/index.php','redaktur/index.php','admin/index.php','administrator/index.php','adminweb/index.php','user/index.php','users/index.php','dinkesadmin/index.php','retel/index.php','author/index.php','panel/index.php','paneladmin/index.php','panellogin/index.php','redaksi/index.php','cp-admin/index.php','operator/login.php','sika/login.php','develop/login.php','ketua/login.php','redaktur/login.php','admin/login.php','administrator/login.php','adminweb/login.php','user/login.php','users/login.php','dinkesadmin/login.php','retel/login.php','author/login.php','panel/login.php','paneladmin/login.php','panellogin/login.php','redaksi/login.php','cp-admin/login.php','terasadmin/','terasadmin/index.php','terasadmin/login.php','rahasia/','rahasia/index.php','rahasia/admin.php','rahasia/login.php','dinkesadmin/','dinkesadmin/login.php','adminpmb/','adminpmb/index.php','adminpmb/login.php','system/','system/index.php','system/login.php','webadmin/','webadmin/index.php','webadmin/login.php','wpanel/','wpanel/index.php','wpanel/login.php','adminpanel/index.php','adminpanel/','adminpanel/login.php','adminkec/','adminkec/index.php','adminkec/login.php','admindesa/','admindesa/index.php','admindesa/login.php','adminkota/','adminkota/index.php','adminkota/login.php','admin123/','admin123/index.php','admin123/login.php','logout/','logout/index.php','logout/login.php','logout/admin.php','sistem/','webpanel/','w3bc0ntr0l/','apanel/','sysadmin/', 'masuk/', 'masuk/masuk.php', 'masuk/index.php');
echo "Wait KITA CARI!!!..\n\n";
foreach($list as $z){
	$domennya = $domen.$z;
	$getinfo = get_http_response_code($domennya);
	if($getinfo == 200){
		$h = "\033[32m";
		echo $h.$domennya." <<< INI KNTL [".$getinfo."]\n";
		exit();
	}elseif($getinfo == 302){
		$b = "\033[34m";
		echo $b.$domennya." <<< KEMUNGKINAN LER [".$getinfo."]\n";
	}else{
		$m = "\033[31m";
		echo $m.$domennya." <<< BUKAN LER [".$getinfo."]\n";
	}
}
?>