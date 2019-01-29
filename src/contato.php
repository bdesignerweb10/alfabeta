<?php
	require_once('header.php');
?>
<selection  class="capa">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="titulo-capa">Contato</h3>
			</div>			
		</div>
	</div>
</selection>	
<div class="container container-contato">
	<div class="row">
		<div class="col-sm-6">
			<p class="text-contato">Preencha os campos abaixo para entrar em contato conosco.</p>
		</div>
		<div class="col-sm-6">		
			<p class="contato-fone">Entre em contato pelos nossos telefones</p>
			<p class="contato-fone"><i class="fas fa-phone-square"></i> <span>(14) 3227-3027</span></p>		
			<p class="contato-fone"><i class="fas fa-phone-square"></i> <span>(14) 9.9696-7814</span></p>	
		</div>
		<div class="col-sm-6">
			<form action="" method="post" class="contato-form" enctype="multipart/form-data">
			  <div class="row cont-index-contato">
			    <div class="col">
			      <input type="text" name="nome" id="nome" class="form-control form-contato form-cont-index-contato" placeholder="Informe seu nome" data-error="Por favor, informe o nome." maxlength="255" required>
			    </div>
			  </div>
			  <div class="row cont-index-contato">  
			    <div class="col-8">
			      <input type="email" name="email" id="email" class="form-control form-contato form-cont-index-contato" placeholder="Informe seu e-mail" data-error="Por favor, informe o e-mail." maxlength="255" required>
			    </div>
			    <div class="col-4">
			      <input type="tel" name="telefone" id="telefone" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" class="form-control form-contato form-cont-index-contato" placeholder="Telefone" data-error="Por favor, informe o telefone." maxlength="16" required>
			    </div>		    
			  </div>		  
			  <div class="form-group form-cont-area-contato">		    
			    <textarea class="form-control" name="mensagem" id="mensagem" rows="5" placeholder="Escreva sua mensagem..." data-error="Escreva sua mensagem..." required></textarea>
			  </div>
			  <div class="row">
			  	<div class="col-sm-9"></div>
			  	<div class="col-sm-3">
			  		<button type="submit" class="btn btn-custom btn-lg btn-enviar">Enviar</button>
			  	</div>
			  </div><!-- row -->
			</form>
		</div>
		<div class="col-sm-6">
			<div class="col-sm-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.378541820907!2d-49.07018233564745!3d-22.3393312353033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bf670f1eb3ebc3%3A0x56ed46293703007b!2sAlfa+Beta!5e0!3m2!1spt-BR!2sbr!4v1548762542644" width="510" height="380" frameborder="0" style="border: 5px solid #ccc; border-radius: 5px; margin-top: 25px;" allowfullscreen></iframe>
			</div>
		</div>
	</div><!-- row -->
</div><!-- container --->
<?php
	require_once('footer.php');
?>