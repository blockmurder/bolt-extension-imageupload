<?php
// SampleExtension for Bolt, by Bob den Otter (bob@twokings.nl)
 
namespace ImageUpload;
 
class Extension extends \Bolt\BaseExtension
{
 
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
    function initialize()
    {
        // Set up routing for the extension.
        $path = $this->app['config']->get('general/branding/path') . '/imageupload';
        $this->app->match($path, array($this, 'myfunction'));
 
        // Add a menu option, only for users with level DEVELOPER
        $this->addMenuOption("ImageUpload", $path, "icon-exchange", \Bolt\Users::DEVELOPER);
 
 
    }
    
    /**
     * Callback function, where the actual work is done.
     *
     * @return mixed
     */
    public function myfunction()
    {
 
        // Require a logged in user..
        $this->requireUserLevel(\Bolt\Users::DEVELOPER);
 
        // Set up some vars.
        $title = "ImageUpload";
        $content = "<p>It works!</p>";
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
            'form_template' => $form_template
        ));
 
        return $html;
 
    }    
    
    
        /**
     * @param $html
     * @return mixed
     */

 
 
}
