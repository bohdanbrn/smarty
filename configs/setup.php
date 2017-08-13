<?php

// load Smarty library
//define('SMARTY_DIR', 'e:/OSPanel/domains/smarty/includes/Smarty/libs/');
define('SMARTY_DIR', 'f:/OpenServer/domains/smarty/includes/Smarty/libs/');

require_once(SMARTY_DIR . 'Smarty.class.php');

// The setup.php file is a good place to load
// required application library files, and you
// can do that right here. An example:
// require('guestbook/guestbook.lib.php');

class Smarty_GuestBook extends Smarty {

   function __construct()
   {

        // Class Constructor.
        // These automatically get set with each new instance.

        parent::__construct();

        /*
        $this->setTemplateDir('e:/OSPanel/domains/smarty/templates/');
        $this->setCompileDir('e:/OSPanel/domains/smarty/templates_c/');
        $this->setConfigDir('e:/OSPanel/domains/smarty/configs/');
        $this->setCacheDir('e:/OSPanel/domains/smarty/cache/');
        */

        $this->setTemplateDir('f:/OpenServer/domains/smarty/templates/');
        $this->setCompileDir('f:/OpenServer/domains/smarty/templates_c/');
        $this->setConfigDir('f:/OpenServer/domains/smarty/configs/');
        $this->setCacheDir('f:/OpenServer/domains/smarty/cache/');

        //$this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', 'Guest Book');
   }

}
?>
