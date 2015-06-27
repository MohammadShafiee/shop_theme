<div class="row">
    <div class="breadcrumbDiv col-lg-12">
        <ul class="breadcrumb">
            <li>
                <?php
                echo $this->Html->link('صفحه اصلی', '/');
                ?>
            </li>
            <?php
            $paths = isset($paths) ? $paths : array();
            foreach($paths as $path){
                ?>
                <li>
                    <?php echo $this->Html->link($path['title'], "/shop/category/" . $path['id']);
                    ?>
                </li>
            <?php
            }
            $currentPath = !isset($currentPath) ? (isset($title_for_layout) ? $title_for_layout : '') : $currentPath;
            ?>
            <li class="active"><?php echo $currentPath;?></li>
        </ul>
    </div>
</div>
<div class="clearfix"></div>