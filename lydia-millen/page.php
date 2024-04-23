<?php

get_header();

?>

<!-- MAIN CONTENT -->
<main id="wcl-page-content" class="wcl-page-content">

    <?php
    if (have_rows('page_content')) {
        while (have_rows('page_content')) {
            the_row();

            if (get_row_layout() == 'banner_section') {
                get_template_part('template-parts/banner-section');
            } elseif (get_row_layout() == 'section_1') {
                get_template_part('template-parts/section-1');
            } elseif (get_row_layout() == 'section_2') {
                get_template_part('template-parts/section-2');
            } elseif (get_row_layout() == 'section_3') {
                get_template_part('template-parts/section-3');
            } elseif (get_row_layout() == 'section_4') {
                get_template_part('template-parts/section-4');
            } elseif (get_row_layout() == 'section_5') {
                get_template_part('template-parts/section-5');
            } elseif (get_row_layout() == 'section_6') {
                get_template_part('template-parts/section-6');
            } elseif (get_row_layout() == 'section_7') {
                get_template_part('template-parts/section-7');
            } elseif (get_row_layout() == 'section_8') {
                get_template_part('template-parts/section-8');
            } elseif (get_row_layout() == 'section_9') {
                get_template_part('template-parts/section-9');
            } elseif (get_row_layout() == 'section_10') {
                get_template_part('template-parts/section-10');
            } elseif (get_row_layout() == 'section_11') {
                get_template_part('template-parts/section-11');
            } elseif (get_row_layout() == 'section_12') {
                get_template_part('template-parts/section-12');
            } elseif (get_row_layout() == 'section_13') {
                get_template_part('template-parts/section-13');
            } elseif (get_row_layout() == 'section_14') {
                get_template_part('template-parts/section-14');
            } elseif (get_row_layout() == 'section_15') {
                get_template_part('template-parts/section-15');
            } elseif (get_row_layout() == 'section_16') {
                get_template_part('template-parts/section-16');
            } elseif (get_row_layout() == 'section_17') {
                get_template_part('template-parts/section-17');
            }
        }
    } else {
        if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>
                <div class="wcl-page wcl-content">
                    <div class="data-container wcl-container">
                        <h1 class="data-title">
                            <?php echo get_the_title(); ?>
                        </h1>

                        <div class="data-content">
                            <?php echo get_the_content(); ?>
                        </div>
                    </div>
                </div>
    <?php
            }
        }
    }
    ?>

</main> <!-- #wcl-page-content -->

<?php

get_footer();

?>