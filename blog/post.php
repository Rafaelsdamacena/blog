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
            <p class="post-content">
                <?=$currentPost['text'] ?>
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
        
    </aside>
    
<?php
    include_once("templates/footer.php");
?>