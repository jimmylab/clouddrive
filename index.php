<?php
define('BASEPATH', __DIR__.DIRECTORY_SEPARATOR, false);
define('SYSPATH', BASEPATH.'system'.DIRECTORY_SEPARATOR, false);
define('APPPATH', BASEPATH.'application'.DIRECTORY_SEPARATOR, false);

require_once(BASEPATH.'config.php');

require_once(SYSPATH.'error.php');
require_once(SYSPATH.'router.php');

load(APPVIEW.'header.php', array());
load(APPVIEW.'navbar.php', array());
load(APPVIEW.'dashboard.php', array());
load(APPVIEW.'safetyoptions.php', array());
load(APPVIEW.'reminder.php', array());
load(APPVIEW.'footer.php', array());
?>