<?php
if (isset($_POST['titre']) && isset($_POST['content']) && $_POST['titre'] !== '') {
    /* création d'un fichier wiki */
    $slug = makeSlug($_POST['titre']);
    echo $slug;
    $dirYear = date('Y');
    $dirMonth = date('m');
    $prefixFile = date('d-h-i');
    $fileName = $prefixFile . '-' . $slug;
    $pathDir = './assets/files/' . $dirYear . '/' . $dirMonth;
    $pathFile = $pathDir . '/' . $fileName . '.txt';
    /*echo $pathFile;*/
    /* création des répertoires s'ils n'existent pas */
    if (!file_exists($pathFile)) {
        mkdir($pathDir, 0777, true);
    }
    /* création du fichier texte */
    if (!$file = fopen($pathFile, 'w+')) {
        echo 'impossible de créer le fichier : ' . $pathFile . '';
    } else {
        fwrite($file, '<h1>'.$_POST['titre'].'</h1>');
        fwrite($file, $_POST['content']);
        fclose($file);
        header('location: ./');
    }
}
?>
<article>
    <h2>Ajouter un article</h2>
    <form method="post" action="?action=add" id="formArticle">
        <label class="form-label my-1">Titre</label>
        <input class="form-control my-1" type="text" name="titre" />
        <label class="form-label my-1">Corps</label>
        <input type="hidden" id="content" name="content" />
        <div class="my-2">
            <div id="editor">

            </div>
        </div>
        <button class="btn btn-outline-success btn-sm my-1" id="valid" type="submit">Ajouter</button>
    </form>
</article>