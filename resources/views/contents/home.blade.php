@extends('layouts.app')

@section('content')
-- home.blade.php - Start - Section
    <div class="row">
      <div class="medium-6 columns">
        <h4>Landon Hotel App {{ $version }}</h4>
        <img class="thumbnail" src="images/attractions.jpg">
      </div>
      <div>
      <h2>Starten in der Konsole mit -> <pre>"php artisan serve"</pre></h2>
      </div>
      <div class="medium-6 large-5 columns">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
        <!-- Workflow: web.php (Routed zu den ensptrechenden Controller) ->  "ContentsController.php" (befüllt die Variablen, hier "data"-Array) -> home.blade.php (Ausgabe in der View) -->
        <p>{{ $last_updated }}</p>
        <p>{{ $meineWerte }}</p>
      </div>
    </div>
-- home.blade.php - End - Section
@endsection


