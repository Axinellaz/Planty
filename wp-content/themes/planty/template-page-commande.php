<?php
/*
Template Name: Commandes
*/
get_header()


?>
<div class="container-page-commande">

    <main class="commande-main"> 
        
        <h2 class="title-commandes"> COMMANDER </h2>
        <hr class="separateur">
    
        <section class="section-commande">
            <h3 class="sous-title-commande">Votre Commande</h3>
    
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
    
        <hr class="separateur">
    
    
        
        <form action="" method="post">
            
            <div class="container-form-flex">
    
                <div class="part-form left">
                    <h3 class="sous-title-commande">Vos informations</h3>
        
                    <label class="label-commande" for="nom">Nom</label>
                    <input class="input-commande" type="text" name="nom" id="nom">
                
                    <label class="label-commande" for="prenom">Prénom</label>
                    <input class="input-commande" type="text" name="prenom" id="prenom">
                
                    <label class="label-commande" for="email">E-mail</label>
                    <input class="input-commande" type="email" name="email" id="email">
                </div>
        
                <div class="separateur-verticale" ></div>
        
                <div class="part-form right">
        
                    <h3 class="sous-title-commande">Livraison</h3>
                
                    <label class="label-commande" for="adresse">Adresse de livraison</label>
                    <input class="input-commande" type="text" name="adresse" id="adresse">
                
                    <label class="label-commande" for="codepostal">Code postal</label>
                    <input class="input-commande" type="number" name="codepostal" id="codepostal">
                
                    <label class="label-commande" for="ville">Ville</label>
                    <input class="input-commande" type="text" name="ville" id="ville">
                
                </div>
            </div>
    
            <input class="btn-envoyer" type="submit" value="Commander">
        </form>
    
    </main>

</div>    
