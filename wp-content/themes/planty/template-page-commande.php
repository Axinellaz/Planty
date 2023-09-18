<?php
/*
Template Name: Commandes
*/
get_header()


?>
<main> 
    
    <h2 class="title-commandes"> Commandes </h2>
    <hr class="separateur">

    <section class="section-commande">
        <h3>Votre Commande</h3>

        <div class="direction-row"> 

            <div class="container-vignette">
            <?php

            include('tastes-tableau.php');


                foreach($taste as $key => $valueTab){
                    echo
                        $valueTab[ 'img' ].
                        '<p class="txt-vignette">' .$valueTab[ 'txt' ].'</p>';
                }

            ?>
            </div>
            
        </div>
    </section>

    <hr>

    <h3>Vos informations</h3>

    <form action="" method="post">

    <input type="text" name="nom" id="nom">
    <label for="nom">Nom</label>

    <input type="text" name="prenom" id="prenom">
    <label for="prenom">Prénom</label>

    <input type="email" name="email" id="email">
    <label for="email">E-mail</label>

    <hr>

    <h3>Livraison</h3>

    <input type="text" name="adresse" id="adresse">
    <label for="adresse">Adresse de livraison</label>

    <input type="number" name="codepostal" id="codepostal">
    <label for="codepostal">Code postal</label>

    <input type="text" name="ville" id="ville">
    <label for="ville">Ville</label>

    <input type="submit" value="Commander">
    </form>

</main>

