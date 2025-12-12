<?php

return [

    /*
     * The disk on which to store audit results.
     * Choose one or more of the disks you've configured in config/filesystems.php.
     */
    'disk_name' => env('DEPSHIELD_DISK_NAME', 'local'),

    /*
     * The storage path on the disk where to store audit results.
     */
    'storage_path' => env('DEPSHIELD_STORAGE_PATH', 'depshield'),
];
