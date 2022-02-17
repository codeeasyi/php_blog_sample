<?php include ('../src/views/layout/header.php') ?>

<br>
<br>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo e($post["title"]); ?></h3>
    </div>
    <div class="panel-body"> 
        <?php echo nl2br(e($post["content"])); ?>
    </div>
</div>

<ul class="list-group">
    <?php foreach($comments as $comment): ?>
    <li class="list-group-item">
        <?php echo e($comment->content); ?>
    </li>
    <?php endforeach; ?>
</ul>

<form method="post" action="post?id=<?php echo e($post["id"]); ?>">
    <textarea name="content" class="form-control"></textarea>
    <br>
    <input type="submit" value="Add Comment" class="btn btn-primary">
</form>

<br>
<br>

<?php include ('../src/views/layout/footer.php') ?>