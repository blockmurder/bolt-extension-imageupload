<?php

namespace Bolt\Extension\blockmurder\ImageUpload;

use Bolt\Application;

/**
 * Class Extension
 * @package ImageUpload
 * @author  blockmurder (info@blockmurder.ch)
 */

class Extension extends \Bolt\BaseExtension{
    private $authorized = false;
    public  $config;

    public function getName()
    {
        return "ImageUpload";
    }


    /**
     * Set up the routing and menu-item
     */
    public function initialize()
    {
		  $this->config = $this->getConfig();

    	/**
         * ensure proper config
         */
        if (!isset($this->config['permissions']) || !is_array($this->config['permissions'])) {
            $this->config['permissions'] = array('root', 'admin', 'developer');
        } else {
            $this->config['permissions'][] = 'root';
        }

        if (empty($this->config['gallery_path'])) { $this->config['gallery_path'] = "gallerys"; }
        if (empty($this->config['navigation'])) { $this->config['navigation'] = "by_year"; }
        if (empty($this->config['watermark'])) { $this->config['watermark'] = "true"; }
        if (empty($this->config['imageMaxWidth'])) { $this->config['imageMaxWidth'] = "1000"; }
        if (empty($this->config['imageMaxHeight'])) { $this->config['imageMaxHeight'] = "1000"; }
        if (empty($this->config['imageCrop'])) { $this->config['imageCrop'] = "false"; }
        if (empty($this->config['imageQuality'])) { $this->config['imageQuality'] = ".85"; }
        if (empty($this->config['imageOrientation'])) { $this->config['imageOrientation'] = "false"; }
        if (empty($this->config['loadImageMaxFileSize'])) { $this->config['loadImageMaxFileSize'] = "20000000"; }

        // check if user has allowed role(s)
        $currentUser    = $this->app['users']->getCurrentUser();
        $currentUserId  = $currentUser['id'];

        foreach ($this->config['permissions'] as $role) {
            if ($this->app['users']->hasRole($currentUserId, $role)) {
                $this->authorized = true;
                break;
            }
        }

        if ($this->authorized)
        {

            $this->path = $this->app['config']->get('general/branding/path') . '/extensions/image-upload';
            $this->app->match($this->path, array($this, 'ImageUpload'));
            $this->addMenuOption('Image Upload', $this->app['paths']['bolt'] . 'extensions/image-upload', "fa:rocket");

        }


    }

    /**
     * Callback function, where the actual work is done.
     *
     * @return mixed
     */
    public function ImageUpload()
    {
        $title = "ImageUpload";
        $urlbase = $this->app['paths']['extensions'] . 'vendor/blockmurder/imageupload';

        // add MenuEditor template namespace to twig
        $this->app['twig.loader.filesystem']->addPath(__DIR__.'/views/', 'ImageUpload');

        // render the template.
        $html = $this->app['render']->render('@ImageUpload/_imageupload.twig', array(
            'title' => $title,
            'content' => $content,
            'urlbase' => $urlbase,
            'navigation_by' => $this->config['navigation'],
        ));

        return $this->injectAssets($html);

    }

    private function str_replace_first($needle, $replacement, $haystack)
    {
        $needle_start = strpos($haystack, $needle);
        $needle_end = $needle_start + strlen($needle);
        if($needle_start!==false) {
            $to_replace = substr($haystack, 0, $needle_end);
            return str_replace($needle, $replacement, $to_replace) . substr($haystack, $needle_end);
        }
        else
            return $haystack;
    }


        /**
     * @param $html
     * @return mixed
     */
    private function injectAssets($html)
    {

        $urlbase = $this->app['paths']['extensions'] . 'vendor/blockmurder/imageupload';
        $url = $this->app['paths']['files'].$this->config['gallery_path'].'/';
        $watermark = $this->config['watermark'];

        $assets = "

<link rel='stylesheet' href='http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css'>

<link rel='stylesheet' href='{urlbase}/assets/css/jquery.fileupload.css'>
<link rel='stylesheet' href='{urlbase}/assets/css/jquery.fileupload-ui2.css'>


<script src='{urlbase}/assets/js/vendor/navgoco-master/src/jquery.cookie.js'></script>

<script type='text/javascript' src='{urlbase}/assets/js/vendor/navgoco-master/src/jquery.navgoco.js'></script>
<link rel='stylesheet' type='text/css' href='{urlbase}/assets/js/vendor/navgoco-master/src/jquery.navgoco.css' media='screen' />

<noscript><link rel='stylesheet' href='{urlbase}/assets/css/jquery.fileupload-noscript.css'></noscript>
<noscript><link rel='stylesheet' href='{urlbase}/assets/css/jquery.fileupload-ui-noscript.css'></noscript>
";

			$assets_down = "
<script src='{urlbase}/assets/js/vendor/jquery.ui.widget.js'></script>

<script src='{urlbase}/assets/js/tmpl.min.js'></script>

<script src='{urlbase}/assets/js/load-image.all.min.js'></script>

<script src='{urlbase}/assets/js/canvas-to-blob.min.js'></script>

<script src='{urlbase}/assets/js/jquery.blueimp-gallery.min.js'></script>

<script src='{urlbase}/assets/js/jquery.iframe-transport.js'></script>

<script src='{urlbase}/assets/js/jquery.fileupload.js'></script>

<script src='{urlbase}/assets/js/jquery.fileupload-process.js'></script>

<script src='{urlbase}/assets/js/jquery.fileupload-image.js'></script>

<script src='{urlbase}/assets/js/jquery.fileupload-audio.js'></script>

<script src='{urlbase}/assets/js/jquery.fileupload-video.js'></script>

<script src='{urlbase}/assets/js/jquery.fileupload-validate.js'></script>

<script src='{urlbase}/assets/js/jquery.fileupload-ui.js'></script>

<script>
$(function (){
    'use strict';

    //var g_input = $('#gallery_path');
    var g_path = '{url}'+'temp/';


    // Initialize the jQuery File Upload widget:
    $('#fileupload').fileupload({
        // Uncomment the following to send cross-domain cookies:
        //xhrFields: {withCredentials: true},
        url: '{urlbase}/server/',
		  formData: { gallery_path: g_path, watermark: {watermark} },
	    // Enable image resizing, except for Android and Opera,
	    // which actually support image resizing, but fail to
	    // send Blob objects via XHR requests:
	    disableImageResize: /Android(?!.*Chrome)|Opera/
	        .test(window.navigator && navigator.userAgent),
	    imageMaxWidth: {imageMaxWidth},
	    imageMaxHeight: {imageMaxHeight},
	    imageCrop: {imageCrop} ,// Force cropped images,
	    imageQuality: {imageQuality},
	    imageOrientation: {imageOrientation},
      sequentialUploads: true,
      loadImageMaxFileSize: {loadImageMaxFileSize}
	 });

    // Enable iframe cross-domain access via redirect option:
    $('#fileupload').fileupload(
        'option',
        'redirect',
        window.location.href.replace(
            /\/[^\/]*$/,
            '/cors/result.html?%s'
        )
    );

        // Load existing files:
        $('#fileupload').addClass('fileupload-processing');
        $.ajax({
            // Uncomment the following to send cross-domain cookies:
            //xhrFields: {withCredentials: true},
            url: $('#fileupload').fileupload('option', 'url')+'?gallery_path='+g_path+'&watermark={watermark}',
            dataType: 'json',
            context: $('#fileupload')[0]
        }).always(function () {
            $(this).removeClass('fileupload-processing');
        }).done(function (result) {
            $(this).fileupload('option', 'done')
                .call(this, $.Event('done'), {result: result});
        });


$('#selected_gallery li a').click(function() {
	var g_path = '{url}'+$(this).attr('id')+'/';
	$('.template-download').remove();
	$('#fileupload').fileupload({
		url: '{urlbase}/server/',
		formData: { gallery_path: g_path, watermark: {watermark} },
	    disableImageResize: /Android(?!.*Chrome)|Opera/
	        .test(window.navigator && navigator.userAgent),
      imageMaxWidth: {imageMaxWidth},
      imageMaxHeight: {imageMaxHeight},
      imageCrop: {imageCrop} ,// Force cropped images,
      imageQuality: {imageQuality},
      imageOrientation: {imageOrientation},
      sequentialUploads: true,
      loadImageMaxFileSize: {loadImageMaxFileSize}
	});

	// Load existing files:
	$('#fileupload').addClass('fileupload-processing');
   	$.ajax({
			url: $('#fileupload').fileupload('option', 'url')+'?gallery_path='+g_path+'&watermark={watermark}',
        	dataType: 'json',
        	context: $('#fileupload')[0]
		}).always(function () {
      $(this).removeClass('fileupload-processing');
      	}).done(function (result) {
         	$(this).fileupload('option', 'done')
            	.call(this, $.Event('done'), {result: result});
		});
	});

});
</script>

<!--[if (gte IE 8)&(lt IE 10)]>
<script src='{urlbase}extensions/ImageUpload/js/cors/jquery.xdr-transport.js'></script>
<![endif]-->
";
        $assets = preg_replace('~\{urlbase\}~', $urlbase, $assets);
        $assets_down = preg_replace('~\{urlbase\}~', $urlbase, $assets_down);
        $assets_down = preg_replace('~\{url\}~', $url, $assets_down);
        $assets_down = preg_replace('~\{watermark\}~', $this->config['watermark'], $assets_down);
        $assets_down = preg_replace('~\{imageMaxWidth\}~', $this->config['imageMaxWidth'], $assets_down);
        $assets_down = preg_replace('~\{imageMaxHeight\}~', $this->config['imageMaxHeight'], $assets_down);
        $assets_down = preg_replace('~\{imageCrop\}~', $this->config['imageCrop'], $assets_down);
        $assets_down = preg_replace('~\{imageQuality\}~', $this->config['imageQuality'], $assets_down);
        $assets_down = preg_replace('~\{imageOrientation\}~', $this->config['imageOrientation'], $assets_down);
        $assets_down = preg_replace('~\{loadImageMaxFileSize\}~', $this->config['loadImageMaxFileSize'], $assets_down);

        // Insert just before </head>
        preg_match("~^([ \t]*)</head~mi", $html, $matches);
        preg_match("~^([ \t]*)</body~mi", $html, $matches_down);
        $replacement = sprintf("%s\t%s\n%s", $matches[1], $assets, $matches[0]);
        $replacement_down = sprintf("%s\t%s\n%s", $matches_down[1], $assets_down, $matches_down[0]);
        //$html = str_replace('<link rel="stylesheet" href="'.$urlbase.'view/css/bootstrap.min.css">', "", $html);
        $html = str_replace($this->app['paths']['root'].'app/view/lib/upload/jquery.fileupload-ui.css', $urlbase."/assets/css/jquery.fileupload-ui2.css", $html);
        $html_new = $this->str_replace_first($matches_down[0], $replacement_down, $html);
        return $this->str_replace_first($matches[0], $replacement, $html_new);
    }
}
