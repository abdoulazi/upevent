
 
		<section id="breadcrumb-section" class="breadcrumb-section clearfix">
			<div class="jarallax" style="background-image: url(assets/images/breadcrumb/0.breadcrumb-bg.jpg);">
				<div class="overlay-black">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-6 col-md-12 col-sm-12">
  

							</div>
						</div>
					</div>
				</div>
			</div>
		</section> 

		<section id="contact-section" class="contact-section sec-ptb-100 clearfix">
			<div class="container">

 				<?php 

 						if(isset($_POST['contacter'])) {
 							$contact->nom = $_POST['nom']; 
 							$contact->email = $_POST['email']; 
 							$contact->pays = $_POST['pays']; 
 							$contact->telephone = $_POST['telephone']; 
 							$contact->message = $_POST['message']; 

 							if($contact->register()) 
 							{
 								?>
 									<div class="row">
										<div class="col-lg-6">
											<div class="panel panel-info">
												<div class="panel-heading">
													Succès
												</div>
												<div class="panel-body">
												 <font color="green">Le contact est enregistré avec succès.</font>
												</div>
											</div>
										</div>
									</div>

 								<?php
 							} else {
 								?>
 									<div class="row">
										<div class="col-lg-6">
											<div class="panel panel-info">
												<div class="panel-heading">
													Erreur
												</div>
												<div class="panel-body">
													Une erreur s'est produite lors de l'enregistrement de contact.
												</div>
											</div>
										</div>
									</div>

 								<?php
 							}
 						}
 				 ?>	 

				<br><br>
				<div class="section-title mb-50">
					<small class="sub-title">Contactez nous</small>
					<h2 class="big-title"><strong>Remplissez le formulaire suivant</strong></h2>
				</div>

				<div class="contact-form form-wrapper text-center">
					<form action="/?page=contact" method="post">
						<div class="row">

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-item">
									<input type="text" name="nom" placeholder="Votre nom" required>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-item">
									<input type="email" name="email" placeholder="Votre email" required>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-item">
									<input type="text" name="pays" placeholder="Pays" required>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-item">
									<input type="tel" name="telephone" placeholder="Telephone" required>
								</div>
							</div>

							<div class="col-lg-12 col-md-12 col-sm-12">
								<textarea placeholder="Votre message" name="message" required></textarea>
								<button type="submit" name="contacter" class="custom-btn">Envoyer</button>
							</div> 
						</div>
					</form>
				</div>

			</div>
		</section>
		
 