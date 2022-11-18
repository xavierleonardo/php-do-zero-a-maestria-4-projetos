<?php
include_once('templates/header.php');

if (isset($_GET['id'])) {
  $currentPost = array_filter($posts, function ($post) {
    if ($post['id'] == $_GET['id']) {
      return true;
    };
  })[0];
}
?>

<main id="post-container">
  <div class="content-container">
    <h1 id="main-title"><?= $currentPost['title'] ?></h1>

    <p id="post-description"><?= $currentPost['description'] ?></p>

    <div class="img-container">
      <img src="<?= $BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>" />
    </div>

    <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga illo voluptatum sint sapiente, eligendi dolor odio vel animi consectetur culpa magni similique? Fugiat eveniet quam, ipsa nisi porro quisquam animi?
      Ut quia ducimus labore veniam, quam totam! Eius nam in facilis natus amet fuga ipsam fugiat magni commodi ad consequuntur, officia corporis hic deserunt ratione et sunt! Expedita, natus atque?
      Quibusdam culpa eligendi minima beatae illum laborum, nesciunt hic tempore tenetur repellat dolorem neque molestias alias modi ex placeat distinctio fugiat quaerat iusto! Ipsam tempore ducimus suscipit quibusdam hic nemo!
      Modi optio amet similique quis at ducimus sint dolores maiores officiis adipisci, iure quam ex consequatur quidem odio quos. Consequuntur illo natus commodi impedit aliquam. Cupiditate quos ab quibusdam sunt.
      Fugiat eveniet ipsum quia illo atque aperiam minima saepe dolorum officiis molestiae laudantium rerum ratione ullam pariatur voluptas animi facere aspernatur corporis, perspiciatis, officia, eos quas dignissimos. Ab, asperiores quod.</p>
  </div>
</main>

<aside id="nav-container">
  <h3 id="tags-title">Tags</h3>
  <ul id="tag-list">
    <?php foreach ($currentPost['tags'] as $tag) : ?>
      <li><a href="#"><?= $tag ?></a></li>
    <?php endforeach; ?>
  </ul>

  <h3 id="categories-title">Categorias</h3>
  <ul id="categories-list">
    <?php foreach ($categories as $category) : ?>
      <li><a href="#"><?= $category ?></a></li>
    <?php endforeach; ?>
  </ul>
</aside>
</body>

</html>

<?php
include_once('templates/footer.php');
