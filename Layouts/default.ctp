<!DOCTYPE html>
<html lang="en">
<?php echo $this->element('head'); ?>
<body>
<?php echo $this->element('header'); ?>
<div class="container">
    <?php
    if(!isset($notShowBread) || !$notShowBread){
        echo $this->element('product_bread_crumb', compact('paths', 'currentPath'));
    }
    echo $this->Layout->sessionFlash();
    ?>
</div>
<?php echo $content_for_layout;?>
<?php echo $this->element('footer'); ?>

</body>
</html>
