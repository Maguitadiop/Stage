<link rel="stylesheet" href="/css/bootstrap.min.css" />
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div id="bloc">
                    <div class="card-deck">
                      <div class="card">
                        <img class="card-img-top" src="image/don2.jpg" alt="Card image cap" height="180px" width="200px">
                        <div class="card-body">
                          <h4 class="card-title" id="bloc">Textile</h4>
                          <p class="card-text">Toutes les tailles sont le bienvenue : vêtements pour femme, pour homme,
                             pour enfant ou même bébé. Redonner une nouvelle vie aux vêtements dont vous n'avez plus l'utilité. Cela fera des heureux !</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted"><a href="/listeTextile">Consulter le stock</a></small>
                        </div>
                      </div>
                      <div class="card">
                        <img class="card-img-top" src="image/don1.jpg" alt="Card image cap" height="180px">
                        <div class="card-body">
                          <h4 class="card-title" id="bloc">Alimentation</h4>
                          <p class="card-text">Le don de denrées alimentaires aux plus démunis constitue un levier essentiel de la lutte contre la précarité en permettant
                             l’accès à tous à une nourriture sûre, saine, diversifiée, de bonne qualité et en quantité suffisante.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted"><a href="/listeAliment">Consulter le stock</a></small>
                        </div>
                      </div>
                      <div class="card">
                        <img class="card-img-top" src="image/don3.jpg" alt="Card image cap" height="180px">
                        <div class="card-body">
                          <h4 class="card-title" id="bloc">Financier</h4>
                          <p class="card-text"> Le don monétaire permet à l'association d'acheter tous les biens de nécessité qui seront par la suite distribués 
                          aux personnes dans le besoin. 
                          </p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted"><a href="/listeMonnaie">Consulter le stock</a></small>
                        </div>
                      </div>
                    </div>
                    </div><br><br>
                    <div id="bloc">
                      <div class="card-deck">
                        <div class="card">
                          <img class="card-img-top" src="image/famille.png" alt="Card image cap" height="180px" width="200px">
                          <div class="card-body">
                            <h4 class="card-title" id="bloc">Famille</h4>
                            <p class="card-text">Découvrer en un clic les familles qui bénéficeront des dons apportés.</p>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted"><a href="/listeFamille">Consulter les familles</a></small>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="image/personnes.jpg" alt="Card image cap" height="180px" width="200px">
                          <div class="card-body">
                            <h4 class="card-title" id="bloc">Personnes</h4>
                            <p class="card-text">Découvrer en un clic les personnes qui bénéficeront des dons apportés.</p>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted"><a href="/listeFamille">Consulter les personnes</a></small>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="image/don4.gif" alt="Card image cap" height="180px">
                          <div class="card-body">
                            <h4 class="card-title" id="bloc">Donations effectuees</h4>
                            <p class="card-text"> Vous allez trouver la liste des donations déja effectuées. 
                              C'est à dire le stock(aliment, monnaie, textile, ...)sortant.
                            </p>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted"><a href="/listeMonnaie">Consulter le stock sortant</a></small>
                          </div>
                        </div>
                      </div>
                      </div>




            </div>
        </div>
    </div>
</x-app-layout>







