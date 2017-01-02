<?php get_header(); ?>

 <!-- CRIAÇÃO DO FORMULÁRIO PARA O CONTATO -->
<?php
if( is_page('contato') ) {
 ?>

<div class="category-contato">
		<div class="row">
				<div class="col-md-3 col-lg-3">
		<h2>ORÇAMENTO</h2>
	<p> Caso prefira, entre em contato comigo via whastapp, é muito mais prático e rápido.

  <p> (69) 9.9974-3782

  <p> Consulte a disponibilidade e os valores para o seu evento preenchendo o formulário ao lado.
Quanto mais detalhes você informar, melhor e mais rápido poderemos responder.
				</div>
				<div class="form-contato">

							<div class="col-md-3 col-lg-3">
								 <label for="exampleInputName">Nome *</label>
									<input type="text" class="form-control" >
							</div>
							<div class="col-md-3 col-lg-3">
								 <label for="exampleInputName">Email *</label>
									<input type="text" class="form-control" >
							</div>
							<div class="col-md-3 col-lg-3">
								 <label for="exampleInputName">Telefone *</label>
									<input type="text" class="form-control" >
							</div>

							<div class="col-md-3 col-lg-3">
								 <label for="exampleInputName">Serviço *</label>
                 <select class="form-control">
                     <option>Casamento</option>
                     <option>Aniversário</option>
                     <option>Ensáio Gestante</option>
                     <option>Ensáio Newborn</option>
                     <option>Outros eventos</option>
                </select>
							</div>
							<div class="col-md-3 col-lg-3">
								 <label for="exampleInputName">Local *</label>
									<input type="text" class="form-control" >
							</div>
							<div class="col-md-3 col-lg-3">
								 <label for="exampleInputName">Data/Hora *</label>
									<input type="text" class="form-control" >
							</div>
							<div class="col-md-9 col-lg-9">
								 <label for="exampleInputName1">Mensagem *</label>
                 <span>
									<textarea class="form-control" rows="5" ></textarea>
                  </span>
							</div>
              <button type="button" class="btn btn-default btn-default-custom">Enviar</button>
					</div>
		</div>
</div>


<?php
	}
?>


<!-- CRIAÇÃO DA PÁGINA SOBRE -->
<?php
if( is_page('sobre') ) {
 ?>
<div class="container">
      <div class="category-sobre">
 		       <div class="row">
 				         <div class="col-md-4 col-lg-4">
                      <img src="/photograph/wp-content/themes/wp-bootstrap/assets/images/jane.jpg" class="img-responsive" alt="Responsive image">
<br>
                      <ul class="soc-sobre">
                        <li><a class="soc-sobre-facebook" href="#"></a></li>
                        <li><a class="soc-sobre-googleplus" href="#"></a></li>
                        <li><a class="soc-sobre-instagram" href="#"></a></li>
                        <li><a class="soc-sobre-whatsapp soc-sobre-icon-last" href="#"></a></li>
                      </ul>
 				         </div>

       					<div class="col-md-8 col-lg-8">
                <?php if(have_posts()): while (have_posts()) : the_post() ?>
                  <?php the_content(); ?>
       					</div>
          </div>

          <?php endwhile; endif; ?>

			</div>
      </div>

<?php
	}
?>


<?php get_footer(); ?>
