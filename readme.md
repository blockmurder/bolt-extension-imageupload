ImageUpload
=======================

This backend extension allows you to upload multiple images in a specific subfolder in /files. It uses the title of the entry as subfolder

__Please check your settings in__ ```config.yml```

Settings
--------
```gallery_path``` sets the path after the _/files/_ folder

```gallery_path: galleries    # example: /files/*gallery_path* --> gallery_path: galerien```


 ```navigation``` changes the order and navigation of galleries:
* for **by_year**, path will be /files/*gallery_path*/*Year*/*Month*/*slug*
* for __unsorted__, path will be /files/*gallery_path*/*slug*

```navigation: by_year        # valid values: by_year, unsorted``` 

__Navigation in the backend ImageUpload changes according to the path__