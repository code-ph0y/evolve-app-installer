<?php
    // Download composer.phar
    if (!file_exists('composer.phar')) {
        exec('php -r "readfile(\'https://getcomposer.org/installer\');" | php');
    }
