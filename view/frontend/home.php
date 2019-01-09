<!DOCTYPE html>
<html>
<head>
    <title>Minimo | Accueil</title>
    <link rel="stylesheet" href="/minimo/assets/css/foundation.css">
</head>
<body>
    <div class="homeheader">
        <?php include "../header.php" ?>
        <img src="/minimo/assets/images/01_image_principale.png" alt="">
    </div>
    <div>
        <a>CATEGORIE DE L'ARTICLE</a>
        <h1>Titre de l'article</h1>
        <p>contenu de l'article : Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Curabitur fermentum interdum ipsum, at hendrerit nunc. Class aptent taciti sociosqu ad litora torquent 
        per conubia nostra, per inceptos himenaeos. Aliquam iaculis, dolor vel hendrerit condimentum, 
        sem mauris consectetur tellus, eu viverra ante enim sed sem. Vestibulum bibendum, odio ut molestie lacinia,
        turpis dui condimentum orci, ac bibendum nisl eros ut turpis. Aliquam aliquam laoreet fermentum.
        Duis id tincidunt elit, ullamcorper vehicula dui. Phasellus in diam ac elit placerat iaculis quis quis quam.</p>
        <a>LEAVE A COMMENT</a>
    </div>

    <div class="miniature grid-x">
        <div class="cell small-6">
            <img src="/minimo/assets/images/02_festival.png" alt="miniature article" />
            <p>blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla
            blablablabla blablablabla blablablabla blablablabla blablablabla</p>
        </div>
        <div class="cell small-6">
            <img src="/minimo/assets/images/03_caffee.png" alt="miniature article" />
            <p>blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla
            blablablabla blablablabla blablablabla blablablabla blablablabla</p>
        </div>
    </div>

    <div class="miniature grid-x">
        <div class="cell small-6">
            <img src="/minimo/assets/images/04_pont.png" alt="miniature article" />
            <p>blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla
            blablablabla blablablabla blablablabla blablablabla blablablabla</p>
        </div>
        <div class="cell small-6">
            <img src="/minimo/assets/images/05_montagnes.png" alt="miniature article" />
            <p>blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla
            blablablabla blablablabla blablablabla blablablabla blablablabla</p>
        </div>
    </div>

    <div class="newsletter">
        <form>
            Sign up for our newsletter!
            <input type="email" name="" id="" placeholder="Enter a valid email address" />
        </form>
    </div>

    <div class="miniature grid-x">
        <div class="cell small-6">
            <img src="/minimo/assets/images/06_girl.png" alt="miniature article" />
            <p>blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla
            blablablabla blablablabla blablablabla blablablabla blablablabla</p>
        </div>
        <div class="cell small-6">
            <img src="/minimo/assets/images/07_route_glace.png" alt="miniature article" />
            <p>blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla
            blablablabla blablablabla blablablabla blablablabla blablablabla</p>
        </div>
    </div>


    <input type="button" name="loadmore" value="Load more" /> <!-- requête AJAX -->

    <?php include "../footer.php" ?>

</body>
</html>
