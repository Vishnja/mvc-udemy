<?php if($data['user']): ?>
    <p>This is <?php echo $data['user']->name; ?>'s profile.</p>
<?php else: ?>
    <p>User not found.</p>
<?php endif; ?>
