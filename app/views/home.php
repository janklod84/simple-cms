<?php require VIEW_ROOT. '/templates/header.php'; ?>

   <?php if(empty($pages)): ?>
       <p>Sorry, no pages at the moment.</p>
   <?php else: ?>
        <ul>
        	<?php foreach($pages as $page): ?>
                 <li><a href="<?= BASE_URL; ?>/page.php?page=<?= $page['slug'] ?>"><?= $page['label'] ?></a></li>
        	<?php endforeach; ?>
        </ul>
   <?php endif; ?>

<?php require VIEW_ROOT. '/templates/footer.php'; ?>


