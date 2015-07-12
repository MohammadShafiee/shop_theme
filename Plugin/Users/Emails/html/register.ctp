<?php
if (!isset($url) || empty($url)):
    $url = Router::url(array(
        'plugin' => 'users',
        'controller' => 'users',
        'action' => 'activate',
        $user['User']['username'],
        $user['User']['activation_key'],
    ), true);
endif;
?>

<p style="direction:rtl; text-align: center" dir="ltr">
    <?php
    echo $this->Html->image('/images/logo.png', array(
        'fullBase' => true
    ));
    ?>
</p>
<p style="direction:rtl" dir="ltr">
    <span style="font-family:tahoma,arial,helvetica,sans-serif;font-size:11px">
        <span class="il">کاربر گرامی </span>
        <?php echo $user['User']['name'];?>
    </span>
</p>
<p style="direction:rtl" dir="ltr">
    <span style="font-family:tahoma,arial,helvetica,sans-serif;font-size:11px">
        ضمن تشکر از حسن انتخاب شما، برای تکمیل ثبت نام خود در سایت فروشگاه، لطفا برروی لینک زیر کلیک نمایید :
    </span>
</p>
<p style="direction:rtl" dir="ltr">
    <span style="font-family:tahoma,arial,helvetica,sans-serif;font-size:11px">لینک فعال سازی:<br>
    </span>
    <span style="font-family:tahoma,arial,helvetica,sans-serif;font-size:11px">
        <?php echo $url;?>
    </span>
</p>
<p style="direction:rtl;margin: 5px 0;" dir="ltr">
    <strong><span style="font-family:tahoma,arial,helvetica,sans-serif;font-size:11px">نام کاربری:&nbsp;<?php echo $user['User']['username'];?></span></strong>
</p>
<p style="direction:rtl;margin: 5px 0;" dir="ltr">
    <strong><span style="font-family:tahoma,arial,helvetica,sans-serif;font-size:11px">کلمه عبور:&nbsp;<?php echo $user['User']['registration_password'];?></span></strong>
</p>

<p style="direction:rtl" dir="ltr">
    <span style="font-family:tahoma,arial,helvetica,sans-serif;font-size:11px">با تشکر<br></span>
</p>