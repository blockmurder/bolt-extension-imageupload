<?php
/*
 * jQuery File Upload Plugin PHP Example 5.14
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

error_reporting(E_ALL | E_STRICT);
require('UploadHandler.php');
$custom_dir = $_SERVER['DOCUMENT_ROOT'];
if(empty($_REQUEST['gallery_path'])){
    $custom_gallery = "";
}
else {
    $custom_gallery = $_REQUEST['gallery_path'];
}
if(empty($_GET['watermark'])){
    $watermark = true;
}
else {
    $watermark = $_GET['watermark'];
}
$upload_handler = new UploadHandler(array('upload_dir' => $custom_dir.$custom_gallery, 'upload_url' => $custom_gallery, 'watermark' => $watermark));
