<?php
/*
Template Name: О нас
*/
?>

<?php get_header(); ?>

<div class="aboutus">
            <div class="container">
                <h1 class="title"><?php the_field('story_title', '2'); ?></h1>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?php the_field('story_subtitle_1', '2'); ?>
                        </div>
                        <div class="aboutus__text">
                        <?php the_field('story_text_1', '2'); ?>    
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('story_img_1', '2'); ?>" alt="мир детства">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('story_img_2', '2'); ?>" alt="мир детства">
                    </div>
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?php the_field('story_subtitle_2', '2'); ?>
                        </div>
                        <div class="aboutus__text">
                        <?php the_field('story_text_2', '2'); ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?php the_field('story_subtitle_3', '2'); ?>
                        </div>
                        <div class="aboutus__text">
                        <?php the_field('story_text_3', '2'); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('story_img_3', '2'); ?>" alt="мир детства">
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>