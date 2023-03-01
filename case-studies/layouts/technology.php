<?php
/**
 * Technology
 */
namespace mercurypress;

$sectionTitle = wp_kses_post(get_sub_field('section_headline'));
$sectionPreTitle = wp_kses_post(get_sub_field('section_pre_title'));
$sectionCopy = get_sub_field('section_copy');
?>
<div class="band technology">
    <div class="container">
        <?php if ( $sectionTitle ): ?>
            <div class="row">
                <div class="col-12">
                    <div class="case-study--narrow-text-wrap text-center">
                        <?php if($sectionPreTitle): ?>
                            <p class="technology--pre-title case-study--pre-title"><?php echo esc_html( $sectionPreTitle ) ?></p>
                        <?php endif; ?>

                        <h2 class="technology--headline case-study--headline"><?php echo $sectionTitle ?></h2>
                        
                        <?php if($sectionCopy): ?>
                            <p class="technology--copy case-study--copy"><?php echo esc_html( $sectionCopy ) ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if( have_rows('technologies') ): ?>
            <div class="row">
                <div class="col-12">
                    <div class="technology--cards-wrap">
                        <div class="technology--cards">
                            <?php while( have_rows('technologies') ): the_row(); 
                                $image = get_sub_field('image');
                                $title = get_sub_field('title');
                                $copy = get_sub_field('copy');
                                ?>
                                <div class="technology--card">
                                    <div class="technology--card-inner">
                                        <?php if( $image ): ?>
                                            <figure class="technology--card-image-wrap">
                                                <img src="<?php echo esc_url( $image['url'] ) ?>" class="technology--card-image" alt="<?php echo esc_attr( $image['alt'] ) ?>">
                                            </figure>
                                        <?php endif; ?>                                        
                                        <?php if ( $title ): ?>
                                            <div class="technolog--card-body">
                                                <h3 class="technology--card-title"><?php echo esc_html( $title ) ?></h3>
                                                <?php if ( $copy ): ?>
                                                    <div class="technology--card-copy case-study--copy"><?php echo wp_kses_post( $copy ) ?></div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>