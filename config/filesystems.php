<?php
return [

    'disks' => [

        'ftp' => [
            'driver' => 'ftp',
            'host' => env('FTP_HOST'),
            'username' => env('FTP_USERNAME'),
            'password' => env('FTP_PASSWORD'),
            'root' => env('FTP_PATH_ROOT') // ftp: /html/
        ],

    ],
     
];