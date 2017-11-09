<?php
return [
    /*
     * Some example global data, this is available from $this->site(...) in any phtml file
     */
    'site' => [
        'title'       => 'Pure Blog',
        'url'         => 'http://localhost:3000',
        'description' => 'A starter theme for use with Tapestry',
        'author'      => 'Simon Dann',
        'email'       => 'simon.dann@gmail.com'
    ],
    'plugins' => [
        'asset_manifest_path' => __DIR__ . '/source/manifest.json'
    ],
    /*
     * Enable / Disable the publishing of files with `draft: true` in their front matter
     */
    'publish_drafts' => false,
    /*
     * The site kernel to be loaded during site building
     */
    'kernel' => \Site\Kernel::class,
    'ignore' => [
        'css',
        'img',
        'js'
    ],
    'copy' => [
        'css',
        'img',
        'js'
    ]
];