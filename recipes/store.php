

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width ,initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Simply Recipes</title>
    <link rel="stylesheet" href="../recipes/store (2).css">

</head>
<body>
    <nav>
        <a href="../home/home.php">HOME</a>
        <a href="../recipes/store.php">STORE</a>
        <a href="../recipes/sign out.php">SING OUT<i class="fas fa-caret-down"></i></a>
    </nav>



    <div class="title">
    <h1>BIENVENUE A NOTRE SITE WEB</h1>
    </div>
    <div class="description">
    <h3>“Des recettes pour tous les jours” : Vous cherchez des idées pour vos repas quotidiens ? Découvrez notre sélection de 50 recettes faciles qui vous permettront de concocter des plats délicieux sans passer des heures en cuisine. Que vous soyez débutant ou chef expérimenté, ces recettes sont adaptées à tous les niveaux de compétence.</h3>
    </div>
    <div class="recipe-grid">
        <div class="recipe">
            <img src="../img/tarte au poireaux.webp" alt="recipe 1">
            <div class="recipe-title">TARTE AU POIREAUX</div>
            <div class="recipe-description">
                <ol>
                    <li>1 Rouleau de pâte brisé</li>
                    <li>4 Poireaux</li>
                    <li>4 Oeufs</li>
                    <li>25 cl Crème liquide</li>
                    <li>2 cuil. à soupe Farine pour le moule</li>
                    <li>20 g Beurre</li>
                    <li>5 g Beurre pour le moule</li>
                    <li>Sel</li>
                    <li>Poivre</li>
                </ol>
            </div>
            <br>
            <br>
            <br>
            <div class="recipe-price">1500 DA</div>
            <br>
            <br>
            <br>
            <form method="post" >
                <button type="submit" class="order-recipe">ORDER</button>
            </form>
            <?php
                $maVariable = false;
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $maVariable = true;
                }
                
                if ($maVariable === true) {
                    echo "Successfully ordered";
                }
            ?>
            <br>
            <br>
        </div>

        <div class="recipe">
            <img src="../img/filets de maquerreux.webp" alt="recipe 2">
            <div class="recipe-title">FILETS DE MAQUERREUX </div>
            <div class="recipe-description"> 
                <ol>
                <li>8 Maquereaux vidés</li>
                <li>1 Carotte</li>
                <li>1 Oignon tige </li>
                <li>1 Citron</li>
                <li>1 Bouquet garni</li>
                <li>2 cuil. à soupe Huile d'olive</li>
                <li>1 cuil. à soupe Vinaigre de cidre</li>
                <li>Sel</li>
                <li>Poivre</li>
            </ol>
        </div>
        <br>
        <br>
        <br>
            <div class="recipe-price">2500 DA</div>
            <br>
            <br>
            <br>
            <form method="post" >
                <button type="submit" class="order-recipe">ORDER</button>
            </form>
            <?php
                $maVariable = false;
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $maVariable = true;
                }
                
                if ($maVariable === true) {
                    echo "Successfully ordered";
                }
            ?>
        </div>
        <div class="recipe">
            <img src="../img/quiche au courgettes et tomates.jpg" alt="recipe 3">
            <div class="recipe-title">QUICHE AU COURGETTES</div>
            <div class="recipe-description">
                <ol>
                    <li>1 Pâte brisée</li>
                    <li>2 Courgettes</li>
                    <li>1O ignon</li>
                    <li>2 Oeufs</li>
                    <li>10 cl Lait</li>
                    <li>15 cl Crème fraîche</li>
                    <li>Noix de muscade</li>
                    <li>Huile d'olive</li>
                    <li>Sel</li>
                    <li>Poivre</li>
                </ol>
            </div>
            <br>
            <div class="recipe-price">1250 DA</div>
            <br>
            <br>
            <br>
            <form method="post" >
                <button type="submit" class="order-recipe">ORDER</button>
            </form>
            <?php
                $maVariable = false;
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $maVariable = true;
                }
                
                if ($maVariable === true) {
                    echo "Successfully ordered";
                }
            ?>
            <br>
            <br>
        </div>
        <div class="recipe">
            <img src="../img/tranches chou-fleur.jpg" alt="recipe 4">
            <div class="recipe-title">TRANCHES AU CHOU-FLEURS</div>
            <div class="recipe-description">
                <ol>
                    <li>1 Petit chou-fleur</li>
                    <li>3 cuil. à soupe Huile neutre</li>
                    <li>4 cuil. à soupe Sauce teriyaki </li>
                    <li>1 Citron vert</li>
                    <li>1 cuil. à café Graines de nigel</li>
                    <li>2 Branches de persil plat</li>
                    <li>Sel</li>
                    <li>Poivre</li>
                </ol>
            </div>
            <br>
            <br>
            <br>
            <div class="recipe-price">1400 DA</div>
            <br>
            <br>
            <br>
            <form method="post" >
                <button type="submit" class="order-recipe">ORDER</button>
            </form>
            <?php
                $maVariable = false;
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $maVariable = true;
                }
                
                if ($maVariable === true) {
                    echo "Successfully ordered";
                }
            ?>
            <br>
            <br>
        </div>
        <div class="recipe">
            <img src="../img/recetteprojet.jpeg" alt="recipe 5">
            <div class="recipe-title">RIZ FACILE</div>
            <div class="recipe-description">
                <ol>
                    <li>250 g de blancs de poulet</li>
                    <li>200 g de riz</li>
                    <li> 100 g de poivron rouge</li>
                    <li>100 g d'oignon soit 1</li>
                    <li> 75 g de petits pois</li>
                    <li>0,50 litre de bouillon de légumes</li>
                    <li>30 g d'huile d'olive</li>
                </ol>
            </div>
            <br>
            <div class="recipe-price">2000 DA</div>
            <br>
            <br>
            <br>
            <form method="post" >
                <button type="submit" class="order-recipe">ORDER</button>
            </form>
            <?php
                $maVariable = false;
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $maVariable = true;
                }
                
                if ($maVariable === true) {
                    echo "Successfully ordered";
                }
            ?>
            <br>
        </div>
        <div class="recipe">
            <img src="../img/boeuf bourguignon.jpeg" alt="recipe 6">
            <div class="recipe-title">BOEUF BOURGUIGNON</div>
            <div class="recipe-description">
                <ol>
                    <li>800 grams de bourguignon</li>
                    <li>100 grams De lardons</li>
                    <li>50 grams Soupe d'huile</li>
                    <li>2 Oignons</li>
                    <li>2 C.a.s de farine </li>
                    <li>Sel</li>
                    <li>250 grams De champignons de Paris</li>
                </ol>
            </div>
            <br>
            <div class="recipe-price">2500 DA </div>
            <br>
            <br>
            <br>
            <form method="post" >
                <button type="submit" class="order-recipe">ORDER</button>
            </form>
            <?php
                $maVariable = false;
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $maVariable = true;
                }
                
                if ($maVariable === true) {
                    echo "Successfully ordered";
                }
            ?>
            <br>
        </div>
    </div>
    <footer>
        <div class="contact-info">
            <h3>Contact Us</h3>
            <p>Email: <span id="contact-email">brahimisofia123@gmail.com</span></p>
        </div>
    
        <div class="helpful-links">
            <ul>
                <li><a href="../recipes/aboutus.php">About Us</a></li>
                <li><a href="../recipes/support.php">Support</a></li>
                <li><a href="../recipes/privacy.php">Privacy Policy</a></li>
            </ul>
        </div>
    
        <div class="social-media">
            <a href="https://www.instagram.com/" target="_blank">Instagram</a>
            <a href="https://facebook.com" target="_blank">Facebook</a>
        </div>
        <br>
        <div class="footer-bottom">
            <p>&copy; All rights reserved.</p>
        </div>

    </footer>


    <script>

    
        // Function to validate email format
        function validateEmail(email) {
            const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return regex.test(email);
        }

document.addEventListener("DOMContentLoaded", () => {
    const contactEmail = document.getElementById("contact-email").innerText;
    if (!validateEmail(contactEmail)) {
        console.error("Invalid email format: " + contactEmail);
    }
});
</script>
</body>
</html>
