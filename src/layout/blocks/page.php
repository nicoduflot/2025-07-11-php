<div class="container">
    <div class="row">
        <main class="col-md-10">
            <?php
            if( isset($_GET['idArticle']) &&  $_GET['idArticle'] !== '' && is_numeric($_GET['idArticle']) ){
                include './src/layout/blocks/article.php';
            }else{
                include './src/layout/blocks/homepage.php';
            }
            ?>
        </main>
        <aside class="col-md-2 order-md-first">
            <?php include './src/layout/blocks/colonne.php'; ?>
        </aside>
    </div>
</div>