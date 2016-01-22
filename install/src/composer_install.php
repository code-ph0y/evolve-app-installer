<?php
header("Content-Type: text/event-stream\n\n");

if (!file_exists('composer.phar')) {
    $cmd = 'php -r "readfile(\'https://getcomposer.org/installer\');" | php';

    $descriptorspec = array(
       0 => array("pipe", "r"),   // stdin is a pipe that the child will read from
       1 => array("pipe", "w"),   // stdout is a pipe that the child will write to
       2 => array("pipe", "w")    // stderr is a pipe that the child will write to
    );
    flush();
    $process = proc_open($cmd, $descriptorspec, $pipes, realpath('./'), array());
    if (is_resource($process)) {
        while ($s = fgets($pipes[1])) {
            echo "event: composer_update\n";
            echo 'data: {"output": "<pre>' . (string)$s . '</pre>"}';
            echo "\n\n";
            ob_end_flush();
            flush();
            sleep(1);
        }
    }
} else {
    echo "event: composer_update\n";
    echo 'data: {"output": "Composer is already installed!"}';
    echo "\n\n";
    ob_end_flush();
    flush();
}
