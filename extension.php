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
            'description' => "A skeleton extension for Bolt",
            'author' => "Bob den Otter",
            'link' => "http://bolt.cm",
            'version' => "0.1",
            'required_bolt_version' => "1.1",
            'highest_bolt_version' => "1.3",
            'type' => "Backend",
            'first_releasedate' => "2013-10-19",
            'latest_releasedate' => "2013-10-19"
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
            $this->app->match($this->path, array($this, 'myfunction'));


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
    public function myfunction()
    {
 
        // Require a logged in user..
        //$this->requireUserLevel(\Bolt\Users::DEVELOPER);
 
        // Set up some vars.
        $title = "ImageUpload";
        $urlbase = $this->app['paths']['app'];
        $form_template = '<script id="template-upload" type="text/x-tmpl">
									{% for (var i=0, file; file=o.files[i]; i++) { %}
									    <tr class="template-upload fade">
									        <td>
									            <span class="preview"></span>
									        </td>
									        <td>
									            <p class="name">{%=file.name%}</p>
									            <strong class="error text-danger"></strong>
									        </td>
									        <td>
									            <p class="size">Processing...</p>
									            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
									        </td>
									        <td>
									            {% if (!i && !o.options.autoUpload) { %}
									                <button class="btn btn-primary start" disabled>
									                    <i class="glyphicon glyphicon-upload"></i>
									                    <span>Start</span>
									                </button>
									            {% } %}
									            {% if (!i) { %}
									                <button class="btn btn-warning cancel">
									                    <i class="glyphicon glyphicon-ban-circle"></i>
									                    <span>Cancel</span>
									                </button>
									            {% } %}
									        </td>
									    </tr>
									{% } %}
									</script>
									<!-- The template to display files available for download -->
									<script id="template-download" type="text/x-tmpl">
									{% for (var i=0, file; file=o.files[i]; i++) { %}
									    <tr class="template-download fade">
									        <td>
									            <span class="preview">
									                {% if (file.thumbnailUrl) { %}
									                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
									                {% } %}
									            </span>
									        </td>
									        <td>
									            <p class="name">
									                {% if (file.url) { %}
									                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?\'data-gallery\':\'\'%}>{%=file.name%}</a>
									                {% } else { %}
									                    <span>{%=file.name%}</span>
									                {% } %}
									            </p>
									            {% if (file.error) { %}
									                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
									            {% } %}
									        </td>
									        <td>
									            <span class="size">{%=o.formatFileSize(file.size)%}</span>
									        </td>
									        <td>
									            {% if (file.deleteUrl) { %}
									                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields=\'{"withCredentials":true}\'{% } %}>
									                    <i class="glyphicon glyphicon-trash"></i>
									                    <span>Delete</span>
									                </button>
									                <input type="checkbox" name="delete" value="1" class="toggle">
									            {% } else { %}
									                <button class="btn btn-warning cancel">
									                    <i class="glyphicon glyphicon-ban-circle"></i>
									                    <span>Cancel</span>
									                </button>
									            {% } %}
									        </td>
									    </tr>
									{% } %}
									</script>
									';
 
        // add 'assets/' to the twigloader, so it can find the templates there.
        $this->app['twig.loader.filesystem']->addPath(__DIR__.'/assets/');
 
        // render the template.
        $html = $this->app['twig']->render('page.twig', array(
            'title' => $title,
            'content' => $content,
            'form_template' => $form_template,
            'urlbase' => $urlbase,

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
        $url = $this->app['paths']['files'].'galerien/';

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

<script type='text/javascript' id='demo1-javascript'>
$(document).ready(function() {
	// Initialize navgoco with default options
	$('#gallery_sel').navgoco({
		caretHtml: '',
		accordion: false,
		openClass: 'open',
		save: true,
		cookie: {
			name: 'navgoco',
			expires: false,
			path: '/'
		},
		slide: {
			duration: 400,
			easing: 'swing'
		},
		// Add Active class to clicked menu item
		onClickAfter: function(e, submenu) {
			e.preventDefault();
			$('#gallery_sel').find('li').removeClass('active');
			var li =  $(this).parent();
			var lis = li.parents('li');
			li.addClass('active');
			lis.addClass('active');
		},
	});

	$('#collapseAll').click(function(e) {
		e.preventDefault();
		$('#gallery_sel').navgoco('toggle', false);
	});

	$('#expandAll').click(function(e) {
		e.preventDefault();
		$('#gallery_sel').navgoco('toggle', true);
	});
});
</script>
			";
			
			$assets_down = "			
<script src='{urlbase}extensions/ImageUpload/js/vendor/jquery.ui.widget.js'></script>

<script src='http://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js'></script>

<script src='http://blueimp.github.io/JavaScript-Load-Image/js/load-image.min.js'></script>

<script src='http://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js'></script>

<script src='http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js'></script>

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
        url: '{urlbase}extensions/ImageUpload/server/php/',
		  formData: { gallery_path: g_path },
	    // Enable image resizing, except for Android and Opera,
	    // which actually support image resizing, but fail to
	    // send Blob objects via XHR requests:
	    disableImageResize: /Android(?!.*Chrome)|Opera/
	        .test(window.navigator && navigator.userAgent),
	    imageMaxWidth: 1200,
	    imageMaxHeight: 1200,
	    imageCrop: false ,// Force cropped images,
	    imageQuality: 100,
	    imageOrientation: true,

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
		url: '{urlbase}extensions/ImageUpload/server/php/',
		formData: { gallery_path: g_path },
	   disableImageResize: /Android(?!.*Chrome)|Opera/
	       .test(window.navigator && navigator.userAgent),
	   imageQuality: 0.85,
	   imageMaxWidth: 1200,
	   imageMaxHeight: 1200,
	   imageCrop: false ,// Force cropped images,
	   imageOrientation: false,

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