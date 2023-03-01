<?php
/**
 * Testimonial
 */
namespace mercurypress;

$copy = get_sub_field('copy');
$name = get_sub_field('author');
$caption = get_sub_field('company_title');
?>
<div class="band testimonial"  style="background: url('/wp-content/themes/mercurypress/images/case-studies/abstract-graphic-banner-dots.png') center center / cover no-repeat #0773bb;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial--text-wrap">
                    
                    <h2 class="testimonial--quote"><?php echo esc_html($copy) ?></h2>

                    <?php if ($name): ?>
                        <h3 class="testimonial--name"><?php echo esc_html($name) ?></h3>
                    <?php endif; ?>

                    <?php if ( $caption ): ?>
                        <p class="testimonial--title"><?php echo esc_html($caption) ?></p>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
