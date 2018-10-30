(function ($, Drupal) {
  'use strict';

  Drupal.behaviors.viacepAddressComposite = {
    attach: function (context, settings) {
      
      let viacepFields = $('.viacep-address-composite--group', context);

      let postalCodeField = viacepFields.find('.viacep-address-composite--postal-code');
      let addressField = viacepFields.find('.viacep-address-composite--address');
      let neighborhood = viacepFields.find('.viacep-address-composite--neighborhood');
      let cityField = viacepFields.find('.viacep-address-composite--city');
      let stateField = viacepFields.find('.viacep-address-composite--state_province');

      let viacep = new Viacep();
      let viacepRequest = null;

      postalCodeField.focusout(function () {

        viacep.setPostalCode(postalCodeField.val());
        viacepRequest = viacep.createQuery();

        viacep.getJSON(viacepRequest, function (response) {

          addressField.val(response.logradouro);
          neighborhood.val(response.bairro);
          cityField.val(response.localidade);
          stateField.val(response.uf);
  
          console.log(response);
  
        });

      });

    }
  }

}(jQuery, Drupal));