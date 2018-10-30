const API = 'http://viacep.com.br/ws/';

class Viacep {
  
  setPostalCode (postalCode) {
    this.postalCode = postalCode;
  }

  createQuery () {
    if (this.postalCode) {
        console.log(API);
        return API + this.postalCode + '/';
    }
    return null;
  }

  getJSON (query, actions) {
    (function ($) {
      $.get(query + 'json/', function (response) {
        actions(response);
      })
    } (jQuery));
  }

}     