<?php
//
// PHASE: BOOTSTRAP
//
define('LYDIA_INSTALL_PATH', dirname(__FILE__));
define('LYDIA_SITE_PATH', LYDIA_INSTALL_PATH . '/site');

require(LYDIA_INSTALL_PATH.'/src/Cmaos/bootstrap.php');

$ma = Cmaos::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$ma->FrontControllerRoute();


//
// PHASE: THEME ENGINE RENDER
//
$ma->ThemeEngineRender();
