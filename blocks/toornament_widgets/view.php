<?php defined('C5_EXECUTE') or die("Access Denied.");
if(empty($height))$height = 450;?>
<div class="toornament-block">
<?
if ($widgetMode == 'tournament'):?>
    <iframe width="100%" height="<?= $height ?>"
            src="https://widget.toornament.com/tournaments/<?= $toornamentID ?>/?_locale=<?= $locale ?>&theme="
            allowfullscreen></iframe>
<?php elseif ($widgetMode == 'schedule'): ?>
    <iframe width="100%" height="<?= $height ?>"
            src="https://widget.toornament.com/tournaments/<?= $toornamentID ?>/matches/schedule/?_locale=<?= $locale ?>&theme="
            scrolling="no" allowfullscreen></iframe>
<?php elseif ($widgetMode == 'stage'): ?>
    <iframe width="100%" height="<?= $height ?>"
            src="https://widget.toornament.com/tournaments/<?= $toornamentID ?>/stages/<?= $stageID ?>/?_locale=<?= $locale ?>&theme="
            scrolling="no" allowfullscreen></iframe>
<?php endif; ?>
</div>


