<?php
$mapClass = array(
    'error' => 'danger',
    'success' => 'success',
    'warning' => 'warning',
    'information' => 'info',
    'other' => 'other'
);
$class = isset($class) ? $class : 'other';
$escape = isset($escape) ? $escape : true;

if ($escape):
    $message = h($message);
endif;
?>
<div class="alert alert-<?php echo $mapClass[$class];?>" role="alert">
    <?php echo $message; ?>
</div>
