@extends('layouts.main')

@section('title', 'Cadastro Medico')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Cadastro Medico</h1>
  <form action="/cadastro_medico" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="title">Crm:</label>
      <input type="text" class="form-control" id="crm" name="crm" placeholder="Crm" onclick="validar()" required="required"gu  >
    </div>
    <div class="form-group">
      <label for="title">Nome</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Medico">
    </div>
    <div class="form-group">
      <label for="title">Especialidade:</label>
      <input type="text" class="form-control" id="specialty" name="specialty" placeholder="Especialidade">
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Cadastro" onclick="validar()"></input>
  </form>
</div>

@endsection

</div>