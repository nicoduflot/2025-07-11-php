<div class="container">
    <div class="row">
        <main class="col-md-10">
            <?php
            if(isset($_GET['action'])){
                switch ($_GET['action']){
                    case 'show':
                        if( isset($_GET['idArticle']) &&  $_GET['idArticle'] !== '' && is_numeric($_GET['idArticle']) ){
                            include './src/layout/blocks/article.php';
                        }
                        break;
                    case 'add':
                            include './src/layout/blocks/form-article.php';
                        break;
                    default:
                        include './src/layout/blocks/homepage.php';
                }
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