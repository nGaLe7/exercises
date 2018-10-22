<?php
    session_start();
    include('model/session.php');
    include('model/database.php');
    include('view/pages.php');
    include('view/elements.php');
    showHeader();
    showMenu();
    if(isset($_GET['pageid'])) {
		if($_GET['pageid'] == 'login') {
			showLogin();
		}
		if($_GET['pageid'] == 'register') {
			showRegister();
		}
		if($_GET['pageid'] == 'logout') {
			doLogout();
		}
		if($_GET['pageid'] == 'delacc') {
			showAreYouSure();
		}
		if($_GET['pageid'] == 'loggigin') {
			if(isset($_POST)) {
				$res = doLoginProcess();
			}
		}
		if($_GET['pageid'] == 'registering') {
			if(isset($_POST)) {
				doRegistrationProcess();
			}
		}
		if($_GET['pageid'] == 'loggedin') {
			if(isset($_SESSION['loggedin'])) {
				showLoggedin();
			}
		}
		if($_GET['pageid'] == 'dodelacc') {
			if(isset($_SESSION['loggedin'])) {
				if(isset($_POST)) {
					doDelAccount();
				}
			}
		}
		if($_GET['pageid'] == 'showreg') {
			if(isset($_SESSION['loggedin'])) {
				showRegistration();
			}
		}
		if($_GET['pageid'] == 'updateregister') {
			if(isset($_SESSION['loggedin'])) {
				if(isset($_POST)) {
					doUpdateRegistrationProcess();
				}
			}
		}
		
	}
	if(isset($_SESSION['loggedin'])) {
	    showLoggedin();
	} else {
	    showWelcome();
	}
    showFooter();
?>
