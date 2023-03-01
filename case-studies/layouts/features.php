<?php
/**
 * Features
 */
namespace mercurypress;

$sectionTitle = wp_kses_post(get_sub_field('section_headline'));
$sectionPreTitle = get_sub_field('section_pre_title');
$sectionCopy = get_sub_field('section_copy');
?>

<?php if ( $sectionTitle ): ?>
    <div class="band features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="case-study--narrow-text-wrap text-center">
                        <?php if($sectionPreTitle): ?>
                            <p class="features--pre-title case-study--pre-title"><?php echo esc_html( $sectionPreTitle ) ?></p>
                        <?php endif; ?>

                        <h2 class="features--headline case-study--headline"><?php echo esc_html( $sectionTitle ) ?></h2>
                        
                        <?php if($sectionCopy): ?>
                            <p class="features--copy case-study--copy"><?php echo esc_html( $sectionCopy ) ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if( have_rows('features') ): ?>
    <div class="features-slider-band">
        <div class="slider placement-overflow">
            <div class="slider--slides features-slides">
                <?php while( have_rows('features') ): the_row(); 
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $copy = get_sub_field('copy');
                    ?>
                    <div class="slider--slide">
                        <div class="slider-card">
                            <?php if( $image ): ?>
                                <figure class="slider-card--image-wrap">
                                    <img src="<?php echo esc_url( $image['url'] ) ?>" class="slider-card--image" alt="<?php echo esc_attr( $image['alt'] ) ?>">
                                </figure>
                            <?php endif; ?>
                            <?php if ( $title ): ?>
                                <div class="slider-card--body">
                                    <p class="slider-card--pre-title case-study--pre-title">Feature</p>
                                    <h3 class="slider-card--title case-study--headline"><?php echo esc_html( $title ) ?></h3>
                                    <?php if ( $copy ): ?>
                                        <div class="slider-card--copy"><?php echo wp_kses_post( $copy ) ?></div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="slider--arrows features-slider-arrows">
                <button class="features-slides--prev slider-prev" aria-label="Navigate Left">
                    <svg width="36" viewBox="0 0 448 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
                </button>
                <button class="features-slides--next slider-next" aria-label="Navigate Right">
                    <svg width="36" viewBox="0 0 448 512"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>