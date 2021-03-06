<?php
/**
 * @package Formidable
 */
/*
Plugin Name: Formidable Plus
Description: Adds a table field-type
Version: 2.0.3
Plugin URI: http://topquark.com/extend/plugins/formidable-plus
Author URI: http://topquark.com
Author: Trevor Mills
*/

/*  Copyright 2014-2016  Trevor Mills  (email : support@topquark.com)

    Note: author changed from topquark to Trevor Mills at version 2.0.3
          of this software

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
*/

define('FRMPLUS_PLUGIN_TITLE','Formidable Plus');
define('FRMPLUS_PLUGIN_NAME','formidable-plus');
define('FRMPLUS_DIR_NAME',basename( dirname( __FILE__ ) ) );
define('FRMPLUS_PATH',WP_PLUGIN_DIR.'/'.FRMPLUS_DIR_NAME);
define('FRMPLUS_CONTROLLERS_PATH',FRMPLUS_PATH.'/classes/controllers');
define('FRMPLUS_HELPERS_PATH',FRMPLUS_PATH.'/classes/helpers');
define('FRMPLUS_MODELS_PATH',FRMPLUS_PATH.'/classes/models');
define('FRMPLUS_VIEWS_PATH',FRMPLUS_PATH.'/classes/views');
define('FRMPLUS_TEMPLATES_PATH',FRMPLUS_PATH.'/classes/templates');

// Make the URL protocol agnostic by stripping off the leading http: or https:
define('FRMPLUS_URL', preg_replace( '#^[^/]+#', '', WP_PLUGIN_URL.'/'.FRMPLUS_DIR_NAME ) );
define('FRMPLUS_MODELS_URL',FRMPLUS_URL.'/classes/models');
define('FRMPLUS_VIEWS_URL',FRMPLUS_URL.'/classes/views');
define('FRMPLUS_IMAGES_URL',FRMPLUS_URL.'/images');
define('FRMPLUS_ICONS_URL',FRMPLUS_IMAGES_URL.'/error_icons');

// Instansiate Helpers
require_once(FRMPLUS_HELPERS_PATH . "/FrmPlusEntriesHelper.php");
require_once(FRMPLUS_HELPERS_PATH . "/FrmPlusEntryMetaHelper.php");
require_once(FRMPLUS_HELPERS_PATH . "/FrmPlusFieldsHelper.php");
require_once(FRMPLUS_HELPERS_PATH . "/FrmPlusAppHelper.php");

global $frmplus_entries_helper;
global $frmplus_entry_meta_helper;
global $frmplus_fields_helper;

$frmplus_entries_helper     = new FrmPlusEntriesHelper();
$frmplus_entry_meta_helper  = new FrmPlusEntryMetaHelper();
$frmplus_fields_helper      = new FrmPlusFieldsHelper();


// Instansiate Controllers
require_once(FRMPLUS_CONTROLLERS_PATH . "/FrmPlusAppController.php");
require_once(FRMPLUS_CONTROLLERS_PATH . "/FrmPlusFieldsController.php");
require_once(FRMPLUS_CONTROLLERS_PATH . "/FrmPlusFormsController.php");
require_once(FRMPLUS_CONTROLLERS_PATH . "/FrmPlusEntriesController.php");
require_once(FRMPLUS_CONTROLLERS_PATH . "/FrmPlusDatePickerController.php");
require_once(FRMPLUS_CONTROLLERS_PATH . "/FrmPlusCalculationsController.php");
require_once(FRMPLUS_CONTROLLERS_PATH . "/FrmPlusDataFromEntriesController.php");
require_once(FRMPLUS_CONTROLLERS_PATH . "/FrmPlusIncrementerController.php");
require_once(FRMPLUS_CONTROLLERS_PATH . "/FrmPlusStaticController.php");
require_once(FRMPLUS_CONTROLLERS_PATH . "/FrmPlusRadioLineController.php");

global $frmplus_app_controller;
global $frmplus_fields_controller;
global $frmplus_forms_controller;
global $frmplus_entries_controller;

$frmplus_app_controller         = new FrmPlusAppController();
$frmplus_forms_controller       = new FrmPlusFormsController();
$frmplus_fields_controller      = new FrmPlusFieldsController();
$frmplus_entries_controller     = new FrmPlusEntriesController();

?>