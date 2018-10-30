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

    $elements['viacep'] = [
      '#type' => 'fieldgroup',
      '#title' => t('Local'),
      '#attributes' => ['class' => ['viacep-address-composite--group']],
    ];

    $elements['viacep']['postal_code'] = [
      '#type' => 'textfield',
      '#title' => t('CEP'),
      '#attributes' => ['class' => ['viacep-address-composite--postal-code']],
      '#wrapper_attributes' => ['class' => 'viacep-address-composite-js'],
    ];

    $elements['viacep']['address'] = [
      '#type' => 'textfield',
      '#title' => t('Endereço'),
      '#attributes' => ['class' => ['viacep-address-composite--address']],
      '#wrapper_attributes' => ['class' => ['viacep-address-composite-js']]
    ];

    $elements['viacep']['address_number'] = [
      '#type' => 'textfield',
      '#title' => t('Número'),
      '#attributes' => ['class' => ['viacep-address-composite--address_number']],
      '#wrapper_attributes' => ['class' => 'viacep-address-composite-js']
    ];

    $elements['viacep']['neighborhood'] = [
      '#type' => 'textfield',
      '#title' => t('Bairro'),
      '#attributes' => ['class' => ['viacep-address-composite--neighborhood']],
      '#wrapper_attributes' => ['class' => ['viacep-address-composite-js']]
    ];

    $elements['viacep']['city'] = [
      '#type' => 'textfield',
      '#title' => t('Cidade'),
      '#attributes' => ['class' => ['viacep-address-composite--city']],
      '#wrapper_attributes' => ['class' => 'viacep-address-composite-js']
    ];

    $elements['viacep']['state_province'] = [
      '#type' => 'textfield',
      '#title' => t('Estado'),
      '#attributes' => ['class' => ['viacep-address-composite--state_province']],
      '#wrapper_attributes' => ['class' => 'viacep-address-composite-js']
    ];

    return $elements;
  }

  protected static function getHtmlId() {

    return Html::getUniqueId('viacep-address-composite');

  }

}
