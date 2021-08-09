import React from 'react';
import { Button, Form, FormGroup, Label, Input} from 'reactstrap';

const Values = (props) => {
return (
<Form>
    <FormGroup>
        <Label for="title">Valor Consulta:</Label>
        <Input type="text" name="query_values" id="query_values" placeholder="valores" />
    </FormGroup>
    <FormGroup>
        <Label for="title">Parcelas:</Label>
        <Input type="text" name="parcel_values" id="parcel_values" placeholder="valores parcelar" />
    </FormGroup>
    <FormGroup>
        <Label for="title">Comissão:</Label>
        <Input type="text" name="commission_values" id="commission_values" placeholder="valores parcelar" />
    </FormGroup>
    <FormGroup>
        <Label for="title">Data</Label>
        <Input type="text" name="registration_date_doctors" id="registration_date_doctors placeholder="/>
    </FormGroup>
    <Button>Submit</Button>
</Form>
) ;  
} 
export default Values;