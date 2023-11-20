@extends('components.layout')

@section('content')
<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">

          <x-devision titre='Ressource Humain' code='DRH' nombre="{{ $division['DRH']??0 }}"  />
          <x-devision titre='Collectivites locales ' code='DCL' nombre="{{ $division['DCL']??0 }}"  />
          <x-devision titre='Budget et des marches' code='DBM' nombre="{{ $division['DBM']??0 }}"  />
          <x-devision titre='Affares economiques et de la coordination ' code='DAEC' nombre="{{ $division['DAEC']??0 }}"  />
          <x-devision titre='Laction sociale ' code='DLS' nombre="{{ $division['DLS']??0 }}" />
          <x-devision titre='Affaires ruales ' code='DAR' nombre="{{ $division['DAR']??0 }} " />
          <x-devision titre='Urbanisme et de environnement' code='DUE' nombre="{{ $division['DUE']??0 }}"  />
          <x-devision titre='equipements' code='EQUIPE' nombre="{{ $division['EQUIPE']??0 }} " />
       
        
        
        
     
      </div>
    </div>

  </div>
</section>
@endsection
