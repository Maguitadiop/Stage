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
        <form action ="/listeMonnaie/updateMonnaie/{{$monnaie->id}}" method='POST' id="form">
            {{ csrf_field() }}
                  <h3 id="h3">Modification finançieres</h3><br>
                  <div class="form-group">
                      <label for="inputAddress">Devise</label>
                      <input type="text" class="form-control" id="inputAddress" 
                      placeholder="Ex: euros, dollars, ..." name="devise" value="{{$monnaie->devise}}">
                    </div><br>
                  <div class="form-group">
                    <label for="inputAddress2">Montant</label>
                    <input type="number" class="form-control" id="inputPassword4"
                     placeholder="" name="montant" value="{{$monnaie->montant}}">
                  </div><br>
                  <input type="hidden" name="categorie_id" value="3"><br>
                  <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
      
                <script src="js/bootstrap.min.js"></script>
                <script src="js/bootstrap.bundle.min.js"></script>
                @include('./pied')
    </body>
</html>