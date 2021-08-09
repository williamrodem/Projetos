import React from 'react';
import ReactDOM from 'react-dom';
import { Button, Form, FormGroup, Label, Input} from 'reactstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'resources/js/ValuesForm.js';
const PatientForms = (props) => {
return (
<Form>
    <FormGroup>
        <Label for="title">Nome:</Label>
        <Input type="text" name="name" id="name" placeholder="Nome" />
    </FormGroup>
    <FormGroup>
    <FormGroup>
        <Label for="title">Cpf:</Label>
        <Input type="text" name="age" id="age" placeholder="Idade do Paciente" />
    </FormGroup>
        <Label for="title">Altura:</Label>
        <Input type="text" name="height" id="height" placeholder="Altura do Paciente " />
    </FormGroup>
    <FormGroup>
        <Label for="title">Peso:</Label>
        <Input type="text" name="weight" id="weight" placeholder="Peso do Paciente " />
    </FormGroup>
    <FormGroup>
        <Label for="title">Data</Label>
        <Input type="date" name="registration_date_doctors" id="registration_date_doctors placeholder="/>
    </FormGroup>
 
    <Button>Submit</Button>
</Form>
);
} 
if(document.getElementById('patientforms')){
    ReactDOM.render(<PatientForms />,document.getElementById('patientforms'));
}
export default PatientForms;