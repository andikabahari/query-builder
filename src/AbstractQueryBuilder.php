<?php

namespace QueryBuilder;

/**
 * AbstractQueryBuilder Class
 *
 * @author Andika Bahari
 * @license MIT License
 */
abstract class AbstractQueryBuilder
{

  /**
   * @param mixed $values
   *
   * @return string
   */
  public function raw($values): string
  {
    $raw    = null;
    $values = is_array($values)
      ? $values
      : explode(',', $values);

    foreach ($values as $val)
    {
      $val  = trim($val, '\'');
      $raw .= preg_match('/[^\d]/', $val)
        ? '\''.$val.'\','
        : $val;
    }

    return rtrim($raw, ',');
  }
}
