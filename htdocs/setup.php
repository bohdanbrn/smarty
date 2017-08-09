<?php

// load Smarty library
define('SMARTY_DIR', 'e:/OSPanel/domains/task1/includes/Smarty/libs/');
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

        $this->setTemplateDir('e:/OSPanel/domains/task1/templates/');
        $this->setCompileDir('e:/OSPanel/domains/task1/templates_c/');
        $this->setConfigDir('e:/OSPanel/domains/task1/configs/');
        $this->setCacheDir('e:/OSPanel/domains/task1/cache/');

        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', 'Guest Book');
   }

}
?>
