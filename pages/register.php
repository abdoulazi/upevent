
 
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

 						if(isset($_POST['register'])) {
 							$auth->nom_et_prenom = $_POST['nom_et_prenom'];
 							$auth->email = $_POST['email'];
 							$auth->password = $_POST['password'];

 							if($auth->register()) 
 							{
 								?>
 									<div class="row">
										<div class="col-lg-6">
											<div class="panel panel-info">
												<div class="panel-heading">
													Enregistré avec success
												</div>
												<div class="panel-body">
													<font color="green">Felicitation, Vous etes à present membre de upevent.</font>
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
													Une erreur s'est produite lors de l'insscription.
												</div>
											</div>
										</div>
									</div>

 								<?php
 							}
 						}
 				 ?>	  			 
			</div>
		</section>
		
 