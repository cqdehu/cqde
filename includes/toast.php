<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST['text'] ?? '';
    $id = $_POST['id'] ?? '';
    $color = $_POST['color'] ?? 'info';
}



?>

<div class="toast rounded-bottom-4 rounded-top-5 border-0 bg-<?php echo $color ?>" id="<?php echo $id ?>" data-bs-delay="6000">
    <div class="toast-header rounded-top-4 border-0">
        <strong class="me-auto name">SYSTEM</strong>
    </div>
    <div class="toast-body price">
        <?php echo $text ?>
    </div>
</div>