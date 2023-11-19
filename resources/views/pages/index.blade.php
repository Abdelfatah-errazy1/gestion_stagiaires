@extends('components.layout')

@section('content')
<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">

          <x-devision titre='Ressource Humain' code='DRH' nombre='10'  />
          <x-devision titre='Collectivites locales ' code='DCL' nombre='7'  />
          <x-devision titre='Budget et des marches' code='DBM' nombre='5'  />
          <x-devision titre='Affares economiques et de la coordination ' code='DAEC' nombre='13'  />
          <x-devision titre='Laction sociale ' code='DLS' nombre='8'  />
          <x-devision titre='Affaires ruales ' code='DAR' nombre='9'  />
          <x-devision titre='Urbanisme et de environnement' code='DUE' nombre='3'  />
          <x-devision titre='equipements' code='EQUIPE' nombre='2'  />
       
        
        
        
     
      </div>
    </div>

  </div>
</section>
@endsection
