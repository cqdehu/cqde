<?php

$text = $_POST['text'];

?>

<div class="toast rounded-bottom-4 rounded-top-5 border-0 bg-danger" id="toast" data-bs-delay="6000">
    <div class="toast-header rounded-top-4 border-0">
        <strong class="me-auto name">SYSTEM</strong>
    </div>
    <div class="toast-body price">
        <?php echo $text?>
    </div>
</div>