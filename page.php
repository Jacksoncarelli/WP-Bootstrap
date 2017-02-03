<?php get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/page.css">

 <!-- CRIAÇÃO DO FORMULÁRIO PARA O CONTATO -->
<?php
if( is_page('contato') ) {
 ?>

<div class="page-contato">
		<div class="row">
				<div class="col-md-3 col-lg-3">
		<h2>ORÇAMENTO</h2>
	<p> Caso prefira, entre em contato comigo via whastapp, é muito mais prático e rápido.

  <p> (69) 9.9974-3782

  <p> Consulte a disponibilidade e os valores para o seu evento preenchendo o formulário ao lado.
Quanto mais detalhes você informar, melhor e mais rápido poderemos responder.
				</div>
				<div class="form-contato">
<div class="col-md-6 col-lg-6">
							<div class="col-md-4 col-lg-4">
								 <label for="exampleInputName">Nome *</label>
									<input type="text" class="form-control" >
							</div>
							<div class="col-md-4 col-lg-4">
								 <label for="exampleInputName">Email *</label>
									<input type="text" class="form-control" >
							</div>
							<div class="col-md-4 col-lg-4">
								 <label for="exampleInputName">Telefone *</label>
									<input type="text" class="form-control" >
							</div>

							<div class="col-md-4 col-lg-4">
								 <label for="exampleInputName">Serviço *</label>
                 <select class="form-control">
                     <option>Casamento</option>
                     <option>Aniversário</option>
                     <option>Ensáio Gestante</option>
                     <option>Ensáio Newborn</option>
                     <option>Outros eventos</option>
                </select>
							</div>
							<div class="col-md-4 col-lg-4">
								 <label for="exampleInputName">Local *</label>
									<input type="text" class="form-control" >
							</div>
							<div class="col-md-4 col-lg-4">
								 <label for="exampleInputName">Data/Hora *</label>
									<input type="text" class="form-control" >
							</div>
							<div class="col-md-12 col-lg-12">
								 <label for="exampleInputName1">Mensagem *</label>
                 <span>
									<textarea class="form-control" rows="5" ></textarea>
                  </span>
							</div>
              <button type="button" class="btn btn-default btn-default-custom">Enviar</button>
					</div>
	</div>



<div class="col-md-3 col-lg-3">
  <div class="google-maps">


        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d979.548855922448!2d-61.958461170771166!3d-10.872735999516012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDUyJzIxLjkiUyA2McKwNTcnMjguNSJX!5e0!3m2!1spt-BR!2sbr!4v1483915501961" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

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
      <div class="page-sobre">
 		       <div class="row">
 				         <div class="col-md-4 col-lg-4">
                      <img src="/photograph/wp-content/themes/wp-bootstrap/assets/images/jane.jpg" class="img-responsive" alt="Responsive image">
<br>
                          <ul class="soc">
                              <li><a class="soc-facebook" href="#"></a></li>
                              <li><a class="soc-instagram" href="#"></a></li>
                              <li><a class="soc-mail" href="#"></a></li>
                              <li><a class="soc-whatsapp soc-icon-last" href="#"></a></li>
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

<?php
if( is_page('portifolio/') ) {
 ?>

dasdsa
 <?php } ?>


<?php get_footer(); ?>
