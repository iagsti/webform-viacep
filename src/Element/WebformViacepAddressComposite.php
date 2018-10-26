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
    return parent::getInfo() + [
      '#attached' => [
        'library' => ['viacep_address_composite/viacep_address_composite']
      ]
    ];
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
    
    $html_id = Html::getUniqueId('webform_example_composite');

    $elements = [];

    $elements['postal_code'] = [
      '#type' => 'textfield',
      '#title' => t('CEP'),
      '#attributes' => ['data-webform-composite-id' => $html_id . '--postal_code'],
    ];

    $elements['address'] = [
      '#type' => 'textfield',
      '#title' => t('Endereço'),
      '#attributes' => ['data-webform-composite-id' => $html_id . '--address'],
    ];

    $elements['address_number'] = [
      '#type' => 'textfield',
      '#title' => t('Número'),
      '#attributes' => ['data-webform-composite-id' => $html_id . '--address_number'],
    ];

    $elements['neighborhood'] = [
      '#type' => 'textfield',
      '#title' => t('Bairro'),
      '#attributes' => ['data-webform-composite-id' => $html_id . '--neighborhood'],
    ];

    $elements['city'] = [
      '#type' => 'textfield',
      '#title' => t('Cidade'),
      '#attributes' => ['data-webform-composite-id' => $html_id . '--city'],
    ];

    $elements['state_province'] = [
      '#type' => 'textfield',
      '#title' => t('Estado'),
      '#attributes' => ['data-webform-composite-id' => $html_id . '--state_province'],
    ];

    return $elements;
  }

}
