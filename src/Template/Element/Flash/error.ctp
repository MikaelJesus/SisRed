<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="mensaje">
<div class="alert alert-dismissible alert-danger" onclick="this.classList.add('hidden');">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<?= $message ?>
</div>
</div>
