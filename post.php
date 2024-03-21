<?php
    include_once(__DIR__ . '/templates/header.php');

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;
    
        foreach($posts as $post) {
            
          if($post['id'] == $postId){
            $currentPost = $post;
          }
        }
    
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 class="main-title"><?= $currentPost['title']?></h1>
            <p id="post-description"><?= $currentPost['description']?></p>
            <div class="img-container">
                <img src="<?php $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?php $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis ratione accusamus quae corrupti doloribus enim aspernatur quisquam sapiente accusantium magni, ipsum necessitatibus suscipit repudiandae animi placeat eos beatae atque autem!
            Iure possimus eos totam quas cumque enim velit mollitia labore natus voluptate excepturi maiores odio, similique fugiat sed. Eos minima quam sequi illo. Perspiciatis eos soluta architecto praesentium fuga numquam?
            Maiores quis provident voluptatibus magnam alias obcaecati eum quod odio facilis nulla aliquid, deleniti quas quos iste harum repudiandae voluptas aliquam necessitatibus expedita incidunt quasi. Corporis accusantium perspiciatis ipsum dolorem?
            Doloribus quis sint amet tempora, ratione, officiis reprehenderit eum, ex aliquam ipsa labore consectetur accusantium deserunt vitae debitis suscipit ullam vel repellendus placeat! Ab laudantium magni dolor fugiat, quibusdam itaque.
            Iste eum tempora quibusdam incidunt itaque beatae suscipit quas excepturi pariatur iure consequuntur quod minima id eligendi nihil sit, quia dolore nam tempore ea ex cum sint soluta. Doloribus, maxime.</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis ratione accusamus quae corrupti doloribus enim aspernatur quisquam sapiente accusantium magni, ipsum necessitatibus suscipit repudiandae animi placeat eos beatae atque autem!
            Iure possimus eos totam quas cumque enim velit mollitia labore natus voluptate excepturi maiores odio, similique fugiat sed. Eos minima quam sequi illo. Perspiciatis eos soluta architecto praesentium fuga numquam?
            Maiores quis provident voluptatibus magnam alias obcaecati eum quod odio facilis nulla aliquid, deleniti quas quos iste harum repudiandae voluptas aliquam necessitatibus expedita incidunt quasi. Corporis accusantium perspiciatis ipsum dolorem?
            Doloribus quis sint amet tempora, ratione, officiis reprehenderit eum, ex aliquam ipsa labore consectetur accusantium deserunt vitae debitis suscipit ullam vel repellendus placeat! Ab laudantium magni dolor fugiat, quibusdam itaque.
            Iste eum tempora quibusdam incidunt itaque beatae suscipit quas excepturi pariatur iure consequuntur quod minima id eligendi nihil sit, quia dolore nam tempore ea ex cum sint soluta. Doloribus, maxime.</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>

<?php 
    include_once(__DIR__ . '/templates/footer.php');
?>
