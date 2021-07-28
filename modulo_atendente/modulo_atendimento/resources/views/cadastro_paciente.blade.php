@extends('layouts.main')

@section('title', 'Cadastro Paciente')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Cadastro Paciente</h1>
  <form action="/cadastro_paciente" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="title">Nome</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Paciente">
    </div>
    <div class="form-group">
      <label for="title">cpf:</label>
      <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" required="required">
    </div>
    <div class="form-group">
        <label for="title">Telefone:</label>
        <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="telefone" default="(99)9999-9999" >
    </div>
    <div class="form-group">
      <label for="title">Plano de Saúde:</label>       
      <input type="text" class="form-control" id="health_insurance" name="health_insurance" placeholder="Planos ">
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Cadastro">
  </form>
</div>
<hr>
<br>


<!--###########################################################################-->
<div class="col-md-6 offset-md-3" id="event-create-container">
    <h1>Pacientes Cadastrados:</h1>
</div>
<div class="col-md-6 offset-md-3 dashboard-events-container">
  <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Cpf</th>
                <th scope="col">Telefone</th>
                <th scope="col">Plano</th>
            </tr>
        </thead>
        <tbody>
        @foreach($patients as $patients)
            <td scropt="row">{{$loop->index + 1}}</td>
            <td scope="col">{{$patients->name}}</td>
            <td scope="col">{{$patients->cpf}}</td>
            <td scope="col">{{$patients->telephone}}</td>
            <td scope="col">{{$patients->health_insurance}}</td>
        </tbody>
         @endforeach
</table>
</div>
@endsection