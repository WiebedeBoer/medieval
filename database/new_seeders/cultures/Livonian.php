<?php

namespace App\Http\Controllers\cultures;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class Livonian extends Controller
{
    //main construct
    public function __construct()
    {

    }

    public function determineCultureFeatures(
        ?string $building, 
        ?string $holding,
        ?string $rank, 
        ?string $title,
        ?string $estate,
        ?string $religion,
        ?string $chivalricSociety,
        ?string $monasticSociety,
        ?string $ecclesiasticalSociety,
        ?string $courtSociety,
        ?string $craftSociety,
        ?string $feastSociety
    ): array {
        $features = [];
        $features['building'] = $this->determineBuilding($building);
        $features['holding'] = $this->determineHolding($holding);
        $features['rank'] = $this->determineRank($rank);
        $features['title'] = $this->determineTitle($title);
        $features['literature'] = $this->determineLiterature();
        $features['military'] = $this->determineMilitary();
        $features['feudal'] = $this->determineFeudalUnits();
        $features['crusader'] = $this->determineCrusaderUnits($religion);
        return $features;
    }

    private function determineLiterature(): array 
    {
      $cycles = [];
      $cycles[] = 'Matter_Baltic';
      return $cycles;
    }

    private function determineMilitary(): string 
    {
        return '';
    }

    private function determineFeudalUnits(): array 
    {
        $feudalUnits = [];
        $feudalUnits[''] = '';
        return $feudalUnits;
    }

    private function determineCrusaderUnits(string $religion): array 
    {
        $crusaderUnits = [];
        $crusaderUnits[''] = '';
        return $crusaderUnits;
    }

    private function determineBuilding(string $building): string 
    {
        switch ($building) {
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            default:
                return '';
        } 
    }

    private function determineHolding(string $holding): string 
    {
        switch ($holding) {
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            default:
                return '';
        } 
    }

    private function determineRank(string $rank): string 
    {
        switch ($rank) {
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            default:
                return '';
        } 
    }

    private function determineTitle(string $title): string 
    {
        switch ($title) {
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            case "":
                return '';
              break;
            default:
                return '';
        } 
    }

}