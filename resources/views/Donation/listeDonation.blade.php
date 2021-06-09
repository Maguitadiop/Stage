
<link rel="stylesheet" href="/css/bootstrap.min.css" />
@include('./header')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div id="bloc">
                <div class="card-deck">
                  <div class="card">
                    <img class="card-img-top" src="image/don2.jpg" alt="Card image cap" height="180px" width="200px">
                    <div class="card-body">
                      <h4 class="card-title" id="bloc">Textile sortant</h4>
                      <p class="card-text">Toutes les tailles sont le bienvenue : vêtements pour femme, pour homme,
                         pour enfant ou même bébé. Redonner une nouvelle vie aux vêtements dont vous n'avez plus l'utilité. Cela fera des heureux !</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted"><a href="/listeDonationTextile">Consulter le stock</a></small>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="image/don1.jpg" alt="Card image cap" height="180px">
                    <div class="card-body">
                      <h4 class="card-title" id="bloc">Alimentation sortant</h4>
                      <p class="card-text">Le don de denrées alimentaires aux plus démunis constitue un levier essentiel de la lutte contre la précarité en permettant
                         l’accès à tous à une nourriture sûre, saine, diversifiée, de bonne qualité et en quantité suffisante.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted"><a href="/listeDonationAliment">Consulter le stock</a></small>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="image/don3.jpg" alt="Card image cap" height="180px">
                    <div class="card-body">
                      <h4 class="card-title" id="bloc">Financier sortant</h4>
                      <p class="card-text"> Le don monétaire permet à l'association d'acheter tous les biens de nécessité qui seront par la suite distribués 
                      aux personnes dans le besoin. 
                      </p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted"><a href="/listeDonationMonnaie">Consulter le stock</a></small>
                    </div>
                  </div>
                </div>
                </div><br>
            </div>
        </div>
    </div>
    @include('./pied')