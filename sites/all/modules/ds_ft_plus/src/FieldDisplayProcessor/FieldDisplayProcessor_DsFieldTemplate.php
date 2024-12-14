<?php

namespace Drupal\ds_ft_plus\FieldDisplayProcessor;

use Drupal\renderkit\FieldDisplayProcessor\FieldDisplayProcessorInterface;

class FieldDisplayProcessor_DsFieldTemplate implements FieldDisplayProcessorInterface {

  /**
   * @var array
   */
  private $dsExtrasFt;

  /**
   * @CfrPlugin("default", @t("Default field template setting"))
   *
   * @return \Drupal\renderkit\FieldDisplayProcessor\FieldDisplayProcessorInterface
   */
  public static function createDefault() {
    return new self(array());
  }

  /**
   * @CfrPlugin("reset", @t("Full reset"))
   *
   * @return \Drupal\renderkit\FieldDisplayProcessor\FieldDisplayProcessorInterface
   */
  public static function createReset() {
    $ft = array('func' => 'theme_ds_field_reset');
    return new self($ft);
  }

  /**
   * @param array $dsExtrasFt
   */
  public function __construct(array $dsExtrasFt) {
    $this->dsExtrasFt = $dsExtrasFt;
  }

  /**
   * @param array $build
   *   Render array with ['#theme' => 'field', ..]
   *
   * @return array
   */
  function process(array $build) {
    $build[DS_FT_PLUS_PROPERTY] = $this->dsExtrasFt;
    return $build;
  }
}
