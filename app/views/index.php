<h1>Hello World</h1>

<?php if ($flash['error']) : ?>
    <p style="color:red">
        <?php echo $flash['error']; ?>
    </p>
<?php endif; ?>
<form action="<?php echo $addNameUrl ?>" method="post">
    <label for="name">Add your name</label>
    <input type="text" id="name" name="name" value="" />
    <input type="submit" name="submit" value="Add" />
</form>

<?php if (isset($visitors) && !empty($visitors)) : ?>
    <h2>Hello</h2>
    <ul>
        <?php foreach ($visitors as $visitor) : ?>
            <li><?php echo $this->escape($visitor->name()); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
