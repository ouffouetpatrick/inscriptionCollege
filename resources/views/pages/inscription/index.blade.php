@extends('layouts/main')
@section('css')
<style>
    table{
        margin-top: 2rem;
    }

    .formInscription{
        margin-top: 2rem; 
    }

    form{
        display: flex;
        justify-content: space-between;
    }

    .button{
        margin-left: 1rem;
        color: blue;
    }

    .liste{
      margin-top: 2rem;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      text-transform: uppercase;
      font-weight: bold;
    }
</style>
@endsection

@section('content')

<div class="liste d-flex justify-content-center">
  <p>Veuillez Ajoutez votre nom à la liste de présence</p>
</div>
<div class="formInscription">
    {!! Form::open(['route' =>'admin.inscription.store']) !!}
      {!! Form::text('nom',null,['class'=>'form-control','id'=>'nom','placeholder'=>'Entrez votre nom']) !!}
      {!! Form::text('prenoms',null,['class'=>'form-control','id'=>'prenoms','placeholder'=>'Entrez votre prenoms']) !!}
      {!! Form::text('quartier',null,['class'=>'form-control','id'=>'quartier','placeholder'=>'Entrez votre quartier']) !!}
      <button type="submit" class="btn btn-primary">Enregitrer</button>
    {!! Form::close() !!}
</div>
<table id="tab" class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenoms</th>
      <th scope="col">Quartier</th>
      <th scope="col">Date d'enregistrement</th>
    </tr>
  </thead>
  <tbody>
    @foreach($inscriptions as $key => $inscription)
    <tr>
      <th scope="row">{{ $key + 1 }}</th>
      <td>{{ $inscription->nom }}</td>
      <td>{{ $inscription->prenoms }}</td>
      <td>{{ $inscription->quartier }}</td> 
      <td>{{ $inscription->created_at }}</td> 
    </tr>
    @endforeach
  </tbody>
</table>
<div class="d-flex justify-content-center">
  {!! $inscriptions->links() !!}
</div>

@endsection

@section('js')
  <script>
    let essai = document.querySelector('#tab');
    console.log(essai);
  </script>
@endsection