<!-- Syntax @extends('<Ordnername>.<Bladedateiname') -->
@extends('layouts.app')

<!-- Noch eine Section ins Template -->
@section('copyright')
-- copyright.blade.php - Start - Section
<div class="row column">
  <hr>
  <ul class="menu">
    <li class="float-right">Copyright 2017</li>
  </ul>
</div>
-- copyright.blade.php - Start - Section
@endsection

