<!DOCTYPE html>
<html lang="<?php echo bloginfo('language') ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo bloginfo('name'); ?></title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>
<body>
	<div>
		<div class="cover pt-3">
			<div class="container">
				<div class="d-flex justify-content-between">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/favicon.png" alt="Logo">
					</div>

					<div>
						<a class="lexend text-decoration-none text-dark fw-bold m-3 ml-5" href="">Sobre nosotros</a>				
						<a class="lexend text-decoration-none text-dark fw-bold m-3" href="">Contacto</a>
						<a class="lexend text-decoration-none text-dark fw-bold m-3" href="">Preguntas frecuentas</a>
						<a class="lexend text-decoration-none text-dark fw-bold m-3 border-register" href="">Registro</a>
						<a class="lexend text-decoration-none text-dark fw-bold m-1 border-register" href="">Log in</a>
					</div>		
				</div>

				<div class="row mt-5 mb-5">
					<div class="col-6">
						<h1 class="lexend">
							<b>Encuentra Pareja</b><br>
							En Todo El <b>Mundo</b>
						</h1>

						<small class="inter text-secondary">
							Lorem ipsum, or lipsum as it is sometimes known, is <br>
							dummy text used in laying out.
						</small>

						<img src="<?php echo get_template_directory_uri(); ?>/img/app-stores.png" alt="App stores">

						<div class="row">
							<div class="col-6">
								<div class="row">
									<div class="col-6">
										<img src="<?php echo get_template_directory_uri(); ?>/img/members.png" alt="members">
									</div>

									<div class="col-6 lexend fw-bold">
										10k+ <br>
										Members
									</div>

									<div class="col-12 mt-2 text-secondary lexend">
										Over ten thousands of people <br>
										are using True Travel
									</div>
								</div>
							</div>

							<div class="col-6">
								<div class="row">
									<div class="col-6">
										<img src="<?php echo get_template_directory_uri(); ?>/img/perfect-match.png" alt="members">
									</div>

									<div class="col-6 lexend fw-bold">
										Perfect <br>
										Match
									</div>

									<div class="col-12 mt-2 text-secondary lexend">
										Over ten thousands of people <br>
										are using True Travel
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-6">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/pareja.png" alt="pareja">
					</div>
				</div>

				<div class="row lexend mt-5 pt-5 mb-5 pb-5">
					<div class="col-1">
						<img class="mt-5" src="<?php echo get_template_directory_uri(); ?>/img/ubicacion.png" alt="ubicacion">

						<div class="ms-5 mt-5">
							<img class="img-fluid mt-5 ms-5" src="<?php echo get_template_directory_uri(); ?>/img/corazon.png" alt="pareja">
						</div>
					</div>

					<div class="col-10 text-center description">
						<span class="rojo-amarillo-1">Conoce gente nueva</span> en todo el mundo<br>
						viaja a <span class="rojo-amarillo-2">donde quieras</span><br>
						<span class="rojo-amarillo-3">Regístrate ahora</span> para obtener la <br>
						experiencia de <span class="rojo-amarillo-4">citas que nunca</span> has tenido<br>
					</div>

					<div class="col-1">
						<img src="<?php echo get_template_directory_uri(); ?>/img/corazon.png" alt="corazon">

						<div class="me-5 mt-5">
							<img class="img-fluid mt-5 me-5" src="<?php echo get_template_directory_uri(); ?>/img/ubicacion.png" alt="pareja">
						</div>
					</div>
				</div>

				<div class="row mt-5 mb pt-5 mb-5 pb-5">
					<div class="col-4">
						<div class="card bg-rojo p-3">
							<img class="pb-3" src="<?php echo get_template_directory_uri(); ?>/img/ariana-1.png" alt="">
							<img class="pb-3" width="272px" src="<?php echo get_template_directory_uri(); ?>/img/ariana-nombre.png" alt="">

							<div class="pb-3 text-white roboto">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</div>
						</div>
					</div>

					<div class="col-4">
						<div class="card bg-amarillo p-3">
							<img class="pb-3" src="<?php echo get_template_directory_uri(); ?>/img/ariana-2.png" alt="">
							<img class="pb-3" width="272px" src="<?php echo get_template_directory_uri(); ?>/img/ariana-nombre.png" alt="">

							<div class="pb-3 text-white roboto">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</div>
						</div>
					</div>

					<div class="col-4">
						<div class="card bg-azul p-3">
							<img class="pb-3" src="<?php echo get_template_directory_uri(); ?>/img/ariana-3.png" alt="">
							<img class="pb-3" width="272px" src="<?php echo get_template_directory_uri(); ?>/img/ariana-nombre.png" alt="">

							<div class="pb-3 text-white roboto">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="d-flex mt-5 mb pt-5 pb-5 bg-marron justify-content-center">
			<div class="mt-5">
				<div class="bg-marron-title lexend text-white mb-5">
					Conozcamos más las <br>
					verdaderas citas de viajes
				</div>

				<div>
					<div class="row">
						<div class="col-1 text-white lexend display-6">01</div>

						<div class="col-10">
							<div class="lexend text-white">Que es travels true dating?</div>

							<div class="text-secondary roboto mb-5">
								Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, <br>
								graphic or web designs. The passage is attributed to an unknown typesetter in the 15th <br>
								century who is thought to have scrambled.
							</div>
						</div>	

						<div class="col-1">
							<img src="<?php echo get_template_directory_uri(); ?>/img/flecha.png" class="img-fluid" alt="flecha">
						</div>
					</div>

					<div class="row">
						<div class="col-1 text-white lexend display-6">02</div>

						<div class="col-10">
							<div class="lexend text-white">Cómo crear una cuenta?</div>

							<div class="text-secondary roboto mb-5">
								Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, <br>
								graphic or web designs. The passage is attributed to an unknown typesetter in the 15th <br>
								century who is thought to have scrambled.
							</div>
						</div>	

						<div class="col-1">
							<img src="<?php echo get_template_directory_uri(); ?>/img/flecha.png" class="img-fluid" alt="flecha">
						</div>
					</div>

					<div class="row">
						<div class="col-1 text-white lexend display-6">03</div>

						<div class="col-10">
							<div class="lexend text-white">Cómo consigo citas en todo el mundo?</div>

							<div class="text-secondary roboto mb-5">
								Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, <br>
								graphic or web designs. The passage is attributed to an unknown typesetter in the 15th <br>
								century who is thought to have scrambled.
							</div>
						</div>	

						<div class="col-1">
							<img src="<?php echo get_template_directory_uri(); ?>/img/flecha.png" class="img-fluid" alt="flecha">
						</div>
					</div>

					<div class="row">
						<div class="col-1 text-white lexend display-6">04</div>

						<div class="col-10">
							<div class="lexend text-white">Cómo elimino mi cuenta?</div>

							<div class="text-secondary roboto mb-5">
								Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, <br>
								graphic or web designs. The passage is attributed to an unknown typesetter in the 15th <br>
								century who is thought to have scrambled.
							</div>
						</div>	

						<div class="col-1">
							<img src="<?php echo get_template_directory_uri(); ?>/img/flecha.png" class="img-fluid" alt="flecha">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="cover pt-5">
			<div class="text-center pt-5">
				<img src="<?php echo get_template_directory_uri(); ?>/img/lo-que-dicen-nuestros-clientes.png" class="w-50" alt="Lo que dicen nuestros clientes">
			</div>

			<div class="text-center mt-5 pt-5">
				<a href="/registro">
					<img src="<?php echo get_template_directory_uri(); ?>/img/registrate.png" class="w-70" alt="Registrate">
				</a>
			</div>

			<div class="mt-5 pt-5 mb-5 bg-footer">
				<div class="container">
					<div class="d-flex justify-content-between">
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/favicon.png" alt="Logo">

							<p class="roboto text-secondary mt-3">
								Lorem ipsum, or lipsum as it is sometimes known, <br>
								is dummy text.Lorem ipsum, or lipsum as it is <br>
								sometimes known, is.
							</p>
						</div>

						<div class="lexend">
							<div>
								<a class="text-decoration-none text-dark" href="">Sobre nosotros</a>
							</div>

							<div>
								<a class="text-decoration-none text-dark" href="">Términos y condiciones de privacidad</a>
							</div>

							<div>
								<a class="text-decoration-none text-dark" href="">Preguntas frecuentes</a>
							</div>

							<div>
								<a class="text-decoration-none text-dark" href="">Contactos</a>
							</div>
						</div>

						<div>
							<div class="roboto fw-bold">
								Follow us on
							</div>

							<div class="mt-3">
								<a class="text-decoration-none text-dark" href="">
									<i class="fab fa-facebook me-2 display-6"></i>
								</a>

								<a class="text-decoration-none text-dark" href="">
									<i class="fab fa-twitter me-2 display-6"></i>
								</a>

								<a class="text-decoration-none text-dark" href="">
									<i class="fab fa-instagram me-2 display-6"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>