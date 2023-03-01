<?php
/**
 * Highlights
 */
namespace mercurypress;

$sectionTitle = wp_kses_post(get_sub_field('section_headline'));
$sectionPreTitle = get_sub_field('section_pre_title');
?>
<div class="band highlights" style="background: url('/wp-content/themes/mercurypress/images/case-studies/abstract-graphic-highlights.png') center center / cover no-repeat white;">
    <div class="container">
        <?php if ( $sectionTitle ): ?>
            <div class="row">
                <div class="col-12">
                    <div class="case-study--narrow-text-wrap text-center">
                        <?php if( $sectionPreTitle ): ?>
                            <p class="features--pre-title case-study--pre-title"><?php echo esc_html( $sectionPreTitle ) ?></p>
                        <?php endif; ?>
                        <h2 class="features--headline case-study--headline"><?php echo esc_html( $sectionTitle ) ?></h2>                            
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if( have_rows('highlights') ): ?>
            <div class="row">
                <div class="col-12">
                    <div class="highlights--cards-wrap">
                        <div class="highlights--cards">
                            <?php while( have_rows('highlights') ): the_row(); 
                                $title = get_sub_field('title');
                                $copy = get_sub_field('copy');
                                ?>
                                <div class="highlights--card">
                                    <div class="highlights--card-inner">
                                        <div class="highlights--card-body">
                                            <h3 class="highlights--card-title"><?php echo esc_html( $title ) ?></h3>
                                            <?php if ( $copy ): ?>
                                                <div class="highlights--card-copy case-study--copy"><?php echo wp_kses_post( $copy ) ?></div>
                                            <?php endif; ?>
                                        </div>
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
