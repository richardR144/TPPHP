
<?php
require_once('../config/config.php');?>
<?php
require_once('../controller/indexControler.php');?>

<main>
    <section>
        <h1>reviews</h1>
            <?php foreach($reviews as $review){?>
                <article>
                    <h2><?php echo $review['name']; ?></h2>
                </article>
            <?php } ?>
            <?php if ('name' && 'message' && 'rating'){
                
            }
    </section>
    
</main>


<?php
require_once('../partial/footer.php');?>
<?php
require_once('../partial/lateral.php');?>