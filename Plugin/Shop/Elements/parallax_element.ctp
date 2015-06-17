<?php
$block = $block['Block'];
if(isset(${'parallaxImageUrl_'.$block['alias']})) {
?>
    <style>
        .parallax-image-<?php echo str_replace('_','-',$block['alias'])?> {
            background: url(<?php echo ${'parallaxImageUrl_'.$block['alias']}?>) fixed;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
<?php
}
?>
<div class="parallax-section parallax-image-<?php echo str_replace('_','-',$block['alias'])?>" >
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
                        echo $this->Layout->filter($block['body']);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>