<?php

namespace Drupal\viacep_address_composite\Element;

use Drupal\webform\Element\WebformCompositeBase;
use Drupal\Component\Utility\Html;

/**
 * Provides a webform element for an address element.
 *
 * @FormElement("webform_viacep_address_composite")
 */
class WebformViacepAddressComposite extends WebformCompositeBase {

  /**
   * {@inheritdoc}
   */
  public function getInfo() {


    $info = parent::getInfo() + [
      '#theme' => 'viacep_address_composite',
      '#attached' => [
        'library' => ['viacep_address_composite/viacep_class', 'viacep_address_composite/viacep_address_composite'],
      ]
    ];

    return $info;
  }

  /**
   * {@inheritdoc}
   */
  public static function preRenderCompositeFormElement($element) {
    $element = parent::preRenderCompositeFormElement($element);

    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public static function getCompositeElements(array $elements) {

    $elements = [];

    $elements['postal_code'] = [
      '#type' => 'textfield',
      '#title' => t('CEP'),
      '#attributes' => ['class' => ['viacep-address-composite--postal-code']],
      '#wrapper_attributes' => ['class' => 'viacep-address-composite-js'],
    ];

    $elements['address'] = [
      '#type' => 'textfield',
      '#title' => t('Endereço'),
      '#attributes' => ['class' => ['viacep-address-composite--address']],
      '#wrapper_attributes' => ['class' => ['viacep-address-composite-js']]
    ];

    $elements['address_number'] = [
      '#type' => 'textfield',
      '#title' => t('Número'),
      '#attributes' => ['class' => ['viacep-address-composite--address_number']],
      '#wrapper_attributes' => ['class' => 'viacep-address-composite-js']
    ];

    $elements['address_suplement'] = [
      '#type' => 'textfield',
      '#title' => t('Complemento'),
      '#attributes' => ['class' => ['viacep-address-composite--address_supplement']],
      '#wrapper_attributes' => ['class' => 'viacep-address-composite-js']
    ];

    $elements['neighborhood'] = [
      '#type' => 'textfield',
      '#title' => t('Bairro'),
      '#attributes' => ['class' => ['viacep-address-composite--neighborhood']],
      '#wrapper_attributes' => ['class' => ['viacep-address-composite-js']]
    ];

    $elements['city'] = [
      '#type' => 'textfield',
      '#title' => t('Cidade'),
      '#attributes' => ['class' => ['viacep-address-composite--city']],
      '#wrapper_attributes' => ['class' => 'viacep-address-composite-js']
    ];

    $elements['state_province'] = [
      '#type' => 'textfield',
      '#title' => t('Estado'),
      '#attributes' => ['class' => ['viacep-address-composite--state_province']],
      '#wrapper_attributes' => ['class' => 'viacep-address-composite-js']
    ];

    return $elements;
  }

}
