<?php if (count($errors) > 0): ?>
    <div class="err">
    <?php foreach ($errors as $error): ?>
        <P><?php echo $error;   ?></p>
    <?php endforeach ?>
    </div>
<?php endif ?>