 <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="creation">
            <strong>Création Fiche Client </strong>

        </div>

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="jumbotron" id="contact_us">
            <div class="row">
                <div class="col-xs-12 col-ms-12 col-lg-8 mb-4">
                    
                   
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                               
                                <input type="text" class="form-control" id="name" required placeholder= "Nom"
                                       data-validation-required-message="Merci d'entrer votre nom">
                                <p class="help-block"></p>
                            </div>
                        </div>
						<div class="control-group form-group">
                            <div class="controls">
                                
                                <input type="text" class="form-control" id="name"required placeholder= "Prénom"
                                       data-validation-required-message="Merci d'entrer votre prénom">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                               
                                <input type="tel" class="form-control" id="phone" required placeholder= "Téléphone"
                                       data-validation-required-message="Merci d'entrer votre numéro de téléphone">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                
                                <input type="email" class="form-control" id="email" required placeholder= "Mail"
                                       data-validation-required-message="Merci d'entrer votre mail">
                            </div>
                        </div>
						<div class="control-group form-group">
                            <div class="controls">
                                
                                <input type="adresse" class="form-control" id="adresse" required placeholder= "Adresse"
                                       data-validation-required-message="Merci d'entrer votre adresse">
                            </div>
                        </div>
						<div class="control-group form-group">
                            <div class="controls">
                                
                                <input type="cp" class="form-control" id="cp" required placeholder= "Code Postal"
                                       data-validation-required-message="Merci d'entrer votre code postal">
                            </div>
                        </div>
						<div class="control-group form-group">
                            <div class="controls">
                                
                                <input type="ville" class="form-control" id="ville" placeholder= "Ville" required 
                                       data-validation-required-message="Merci d'entrer votre ville">
                            </div>
                        </div>
						<div class="control-group form-group">
                            <div class="controls">
                                
                                <input type="password" class="form-control" id="mdp" placeholder= "Mot de Passe" required 
                                       data-validation-required-message="Merci d'entrer votre mot de passe">
                            </div>
                        </div>
                        




                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-primary" id="sendMessageButton">C'est parti !</button>
                    </form>
                </div>

            </div>
            <!-- /.row -->
        </div>
    </div>
    <!-- /.container -->