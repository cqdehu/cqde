<?php

$text = isset($_POST['text']) ? htmlspecialchars($_POST['text']) : '';
$id = isset($_POST['id']) ? htmlspecialchars($_POST['id']) : '';
$color = isset($_POST['color']) ? htmlspecialchars($_POST['color']) : '';

?>

<div class="toast rounded-bottom-4 rounded-top-5 border-0 bg-<?php echo $color ?>" id="<?php echo $id ?>" data-bs-delay="6000">
    <div class="toast-header rounded-top-4 border-0">
        <strong class="me-auto name">SYSTEM</strong>
    </div>
    <div class="toast-body price">
        <?php echo $text?>
    </div>
</div>