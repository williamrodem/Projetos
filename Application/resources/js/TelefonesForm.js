import React from 'react';
import { Button, Form, FormGroup, Label, Input} from 'reactstrap';

const TelefoneForms = (props) => {
return (
<Form>
    <FormGroup>
        <Label for="title">Telefone Medico:</Label>
        <Input type="tel" name="tel_m" id="tel_m" placeholder="Telefone medico" />
    </FormGroup>
    <FormGroup>
        <Label for="title">Telefone Paciente:</Label>
        <Input type="tel" name="tel_p" id="tel_p" placeholder="Telefone Paciente" />
    </FormGroup>
    <FormGroup>
        <Label for="title">Data</Label>
        <Input type="text" name="registration_date_doctors" id="registration_date_doctors placeholder="/>
    </FormGroup>
    <FormGroup check>
        <Label check>
          <Input type="checkbox" />{' '}
          Check me out
        </Label>
    </FormGroup>
    <Button>Submit</Button>
</Form>
);
} 
export default TelefoneForms;