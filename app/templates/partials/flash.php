<?php if (!empty($this->errors)): ?>
	<ul class="errors">
		<?php foreach ($this->errors as $error): ?>
			<li><?= $error; ?></li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>

<?php if (!empty($this->messages)): ?>
	<ul class="messages">
		<?php foreach ($this->messages as $message): ?>
			<li><?= $message; ?></li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>
