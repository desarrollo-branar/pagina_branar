<?php
include_once './templates/header_blog.php';
include_once './templates/navbar.php';

use Branar\Blog\model\Navegation;
use Branar\Blog\model\Post;
use Branar\Blog\model\Category;
use Branar\Blog\functions\UtilFunctions;
use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;

$id = Navegation::validateInput($params['id']);
$post = Post::getPostById($id);
?>
<main>

  <div class="container container_post-content mt-4">
    <div class="">
      <?php include_once "./src/entries/{$post[0]['file']}"?>
    </div>

    <aside class="aside_blog">
      <h3>Categorias</h3>
      <ul class="categorias border p-2">
        <?php
        $category = Category::getAll();
        
        foreach ($category as $key => $value) { 
          $category_name = UtilFunctions::split_letter($value['name'], 'upper');
          ?>
          <li>
            <a href="../blog_category/<?= UtilFunctions::split_letter($value['name'], 'split') ?>" class="p-2"><?= $category_name ?></a>
          </li>
  <?php } ?>
      </ul>
    </aside>
  </div>
  
  <section class="blog_comment">
    <header class="blog_comment_header">
      <h2 style="color: black;">Comentarios</h2>
    </header>
    <div>

    </div>
  </section>

</main>

<script>

  const title = "<?= $post[0]['title']?>";
  const header_card = document.querySelector('.blog-card-header');
  console.log(header_card);
  let h1 = document.querySelector('h1');
  let description = document.querySelector('.blog-card-description');

  h1.innerText = title;
  description.innerText = "<?= $post[0]['description']?>";

  header_card.style.backgroundImage = "url('../post_image/<?= $post[0]['featured_image'] ? $post[0]['featured_image']: 'tecnology_image.jpeg'?>')";

</script>

<?php require_once './templates/footer-blog.php'; ?>