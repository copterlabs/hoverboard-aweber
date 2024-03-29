<?php
/*
Plugin Name: Hoverboard Aweber
Version: 0.1.0
Plugin URI: https://bitbucket.org/copterlabs/hoverboard-aweber
Description: Allows list updates in Hoverboard projects
Author: Copter Labs
Author URI: http://copterlabs.com/
License: MIT

Copyright (C) 2014 Copter Labs <info@copterlabs.com>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/

if (!defined('DB_NAME')) {
    header( 'HTTP/1.0 403 Forbidden' );
    die;
}

// Sets the plugin path
define('HB_AWEBER_PATH', plugin_dir_path(__FILE__));

// Sets the plugin version
define('HB_AWEBER_VERSION', '0.0.1a');

// Checks if the plugin is being loaded in the admin or public view
if (is_admin()) {
    require_once HB_AWEBER_PATH . 'admin/class.hb_aweber_admin.inc.php';
    $hb_aweber = new HB_Aweber_Admin;
} else {
    require_once HB_AWEBER_PATH . 'frontend/class.hb_aweber_frontend.inc.php';
    $hb_aweber = new HB_Aweber_Frontend;
}
