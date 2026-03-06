<h2>Film Reviews</h2>

<p>Total Reviews: <?php echo count($reviews); ?></p>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>Film</th>
        <th>Review</th>
        <th>Date</th>
        <th>Reviewer</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>

<?php foreach ($reviews as $review): ?>

<tr>
    <td><?php echo htmlspecialchars($review['film']); ?></td>

    <td><?php echo htmlspecialchars($review['reviewtext']); ?></td>

    <td><?php echo htmlspecialchars($review['reviewdate']); ?></td>

    <td><?php echo htmlspecialchars($review['reviewer']); ?></td>

    <td><?php echo htmlspecialchars($review['email']); ?></td>

    <td>
        <a href="editreview.php?id=<?php echo $review['id']; ?>">Edit</a>

        <form action="deletereview.php" method="post" style="display:inline;">
            <input type="hidden" name="id" value="<?php echo $review['id']; ?>">
            <input type="submit" value="Delete">
        </form>
    </td>
</tr>

<?php endforeach; ?>

</table>