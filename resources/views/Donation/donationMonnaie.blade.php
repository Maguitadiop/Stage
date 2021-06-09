<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
    <style>
        #form{
            width:70%;
            margin-left: 15%;
        }
        #h3{
            text-align: center;
        }
    </style>
    </head>
    <body>
        @include('./header')
        <form action ="/panierDonationMonnaie/updateMonnaie" method='POST' id="form">
            {{ csrf_field() }}
                  <h3 id="h3">Panier Monnaie</h3><br>
                  <div class="form-group">
                <label for="inputAddress">Famille</label>
                <select id="inputState" class="form-control" name="famille_id"> 
                 {{$Familles = App\Models\famille::all()}}
                    <option selected>Famille</option>
                    @foreach ($Familles as $key => $Famille) 
                    <option value="{{$Famille->id}}">{{$Famille->id}} : {{$Famille->nom}}</option>
                    @endforeach
                  </select>
              </div>
             
 <table class="table">

         <tr>
          <th scope="col">Devise</th>
          <th scope="col">Montant</th>
          <th scope="col">Monatant à donner</th>
       </tr>
       </thead>
     <tbody>   
    <td> 
    <?php
    for($i=0;$i<sizeof($_POST['choix']);$i++)
    {
        $monnaie = App\Models\Monnaie::find($_POST['choix'][$i]);
        $Coffre = $_POST['choix'][$i];
        echo "<tr><td>".$monnaie->devise."</td>";
        echo "<td>".$monnaie->montant."</td>";
        if($monnaie->montant <= 0){ echo("<td>Indisponible</td>");}
        else{echo "<td><input type='number' name='montants[]' id='' placeholder='Montant a donnée' min='0' max='$monnaie->montant'></td>";}
        
        echo "<td><input type='hidden' name='choix[]' id='choix' value='$Coffre' max='$monnaie->montant'></td></tr>";
    }
    ?>
    </td>  
  </tbody>
</table>   
                  <button type="submit" class="btn btn-primary">Donner</button>
                </form>
      
                <script src="js/bootstrap.min.js"></script>
                <script src="js/bootstrap.bundle.min.js"></script>
    </body>
    @include('./pied')
</html>
