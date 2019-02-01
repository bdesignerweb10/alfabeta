<?php
	require_once('header.php');
?>
<div class="container" style="padding-bottom: 20px; margin-top: 30px;">
	<div class="row">
		<div class="col-sm-12">			
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="img/slides/slide1.png" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="img/slides/slide2.png" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="img/slides/slide3.png" class="d-block w-100" alt="...">
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
		</div><!-- col-sm-12 -->
	</div><!-- row -->
	<div class="row destaques">
		<div class="col-sm-3 ">
			<div class="col-sm-12 diferencial">
				<p><a href="diferencial.php">diferenciais</a></p>
			</div>			
		</div>
		<div class="col-sm-3">
			<div class="col-sm-12 bolsa">
				<p><a href="">bolsa de estudo</a></p>
			</div>			
		</div>
		<div class="col-sm-3">
			<div class="col-sm-12 parceiros">			
				<p><a href="parceiros.php">parceiros</a></p>
			</div>			
		</div>
		<div class="col-sm-3">
			<div class="col-sm-12 anglo">			
				<p><a href="">sistema anglo</a></p>
			</div>		
		</div>			
		<div class="col-sm-12">
			<h2 class="noticias">Notícias</h2>
		</div>	
	</div><!-- row -->	
	<div class="row" style="margin-left: 48px;">
		<div class="col-sm-4">			
			<div class="card" style="width: 18rem;">
			  <img src="img/noticias/volta-aulas.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <p class="card-text"><a href="noticia.php">Some quick example text to build on the card title and make up the bulk of the card's content.</a></p>
			    <span class="not-data">15/01/2019</span>
			  </div>
			</div>			
		</div>
		<div class="col-sm-4">			
			<div class="card" style="width: 18rem;">
			  <img src="img/noticias/alfabeta-tv.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <p class="card-text"><a href="">Some quick example text to build on the card title and make up the bulk of the card's content.</a></p>
			    <span class="not-data">15/01/2019</span>
			  </div>
			</div>			
		</div>
		<div class="col-sm-4">			
			<div class="card" style="width: 18rem;">
			  <img src="img/noticias/novidade.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <p class="card-text"><a href="">Some quick example text to build on the card title and make up the bulk of the card's content.</a></p>
			    <span class="not-data">15/01/2019</span>
			  </div>
			</div>			
		</div>
	</div><!-- row -->
</div><!-- container -->
<?php
	require_once('footer.php');
?>