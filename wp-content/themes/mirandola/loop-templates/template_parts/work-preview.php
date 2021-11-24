<div class="work-preview col col-12 col-sm-12 col-md-6 col-lg-4 wow animate__fadeInUp" data-wow-duration="2s">
    <a href="<?php echo get_permalink(); // linka il titolo alla pagina di dettaglio 
                ?>">
        
    </a>
  

    <div class="image mb-3">
        <a href="<?php echo get_permalink(); // linka image alla pagina di dettaglio 
                    ?>">
            <?php echo get_the_post_thumbnail() ?>
        </a>
    </div>

    <h2 class="title"><?php print get_the_title() ?></h2>

   
    <!-- <div class="description"> -->
        <?php // the_excerpt(); // descrizione post con leggi di più 
        ?>
    <!-- </div> -->
</div>