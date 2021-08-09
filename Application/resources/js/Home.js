import React from 'react';
import ReactDOM from 'react-dom';
import 'bootstrap/dist/css/bootstrap.min.css';

const list = ['Titulo','valor'];

const Homes = (props) => {
  return(
  <div id="event-create-container" class="col-md-2 offset-md-1">
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="..."></img>
      <div class="card-body">
        <h5 class="card-title">{Titulo}</h5>
        <p class="card-text">Procediment Medico</p>
        <a href="/patient" class="btn btn-primary">Selecionar</a>
      </div>
    </div>
  </div>
  );
}
  
if (document.getElementById('homes')) {
  ReactDOM.render(<Homes />, document.getElementById('homes'));
}
export default Homes;