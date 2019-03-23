<?php require VIEW_ROOT. '/templates/header.php'; ?>

   <?php if(empty($pages)): ?>
       <p>No pages at the moment.</p>
   <?php else: ?>
        <table>
        	<thead>
        		<tr>
        			<th>Label</th>
        			<th>Title</th>
        			<th>Slug</th>
        			<th></th>
        			<th></th>
        		</tr>
        	</thead>
        	<tbody>
        		<?php foreach($pages as $page): ?>
        			<tr>
        				<td><?= e($page['label']) ?></td>
        				<td><?= e($page['title']) ?></td>
        				<td>
        					<a href="<?= BASE_URL; ?>/page.php?page=<?= e($page['slug']) ?>"><?= e($page['slug']) ?></a>
        				</td>
        				<td><a href="<?= BASE_URL; ?>/admin/edit.php?id=<?= e($page['id']) ?>">Edit</a></td>
        				<td><a href="<?= BASE_URL; ?>/admin/delete.php?id=<?= e($page['id']) ?>">Delete</a></td>
        			</tr>
        	    <?php endforeach; ?>
        	</tbody>
        </table>
   <?php endif; ?>

   <a href="<?= BASE_URL ?>/admin/add.php">Add new page</a>

<?php require VIEW_ROOT. '/templates/footer.php'; ?>


