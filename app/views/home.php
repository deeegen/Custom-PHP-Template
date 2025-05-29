<?php
ob_start();
?>
<h2>Home Page</h2>
<p><?= $message ?></p>
<?php
$content = ob_get_clean();
$title = "Home";
require __DIR__ . '/layout.php';
