<?php
// A változó, amit ellenőrzünk
$variable = true; // vagy false vagy valamilyen érték

// Csak akkor generálódjon a HTML rész, ha a változó igaz vagy van értéke
if ($variable === true || isset($variable)) {
?>
<div class="col-2">
    <div class="row border bg-light rounded-4 p-2">
        <div class="col p-0 m-0 d-flex justify-content-center align-items-center gap-2">
            <img src="/src/profile_dark.svg" alt="" height="15">
            <p class="p-0 m-0 text-center">2</p>
        </div>
    </div>
</div>
<?php
}
?>
