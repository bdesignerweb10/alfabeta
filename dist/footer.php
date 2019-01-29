<div id="fb-root"></div><script>(function(d, s, id) {
  			var js, fjs = d.getElementsByTagName(s)[0];
  			if (d.getElementById(id)) return;
  			js = d.createElement(s); js.id = id;
  			js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2';
  			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script><div class="container-fluid footer"><div class="row"><div class="col-sm-8"><div class="row"><div class="col-sm-4 acesso-footer"><nav class="nav flex-column menu-footer"><a class="nav-link" href="fundamental-I.php"><i class="fas fa-caret-right"></i> Ensino Fundamental I</a> <a class="nav-link" href="fundamental-II.php"><i class="fas fa-caret-right"></i> Ensino Fundamental II</a> <a class="nav-link" href="ensino-medio.php"><i class="fas fa-caret-right"></i> Ensino Médio</a></nav></div><div class="col-sm-4 acesso-footer"><nav class="nav flex-column menu-footer"><a class="nav-link" href="#"><i class="fas fa-caret-right"></i> Estrutura</a> <a class="nav-link" href="filosofia.php"><i class="fas fa-caret-right"></i> Filosofia</a> <a class="nav-link" href="historia.php"><i class="fas fa-caret-right"></i> História</a> <a class="nav-link" href="horarios.php"><i class="fas fa-caret-right"></i> Horário</a></nav></div><div class="col-sm-4 acesso-footer"><nav class="nav flex-column menu-footer"><a class="nav-link" href="#"><i class="fas fa-caret-right"></i> Financeiro</a> <a class="nav-link" href="#"><i class="fas fa-caret-right"></i> Matrícula</a> <a class="nav-link" href="#"><i class="fas fa-caret-right"></i> Uniforme</a></nav></div></div><!-- row --></div><!-- col-sm-8 --><div class="col-sm-4 acesso-footer"><div class="fb-page" data-href="https://www.facebook.com/colegioalfabeta/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/colegioalfabeta/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/colegioalfabeta/">Colégio Alfa.Beta Bauru</a></blockquote></div></div></div><!-- row --><div class="row" style="background-color: #fff;"><div class="col-sm-12"><p class="footer-end">Rua Rubens Pagani, 3-40, Jd Estoril, CEP 17016-210, Bauru/SP<br>(14) 3227-3027 / (14) 99696-7814</p><p class="footer-dev" data-toggle="tooltip" data-placement="top" data-html="true" title="Telefone: (19) 99897-0090 / E-mail: bdesigner_web@hotmail.com">Website desenvolvido por Bruno Gomes<br>Todos os direitos reservados. Colégio Alfa.Beta - 2019</p></div></div></div><!--container --><script src="js/main.js" type="text/javascript" charset="utf-8"></script><script src="js/app.js" type="text/javascript" charset="utf-8"></script><script src="js/moment.min.js" type="text/javascript" charset="utf-8"></script><script src="js/textext.core.js" type="text/javascript" charset="utf-8"></script><script src="js/textext.plugin.autocomplete.js" type="text/javascript" charset="utf-8"></script><script src="js/textext.plugin.ajax.js" type="text/javascript" charset="utf-8"></script><script src="js/jquery.tablesorter.min.js" type="text/javascript"></script><script src="js/jquery.mask.js"></script><script>$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})</script><script>$(document).on("scroll",function(){
		    if($(document).scrollTop()>200){ 
		        $("#header").removeClass("menu").addClass("menu2"); 
		        $("#header").removeClass("logo").addClass("logo2"); 
		        $("#mgeral").removeClass("menu-geral").addClass("menu-geral2"); 
		        $("img.logo").attr('src','img/logo-fixo.png');
		    } else{
		        $("#header").removeClass("menu2").addClass("menu"); 
		        $("#header").removeClass("logo2").addClass("logo");
		        $("#mgeral").removeClass("menu-geral2").addClass("menu-geral");
		        $("img.logo").attr('src','img/logo-alfabeta.png');
		    }
		});</script><script>$("#telefone").mask("(00) 0000-00009");</script> <?php if($conn) $conn->close(); ob_end_flush(); ob_clean(); ?>