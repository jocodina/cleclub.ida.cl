<?php
/*
Template Name: Quienes Somos
*/
?>
<?php get_header();the_post(); ?>

<div id="contenido">
<div id="pageContent" class="clearfix">    
<h1><?php the_title(); ?></h1>
<?php the_content();?>
<?php $childPages=$wp_query->post->ID; ?>
    	<?php query_posts(array('showposts' => 4, 'post_parent' => $childPages, 'post_type' => 'page','post__not_in'=>array(304))); 
        if(have_posts()){
        $i = 1;    
        while (have_posts()) { the_post();
        $last = $i % 3 == false ? 'last':'';
        ?>

        <div class="one_third <?php echo $last;?>">
            <div class="bio">
                <div class="fotoMiembro">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('portadaPerfil');?></a>
                </div>    
                <div class="infoMiembro">    
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>
            </div>
         </div>   
        <?php $i++; }} ?>
       

</div>   
<?php get_sidebar();?>
</div>    
<?php get_footer(); ?>
