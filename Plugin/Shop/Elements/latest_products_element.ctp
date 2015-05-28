<?php
$block = $block['Block'];
?>
<div class="morePost row featuredPostContainer style2 globalPaddingTop ">
    <?php if ($block['show_title'] == 1): ?>
        <h3 class="section-title style2 text-center">
            <span><?php echo $block['title']; ?></span>
        </h3>
    <?php endif; ?>
    <div class="container">
        <div class="row xsResponse">
            <?php
            echo $this->Layout->filter($block['body']);
            ?>
        </div>
    </div>
</div>
