<div class="navbar-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
                <div class="pull-right ">
                    <ul class="userMenu ">
                        <li class="phone-number">
                            <a href="#">
                                <span> <i class="glyphicon glyphicon-phone-alt "></i></span>
                                <span class="hidden-xs" style="margin-left:5px"> 88 01680 53 1352 </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
                <div class="pull-left">
                    <ul class="userMenu">
                        <?php
                        if($this->Session->read('Auth.User')){
                        ?>
                            <li>
                                <?php
                                echo $this->Html->link(
                                    '<span class="hidden-xs">خروج</span>
                                    <i class="glyphicon glyphicon-log-in hide visible-xs "></i>',
                                    array(
                                        'plugin' => 'users',
                                        'controller' => 'users',
                                        'action' => 'logout',
                                    ),
                                    array(
                                        'escape' => false
                                    )
                                );
                                ?>
                            </li>
                            <li>
                                <?php
                                echo $this->Html->link(
                                    '<span class="hidden-xs">پروفایل من</span>
                                        <i class="glyphicon glyphicon-user hide visible-xs"></i>',
                                    array(
                                        'plugin' => 'users',
                                        'controller' => 'users',
                                        'action' => 'edit',
                                        $this->Session->read('Auth.User.username')
                                    ),
                                    array(
                                        'escape' => false
                                    )
                                );
                                ?>
                            </li>
                        <?php
                        }else{
                        ?>
                            <li>
                                <?php
                                echo $this->Html->link(
                                    '<span class="hidden-xs">ورود</span>
                                    <i class="glyphicon glyphicon-log-in hide visible-xs "></i>',
                                    array(
                                        'plugin' => 'users',
                                        'controller' => 'users',
                                        'action' => 'login',
                                    ),
                                    array(
                                        'escape' => false
                                    )
                                );
                                ?>
                            </li>
                            <li>
                                <?php
                                echo $this->Html->link(
                                    'ایجاد حساب جدید',
                                    array(
                                        'plugin' => 'users',
                                        'controller' => 'users',
                                        'action' => 'add',
                                    ),
                                    array(
                                        'escape' => false
                                    )
                                );
                                ?>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>