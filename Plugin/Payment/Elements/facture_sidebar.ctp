<div class="contentBox">
    <div class="w100 costDetails">
        <div class="table-block" id="order-detail-content">
            <?php
            echo $this->Html->link(
                '<i class="fa fa-arrow-right"></i> رفتن به درگاه بانک و پرداخت',
                '#',
                array(
                    'onClick' => "$(this).closest('form').submit();",
                    'class' => 'btn btn-primary btn-lg btn-block',
                    'style' => 'margin-bottom:20px',
                    'escape' => false
                )
            );
            ?>
            <div class="w100 cartMiniTable">
                <table id="cart-summary" class="std table">
                    <tbody>
                    <tr>
                        <td><?php echo 'پرداخت از طریق درگاه'?></td>
                        <td class="price"><?php echo $this->Payment->showOnlineWayList();?></td>
                    </tr>
<!--                    <tr style="">-->
<!--                        <td>Shipping</td>-->
<!--                        <td class="price"><span class="success">Free shipping!</span></td>-->
<!--                    </tr>-->
<!--                    <tr class="cart-total-price ">-->
<!--                        <td>Total (tax excl.)</td>-->
<!--                        <td class="price">$216.51</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>Total tax</td>-->
<!--                        <td class="price" id="total-tax">$0.00</td>-->
<!--                    </tr>-->
                    <tr>
                        <td> مبلغ کل قابل پرداخت </td>
                        <td class=" site-color" id="total-price"><?php echo number_format($amount);?></td>
                    </tr>
<!--                    <tr>-->
<!--                        <td colspan="2"><div class="input-append couponForm">-->
<!--                                <input class="col-lg-8" id="appendedInputButton" type="text" placeholder="Coupon code">-->
<!--                                <button class="col-lg-4 btn btn-success" type="button">Apply!</button>-->
<!--                            </div></td>-->
<!--                    </tr>-->
                    </tbody>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>