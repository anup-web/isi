<?php

namespace Drupal\ds_ft_plus\Configurator;

use Drupal\ds_ft_plus\FieldDisplayProcessor\FieldDisplayProcessor_DsFieldTemplate;
use Drupal\cfrapi\Configurator\ConfiguratorInterface;
use Drupal\cfrapi\SummaryBuilder\SummaryBuilderInterface;

/**
 * @CfrPlugin("minimal", @t("Minimal"))
 */
class Configurator_FieldDisplayProcessor_Minimal implements ConfiguratorInterface {

  /**
   * @param mixed $conf
   *   Configuration from a form, config file or storage.
   * @param string|null $label
   *   Label for the form element, specifying the purpose where it is used.
   *
   * @return array
   */
  function confGetForm($conf, $label) {
    $form = array();

    $field_classes = _ds_classes('ds_classes_fields');

    // Field classes.
    if (array() !== $field_classes) {
      $form['classes'] = array(
        '#type' => 'select',
        '#multiple' => TRUE,
        '#options' => $field_classes,
        '#title' => t('Choose additional CSS classes for the field'),
        '#default_value' => isset($field_settings['classes']) ? explode(' ', $field_settings['classes']) : array(),
        '#prefix' => '<div class="field-classes">',
        '#suffix' => '</div>',
      );
    }
    else {
      $form['classes'] = array(
        '#type' => 'value',
        '#value' => array(''),
      );
    }

    $form['lb-col'] = array(
      '#type' => 'checkbox',
      '#title' => t('Hide label colon'),
      '#default_value' => isset($conf['lb-col']) ? $conf['lb-col'] : FALSE,
      '#attributes' => array(
        'class' => array('colon-checkbox'),
      ),
    );

    return $form;
  }

  /**
   * @param mixed $conf
   *   Configuration from a form, config file or storage.
   * @param \Drupal\cfrapi\SummaryBuilder\SummaryBuilderInterface $summaryBuilder
   *   An object that controls the format of the summary.
   *
   * @return mixed|string|null
   *   A string summary is always allowed. But other values may be returned if
   *   $summaryBuilder generates them.
   */
  function confGetSummary($conf, SummaryBuilderInterface $summaryBuilder) {
    // TODO: Implement confGetSummary() method.
  }

  /**
   * @param mixed $conf
   *   Configuration from a form, config file or storage.
   *
   * @return \Drupal\renderkit\FieldDisplayProcessor\FieldDisplayProcessorInterface
   *   Value to be used in the application.
   */
  function confGetValue($conf) {

    $ft = array('func' => 'theme_ds_field_minimal');

    if (isset($conf['classes'])) {
      $ft['classes'] = is_array($conf['classes'])
        ? implode(' ', $conf['classes'])
        : (string)$conf['classes'];
    }

    if (isset($conf['lb-col'])) {
      $ft['lb-col'] = TRUE;
    }

    return new FieldDisplayProcessor_DsFieldTemplate($ft);
  }
}
