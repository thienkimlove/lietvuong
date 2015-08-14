<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Name of route
    |--------------------------------------------------------------------------
    |
    | Enter the routes name to enable dynamic imagecache manipulation.
    | This handle will define the first part of the URI:
    | 
    | {route}/{template}/{filename}
    | 
    | Examples: "images", "img/cache"
    |
    */
   
    'route' => 't',

    /*
    |--------------------------------------------------------------------------
    | Storage paths
    |--------------------------------------------------------------------------
    |
    | The following paths will be searched for the image filename, submited 
    | by URI. 
    | 
    | Define as many directories as you like.
    |
    */
    
    'paths' => array(
        public_path('files/images')
    ),

    /*
    |--------------------------------------------------------------------------
    | Manipulation templates
    |--------------------------------------------------------------------------
    |
    | Here you may specify your own manipulation callbacks.
    | The keys of this array will define which templates 
    | are available in the URI:
    |
    | {route}/{template}/{filename}
    |
    */
   
    'templates' => array(
        '120x120' => function($image) {
            return $image->fit(120, 120);
        },
        '110x70' => function($image) {
            return $image->fit(110, 70);
        },

        '115x80' => function($image) {
            return $image->fit(115, 80);
        },
        '220x170' => function($image) {
            return $image->fit(220, 170);
        },
        '220x130' => function($image) {
            return $image->fit(220, 130);
        },
        '335x205' => function($image) {
            return $image->fit(335, 205);
        },
        '560x297' => function($image) {
            return $image->fit(560, 297);
        },

        '206x139' => function($image) {
            return $image->fit(206, 139);
        },

        '218x138' => function($image) {
            return $image->fit(218, 138);
        },

    ),

    /*
    |--------------------------------------------------------------------------
    | Image Cache Lifetime
    |--------------------------------------------------------------------------
    |
    | Lifetime in minutes of the images handled by the imagecache route.
    |
    */
   
    'lifetime' => 43200,

);
