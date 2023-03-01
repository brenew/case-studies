<?php
/**
 * Challenge
 */
namespace mercurypress;

$challenge = get_sub_field('overview_blurb');
$solution = get_sub_field('overview_blurb');
$results = get_sub_field('overview_blurb');
$challengeCopy = get_sub_field('challenge_copy');
$solutionCopy = get_sub_field('solution_copy');
$resultsCopy = get_sub_field('results_copy');
?>
<div class="band challenge" style="background: url(/wp-content/themes/mercurypress/images/case-studies/abstract-graphic-4-1920x540-1.png) no-repeat right top/contain #f1f5f9; padding-bottom: 0;">
    <div class="container">
        <?php if ( $challengeCopy ): ?>
            <div class="row row-challenge">
                <div class="col-12 col-sm-4">
                    <span class="challenge--number step-one">01</span>
                    <div class="challenge--text">
                        <p class="challenge--pre-title case-study--pre-title">The</p>
                        <h2 class="challenge--title step-one">Challenge</h2>
                    </div>
                </div>
                <div class="col-12 col-sm-8">
                    <div class="challenge--copy case-study--copy"><?php echo wp_kses_post( $challengeCopy ) ?></div>
                </div>
            </div>
        <? endif; ?>
        <?php if ( $solutionCopy ): ?>
            <div class="row row-solution">
                <div class="col-12 col-sm-4">
                    <span class="challenge--number step-two">02</span>
                    <div class="challenge--text">
                        <p class="challenge--pre-title case-study--pre-title">The</p>
                        <h2 class="challenge--title step-two">Solution</h2>
                    </div>
                </div>
                <div class="col-12 col-sm-8">
                    <div class="challenge--copy case-study--copy"><?php echo wp_kses_post( $solutionCopy ) ?></div>
                </div>
            </div>
        <? endif; ?>
    </div>
</div>
<?php if ( $resultsCopy ): ?>
    <div class="band challenge" style="background: url(/wp-content/themes/mercurypress/images/case-studies/abstract-graphic-3-1920x540-1.png) no-repeat bottom left #f1f5f9; padding-top: 0;">
        <div class="container">
                <div class="row row-results">
                    <div class="col-12 col-sm-4">
                        <span class="challenge--number step-three">03</span>
                        <div class="challenge--text">
                            <p class="challenge--pre-title case-study--pre-title">The</p>
                            <h2 class="challenge--title step-three">Results</h2>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8">
                        <div class="challenge--copy case-study--copy"><?php echo wp_kses_post( $resultsCopy ) ?></div>
                    </div>
                </div>
        </div>    
    </div>
<? endif; ?>