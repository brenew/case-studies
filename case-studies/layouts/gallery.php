<?php
/**
 * Gallery
 */
namespace mercurypress;

$sectionTitle = wp_kses_post(get_sub_field('section_headline'));
$sectionPreTitle = get_sub_field('section_pre_title');
?>
<div class="band gallery">
    <div class="container">
        <?php if ( $sectionTitle ): ?>
            <div class="row">
                <div class="col-12">
                    <div class="case-study--narrow-text-wrap text-center">
                        <?php if($sectionPreTitle): ?>
                            <p class="features--pre-title case-study--pre-title"><?php echo esc_html( $sectionPreTitle ) ?></p>
                        <?php endif; ?>
                        <h2 class="features--headline case-study--headline"><?php echo esc_html( $sectionTitle ) ?></h2>                            
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if( have_rows('gallery') ): ?>
            <div class="row">
                <div class="col-12">
                    <div class="slider placement-centered">
                        <div class="slider--slides gallery-slides">
                            <?php while( have_rows('gallery') ): the_row(); 
                                $image = get_sub_field('image');
                                $device = get_sub_field('device');
                                $deviceImage = '';
                                switch ($device) {
                                    case "device-desktop":
                                        $deviceImage = get_stylesheet_directory_uri() . '/images/case-studies/gallery/desktop-overlay.png';
                                        break;
                                    case "device-laptop":
                                        $deviceImage = get_stylesheet_directory_uri() . '/images/case-studies/gallery/laptop-overlay.png';
                                        break;
                                    case "device-phone-landscape":
                                        $deviceImage = get_stylesheet_directory_uri() . '/images/case-studies/gallery/phone-landscape-overlay.png';
                                        break;
                                    case "device-phone-portrait":
                                        $deviceImage = get_stylesheet_directory_uri() . '/images/case-studies/gallery/phone-portrait-overlay.png';
                                        break;
                                    case "device-tablet-landscape":
                                        $deviceImage = get_stylesheet_directory_uri() . '/images/case-studies/gallery/tablet-landscape-overlay.png';
                                        break;
                                    case "device-tablet-portrait":
                                        $deviceImage = get_stylesheet_directory_uri() . '/images/case-studies/gallery/tablet-portrait-overlay.png';
                                        break;    
                                    default:
                                        $deviceImage = 'none';
                                }
                                ?>                                
                                <div class="gallery--slide">
                                    <?php if ( $deviceImage !== 'none' ): ?>
                                        <div class="gallery--device-item">
                                            <figure class="gallery--device-image-wrap <?php echo esc_attr($device) ?>">
                                                <img src="<?php echo esc_url($image['url']) ?>" class="gallery--image" alt="<?php echo esc_attr($image['alt']) ?>" />
                                            </figure>
                                            <img src="<?php echo esc_url($deviceImage) ?>" class="gallery--device-image" alt="Device chrome for the <?php echo esc_attr($image['title']) ?> snap" />                                            
                                        </div>
                                    <?php else: ?>                                        
                                        <figure class="gallery--card-image-wrap">
                                            <?php if( $image ): ?>
                                                <img src="<?php echo esc_url($image['url']) ?>" class="gallery--card-image" alt="<?php echo esc_attr($image['alt']) ?>">
                                            <?php endif; ?>
                                        </figure>                                        
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="slider--arrows gallery-slider-arrows">
                            <button class="gallery-slides--prev slider-prev" aria-label="Navigate Left">
                                <svg width="36" viewBox="0 0 448 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
                            </button>
                            <button class="gallery-slides--next slider-next" aria-label="Navigate Right">
                                <svg width="36" viewBox="0 0 448 512"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                            </button>
                        </div>                        
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
