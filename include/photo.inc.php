<article class="col-4 miniature">

    <a href="photo.php?titre=<?php echo $photo["titre"]; ?>" title="photo-1">
        <img src="images/<?php echo $photo["image"]; ?>" alt="photo-1" title="photo 1">
        <p><?php echo $photo["nb_likes"]; ?> likes</p>
    </a>

    <div class="infos">
        <h3><?php echo $photo["titre"]; ?> #<?php echo $photo["categorie"]; ?></h3>
        <p>
            <?php foreach ($photo["tags"] as $tag) : ?>
                # <?php echo $tag; ?>
            <?php endforeach; ?>
        </p>
        <p><?php echo $photo["date_creation"]->format("d F Y"); ?></p>
    </div>

</article>