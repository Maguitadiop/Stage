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
        
        <form action ="/panierDonationTextile/updateTextile" method='POST' id="form">
            {{ csrf_field() }}
                  <h3 id="h3">Panier Textile</h3><br>
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
          <th scope="col">Type </th>
          <th scope="col">Taille </th>
          <th scope="col">Couleur</th>
       </tr>
       </thead>
     <tbody>   
    <td> 
    <?php
    for($i=0;$i<sizeof($_POST['choix']);$i++)
    {
        $textile=App\Models\Textile::find($_POST['choix'][$i]);
        $Coffre = $_POST['choix'][$i];
        echo "<tr><td>".$textile->type."</td>";
        echo "<td>".$textile->taille."</td>";
        echo "<td>".$textile->couleur."</td>";
        
        echo "<td><input type='hidden' name='choix[]' id='choix' value='$Coffre'></td></tr>";
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
</html>