<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();
      
    $banner_background_image = get_field('banner_background_image');
      
    $banner_register_link = get_field('banner_register_link');

    $image_suivante = get_field('bandeau_conf');

    
    
    

?>

<section class="banniere" style="background-image : url(<?php echo $banner_background_image['url'] ?>)">
    
    <div class="b-txt">
        <p class="b-txt1"><?php the_field('banner_baseline') ?></p>
        <p class="b-txt2"><?php the_field('banner_title_brown') ?></p>
        <p class="b-txt3"><?php the_field('banner_title_green') ?></p>
        <p class="b-txt4"><a id="b1t4" href="<?php echo $banner_register_link['url'] ?>"><?php echo $banner_register_link['title'] ?></a></p>    
    </div>
    
</section>

<section class="conference">
    
    <div class="b1-txt">
        <p class="b1-txt1"><?php the_field('conference_title') ?></p>
        <div class="trait1"><hr></div>
        <div class="b1-txt2"><?php the_field('conference_content') ?></div>    
    </div>
    
</section>

<div id="bandeau" style="background-image : url(<?php echo $image_suivante['url'] ?>)">
    
</div>

<section class="section3" style="background-image: url(/assets/img/programme.png)">
    
    <div class="section3-content">
        <p  class="section3_titre"><a id="b2t1">AU PROGRAMME</a></p>

        <div class="trait2"><hr></div>

        <div class="section3-program">
            <div class="section3_bloc_gauche">

                <p  class= "g_titre"> LES VÉGÉTAUX DANS LA CHAÎNE </br> ALIMENTAIRE</p>

                <div class="g-txt">

                    <div class="txt_g1"><p><div class="heuretest"><strong>8:30</strong></div><div class = "g-txt1">Introduction par Christophe</br> Fondation</div></p></div>
                    <div class="txt_g2"><p><div class="heuretest"><strong>9:00</strong></div><div class = "g-txt2">Wim de Vries Wagenningen University</div></p></div>
                    <div class="txt_g3"><p><div class="heuretest"><strong>9:45</strong></div><div class = "g-txt3">Benjamin ALles Paris XIII University</div></p></div>
                    <div class="txt_g4"><p><div class="heuretest"><strong>10:15</strong></div><div class = "g-txt4">Armando Perez Cueto Copenhagen University</div></p></div>
                    <div class="txt_g5"><p><div class="heuretest"><strong>10:45</strong></div><div class = "g-txt5">Cofee break</div></p></div>
                
                </div>



            </div>

        

            <div class="section3_bloc_droite">

                <p  class= "d_titre"> LES VÉGÉTAUX DANS LA CHAÎNE </br> ALIMENTAIRE</p>

                <div class="d-txt">

                    <div class="txt_d1"><p><strong>8:30</strong><div class = "d-txt1">Introduction par Christophe</br> Fondation</div></p></div>
                    <div class="txt_d2"><p><strong>8:30</strong><div class = "d-txt2">Introduction par Christophe</br> Fondation</div></p></div>
                    <div class="txt_d3"><p><strong>8:30</strong><div class = "d-txt3">Introduction par Christophe</br> Fondation</div></p></div>
                    <div class="txt_d4"><p><strong>8:30</strong><div class = "d-txt4">Introduction par Christophe</br> Fondation</div></p></div>

                </div>
                

            </div>
        </div>
<section class="link2">
<div id="b-txt">
    <p class="b-txt4"><a id="b1t4" href="<?php echo $banner_register_link['url'] ?>"><?php echo $banner_register_link['title'] ?></a></p>    
    </div>
</section>

</section>
    

<
    
    
    
<?php
      
  }
}
    
?>

</div>

<?php get_footer(); ?>