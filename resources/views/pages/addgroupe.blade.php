
  @include('default')
  <div class="container">

	  <form method="post" action="{{route('postGroupe')}}">
	  	@csrf
		  <div class="form-group">
			    <label for="exampleInputEmail1">NOM DU GROUPE</label>
			    <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom_groupe" REQUIRED >
			    <small id="emailHelp" class="form-text text-muted">VEUILLEZ TAPER LE NOM DU GROUPE</small>
		  </div>
		  <button type="submit" class="btn btn-primary">Ajouter groupe</button>
	  </form>

  </div>

</body>
</html>
