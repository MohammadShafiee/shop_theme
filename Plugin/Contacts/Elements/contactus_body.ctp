<div class="wrapper whitebg contact-us">
    <div class="container main-container ">
        <div class="row innerPage">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row userInfo">
                    <div class="col-xs-12 col-sm-12">
                        <h1 class="title-big text-center section-title-style2">
                            <span> <?php echo $contact['Contact']['title'];?> </span>
                        </h1>
                        <p class="text-justify" style="font-size: 15px; line-height: 28px">
                            <?php echo $contact['Contact']['body'];?>
                        </p>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h3 class="block-title-5">
                                    اطلاعات تماس ما
                                </h3>
                                <p>
                                    <?php echo $contact['Contact']['address'];?>
                                    <br>
                                    <strong>
                                        شماره تلفن تماس:
                                    </strong>
                                    : <?php echo $contact['Contact']['phone'];?>
                                    <br>
                                    <strong>
                                        ایمیل:
                                    </strong>
                                    : <?php echo $contact['Contact']['email'];?>
                                </p>
                            </div>
                            <div style="clear:both"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="clear:both"> </div>
    </div>
    <div class="gap"></div>
</div>