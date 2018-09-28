<?php
defined('C5_EXECUTE') or die('Access Denied.');
/* @var $fh \Concrete\Core\Form\Service\Form */
$fh = Core::make('helper/form');?>
<div class="form-group">
    <label><?=t('Select the Widget you want to display:')?></label>
    <?=$fh->select('widgetMode', $widgets, $widgetMode, array('class' => "form-control")); ?>
</div>
<div class="form-group">
    <label><?=t('Enter your toornament.com tournament ID:')?></label>
    <?=$fh->number('toornamentID', (int)$toornamentID, array('class' => "form-control")); ?>
</div>
<div class="form-group">
    <label><?=t('Enter your toornament.com stage ID:')?> <span class="text-muted"><?=t('Only needed for "stage" widget')?></span></label>
    <?=$fh->number('stageID', (int)$stageID, array('class' => "form-control")); ?>
</div>
<div class="form-group">
    <label><?=t('IFrame Height:')?> <span class="text-muted"><?=t('in pixels')?></span></label>
    <?=$fh->number('height', $height, array('class' => "form-control")); ?>
</div>



