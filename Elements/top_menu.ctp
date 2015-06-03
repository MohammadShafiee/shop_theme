<div class="navbar-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
                <div class="pull-left ">
                    <ul class="userMenu ">
                        <li class="phone-number">
                            <a href="callto:+88016000000">
                                <span> <i class="glyphicon glyphicon-phone-alt "></i></span>
                                <span class="hidden-xs" style="margin-left:5px"> 88 01680 53 1352 </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
                <div class="pull-right">
                    <ul class="userMenu">
                        <li>
                            <?php
                            echo $this->Html->link(
                                '<span class="hidden-xs">'.__d('shop', 'My Profile').'</span>
                                    <i class="glyphicon glyphicon-user hide visible-xs"></i>',
                                array(
                                    'plugin' => 'users',
                                    'controller' => 'users',
                                    'action' => 'view',
                                    $this->Session->read('Auth.User.username')
                                ),
                                array(
                                    'escape' => false
                                )
                            );
                            ?>
                        </li>
                        <?php
                        if($this->Session->read('Auth.User')){
                        ?>
                            <li>
                                <?php
                                echo $this->Html->link(
                                    '<span class="hidden-xs">'.__d('shop', 'Sign Out').'</span>
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
                        <?php
                        }else{
                        ?>
                            <li>
                                <?php
                                echo $this->Html->link(
                                    '<span class="hidden-xs">'.__d('shop', 'Sign In').'</span>
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
                                    __d('shop', 'Create Account'),
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