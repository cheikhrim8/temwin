<?php

namespace App\Helpers\Facades;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Facade;


class Helper extends Facade {

   public static function getFieldTranslated($object, $field = 'libelle')
   {
       if (App::getLocale() && $object->{$field.'_'.App::getLocale()})
           $valeur = $object->{$field.'_'.App::getLocale()};
       elseif ($object->{$field.'_fr'})
           $valeur = $object->{$field.'_fr'};
       else
           $valeur = $object->{$field.'_ar'};
       return $valeur;
   }

   public static function setName()
   {
       dd(1234);
   }
}
