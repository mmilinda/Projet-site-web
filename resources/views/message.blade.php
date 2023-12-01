@include ('header')
<br><br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">E-mail</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
  @foreach($contacts as $notifications)
    <tr>
      <th scope="row">{{$notifications->un}}</th>
      <td>{{$notifications->nom}}</td>
      <td>{{$notifications->email}}</td>
      <td>{{$notifications->tel}}</td>
      <td>{{$notifications->message}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

<br><br><br><br>

@include ('footer')