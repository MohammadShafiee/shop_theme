<?php
$block = $block['Block'];
?>
<div class="row featuredPostContainer globalPadding style2">
    <?php if ($block['show_title'] == 1): ?>
        <h3 class="section-title style2 text-center">
            <span><?php echo $block['title']; ?></span>
        </h3>
    <?php endif; ?>
    <?php
    echo $this->Layout->filter($block['body']);
    ?>
</div>