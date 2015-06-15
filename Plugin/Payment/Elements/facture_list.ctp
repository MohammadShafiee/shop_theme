<div class="col-lg-9 col-md-9 col-sm-7">
    <div class="row userInfo">
    <div class="col-xs-12 col-sm-12">
        <div class="cartContent w100">
            <table class="cartTable table-responsive" style="width:100%">
                <tbody>
                <tr class="CartProduct cartTableHeader">
                    <td style="width:15%"> محصول </td>
                    <td style="width:40%">عنوان محصول</td>
                    <td style="width:10%" class="delete">&nbsp;</td>
                    <td style="width:10%">تعداد</td>
                    <td style="width:10%">تخفیف</td>
                    <td style="width:15%">مبلغ</td>
                </tr>
                <?php
                foreach($factureItems as $item){
                ?>
                    <tr class="CartProduct">
                        <td class="CartProductThumb">
                            <div>
                                <?php
                                echo $this->Html->link(
                                    $this->Html->image($item['image']),
                                    array(
                                        'plugin' => 'shop',
                                        'controller' => 'products',
                                        'action' => 'view',
                                        $item['foreign_key']
                                    ),
                                    array(
                                        'escape' => false
                                    )
                                );
                                ?>
                            </div>
                        </td>
                        <td>
                            <div class="CartDescription">
                                <h4>
                                    <?php
                                    echo $this->Html->link(
                                        $item['title'],
                                        array(
                                            'plugin' => 'shop',
                                            'controller' => 'products',
                                            'action' => 'view',
                                            $item['foreign_key']
                                        )
                                    );
                                    ?>
                                </h4>
                                <div class="price"> <span><?php echo number_format($item['base_price']);?></span></div>
                            </div>
                        </td>
                        <td class="delete">
                            <a title="Delete">
                                <i class="glyphicon glyphicon-trash fa-2x"></i>
                            </a>
                        </td>
                        <td>
                            <div class="input-group bootstrap-touchspin">
                                <span class="input-group-btn">
                                    <button class="btn btn-link bootstrap-touchspin-down" type="button">-</button>
                                </span>
                                <div class="quanitySniper form-control" style="color: gray; line-height: 30px"><?php echo number_format($item['number']);?></div>
                                <span class="input-group-btn">
                                    <button class="btn btn-link bootstrap-touchspin-up" type="button">+</button>
                                </span>
                            </div>
                        </td>
                        <td><?php echo $item['off'].'%';?></td>
                        <td class="price"><?php echo number_format($item['number'] * $item['price']);?></td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>

        <div class="cartFooter w100">
            <div class="box-footer">
                <div class="pull-left">
                    <a href="index.html" class="btn btn-default">
                        <i class="fa fa-arrow-left"></i> &nbsp; Continue shopping
                    </a>
                </div>
                <div class="pull-right">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-undo"></i> &nbsp; Update cart
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
    <?php echo $this->element('facture_sidebar', compact('amount'));?>
</div>
<script>
    $(document).ready(function(){

    });
</script>