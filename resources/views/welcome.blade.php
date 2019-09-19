
@include('default')

<div class="container">
  <table id="mytable" class="table table-bordred table-striped">
                   
    <thead>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Groupe</th>
          <th>Modifier</th>
          <th>Supprimer</th>
    </thead>
    <tbody>
        @foreach ($users as $user)
          <tr>

              <td>{{$user->first_name}}</td>
              <td>{{$user->last_name}}</td>
              <td>{{$user->name}}</td>
              <td>
                <button class="btn btn-primary btn-xs" >
                  <a href="{{route('showUser',$user->id)}}" style="color: white;text-decoration: none">Modifier</a>
                </button>
              </td>
              <td>
                <button class="btn btn-danger btn-xs">
                  <a href="{{route('deleteUser',$user->id)}}" style="color: white;text-decoration: none">Supprimer</a>
                </button>
              </td>

          </tr>
 
    @endforeach 
    </tbody>
        
  </table>
</div>
</body>
</html>


  



