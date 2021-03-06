<html>
    <head>
        <!-- load js files -->
        <script src="<?php echo JS_URL . 'jquery.min.js'; ?>"></script>
		<script src="<?php echo JS_URL . 'bootstrap.min.js'; ?>"></script>
        <script src="<?php echo JS_URL . 'fuelux.min.js'; ?>"></script>
        <script src="<?php echo JS_URL . 'wizard.js'; ?>"></script>
        <script src="<?php echo JS_URL . 'angularjs.min.js'; ?>"></script>
        <script src="<?php echo JS_URL . 'init.js'; ?>"></script>
        <!-- load css files -->
		<link href="<?php echo CSS_URL . 'bootstrap.min.css'; ?>" rel="stylesheet">
		<link href="<?php echo CSS_URL . 'fuelux.min.css'; ?>" rel="stylesheet">
        <link href="<?php echo CSS_URL . 'main.css'; ?>" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="title">
            <div class="brand">
                <img style="height: 40px;" alt="Logo" src="<?php echo IMAGE_URL . 'ppi-white.png'; ?>">
            </div>
            <div class="app-name">
                <span class="head">Installer</span>
            </div>
        </div>
        <div class="clearfix"></div>
		<hr/>
        <div class="fuelux">
    		<div class="wizard" data-initialize="wizard" id="myWizard">
        		<div class="steps-container">
        			<ul class="steps">
        				<li data-step="1" data-name="campaign" class="active">
        					<span class="badge">1</span>Composer
        					<span class="chevron"></span>
        				</li>
        				<li data-step="2">
        					<span class="badge">2</span>Bower
        					<span class="chevron"></span>
        				</li>
        				<li data-step="3" data-name="template">
        					<span class="badge">3</span>Delete Installer and Run App
        					<span class="chevron"></span>
        				</li>
        			</ul>
        		</div>
        		<div class="actions">
        			<button type="button" class="btn btn-default btn-prev">
        				<span class="glyphicon glyphicon-arrow-left"></span>Prev</button>
        			<button type="button" class="btn btn-primary btn-next" data-last="Complete">Next
        				<span class="glyphicon glyphicon-arrow-right"></span>
        			</button>
        		</div>
        		<div class="step-content">
        			<div class="step-pane active sample-pane alert" data-step="1"  ng-controller="Composer">
        				<h4>Composer</h4>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-6 term">
                                    Loading...
                                </div>

                                <div class="col-sm-6">
                                    <div class="col-sm-6">
                                        <h3>Spare 5 Mins?</h3>
                                        <p>Please checkout composer at:</p>
                                        <p><a target="_blank" href="https://getcomposer.org">https://getcomposer.org</a></p>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <img class="composer-logo" src="<?php echo IMAGE_URL . 'logo-composer.png'; ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
        			</div>
        			<div class="step-pane sample-pane bg-info alert" data-step="2"  ng-controller="Bower">
        				<h4>Bower</h4>
        				<p id="bower-output">
        				    Installing Bower...
        				</p>
        			</div>
        			<div class="step-pane sample-pane bg-danger alert" data-step="3"  ng-controller="RunApp">
        				<h4>Delete and Run App</h4>
        				<p>Nori grape silver beet broccoli kombu beet greens fava bean potato quandong celery. Bunya nuts black-eyed pea prairie turnip leek lentil turnip greens parsnip. Sea lettuce lettuce water chestnut eggplant winter purslane fennel azuki bean earthnut pea sierra leone bologi leek soko chicory celtuce parsley jÃ­cama salsify. </p>
        			</div>
        		</div>
    		</div>
        </div>
    </body>
</html>
