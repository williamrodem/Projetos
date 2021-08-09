import React from 'react';
import ReactDOM from 'react-dom';
import { Button, Form, FormGroup, Label, Input} from 'reactstrap';
import 'bootstrap/dist/css/bootstrap.min.css';

const DoctorForms = (props) => {
return (
<Form>
    <FormGroup>
        <Label for="title">Nome:</Label>
        <Input type="text" name="name_doctors" id="name_doctors" placeholder="Nome" />
    </FormGroup>
    <FormGroup>
    <FormGroup>
        <Label for="title">Especialidade: </Label>
        <Input type="text" name="specialty" id="specialty" placeholder="Especialidade" />
    </FormGroup>
        <Label for="title">Crm</Label>
        <Input type="text" name="crm" id="crm" placeholder="crm" />
    </FormGroup>
    <FormGroup>
        <Label for="title">Data</Label>
        <Input type="date" name="registration_date_doctors" id="registration_date_doctors placeholder="/>
    </FormGroup>
    <Button>Submit</Button>
</Form>
);
}

if(document.getElementById('doctorforms')){
    ReactDOM.render(<DoctorForms/>,document.getElementById('doctorforms'));
}

export default DoctorForms;