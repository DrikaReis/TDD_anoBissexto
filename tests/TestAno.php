<?php

namespace Tests;

class TestAno
{
    public static function bissexto($ano)
    {
      if ($ano <= 0){
        return false;
      } else {
          if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
              return true;
          } else {
              return false;
          }
      }
    }
}
