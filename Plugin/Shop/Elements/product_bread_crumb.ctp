<div class="row">
    <div class="breadcrumbDiv col-lg-12">
        <ul class="breadcrumb">
            <li>
                <?php
                echo $this->Html->link('صفحه اصلی', '/');
                ?>
            </li>
            <?php
            foreach($paths as $path){
                ?>
                <li>
                    <?php echo $this->Html->link($path['title'], array(
                        'plugin' => 'shop',
                        'controller' => 'categories',
                        'action' => 'index',
                        $path['id']
                    ));
                    ?>
                </li>
            <?php
            }
            ?>
            <li class="active"><?php echo $currentPath;?></li>
        </ul>
    </div>
</div>