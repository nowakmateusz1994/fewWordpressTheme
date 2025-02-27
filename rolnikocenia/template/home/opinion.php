<?php $opinion = get_field('opinion'); ?>
<section class="home_opinion">
    <div class="container">
        <div class="home_opinion_content">
            <h3 class="home_opinion_title section-title"><?= $opinion['title']; ?></h3>
            <div class="home_opinion_items" role="group" aria-label="Splide Basic HTML Example">
                <div class="splide opinion_splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php get_template_part('template/loop/opinion', '', array(
                                'count' => $opinion['count']
                            )); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="home_opinion_add">
            <?php
            get_template_part(
                'template/adds/add',
                '',
                array(
                    'field_name' => 'opinion_add',
                    'size' => 'medium',
                    'is_options' => false
                )
            );
            ?>
        </div>
    </div>
</section>