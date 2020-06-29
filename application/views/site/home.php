
	<header class="slider-main">
		<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active" style="background-image: url('<?=base_url('assets/')?>images/slider-01.jpg')">
					<div class="carousel-caption d-none d-md-block">
						<h3>Bem-vindo a helvan</h3>
					</div>
				</div>
				<div class="carousel-item" style="background-image: url('<?=base_url('assets/')?>images/slider-02.jpg')">
					<div class="carousel-caption d-none d-md-block">
						<h3>Melhores serviços de consultoria.</h3>
					</div>
				</div>
				<div class="carousel-item" style="background-image: url('<?=base_url('assets/')?>images/slider-03.jpg')">
					<div class="carousel-caption d-none d-md-block">
						<p>A Great Theme For Business Consulting</p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</header>

	<!-- Page Content -->
	<div class="container">
		<!-- About Section -->
		<div class="about-main">
			<div class="row">
				<div class="col-lg-6">
					<h2>Bem-vindo a Helvan</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
					<h5>Nossa abordagem inteligente</h5>
					<ul>
						<li>Sed at tellus eu quam posuere mattis.</li>
						<li>Phasellus quis erat et enim laoreet posuere ac porttitor ipsum.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
					</ul>
				</div>
				<div class="col-lg-6">
					<img class="img-fluid rounded" src="<?=base_url('assets/')?>images/about-img.jpg" alt="" />
				</div>
			</div>
			<!-- /.row -->
		</div>
	</div>

	<div class="services-bar">
		<div class="container">
			<h1 class="py-4">Nossas empresas</h1>
			<div class="row">
				<div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-body">
							<h4 class="card-header"> Analise </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-body">
							<h4 class="card-header"> Aplicacoes </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-body">
							<h4 class="card-header"> Business Process </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-body">
							<h4 class="card-header"> Consulting </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-body">
							<h4 class="card-header"> Infrastructure </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-body">
							<h4 class="card-header"> Product Engineering </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="portfolio-main">
			<h2>Portfolio</h2>
			<div class="col-lg-12">
				<div class="project-menu text-center">
					<button class="btn btn-primary active" data-filter="*">All</button>
					<button data-filter=".business" class="btn btn-primary">Business</button>
					<button data-filter=".travel" class="btn btn-primary">Travel</button>
					<button data-filter=".financial" class="btn btn-primary">Financial</button>
					<button data-filter=".academic" class="btn btn-primary">Academic</button>
				</div>
			</div>
			<div id="projects" class="projects-main row">
				<div class="col-lg-4 col-sm-6 pro-item portfolio-item financial">
					<div class="card h-100">
						<div class="card-img">
							<a href="<?=base_url('assets/')?>images/portfolio-img-01.jpg" data-fancybox="images">
								<img class="card-img-top" src="<?=base_url('assets/')?>images/portfolio-img-01.jpg" alt="" />
								<div class="overlay"><i class="fas fa-arrows-alt"></i></div>
							</a>
						</div>
						<div class="card-body">
							<h4 class="card-title">
								<a href="#">Financial Sustainability</a>
							</h4>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 pro-item portfolio-item business academic">
					<div class="card h-100">
						<div class="card-img">
							<a href="<?=base_url('assets/')?>images/portfolio-img-02.jpg" data-fancybox="images">
								<img class="card-img-top" src="<?=base_url('assets/')?>images/portfolio-img-02.jpg" alt="" />
								<div class="overlay"><i class="fas fa-arrows-alt"></i></div>
							</a>
						</div>
						<div class="card-body">
							<h4 class="card-title">
								<a href="#">Financial Sustainability</a>
							</h4>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 pro-item portfolio-item travel">
					<div class="card h-100">
						<div class="card-img">
							<a href="<?=base_url('assets/')?>images/portfolio-img-03.jpg" data-fancybox="images">
								<img class="card-img-top" src="<?=base_url('assets/')?>images/portfolio-img-03.jpg" alt="" />
								<div class="overlay"><i class="fas fa-arrows-alt"></i></div>
							</a>
						</div>
						<div class="card-body">
							<h4 class="card-title">
								<a href="#">Financial Sustainability</a>
							</h4>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 pro-item portfolio-item business">
					<div class="card h-100">
						<div class="card-img">
							<a href="<?=base_url('assets/')?>images/portfolio-img-04.jpg" data-fancybox="images">
								<img class="card-img-top" src="<?=base_url('assets/')?>images/portfolio-img-04.jpg" alt="" />
								<div class="overlay"><i class="fas fa-arrows-alt"></i></div>
							</a>
						</div>
						<div class="card-body">
							<h4 class="card-title">
								<a href="#">Financial Sustainability</a>
							</h4>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 pro-item portfolio-item travel">
					<div class="card h-100">
						<div class="card-img">
							<a href="<?=base_url('assets/')?>images/portfolio-img-05.jpg" data-fancybox="images">
								<img class="card-img-top" src="<?=base_url('assets/')?>images/portfolio-img-05.jpg" alt="" />
								<div class="overlay"><i class="fas fa-arrows-alt"></i></div>
							</a>
						</div>
						<div class="card-body">
							<h4 class="card-title">
								<a href="#">Financial Sustainability</a>
							</h4>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 pro-item portfolio-item financial academic">
					<div class="card h-100">
						<div class="card-img">
							<a href="<?=base_url('assets/')?>images/portfolio-img-01.jpg" data-fancybox="images">
								<img class="card-img-top" src="<?=base_url('assets/')?>images/portfolio-img-01.jpg" alt="" />
								<div class="overlay"><i class="fas fa-arrows-alt"></i></div>
							</a>
						</div>
						<div class="card-body">
							<h4 class="card-title">
								<a href="#">Financial Sustainability</a>
							</h4>
						</div>
					</div>
				</div>
			</div>
			<!-- /.row -->
		</div>
	</div>

