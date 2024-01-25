<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class ResearchController extends Controller
{
    //main construct
    public function __construct(

    ) {
        $this->middleware('auth');
    }

    //determine masters
    public function determineMaster(
        string $masterCategory,
    ): array {

      $xml=simplexml_load_file("masters.xml") or die("Error: Cannot create object");

      foreach ($xml->children() as $child)
      {
          if($masterCategory === $child[0]){

          }
      }
    }

    public function determineTechnology(
        string $technologyCategory,
    ): array {
      $xml=simplexml_load_file("technologies.xml") or die("Error: Cannot create object");

      foreach ($xml->children() as $child)
      {
          if($technologyCategory === $child[0]){

          }
      }

    }

    private function defaultUpgrades(): array 
    {
        $defaultUpgrades = [];
        $defaultUpgrades['upgrade'] = '';
        return $defaultUpgrades;
    }

    private function defaultSciences(): array 
    {
        $defaultSciences = [];
        $defaultSciences['science'] = '';
        return $defaultSciences;
    }

    private function defaultMasters(): array 
    {
        $defaultMasters = [];
        $defaultMasters['master'] = 'Employ';
        return $defaultMasters;
    }

}