<div class="product-tab w100 clearfix">
    <ul class="nav nav-tabs">
        <li class="active"> <a href="#details" data-toggle="tab">جزییات محصول</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="details">
            <table class="table table-striped">
                <colgroup>
                    <col style="width:80%">
                    <col style="width:50%">
                </colgroup>
                <tbody>
                <?php
                foreach($details as $property){
                    ?>
                    <tr>
                        <td><?php echo $property['Property']['title']?></td>
                        <td><?php echo $property['Property']['value']?></td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

</div>