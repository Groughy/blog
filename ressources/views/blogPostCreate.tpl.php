<?php
include '../ressources/views/layouts/header.tpl.php';?>
<html>
    <div class="formulaire"><p>Merci d'être venu visité mon site. Pour plus d'informations, veuillez remplir le
            formulaire si dessous avec le plus d'élément possible.</p>
        <form action="../index.php?action=createarticle" method="POST">
            <br> <label for="title">Titre de l'article</label><br>
            <input type="text" id="title" name="title"><br>
                <span>Contenu de l'article</span>
                <textarea name="content" style="width: 60%; height: 400px;">
            Cet article possède des trucs !
        </textarea><br>
                <button type="submit" name="submitted">Envoyer</button>
        </form>
        </div>
</html>
<?php include '../ressources/views/layouts/footer.tpl.php';?>