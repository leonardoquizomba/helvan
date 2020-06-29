<div class="full-title">
	<div class="container">
		<h1 class="mt-4 mb-3"> Contactos </h1>
		<div class="breadcrumb-main">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="<?=base_url()?>">Home</a>
				</li>
				<li class="breadcrumb-item active">Contactos</li>
			</ol>
		</div>
	</div>
</div>

<div class="contact-main">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mb-4 contact-left">
				<h3>Envie-nos uma mensagem</h3>
				<form name="sentMessage" id="contactForm" novalidate>
					<div class="control-group form-group">
						<div class="controls">
							<input type="text" placeholder="Nome completo" class="form-control" id="name" required data-validation-required-message="Nome">
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<input type="tel" placeholder="Telefone" class="form-control" id="phone" required data-validation-required-message="Telefone">
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<input type="email" placeholder="Email" class="form-control" id="email" required data-validation-required-message="Email">
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<textarea rows="5" cols="100" placeholder="Messagem" class="form-control" id="message" required data-validation-required-message="Sua Menssagem" maxlength="999" style="resize:none"></textarea>
						</div>
					</div>
					<div id="success"></div>
					<button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
				</form>
			</div>
			<!-- Contact Details Column -->
			<div class="col-lg-4 mb-4 contact-right">
				<h3>Detalhes do contato</h3>
				<p>
					<?=$contactos['morada']?>
				</p>
				<p>
					<abbr title="Phone">P</abbr>: <?=$contactos['tel']?>
				</p>
				<p>
					<abbr title="Email">E</abbr>:
					<a href="mailto:name@example.com"> <?=$contactos['email']?> </a>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="map-main">
	<iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
</div>
