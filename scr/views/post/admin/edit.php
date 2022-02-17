<?php include ('../src/views/layout/header.php') ?>

<br>
<br>

<h3>Post edit</h3>

<form method="post" action="posts-edit?id=<?php echo e($post["id"]); ?>">
    <input type="text" name="title" value="<?php echo e($post["title"]); ?>" /></input>
    <br>
    <textarea name="content"><?php echo nl2br(e($post["content"])); ?></textarea>
    <br><br>

    <input type="submit" value="Change Post" class="btn btn-primary">
</form>

<a class="btn btn-primary" href="dashboard">Cancel</a>

<br>
<br>

<?php include ('../src/views/layout/footer.php') ?>