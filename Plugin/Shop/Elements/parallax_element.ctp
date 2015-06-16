<?php
$block = $block['Block'];
?>
<style>
    .parallax-image{
        background: url(<?php echo $parallaxImageUrl?>) fixed;
        background-attachment: fixed;
        background-size: cover;
    }
</style>
<div class="parallax-section parallax-image" >
    <div class="w100 parallax-section-overley">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="parallax-content clearfix">
                        <?php
                        if($block['show_title'] == 1) {
                        ?>
                            <h1 class="xlarge"> <?php echo $block['title'];?> </h1>
                        <?php
                        }
                        ?>
                        <h5 class="parallaxSubtitle">
                            <?php
                            echo $this->Layout->filter($block['body']);
                            ?>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>