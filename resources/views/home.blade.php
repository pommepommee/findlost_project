@extends('template_base')

@section('titre_page')
    Accueil
@endsection

@section('page')
<div class="view">
 <div class="container">
   <div class="row">
     <div class="col-sm-6">
       <a href="/lost" class="button_image" id="button_lost" height="300px" width="300px"></a>
    </div>
     <div class="col-sm-6">
       <a href="/find" class="button_image" id="button_find" height="300px" width="300px"></a>
   </div>
 </div>
</div>
@endsection
