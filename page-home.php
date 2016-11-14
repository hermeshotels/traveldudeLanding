<?php
/**
* Template name: PAge Home
*/
get_header();
 ?>
<div class="section1" style="background-image:url('<?php the_field('immagine_header');?>')">
  <div class="valign-wrapper overlay">
    <div class="valign">
      <div class="container-fluid pad">
        <div class="col-md-4 col-xs-12 col-left">
          <h1><?php the_field('titolo_pagina');?></h1>
          <p><?php
    			while ( have_posts() ) : the_post();
          the_content();
          endwhile;
          ?>
          </p>
          <div class="logo-app">
            <img src="<?php echo get_template_directory_uri()  . '/img/logoapplestore.png'?>" width="136px" height="auto">
            <img src="<?php echo get_template_directory_uri()  . '/img/logo_googleplay.png'?>" width="136px" height="auto" class="logo-android">
          </div>
          <div class="logo-hermes">
            <img src="<?php echo the_field('immagine_hermes');?>" width="95px" height="auto">
          </div>
        </div>
      </div>
      <div class="text-center mouse-scrolldown">
        <img src="<?php echo get_template_directory_uri() . '/img/icona_scrolldown.png'?>">
      </div>
    </div>
  </div>
</div>
<div class="section2">
  <div class="valign-wrapper">
    <div class="valign">
      <div class="container">
        <div class="col-md-6 col-xs-12 left text-center">
          <img src="<?php the_field('immagine_prima_sezione');?>" width="366px" height="auto" class="phone">
        </div>
        <div class="col-md-6 col-xs-12 right">
          <h1><?php the_field('titolo_prima_sezione'); ?></h1>
          <p><?php the_field('testo_prima_sezione'); ?></p>
        </div>
      </div>
      <div class="text-center mouse-scrolldown">
        <img src="<?php echo get_template_directory_uri() . '/img/icona_scrolldown.png'?>">
      </div>
    </div>
  </div>
</div>
<div class="section3">
  <div class="valign-wrapper">
    <div class="valign">
      <div class="container">
        <div class="col-md-6 col-xs-12 left">
          <h1><?php the_field('titolo_seconda_sezione'); ?></h1>
          <p><?php the_field('testo_seconda_sezione'); ?></p>
        </div>
        <div class="col-md-6 col-xs-12 right text-center">
          <img src="<?php the_field('immagine_seconda_sezione');?>" width="366px" height="auto" class="phone">
        </div>
      </div>
      <div class="text-center mouse-scrolldown">
        <img src="<?php echo get_template_directory_uri() . '/img/icona_scrolldown.png'?>">
      </div>
    </div>
  </div>
</div>
<div class="section4">
  <div class="valign-wrapper">
    <div class="valign">
      <div class="container">
        <div class="col-md-6 col-xs-12 left text-center">
          <img src="<?php the_field('immagine_terza_sezione');?>" width="366px" height="auto" class="phone">
        </div>
        <div class="col-md-6 col-xs-12 right">
          <h1><?php the_field('titolo_terza_sezione'); ?></h1>
          <p><?php the_field('testo_terza_sezione'); ?></p>
        </div>
      </div>
      <div class="text-center mouse-scrolldown">
        <img src="<?php echo get_template_directory_uri() . '/img/icona_scrolldown.png'?>">
      </div>
    </div>
  </div>
</div>
<div class="section5">
  <div class="valign-wrapper">
    <div class="valign">
      <div class="container">
        <div class="col-md-6 col-xs-12 left">
          <h1><?php the_field('titolo_quarta_sezione'); ?></h1>
          <p><?php the_field('testo_quarta_sezione'); ?></p>
        </div>
        <div class="col-md-6 col-xs-12 right text-center">
          <img src="<?php the_field('immagine_quarta_sezione');?>" width="366px" height="auto" class="phone">
        </div>
      </div>
      <div class="text-center mouse-scrolldown">
        <img src="<?php echo get_template_directory_uri() . '/img/icona_scrolldown.png'?>">
      </div>
    </div>
  </div>
</div>
<div class="section6" style="background-image:url('<?php the_field('immagine_prefooter');?>')">
  <div class="valign-wrapper overlay">
    <div class="valign">
      <div class="container">
        <div class="col-xs-12 text-center slogan">
          <h1><?php the_field('titolo_quinta_sezione'); ?></h1>
          <p><?php the_field('testo_quinta_sezione'); ?></p>
          <div class="logo-app">
            <img src="<?php echo get_template_directory_uri()  . '/img/logoapplestore.png'?>" width="136px" height="40px">
            <img src="<?php echo get_template_directory_uri()  . '/img/logo_googleplay.png'?>" width="136px" height="40px" class="logo-android">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();
 ?>
