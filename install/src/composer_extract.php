<?php
    define('EXTRACT_DIRECTORY', "../");

    if (file_exists(EXTRACT_DIRECTORY.'/vendor/autoload.php') == true) {
        echo "Extracted autoload already exists. Skipping phar extraction as presumably it's already extracted.";
    }
    else{
        $composerPhar = new Phar("Composer.phar");
        //php.ini setting phar.readonly must be set to 0
        $composerPhar->extractTo(EXTRACT_DIRECTORY);
    }
