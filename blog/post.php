<?php
    include_once("templates/header.php");


    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;
        
        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"> <?=$currentPost['title'] ?> </h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium deleniti modi quam rem, blanditiis qui inventore quos, aut esse laudantium quisquam beatae atque laboriosam consequuntur voluptatibus nobis at molestiae assumenda.
            Omnis odit cumque autem explicabo, quae veritatis molestias minus, unde magni itaque molestiae magnam illo harum soluta ut repudiandae culpa sit temporibus? Eveniet placeat officiis magnam ratione cumque? Sit, atque.
            Voluptatem corrupti ipsum quia laboriosam inventore ducimus ex aspernatur, voluptatum dolorem soluta facere minima voluptates, reiciendis adipisci earum! Eos minus veritatis vero officia optio dicta quam id quasi sapiente quidem.
            Est suscipit esse, molestiae adipisci repellendus recusandae. Quo blanditiis repellendus nobis! Aliquid cum error, sed excepturi beatae perspiciatis illo doloremque doloribus itaque? Dicta quam maiores non, explicabo vero odit doloremque.
            Excepturi placeat, maxime error dicta impedit assumenda pariatur provident natus nulla rem dolorem, nostrum molestiae praesentium quis tempore nemo incidunt. Tempora commodi reiciendis quae itaque asperiores repudiandae veniam aperiam odit?
            </p>
        </div>

    </main>
    <aside id="nav-container">
        <h3 id="tag-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?=$tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
            <li><a href="#"><?=$category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
    
<?php
    include_once("templates/footer.php");
?>