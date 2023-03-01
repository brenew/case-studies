<?php
/**
 * Related
 */
namespace mercurypress;

$sectionTitle = wp_kses_post(get_sub_field('section_headline'));
$sectionPreTitle = get_sub_field('section_pre_title');
$related_posts = get_sub_field('other_case_studies');

?>
<div class="related-image-band" style="font-size:0; line-height: 0;">
    <img src="/wp-content/themes/mercurypress/images/case-studies/curve-graphic-1920x220-1.png" class="related-image-band-image" alt="Case study curved display art">
</div>
<div class="band related">
    <div class="container">
        <?php if ( $sectionTitle ): ?>
            <div class="row">
                <div class="col-12">
                    <div class="case-study--narrow-text-wrap text-center">

                        <?php if($sectionPreTitle): ?>
                            <p class="related--pre-title case-study--pre-title"><?php echo esc_html( $sectionPreTitle ) ?></p>
                        <?php endif; ?>

                        <h2 class="related--headline case-study--headline"><?php echo esc_html( $sectionTitle ) ?></h2>

                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if( $related_posts ): ?>
            <div class="row">
                <div class="col-12">
                    <div class="related--cards-wrap">
                        <div class="related--cards">
                            <?php foreach( $related_posts as $post ): 
                                setup_postdata($post);
                                $image = get_field('case_featured_image');
                                $title = get_field('case_title');
                                $categories = wp_get_object_terms( $post->ID, 'case-study-categories', array( 'fields' => 'names' ) );
                            ?>
                                <div class="related--card">
                                    <a href="<?php the_permalink(); ?>" class="related--card-inner">
                                        <?php if( $image ): ?>
                                            <figure class="related--card-image-wrap">
                                                <img src="<?php echo esc_url($image['url']) ?>" class="related--card-image" alt="<?php echo esc_attr($image['alt']) ?>">
                                            </figure>
                                        <?php endif; ?>                                        
                                        <?php if ( $title ): ?>
                                            <div class="related--card-body">
                                                <h3 class="related--card-title"><?php echo esc_html($title) ?></h3>
                                                <p class="related--card-categories">
                                                    <?php
                                                    $total = count($categories);
                                                    $i = 0;
                                                    foreach ($categories as $term): ?>
                                                        <?php 
                                                            
                                                            if (++$i === $total) {
                                                                echo '<span>' . $term . '</span>';
                                                            } else {
                                                                echo '<span>' . $term . ',</span> ';
                                                            }
                                                        ?>
                                                    <?php endforeach; ?>
                                                </p>
                                            </div>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>
