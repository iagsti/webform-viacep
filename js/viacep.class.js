const API = 'viacep.com.br/ws/';

export class viacep {
  
  setPostalCode (postalCode) {
    this.postalCode = postalCode;
  }

  createQuery () {
    if (this.postalCode) {
        return API + this.postalCode + '/';
    }
    return null;
  }

  getJSON (query, actions) {
    $.get(query + 'json/', function (response) {
        actions(response);
    });

  }

}