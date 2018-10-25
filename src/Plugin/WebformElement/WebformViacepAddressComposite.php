<?php

namespace Drupal\viacep_address_composite\Plugin\WebformElement;

use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\webform\WebformSubmissionInterface;
use Drupal\webform\Plugin\WebformElement\WebformCompositeBase;

/**
 * Provides an 'address' element.
 *
 * @WebformElement(
 *   id = "webform_viacep_address_composite",
 *   label = @Translation("Viacep Address Composite"),
 *   description = @Translation("Viacep API provides a form element to collect
 * address information (street, city, state, zip)."),
 *   category = @Translation("Composite elements"),
 *   multiline = TRUE,
 *   composite = TRUE,
 *   states_wrapper = TRUE,
 * )
 */
class WebformViacepAddressComposite extends WebformCompositeBase {

  /**
   * {@inheritdoc}
   */
  protected function formatHtmlItemValue(array $element, WebformSubmissionInterface $webform_submission, array $options = []) {
    return $this->formatTextItemValue($element, $webform_submission, $options);
  }

   /**
   * {@inheritdoc}
   */
  protected function formatTextItemValue(array $element, WebformSubmissionInterface $webform_submission, array $options = []) {
    $value = $this->getValue($element, $webform_submission, $options);
    die(var_dump($value));
    $lines = [];
    $lines[] = ($value['postal_code'] ? $value['postal_code'] : '') .
      ($value['address'] ? $value['address'] : '') .
      ($value['address_number'] ? $value['address_number'] : '');
    return $lines;
  }

}
