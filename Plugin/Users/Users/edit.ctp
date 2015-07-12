<?php
$this->request->data['User'] = $user['User'];
?>
<div class="container main-container">
    <?php $this->set('currentPath', $title_for_layout);?>
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7">
            <div class="row userInfo">
                <div class="col-xs-12 col-sm-6">
                    <h2 class="block-title-2"> اطالعات کاربری من </h2>
                    <?php
                    echo $this->Form->create('User', array(), array(
                        'role' => 'form',
                        'class' => 'regForm',
                        'novalidation' => 'novalidate'
                    ));
                    echo $this->Form->input('username',
                        array(
                            'div' => array(
                                'class' => 'form-group'
                            ),
                            'label' => __d('croogo', 'Username'),
                            'class' => 'form-control',
                            'disabled' => 'disabled'
                        ));
                    echo $this->Form->input('password',
                        array(
                            'div' => array(
                                'class' => 'form-group'
                            ),
                            'label' => __d('croogo', 'Password'),
                            'class' => 'form-control',
                            'value' => ''
                        ));
                    echo $this->Form->input('verify_password',
                        array(
                            'div' => array(
                                'class' => 'form-group'
                            ),
                            'label' => __d('croogo', 'Verify Password'),
                            'class' => 'form-control',
                            'type' => 'password',
                            'value' => ''
                        ));
                    echo $this->Form->input('name',
                        array(
                            'div' => array(
                                'class' => 'form-group'
                            ),
                            'label' => __d('croogo', 'Name'),
                            'class' => 'form-control',
                        ));
                    echo $this->Form->input('email',
                        array(
                            'div' => array(
                                'class' => 'form-group'
                            ),
                            'label' => __d('croogo', 'Email'),
                            'class' => 'form-control',
                        ));
                    echo $this->Form->input('website',
                        array(
                            'div' => array(
                                'class' => 'form-group'
                            ),
                            'label' => __d('croogo', 'Website'),
                            'class' => 'form-control',
                        ));
                    ?>
                    <button type="submit" class="btn   btn-primary">
                        <i class="fa fa-user"></i> <?php echo __d('shop', 'Update my account');?>
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