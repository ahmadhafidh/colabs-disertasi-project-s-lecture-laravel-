<?php

namespace App\Services;

class CoefficientValueService
{
  public function jaccard($tt, $jd)
  {
    $a = $tt - $jd;
    $b = ($tt + $jd) - $a;

    return $a / $b;
  }

  public function cosine($tt, $jd)
  {
    $a = $tt * $jd;
    $b = sqrt($tt);
    $c = sqrt($jd);

    return $a / ($b * $c);
  }

  public function euclidean($tt, $jd)
  {
    return sqrt(pow($jd - $tt, 2));
  }

  public function manhattan($tt, $jd)
  {
    return abs($tt - $jd);
  }
}
