<?php
    // Download composer.phar
    if (!file_exists('composer.phar')) {
        echo system('php -r "readfile(\'https://getcomposer.org/installer\');" | php');
    } else {
        echo 'Composer.phar Already Installed!';
    }
