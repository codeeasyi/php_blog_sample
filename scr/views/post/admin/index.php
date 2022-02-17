<?php include ('../src/views/layout/header.php') ?>

<br>
<br>

<h3>Posts verwalten</h3>

<ul>
<?php foreach ($posts as $post): ?> 
    <li>
      <a href="posts-edit?id=<?php echo e($post->id);  ?> ">
      <?php echo e($post->title);  ?>
      </a>
    </li>
<?php endforeach; ?> 
</ul>

<a href="dashboard">Dashboard</a>

<?php include ('../src/views/layout/footer.php') ?>