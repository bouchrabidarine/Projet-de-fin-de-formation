
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wireframe - Solde</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- En-tête -->
    <header>
        <h1>SOLDE</h1>

        <nav>
            <a href="#accueil">Accueil</a>
            <a href="#acheter">Acheter</a>
            <a href="#vendre">Vendre</a>
            <a href="#panier">Mon panier</a>
        </nav>
    </header>

    <!-- Page d'accueil -->
    <main id="accueil">

        <section class="bienvenue">
            <h2>Bienvenue sur Solde</h2>
            <p>Achetez et vendez des articles à petits prix.</p>

            <a href="#acheter">Acheter un article</a>
            <a href="#vendre">Vendre un article</a>
        </section>

        <!-- Liste des produits -->
        <section id="acheter">
            <h2>Liste des produits</h2>
<?php foreach($project as $pro):?>
            <div class="produits">
                <article class="produit">
                    <h3><?=htmlspecialchars($pro["titre"])?></h3>
                    <p><?=htmlspecialchars($pro["image"])?></p>
                    <p><?=htmlspecialchars($pro["Description"])?></p>
                    <p><?=htmlspecialchars($pro["prix"])?></p>
                    <p><?=htmlspecialchars($pro["Quantité"])?></p>
                    <a href="#panier">Ajouter au panier</a>
                </article>

            </div>
            <?php endforeach;?>
        </section>
    <!-- Pied de page -->
    <footer>
        <p>Solde - Acheter et vendre à petits prix</p>
    </footer>

</body>
</html>

