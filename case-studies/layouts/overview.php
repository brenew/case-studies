<?php
/**
 * Overview
 */
namespace mercurypress;

$client = get_field('case_client_name');
$industry = get_field('case_client_industry');
$overview = get_sub_field('overview_blurb');
$techCategories = get_the_terms( $post, 'case-study-categories' );

?>
<div class="band overview">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-7 col-lg-6 overview--description-col">
                <h2 class="overview--headline case-study--headline">The <?php echo do_shortcode('[underline text="Overview" color="green"]') ?></h2>
                <?php if( $overview ): ?>
                    <p class="overview--copy case-study--copy"><?php echo esc_html( $overview ) ?></p>
                <?php endif; ?>
            </div>
            <div class="col-12 col-sm-4 col-md-5 col-lg-6 overview--list-col">
                <?php if ( $client || $industry || $techCategories ): ?>
                    <ul class="overview--list case-study--icon-list">
                        <?php if ($client): ?>
                            <li class="overview--list-item client">
                                <div class="overview--list-icon icon-technology">
                                    <svg width="20" viewBox="0 0 448 512"><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                                </div>
                                <div class="overview--list-text">
                                    <h3 class="overview--item-heading">Client</h3>
                                    <p class="overview--item-copy"><?php echo esc_html( $client ) ?></p>
                                </div>
                            </li>
                        <?php endif; ?>
                        <?php if ($industry): ?>
                            <li class="overview--list-item industry">
                                <div class="overview--list-icon icon-technology">
                                    <svg width="20" viewBox="0 0 512 512"><path d="M176 56V96H336V56c0-4.4-3.6-8-8-8H184c-4.4 0-8 3.6-8 8zM128 96V56c0-30.9 25.1-56 56-56H328c30.9 0 56 25.1 56 56V96v32V480H128V128 96zM64 96H96V480H64c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64zM448 480H416V96h32c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64z"/></svg>                                
                                </div>
                                <div class="overview--list-text">
                                    <h3 class="overview--item-heading">Industry</h3>
                                    <p class="overview--item-copy"><?php echo esc_html( $industry ) ?></p>
                                </div>
                            </li>
                        <?php endif; ?>
                        <?php if ($techCategories): ?>
                        <li class="overview--list-item technology">
                            <div class="overview--list-icon icon-technology">
                                <svg width="20" viewBox="0 0 512 512"><path d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 21 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z"/></svg>
                            </div>
                            <div class="overview--list-text">
                                <h3 class="overview--item-heading">Technology</h3>
                                <p class="overview--item-copy">
                                    <?php 
                                        if ( ! empty( $techCategories ) && ! is_wp_error( $techCategories ) ){
                                            $total = count($techCategories);
                                            $i = 0;
                                            foreach ( $techCategories as $term ) {
                                                
                                                if( $term->name !== "Uncategorized" ){
                                                    if ( ++$i === $total ) {
                                                        echo '<span class="overview--copy-link" data-slug="' . $term->slug . '">' . $term->name . '</span>';
                                                    } else {
                                                        echo '<span class="overview--copy-link" data-slug="' . $term->slug . '">' . $term->name . ', </span>';
                                                    }
                                                }
                                            }
                                        }
                                    ?>                                
                                </p>
                            </div>
                        </li>
                        <?php endif; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>