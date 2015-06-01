<div class="nav navbar-nav navbar-right hidden-xs">
    <div class="dropdown  cartMenu ">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-shopping-cart"> </i>
            <?php
                $totalPrice = 0;
                if($this->Session->check("pay.facture.FactureItem")){
                    $items = $this->Session->read('pay.facture.FactureItem');
                    foreach($items as $item){
                        $totalPrice += $item['price'] * $item['number'];
                    }
                }
            ?>
            <span class="cartRespons"> Cart (<?php echo number_format($totalPrice); ?>) </span>
            <b class="caret"> </b>
        </a>
        <div class="dropdown-menu col-lg-4 col-xs-12 col-md-4 ">
            <div class="w100 miniCartTable scroll-pane">
                <table>
                    <tbody>
                    <?php
                    if($this->Session->check("pay.facture.FactureItem")){
                        foreach($this->Session->read('pay.facture.FactureItem') as $item){
                            $itemTotalPrice = number_format($item['price'] * $item['number']);
                            ?>
                            <tr class="miniCartProduct" id="item-<?php echo $item['foreign_key']; ?>">
                                <td style="width:20%" class="miniCartProductThumb">
                                    <div>
                                        <a href="<?php echo Router::url(array("plugin" => "shop", "controller" => "products", "action" => "view", $item['foreign_key'])); ?>">
                                            <?php echo $this->Html->image($item['image'], array(
                                                'alt' => 'img',
                                            )); ?>
                                        </a>
                                    </div>
                                </td>
                                <td style="width:40%">
                                    <div class="miniCartDescription">
                                        <h4><a href="<?php echo Router::url(array("plugin" => "shop", "controller" => "products", "action" => "view", $item['foreign_key'])); ?>"><?php echo $item['title']?></a></h4>
                                        <div class="price"><span> <?php echo number_format($item['price'])?> </span></div>
                                    </div>
                                </td>
                                <td style="width:10%" class="miniCartQuantity"><a> X <?php echo $item['number']?> </a></td>
                                <td style="width:15%" class="miniCartSubtotal"><span><?php echo $itemTotalPrice;?></span></td>
                                <td style="width:5%" class="delete">
                                    <a class="remove-from-cart"> x </a>
                                </td>
                            </tr>
                        <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>

            <div class="miniCartFooter text-right">
                <h3 class="text-right subtotal"> Subtotal: <?php echo number_format($totalPrice); ?> </h3>
                <a class="btn btn-sm btn-danger"> <i class="fa fa-shopping-cart"> </i> VIEW CART </a> <a
                    class="btn btn-sm btn-primary"> CHECKOUT </a></div>

        </div>

    </div>
    <div class="search-box">
        <div class="input-group">
            <button class="btn btn-nobg getFullSearch" type="button"><i class="fa fa-search"> </i></button>
        </div>

    </div>
</div>