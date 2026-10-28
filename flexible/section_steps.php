<?php
$steps = get_sub_field('steps');
$count = count($steps);
?>


<div class="uk-flex uk-grid steps-container">

    <?php foreach( $steps as $step): ?>
        <div class="uk-width-1-1 uk-width-1-<?php echo $count; ?>@m step">
            <?php //print_r($steps); ?>

            <div class="eyebrow-container uk-margin-bottom@m">
                <span class="g-section-subtitle uk-margin-remove"><?php echo $step['step_eyebrow']; ?></span>
            </div>

            <div class="step-content">
                <h3><?php echo $step['step_title'];?></h3>
                <p><?php echo $step['step_text'];?></p>
            </div>

        </div>
    <?php endforeach; ?>

</div>
