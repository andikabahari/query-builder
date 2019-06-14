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
  public function quote($values): string
  {
    $raw    = null;
    $values = is_array($values)
      ? $values
      : explode(',', $values);

    foreach ($values as $val)
    {
      $val  = trim($val, '\'');
      $raw .= ! is_numeric($val)
        ? '\''.$val.'\','
        : $val.',';
    }

    return rtrim($raw, ',');
  }

  /**
   * @param array $arr
   *
   * @return string
   */
  public function concat(array $arr): string
  {
    if ( ! self::isAssoc($arr))
    {
      return '';
    }

    $raw = null;

    foreach ($arr as $key => $val)
    {
      $val  = trim($val, '\'');
      $raw .= ! is_numeric($val)
        ? $key.'=\''.$val.'\','
        : $key.'='.$val.',';
    }

    return rtrim($raw, ',');
  }

  /**
   * @param array $arr
   *
   * @return bool
   */
  public function isAssoc(array $arr): bool
  {
    if ([] === $arr)
    {
      return false;
    }

    return array_keys($arr) !== range(0, count($arr) - 1);
  }
}
