<?php
/*
Template Name: Наша команда
*/
?>

<?php get_header(); ?>

<div class="specialists">
            <div class="container">
                <div class="title"><?php the_field('team_title', '2'); ?></div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <img class="specialists__img" src="<?php the_field('team_img', '2'); ?>" alt="<?php the_field('team_title', '2'); ?>">
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>