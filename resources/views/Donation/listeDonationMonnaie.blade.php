<!DOCTYPE html>
<html>
    <head>
        <title>liste donations</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" >
    </head>
    <style>
      a{
        margin-left: 30px;
      }
    </style>
  <body>
    @include('./header')
      <br>
     <div class="container">
        <ul class="nav">
          <li class="nav-item"> 
          </li>
        </ul>
        <form method="GET" action ="/rechercheDonationMonnaie">
          <input type="search" name="q" placeholder="Recherche..." />
          <input type="submit" value="Valider" />
        </form><br>
     <table class="table">
       <thead>
         <tr>
          <th scope="col">#</th>
          <th scope="col">Devise</th>
          <th scope="col" >Montant</th>
          <th scope="col">Famille</th>
       </tr>
       </thead>
       <tbody>
           @foreach ($donations as $key => $donation)    
           <?php  $famille = App\Models\famille::find($donation->famille_id); ?>
    <tr>
    <td>{{$key+1}}</td>
    <td>{{$donation->devise}}</td>
    <td>{{$donation->montant}}</td>
    <td>{{$famille->nom}}</td>
    </tr>
        @endforeach
  </tbody>
</table>
     </div>
     <script src="/js/jquery-3.3.1.slim.min.js" ></script>
      <script src="/js/popper.min.js" ></script>
      <script src="/js/bootstrap.min.js" ></script>
      @include('./pied')
</body>
</html>