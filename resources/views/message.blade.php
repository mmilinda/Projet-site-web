@include ('header')
<br><br>
<div class="row">
                        @if (session('message'))
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
                        </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Numero</th>
      <th scope="col">Profil</th>
      <th scope="col">Nom</th>
      <th scope="col">E-mail</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Message</th>
      <th scope="col">Bouton</th>
    </tr>
  </thead>
  <tbody>
  @php $count = 1 @endphp <!-- Initialisez une variable de compteur -->
  @foreach($contacts as $notifications)
  
    <tr>
    <td>{{$count}}</td> <!-- Affichez le numéro du compteur -->
      <td>{{$notifications->un}}</td>
      <td>{{$notifications->nom}}</td>
      <td>{{$notifications->email}}</td>
      <td>{{$notifications->tel}}</td>
      <td>{{$notifications->message}}</td>

      <!--<td><button class="btn btn-primary" type="submit" 
      onclick="return confirm('Voulez-vous vraiment supprimer cet élément ?')">Delete</button></td>-->
<td>
<form method="POST" action="{{ route('contacts.destroy', $notifications->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer cet élément ?')" class="btn btn-danger">Supprimer</button>
</form>

</td>
      

    </tr>
    @php $count++ @endphp <!-- Incrémentation du compteur à chaque itération -->

    @endforeach
  </tbody>
</table>

<br><br><br><br>
@include ('footer')