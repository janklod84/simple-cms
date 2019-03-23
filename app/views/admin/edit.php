<?php require VIEW_ROOT. '/templates/header.php'; ?>
     <h2>Edit Page</h2>
 	<form action="<?= BASE_URL ?>/admin/edit.php" method="POST" autocomplete="off">
 	    <label for="title">
 	    	Title
 	    	<input type="text" name="title" id="title" value="<?= e($page['title']) ?>">
 	    </label>
 	    <label for="label">
 	    	Label
 	    	<input type="text" name="label" id="label" value="<?= e($page['label']) ?>">
 	    </label>
 	    <label for="slug">
 	    	Slug
 	    	<input type="text" name="slug" id="slug" value="<?= e($page['slug']) ?>">
 	    </label>
 	    <label for="body">
 	    	Body
 	    	<textarea name="body" id="body" cols="30" rows="10"><?= e($page['body']) ?></textarea>
 	    </label>
        
        <input type="hidden" name="id" value="<?= e($page['id']); ?>">

 	    <input type="submit" value="Edit">
 	</form>
<?php require VIEW_ROOT. '/templates/footer.php'; ?>