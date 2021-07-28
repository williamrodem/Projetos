@extends('layouts.main')

@section('title', 'Atendimento')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
<h4>Informe o Medico:</h4>
  <form action="/atendimento" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="crm_doctor">Crm:</label>
      <input type="text" class="form-control" id="crm_doctor" name="crm_doctor" placeholder="Crm" required="required"gu  >
    </div>
    <div class="form-group">
      <label for="name_doctor">Nome</label>
      <input type="text" class="form-control" id="name_doctor" name="name_doctor" placeholder="Nome do Medico">
    </div>
    <div class="form-group">
      <label for="specialty_doctor">Especialidade:</label>
      <input type="text" class="form-control" id="specialty_doctor" name="specialty_doctor" placeholder="Especialidade">
    </div>
    <h4>Informações do Paciente:</h4>
    <div class="form-group">
      <label for="name_patient">Nome</label>
      <input type="text" class="form-control" id="name_patient" name="name_patient" placeholder="Nome do Paciente">
    </div>
    <div class="form-group">
      <label for="cpf_patient">cpf:</label>
      <input type="text" class="form-control" id="cpf_patient" name="cpf_patient" placeholder="CPF" required="required">
    </div>
    <div class="form-group">
        <label for="telephone_patient">Telefone:</label>
        <input type="tel" class="form-control" id="telephone_patient" name="telephone_patient" placeholder="telefone" default="(99)9999-9999" >
    </div>
    <div class="form-group">
      <label for="title">Plano de Saúde:</label>       
      <input type="text" class="form-control" id="health_insurance_patient" name="health_insurance_patient" placeholder="Planos ">
    </div>
    <div class="form-group">
      <label for="title">Data de atendimento</label>       
      <input type="datetime-local" class="form-control" id="data"
       name="data" value="00-00-00T19:30"
       min="10/01/01T00:00:00" max="30/12/31T00:00:00">
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Cadastro">
    </form>
</div>
@endsection