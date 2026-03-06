<h2>Edit Review</h2>

<form action="" method="post">

<input type="hidden" name="id" value="<?= $review['id'] ?>">

<p>
<textarea name="reviewtext" rows="5">
<?= htmlspecialchars($review['reviewtext']) ?>
</textarea>
</p>

<p>
<input type="submit" value="Update Review">
</p>

</form>