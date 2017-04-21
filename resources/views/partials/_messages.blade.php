<!-- FLASH MESSAGES FOR THE USER -->
<!-- GREEN SUCCESS -->
@if (Session::has('success'))

  <div class="alert alert-success" role="alert">
    <strong>YAY Success:</strong> {{ Session::get('success') }}
  </div>

@endif


@if (count($errors) > 0)
  <!-- DANGER/RED ERROR FLASH MESSAGE -->
  <div class="alert alert-danger" role="alert">
    <strong>Oops we have several errors :(</strong>
    <ul>
    @foreach ($errors->all() as $error)<!-- research has shown that users are scared when they see errors. Using sad faces will ease the user -->
      <li>{{ $error }}</li>
    @endforeach
    </ul>
  </div>

@endif
