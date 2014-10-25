<?php
// SampleExtension for Bolt, by Bob den Otter (bob@twokings.nl)
 
namespace ImageUpload;

class ImageUploadException extends \Exception {};
class Extension extends \Bolt\BaseExtension
{
    private $authorized = false;
    public  $config;
    /**
     * Info block for SampleExtension Extension.
     */
    function info()
    {
 
        $data = array(
            'name' => "ImageUpload",
            'description' => "Uploads muliple images to specified path in files",
            'author' => "blockmurder",
            'link' => "http://blockmurder.ch",
            'version' => "1.2",
            'required_bolt_version' => "1.1",
            'highest_bolt_version' => "1.6",
            'type' => "Backend",
            'first_releasedate' => "2014-07-19",
            'latest_releasedate' => "2014-10-25"
        );
 
        return $data;
 
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
        
        // check if user has allowed role(s)
        $currentUser    = $this->app['users']->getCurrentUser();
        $currentUserId  = $currentUser['id'];

        foreach ($this->config['permissions'] as $role) {
            if ($this->app['users']->hasRole($currentUserId, $role)) {
                $this->authorized = true;
                break;
            }
        }
        if ($this->authorized){
            $this->path = $this->app['config']->get('general/branding/path') . '/extensions/image-upload';
            $this->app->match($this->path, array($this, 'imageUpload'));


            $this->addMenuOption(__('ImageUpload'), $this->app['paths']['bolt'] . 'extensions/image-upload', "icon-list");
	 
	        // Add a menu option, only for users with level DEVELOPER
	        //$this->addMenuOption('ImageUpload ', $path, "icon-exchange");
	     }
 
 
    }
    
    /**
     * Callback function, where the actual work is done.
     *
     * @return mixed
     */
    public function imageUpload()
    {
 
        // Require a logged in user..
        //$this->requireUserLevel(\Bolt\Users::DEVELOPER);
 
        // Set up some vars.
        $title = "ImageUpload";
        $urlbase = $this->app['paths']['app'];

 
        // add 'assets/' to the twigloader, so it can find the templates there.
        $this->app['twig.loader.filesystem']->addPath(__DIR__.'/assets/');
 
        // render the template.
        $html = $this->app['twig']->render('page.twig', array(
            'title' => $title,
            'content' => $content,
            'urlbase' => $urlbase,
            'navigation_by' => $this->config['navigation'],
        ));
 
        return $this->injectAssets($html);
 
    }    
    
    
        /**
     * @param $html
     * @return mixed
     */
    private function injectAssets($html)
    {

        $urlbase = $this->app['paths']['app'];
        $url = $this->app['paths']['files'].$this->config['gallery_path'].'/';

        $assets = "

<link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'>
<link rel='stylesheet' href='{urlbase}extensions/ImageUpload/css/style.css'>

<link rel='stylesheet' href='http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css'>

<link rel='stylesheet' href='{urlbase}extensions/ImageUpload/css/jquery.fileupload.css'>
<link rel='stylesheet' href='{urlbase}extensions/ImageUpload/css/jquery.fileupload-ui2.css'>


<script src='{urlbase}extensions/ImageUpload/js/vendor/navgoco-master/src/jquery.cookie.js'></script>

<script type='text/javascript' src='{urlbase}extensions/ImageUpload/js/vendor/navgoco-master/src/jquery.navgoco.js'></script>
<link rel='stylesheet' type='text/css' href='{urlbase}extensions/ImageUpload/js/vendor/navgoco-master/src/jquery.navgoco.css' media='screen' />

<noscript><link rel='stylesheet' href='{urlbase}extensions/ImageUpload/css/jquery.fileupload-noscript.css'></noscript>
<noscript><link rel='stylesheet' href='{urlbase}extensions/ImageUpload/css/jquery.fileupload-ui-noscript.css'></noscript>
";
			
			$assets_down = "			
<script src='{urlbase}extensions/ImageUpload/js/vendor/jquery.ui.widget.js'></script>

<script src='{urlbase}extensions/ImageUpload/js/tmpl.min.js'></script>

<script src='{urlbase}extensions/ImageUpload/js/load-image.all.min.js'></script>

<script src='{urlbase}extensions/ImageUpload/js/canvas-to-blob.min.js'></script>

<script src='{urlbase}extensions/ImageUpload/js/jquery.blueimp-gallery.min.js'></script>

<script src='{urlbase}extensions/ImageUpload/js/jquery.iframe-transport.js'></script>

<script src='{urlbase}extensions/ImageUpload/js/jquery.fileupload.js'></script>

<script src='{urlbase}extensions/ImageUpload/js/jquery.fileupload-process.js'></script>

<script src='{urlbase}extensions/ImageUpload/js/jquery.fileupload-image.js'></script>

<script src='{urlbase}extensions/ImageUpload/js/jquery.fileupload-audio.js'></script>

<script src='{urlbase}extensions/ImageUpload/js/jquery.fileupload-video.js'></script>

<script src='{urlbase}extensions/ImageUpload/js/jquery.fileupload-validate.js'></script>

<script src='{urlbase}extensions/ImageUpload/js/jquery.fileupload-ui.js'></script>

<script>        
$(function (){
    'use strict';
    
    //var g_input = $('#gallery_path');
    var g_path = '{url}'+'temp/';
    

    // Initialize the jQuery File Upload widget:
    $('#fileupload').fileupload({
        // Uncomment the following to send cross-domain cookies:
        //xhrFields: {withCredentials: true},
        url: '{urlbase}extensions/ImageUpload/server/',
		  formData: { gallery_path: g_path },
	    // Enable image resizing, except for Android and Opera,
	    // which actually support image resizing, but fail to
	    // send Blob objects via XHR requests:
	    disableImageResize: /Android(?!.*Chrome)|Opera/
	        .test(window.navigator && navigator.userAgent),
	    imageMaxWidth: 1000,
	    imageMaxHeight: 1000,
	    imageCrop: false ,// Force cropped images,
	    imageQuality: .85,
	    imageOrientation: false,
            sequentialUploads: true,
            loadImageMaxFileSize: 20000000
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
            url: $('#fileupload').fileupload('option', 'url')+'?gallery_path='+g_path,
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
		url: '{urlbase}extensions/ImageUpload/server/',
		formData: { gallery_path: g_path, watermark: true },
	    disableImageResize: /Android(?!.*Chrome)|Opera/
	        .test(window.navigator && navigator.userAgent),
	    imageMaxWidth: 1000,
	    imageMaxHeight: 1000,
	    imageCrop: false ,// Force cropped images,
	    imageQuality: .85,
	    imageOrientation: false,
            sequentialUploads: true,
            loadImageMaxFileSize: 20000000
	});
	
	// Load existing files:
	$('#fileupload').addClass('fileupload-processing');
   	$.ajax({
			url: $('#fileupload').fileupload('option', 'url')+'?gallery_path='+g_path,
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

        // Insert just before </head>
        preg_match("~^([ \t]*)</head~mi", $html, $matches);
        preg_match("~^([ \t]*)</body~mi", $html, $matches_down);
        $replacement = sprintf("%s\t%s\n%s", $matches[1], $assets, $matches[0]);
        $replacement_down = sprintf("%s\t%s\n%s", $matches_down[1], $assets_down, $matches_down[0]);
        //$html = str_replace('<link rel="stylesheet" href="'.$urlbase.'view/css/bootstrap.min.css">', "", $html);
        $html = str_replace('<link rel="stylesheet" href="'.$urlbase.'view/lib/upload/jquery.fileupload-ui.css">', "", $html);
        $html_new = str_replace_first($matches_down[0], $replacement_down, $html);
        return str_replace_first($matches[0], $replacement, $html_new);

    }
 
 
}
