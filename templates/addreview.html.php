<h2>Add Review</h2>

<form action="" method="post">

<p>
<label>Review Text</label>
<textarea name="reviewtext" rows="5"></textarea>
</p>

<p>
<label>Film</label>
<select name="filmid">

<?php foreach ($films as $film): ?>

<option value="<?= $film['id'] ?>">
<?= htmlspecialchars($film['title']) ?>
</option>

<?php endforeach; ?>

</select>
</p>

<p>
<label>Reviewer</label>

<select name="reviewerid">

<?php foreach ($reviewers as $reviewer): ?>

<option value="<?= $reviewer['id'] ?>">
<?= htmlspecialchars($reviewer['name']) ?>
</option>

<?php endforeach; ?>

</select>
</p>

<p>
<input type="submit" value="Add Review">
</p>

</form>