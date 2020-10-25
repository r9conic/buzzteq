<article class="post">

      <?php the_title('<h3>', '</h3>'); ?>

    <div class="meta">

       <?php the_author(); ?> on <?php the_time('F j, g:i a'); ?>

       <?php the_content(); ?>

    </div>


    <?php comments_template(); ?>



</article>
