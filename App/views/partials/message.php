<?php

use Framework\Session;
?>

<?php $successMessage = Session::getFlashMessage('success_message');
?>
<?php if ($successMessage !== null): ?>
    <div class="message bg-green-100 p-3 my-3">
        <?= $successMessage ?>
    </div>
<?php endif; ?>

<?php $errorMessage = Session::getFlashMessage('error_message');
?>
<?php if ($errorMessage !== null): ?>
    <div class="message bg-red-100 p-3 my-3">
        <?= $errorMessage ?>
    </div>
<?php endif; ?>

<!-- <?php if (isset($_SESSION['flash_success_message'])): ?>
    <div class="message bg-green-100 p-3 my-3">
        <?= $_SESSION['flash_success_message'] ?>
    </div>
    <?php unset($_SESSION['flash_success_message']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['flash_error_message'])): ?>
    <div class="message bg-red-100 p-3 my-3">
        <?= $_SESSION['flash_error_message'] ?>
    </div>
    <?php unset($_SESSION['flash_error_message']); ?>
<?php endif; ?> -->