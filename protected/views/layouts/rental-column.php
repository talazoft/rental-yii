<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/rental-main'); ?>
<div class="left">
    <?php $this->renderPartial('//layouts/leftpane'); ?>
</div>
<div class="right-container">
    <div class="right">
        <?php echo $content; ?>
        <div class="clear"></div>
    </div>
</div>
<?php $this->endContent(); ?>