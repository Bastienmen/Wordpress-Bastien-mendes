<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
      $img_banner = get_field('baseline-img');
      $programs = get_field('sec3-rep1');
      $programs2= get_field('sec3-rep2');
      var_dump($programs);
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

?>
      
    <!-- CODE HTML ICI -->
    <section class="section-1" style="background-image: url('<?php echo $img_banner['url']; ?>')">
        <p><?php the_field('baseline-date') ?></p>
        <p class="maj gras t"><?php the_field('baseline-titre')?></p>
        <p class="maj gras t t2"><?php the_field('baseline-slogan') ?></p>
        <button class="maj gras"> <?php the_field('baseline-lien') ?></button>
    </section>
    
    
    <section class="section-2">
        <p class="maj gras t separate"><?php the_field('conf-titre')?></p> 
        <p><?php the_field('conf-contenu')?></p>
    </section>
    
    
    <section class="section-3">
        <img src="<?php echo $sec3_img['sec3']; ?>">
        <p class="maj gras t separate"><?php the_field('sec3-titre')?></p>
        <div class="sec3_orga">
            
            <div class="sec3_gauche">
            <p class="sous_titre"><?php the_field('sec3-stitre1')?></p>
            
            <p class="contenu">
            <?php foreach($programs as $program){
                    echo $program['hour'];
                    echo $program['description'] . "</br>";
                  } 
            ?>
            </p>
            
            </div>
            <div class="sec3_droite">
                <p class="sous_titre"><?php the_field('sec3-stitre2')?></p>
            
                
                <p class="contenu">
                <?php foreach($programs2 as $program2){
                    echo $program2['hour'] . "   ";
                    echo $program2['description'] . "</br>";
                      } 
                ?>
                </p>
            </div>
        </div>
        <button class="maj gras"><?php the_field('sec3-lien') ?></button>
    </section>
    
    
    <section class="section-4">
        <p class="maj gras t"><?php the_field('sec4-titre')?></p>
    </section>
    
    <section class="section-5">
        <p class="maj gras t"><?php the_field('sec5-titre')?></p>
    </section>
    
    <section class="section-6">
        <p class="maj gras t"><?php the_field('sec6-titre')?></p>
    </section>
    
    <section class="section-7">
        <p class="maj gras t"><?php the_field('sec7-titre')?></p>
    </section>
    
    <section class="section-8">
        <p class="maj gras t"><?php the_field('sec8-titre')?></p>
    </section>
    

<?php
  }
}
?>

    
</div>

<?php get_footer(); ?>