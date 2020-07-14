<tr>
	<td><?php echo $rowsSub->name; ?></td>
	<td style="text-align:center;">
		<a href="index.php?controller=categories&action=update&id=<?php echo $rowsSub->id; ?>">Edit</a>&nbsp;
		<a href="index.php?controller=categories&action=delete&id=<?php echo $rowsSub->id; ?>"
		   onclick="return window.confirm('Are you sure?');">Delete</a>
	</td>
</tr>
