ImageUpload v2.0
=======================

This backend extension allows you to upload multiple images in a specific subfolder in _/files_. It uses the title of the entry as subfolder

Settings
--------
```gallery_path: path``` sets the path after _/files/_

 ```navigation: by_year``` changes the order and navigation of galleries:
* __by_year__ path will be /files/*gallery_path*/*Year*/*Month*/*slug*
* __unsorted__ path will be /files/*gallery_path*/*slug*

```watermark: true```                 overlays watermark on resized images when true

*watermark image is located in extensions/vendor/blockmurder/imageupload*

```imageMaxWidth: 1000```             The maximum width of resized images.

```imageMaxHeight: 1000```            The maximum height of resized images.

```imageCrop: false```                Define if resized images should be cropped or only scaled.

```imageQuality: .85```               Sets the quality parameter given to the canvas.toBlob() call when saving resized images.

```imageOrientation: false```         Defines the image orientation (1-8) or takes the orientation value from Exif data if set to true.

```loadImageMaxFileSize: 20000000```  The maximum file size of images to load.


__upload path changes accordingly to the navigation order__

In order to get this extension to work, you need a new contetntype, e.g.:

```
galleries:
    name: galleries
    singular_name: gallery
    fields:
        date:
            type: date
            default: "today"
            required: true
        title:
            type: text
        slug:
            type: slug
            uses: title
    record_template: gallery.twig
    listing_template: galleries.twig
    taxonomy: [ tags ]
    recordsperpage: 100
    default_status: publish
```

Credits
-------
This extension is built with [jQuery File Upload](https://blueimp.github.io/jQuery-File-Upload/)
