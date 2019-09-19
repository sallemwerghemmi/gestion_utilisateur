  @include('default')

<div class="container">
      <form method="post" action="{{route('editUser',$user->id)}}">
          @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Nom</label>
                <input type="" class="form-control" id="exampleFormControlInput1" value="{{$user['first_name']}}" name="nom" required>
             </div>

             <div class="form-group">
                <label for="exampleFormControlInput1">Prénom</label>
                <input type="" class="form-control" id="exampleFormControlInput1" value="{{$user['last_name']}}" name="prenom" required>
             </div>
          <div class="form-group">
               <label for="exampleFormControlSelect1">Example select</label>
               <select class="form-control" id="exampleFormControlSelect2" name="group">
                @foreach ($groups as $group)
                   <option  {{($user['group_id'] == $group['id']) ? 'selected' : ''}}  value="{{$group['id']}}" > {{$group['name']}} </option>
                @endforeach
              </select>
          </div>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
</div>

</body>
</html>

