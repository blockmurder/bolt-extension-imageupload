ImageUpload
=======================

This backend extension allows you to upload multiple images in a specific subfolder in _/files_. It uses the title of the entry as subfolder

Settings
--------
```gallery_path: path``` sets the path after _/files/_

 ```navigation:by_year``` changes the order and navigation of galleries:
* __by_year__ path will be /files/*gallery_path*/*Year*/*Month*/*slug*
* __unsorted__ path will be /files/*gallery_path*/*slug*

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