<div class="container main-container">

    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7">
            <h1 class="section-title-inner"><span><i class="fa fa-lock"></i> <?php echo $title_for_layout; ?></span></h1>
            <div class="row userInfo">

                <div class="col-xs-12 col-sm-6">
                    <h2 class="block-title-2"><span>قبلا ثبت نام کرده ام؟</span></h2>
                    <?php
                    echo $this->Form->create('User', array(
                            'url' => array(
                                'plugin' => 'users',
                                'controller' => 'users',
                                'action' => 'login'
                            )),
                        array(
                            'class' => 'logForm',
                            'role' => 'form',
                        )
                    );
                    echo $this->Form->input('username',
                        array(
                            'div' => array(
                                'class' => 'form-group'
                            ),
                            'label' => __d('croogo', 'Username'),
                            'class' => 'form-control'
                        ));
                    echo $this->Form->input('password',
                        array(
                            'div' => array(
                                'class' => 'form-group'
                            ),
                            'label' => __d('croogo', 'Password'),
                            'class' => 'form-control'
                        ));
                    ?>
<!--                    <div class="checkbox">-->
<!--                        <label style="display: none;">-->
<!--                            <input type="checkbox" name="checkbox" style="display: none;">-->
<!--                            مرا بخاطر بسپار-->
<!--                        </label>-->
<!--                    </div>-->
                    <div class="form-group">
                        <p>
<!--                            --><?php
//                            echo $this->Html->link(__d('croogo', 'Forgot password?'), array(
//                                    'controller' => 'users', 'action' => 'forgot',
//                                ),
//                                array(
//                                    'title' => 'رمزو عبور خود را فراموش کرده ام'
//                                ));
//                            ?>
                        </p>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-sign-in"></i> ورود
                    </button>
                    <?php echo $this->Form->end(); ?>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <h2 class="block-title-2"> ایجاد حساب کاربری جدید </h2>
                    <?php
                    echo $this->Form->create('User', array(
                        'url' => array('plugin' => 'users', 'controller' => 'users', 'action' => 'add')
                    ), array(
                        'role' => 'form',
                        'class' => 'regForm',
                        'novalidation' => 'novalidate'
                    ));
                    //                    echo $this->Form->input('username',
                    //                        array(
                    //                            'div' => array(
                    //                                'class' => 'form-group'
                    //                            ),
                    //                            'label' => __d('croogo', 'Username'),
                    //                            'class' => 'form-control'
                    //                        ));
                    //                    echo $this->Form->input('password',
                    //                        array(
                    //                            'div' => array(
                    //                                'class' => 'form-group'
                    //                            ),
                    //                            'label' => __d('croogo', 'Password'),
                    //                            'class' => 'form-control',
                    //                            'value' => ''
                    //                        ));
                    //                    echo $this->Form->input('verify_password',
                    //                        array(
                    //                            'div' => array(
                    //                                'class' => 'form-group'
                    //                            ),
                    //                            'label' => __d('croogo', 'Verify Password'),
                    //                            'class' => 'form-control',
                    //                            'type' => 'password',
                    //                            'value' => ''
                    //                        ));
                    //                    echo $this->Form->input('name',
                    //                        array(
                    //                            'div' => array(
                    //                                'class' => 'form-group'
                    //                            ),
                    //                            'label' => __d('croogo', 'Name'),
                    //                            'class' => 'form-control',
                    //                        ));
                    echo $this->Form->input('email',
                        array(
                            'div' => array(
                                'class' => 'form-group'
                            ),
                            'label' => __d('croogo', 'Email'),
                            'class' => 'form-control',
                        ));
                    //                    echo $this->Form->input('website',
                    //                        array(
                    //                            'div' => array(
                    //                                'class' => 'form-group'
                    //                            ),
                    //                            'label' => __d('croogo', 'Website'),
                    //                            'class' => 'form-control',
                    //                        ));
                    ?>
                    <button type="submit" class="btn   btn-primary">
                        <i class="fa fa-user"></i> ایجاد حساب کاربری
                    </button>
                    <?php echo $this->Form->end();?>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-5"> </div>
    </div>
    <div style="clear:both"></div>
</div>
<div class="gap"> </div>