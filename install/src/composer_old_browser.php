<?php
    ob_start();
    system('php -r "readfile(\'https://getcomposer.org/installer\');" | php');
    $output = ob_get_contents();
    ob_end_clean();
?>

<?php echo "<pre>$output</pre>" ?>
