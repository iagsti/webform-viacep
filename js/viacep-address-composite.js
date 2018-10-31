(function ($, Drupal) {
  'use strict';

  Drupal.behaviors.viacepAddressComposite = {
    attach: function (context, settings) {

      let viacepFields = $('.viacep-address-composite-js', context).once('viacep-address-composite-js');

      let viacep = new Viacep();
      let viacepRequest = null;
      
      let formName = '';
      let postalCodeFields = viacepFields.find('.viacep-address-composite--postal-code');
      let postalCodeField = null;

      postalCodeFields.focusout(function () {

        postalCodeField = $(this);

        if (postalCodeField.val()) {

          formName = postalCodeField.attr('name').split('[')[0];
          viacep.setPostalCode(postalCodeField.val());
          viacepRequest = viacep.createQuery();

          viacep.getJSON(viacepRequest, function (response) {

            viacepFields.find('[name="' + formName + '[address]"]').val(response.logradouro);
            viacepFields.find('[name="' + formName + '[neighborhood]"]').val(response.bairro);
            viacepFields.find('[name="' + formName + '[city]"]').val(response.localidade);
            viacepFields.find('[name="' + formName + '[state_province]"]').val(response.uf);

          });

        }

      });

    }
  }

}(jQuery, Drupal));