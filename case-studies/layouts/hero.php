<?php
/**
 * Hero
 */
namespace mercurypress;

$title = get_field('case_title');
$description = get_field('case_short_description');
    
?>

<?php if( have_rows('hero_images') ): ?>
    <section class="hero hero-alt">
        <div class="slider placement-background">
            <div class="slider--slides hero-alt--slides">
                <?php while( have_rows('hero_images') ): the_row();
                    $image = get_sub_field('image');
                    $imageMobile = get_sub_field('image_mobile');
                ?>
                    <figure class="slider--slide hero-alt--slide">
                        <img src="<?php echo esc_html($image['url']); ?>" class="slider--image hero-alt--image" alt="<?php echo esc_html($image['alt']); ?>" />

                        <?php if ($imageMobile): ?>
                            <img src="<?php echo esc_html($imageMobile['url']); ?>" class="slider--image hero-alt--image-mobile" alt="<?php echo esc_html($imageMobile['alt']); ?>" />
                        <?php endif; ?>
                    </figure>
                <?php endwhile ?>
            </div>
        </div>
        <div class="hero-alt--text-wrap">
            <?php if ( $title ): ?>
                <h1 class="hero-alt--headline"><?php echo esc_html( $title )  ?></h1>
            <?php endif; ?>
            <?php if ( $description ): ?>
                <p class="hero-alt--copy"><?php echo esc_html( $description ) ?></p>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>