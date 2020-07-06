<div class="full-title">
	<div class="container">
		<h1 class="mt-4 mb-3"> Contactos </h1>
		<div class="breadcrumb-main">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="<?= base_url() ?>">Home</a>
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
				<?=form_open(base_url('contactos'), ['name' => 'sentMessage', 'id' => 'contactForm', 'novalidate']); ?>
				<div class="control-group form-group">
					<div class="controls">
						<input type="text" placeholder="Nome completo" class="form-control" name="nome" id="name"
							   required data-validation-required-message="Nome">
						<p class="help-block"></p>
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<input type="text" placeholder="Assunto" class="form-control" name="assunto" id="assunto"
							   required data-validation-required-message="Assunto">
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<input type="email" placeholder="Email" class="form-control" name="email" id="email"
							   required data-validation-required-message="Email">
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
							<textarea rows="5" cols="100" placeholder="Messagem" name="mensagem" class="form-control"
									  id="message" required data-validation-required-message="Sua Menssagem"
									  maxlength="999" style="resize:none"></textarea>
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
					<?= $contactos['morada'] ?>
				</p>
				<p>
					<abbr title="Phone">P</abbr>: <?= $contactos['tel'] ?>
				</p>
				<p>
					<abbr title="Email">E</abbr>:
					<a href="mailto:name@example.com"> <?= $contactos['email'] ?> </a>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="map-main">
	<iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d985.6750368252191!2d13.23351982921802!3d-8.81421467433742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOMKwNDgnNTEuMiJTIDEzwrAxNCcwMi42IkU!5e0!3m2!1sen!2sao!4v1593860715450!5m2!1sen!2sao"></iframe>
</div>
