$(document).ready(function() {
    $('#myWizard').wizard();

    //check for browser support
    if(false || typeof(EventSource)!=="undefined") {
        var evtSource = new EventSource("src/composer_install.php");
        evtSource.addEventListener("composer_update", function(e) {
            var obj = JSON.parse(e.data);
            $("#composer-output").html(obj.output);
        }, false);
    } else {
        $.ajax({ url: "src/composer_old_browser.php" })
         .done(function( data ) {
             $("#composer-output").html(data);
         });
    }
});
