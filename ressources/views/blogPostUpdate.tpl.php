<?php include '../ressources/views/layouts/header.tpl.php';
global $posts_id?>
    <html>
    <div class="formulaire_update"><p>Tu as fait une erreur ? Où ça ?</p>
        <form action="../index.php?action=updatepost&id=<?= $posts_id?>" method="POST">
            <br> <label for="title">Titre de l'article</label><br>
            <input type="text" id="title" name="title"><br>
            <label for="numero">Numéro de l'article</label><br>
            <input type="number" id="id" name="id"><br>
            <span>Contenu de l'article</span>
            <textarea name="content" style="width: 60%; height: 20%;">
            Contenu de l'article à modifier
        </textarea><br>
            <button type="submit" name="submitted">Envoyer</button>
        </form>
    </div>
    </html>
<?php include '../ressources/views/layouts/footer.tpl.php'; ?>