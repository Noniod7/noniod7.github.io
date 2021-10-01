<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>
        Admin Finder
    </title>

    <!-- Global stylesheets -->
    <link href="../../external.html?link=https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="../assets/css/icons/styles.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/colors.min.css" rel="stylesheet" type="text/css">

    <script src="../assets/js/main/jquery.min.js"></script>
    <script src="../assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/plugins/loaders/blockui.min.js"></script>
  
    <script src="../assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="../assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="../assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="../assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script src="../assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="../assets/js/plugins/pickers/daterangepicker.js"></script>

    <script src="../assets/js/app.js"></script>

</head>
<body>

	<div class="navbar navbar-expand-md navbar-dark" style="background-color: black">
		<div class="navbar-brand">
			<<img src="../assets/img/niod.png" width="100" height="100"> 
   </a>
		</div>
<b><font face="Courier New">
		<div class="d-md-none">
			
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

			</ul>
			<ul class="navbar-nav">
			<span class="badge bg-success ml-md-3 mr-md-auto">Online
			</span>
		    </ul>
		</div>
	</div>

	<div class="page-content">

		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md" style="background-color: black">

		
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
		
			<div class="sidebar-content">



		
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						
						<li class="nav-item">
							<a href="../index.php" class="nav-link active">
								<i class="icon-home2"></i>
								<span>
									HOME
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i style="color: red;" class="icon-bug2"></i> <span>DEFACER TOOLS</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item">
	<li class="nav-item">
	<a href="index.php" class="nav-link">Admin Finder</a>
</li>
<li class="nav-item">
	<a href="../brute-cp" class="nav-link">Bruteforce cPanel</a>
</li>
<li class="nav-item">
	<a href="../brute-fb" class="nav-link">Bruteforce Facebook</a>
</li>
<li class="nav-item">
	<a href="../csrf" class="nav-link">CSRF Online</a>
</li>
<li class="nav-item">
  <a href="../printing-dios" class="nav-link">Printing Dios SQLi</a>
</li>
<li class="nav-item">
	<a href="../webdav" class="nav-link">Webdav Xploiter</a>
</li>
</ul>
</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i style="color: #6699FF;" class="icon-embed2"></i> <span>PROGRAMING TOOLS</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="../encode-decode/index.html" class="nav-link">Encode - Decode</a></li>
           <li class="nav-item"><a href="../perapi-html" class="nav-link">Perapi HTML & CSS / C Style</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i style="color: yellow;" class="icon-brain"></i> <span>CTF</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Starter kit">
								<li class="nav-item"><a href="#" class="nav-link disabled">Easy to Difficult<span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i style="color: #666633;" class="icon-mirror"></i> <span>Mirror</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Starter kit">
								<li class="nav-item"><a href="../zone-h" class="nav-link">Zone-H Notifer</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i style="color: #CCFFCC;" class="icon-grid5"></i> <span>Other</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item">
								<a href="../css-mini" class="nav-link ">CSS Minifier</a>
							</ul>
							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item">
								<a href="../word-coun" class="nav-link ">Word Counter</a>
							</ul>
						</li>

						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Info</div> <i class="icon-menu-open" title="Forms"></i></li>
						<li class="nav-item">
							<a href="../../index2f8a.html" class="nav-link"><i style="color: #FFFFFF;" class="icon-info22"></i> <span>Contact</span></a>
						</li>
						<li class="nav-item">
							<a href="../../indexe476.html" class="nav-link"><i style="color: #FFFFFF;" class="icon-coin-dollar"></i> <span>Donasi</span></a>
						</li>
						<li class="nav-item">
							<a href="../../index90ae.html#beli" class="nav-link"><i style="color: gold;" class="icon-cart5"></i> <span>Buy Tools</span></a>
						</li>
										

					</ul>
				</div>

			</div>

			
		</div>

		<div class="content-wrapper">


			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					

					
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="../index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							
						</div>
					</div>

					
				</div>
			</div>	
 


 
          

        
        <div class="content">
            <div class="card">
                <center><br>
                <h3 class="tile-title"><i class="fa fa-exclamation-triangle"></i><b> Admin Finder</b></h3>
                
                
            </div>
                    <div class="card">
                        <div class="card-body">
                              <center> <form method="POST" action="<?php $PHP_SELF; ?>">
Url : <input type="text" name="url" value="http://domain.com/"/>
<br><center><br><input type="submit" name="submit" value="Check"/>
</p>
<?php
function xss_protect($data, $strip_tags = false, $allowed_tags = "") { 
    if($strip_tags) {
  $data = strip_tags($data, $allowed_tags . "<b>");
    }

    if(stripos($data, "script") !== false) { 
  $result = str_replace("script","scr<b></b>ipt", htmlentities($data, ENT_QUOTES)); 
    } else { 
  $result = htmlentities($data, ENT_QUOTES); 
    } 

    return $result;
}
function urlExist($url)
{
    $handle   = curl_init($url);
    if (false === $handle)
    {
    return false;
    }
    curl_setopt($handle, CURLOPT_HEADER, false);
    curl_setopt($handle, CURLOPT_FAILONERROR, true);
    curl_setopt($handle, CURLOPT_HTTPHEADER, Array("User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.15) Gecko/20080623 Firefox/2.0.0.15") ); // request as if Firefox
    curl_setopt($handle, CURLOPT_NOBODY, true);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, false);
    $connectable = curl_exec($handle);
    curl_close($handle);
    return $connectable;
}
    if(isset($_POST['submit']) && isset($_POST['url']))
    {
  $url= htmlentities(xss_protect($_POST['url']));
  if(filter_var($url, FILTER_VALIDATE_URL))
  {
    $trying = array('admin/','administrator/','admin1/','admin2/','admin3/','admin4/','admin5/','usuarios/',
    'usuario/','administrator/','moderator/','webadmin/','adminarea/','bb-admin/','adminLogin/','admin_area/',
    'panel-administracion/','instadmin/','memberadmin/','administratorlogin/','adm/','admin/account.php',
    'admin/index.php','admin/login.php','admin/admin.php','admin/account.php','admin_area/admin.php',
    'admin_area/login.php','siteadmin/login.php','siteadmin/index.php','siteadmin/login.html','admin/account.html',
    'admin/index.html','admin/login.html','admin/admin.html','admin_area/index.php','bb-admin/index.php','bb-admin/login.php',
    'bb-admin/admin.php','admin/home.php','admin_area/login.html','admin_area/index.html','admin/controlpanel.php','admin.php',
    'admincp/index.asp','admincp/login.asp','admincp/index.html','admin/account.html','adminpanel.html','webadmin.html',
    'webadmin/index.html','webadmin/admin.html','webadmin/login.html','admin/admin_login.html','admin_login.html',
    'panel-administracion/login.html','admin/cp.php','cp.php','administrator/index.php','administrator/login.php',
    'nsw/admin/login.php','webadmin/login.php','admin/admin_login.php','admin_login.php','administrator/account.php',
    'administrator.php','admin_area/admin.html','pages/admin/admin-login.php','admin/admin-login.php','admin-login.php',
    'bb-admin/index.html','bb-admin/login.html','acceso.php','bb-admin/admin.html','admin/home.html',
    'login.php','modelsearch/login.php','moderator.php','moderator/login.php','moderator/admin.php','account.php',
    'pages/admin/admin-login.html','admin/admin-login.html','admin-login.html','controlpanel.php','admincontrol.php',
    'admin/adminLogin.html','adminLogin.html','admin/adminLogin.html','home.html','rcjakar/admin/login.php',
    'adminarea/index.html','adminarea/admin.html','webadmin.php','webadmin/index.php','webadmin/admin.php',
    'admin/controlpanel.html','admin.html','admin/cp.html','cp.html','adminpanel.php','moderator.html',
    'administrator/index.html','administrator/login.html','user.html','administrator/account.html','administrator.html',
    'login.html','modelsearch/login.html','moderator/login.html','adminarea/login.html','panel-administracion/index.html',
    'panel-administracion/admin.html','modelsearch/index.html','modelsearch/admin.html','admincontrol/login.html',
    'adm/index.html','adm.html','moderator/admin.html','user.php','account.html','controlpanel.html','admincontrol.html',
    'panel-administracion/login.php','wp-login.php','adminLogin.php','admin/adminLogin.php','home.php','admin.php',
    'adminarea/index.php','adminarea/admin.php','adminarea/login.php','panel-administracion/index.php',
    'panel-administracion/admin.php','modelsearch/index.php','modelsearch/admin.php','admincontrol/login.php',
    'adm/admloginuser.php','admloginuser.php','admin2.php','admin2/login.php','admin2/index.php','usuarios/login.php',
    'adm/index.php','adm.php','affiliate.php','adm_auth.php','memberadmin.php','administratorlogin.php','admin.asp','admin/admin.asp',
    'admin_area/admin.asp','admin_area/login.asp','admin_area/index.asp','bb-admin/index.asp','bb-admin/login.asp',
    'bb-admin/admin.asp','pages/admin/admin-login.asp','admin/admin-login.asp','admin-login.asp','user.asp','webadmin/index.asp',
    'webadmin/admin.asp','webadmin/login.asp','admin/admin_login.asp','admin_login.asp','panel-administracion/login.asp',
    'adminLogin.asp','admin/adminLogin.asp','home.asp','adminarea/index.asp','adminarea/admin.asp','adminarea/login.asp',
    'panel-administracion/index.asp','panel-administracion/admin.asp','modelsearch/index.asp','modelsearch/admin.asp',
    'admincontrol/login.asp','adm/admloginuser.asp','admloginuser.asp','admin2/login.asp','admin2/index.asp','adm/index.asp',
    'adm.asp','affiliate.asp','adm_auth.asp','memberadmin.asp','administratorlogin.asp','siteadmin/login.asp','siteadmin/index.asp','_adm_/','_admin_/',
'_administrator_/','operator/','sika/','develop/','ketua/','redaktur/','author','adminweb/','user/','users/','dinkesadmin/','retel/','author/','panel/','paneladmin/','panellogin/','redaksi/','cp-admin/','master/','master/index.php','master/login.php','operator/index.php','sika/index.php','develop/index.php','ketua/index.php','redaktur/index.php','admin/index.php','administrator/index.php','adminweb/index.php','user/index.php','users/index.php','dinkesadmin/index.php','retel/index.php','author/index.php','panel/index.php','paneladmin/index.php','panellogin/index.php','redaksi/index.php','cp-admin/index.php','operator/login.php','sika/login.php','develop/login.php','ketua/login.php','redaktur/login.php','admin/login.php','administrator/login.php','adminweb/login.php','user/login.php','users/login.php','dinkesadmin/login.php','retel/login.php','author/login.php','panel/login.php','paneladmin/login.php','panellogin/login.php','redaksi/login.php','cp-admin/login.php','terasadmin/','terasadmin/index.php','terasadmin/login.php','rahasia/','rahasia/index.php','rahasia/admin.php','rahasia/login.php','adminpmb/','adminpmb/index.php','adminpmb/login.php','system/','system/index.php','system/login.php','webadmin/','webadmin/index.php','webadmin/login.php','wpanel/','wpanel/index.php','wpanel/login.php','adminpanel/index.php','adminpanel/','adminpanel/login.php','adminkec/','adminkec/index.php','adminkec/login.php','admindesa/','admindesa/index.php','admindesa/login.php','adminkota/','adminkota/index.php','adminkota/login.php','admin123/',
'admin123/index.php','admin123/login.php',
'logout/','logout/index.php',
'logout/login.php','logout/admin.php','adminweb_setting');
    foreach($trying as $sec)
    {
    $urll=$url.'/'.$sec;
    if(urlExist($urll))
    {
    echo '<p align="center"><font color="green">'.$urll.'
<br>MATCH FOUND!!!</font></p>';
    exit;
    }
    else
    {
    echo '<center><font color="red">'.$urll.' <br>does not exist.</font></center>';
    }   
    }
    echo '<p align="center"><font color="c0c0c0">Could not find admin page.</font></p>';
  }
  else
  {
    echo '<p align="center"><font color="c0c0c0">Invalid URL entered.</font></p>';    
  }
    }
?> 
                    </div>
        
     </div>       
        </div>
			<center>
							<div class="navbar  navbar-light">
				<div class="navbar-collapse" id="">
					<span class="navbar-text"><font face="Courier New">
						&copy; 2019. <a href="#">Noniod7</a> all rights reserved<br>
					</span>
				</div>
			</div>
			</center></body>
</html>