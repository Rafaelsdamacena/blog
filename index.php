<?php
    include_once("templates/header.php");
?>

    <main>
        <div id="title-container">
            <h1>TÍTULO</h1>
            <p> Subtítulo </p>
        </div>

        <div id="post-container">
            <?php foreach($posts as $post): ?>
                <div class="post-box">
                    <img src="<?= $BASE_URL ?>/img/<?= $post['img']?>" alt="<?= $post['title'] ?>">
                    <h2 class="post-title">
                        <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id']?>"><?= $post['title'] ?>
                    </h2>
                    <p class="post-description"><?= $post['description']?></p>
                    <div class="tags-container"> 
                        <?php foreach($posts['tags'] as $tag): ?>
                            <a href="#"> <?= $tag ?> </a>
                        <?php endforeach; ?>

                    </div>
            <?php endforeach; ?>
        </div>

    </main>
    

<?php
    include_once("templates/footer.php");
?>