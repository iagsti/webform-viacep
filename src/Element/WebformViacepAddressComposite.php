<?php

namespace Drupal\viacep_address_composite\Element;

use Drupal\webform\Element\WebformCompositeBase;

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
    return parent::getInfo();
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
    ];

    $elements['address'] = [
      '#type' => 'textfield',
      '#title' => t('Endereço')
    ];

    $elements['address_number'] = [
      '#type' => 'textfield',
      '#title' => t('Número'),
    ];

    $elements['neighborhood'] = [
      '#type' => 'textfield',
      '#title' => t('Bairro')
    ];

    $elements['city'] = [
      '#type' => 'textfield',
      '#title' => t('Cidade'),
    ];

    $elements['state_province'] = [
      '#type' => 'textfield',
      '#title' => t('Estado'),
    ];

    return $elements;
  }

}
