<?php
namespace Step\Acceptance;

use Exception;

class CultivationSteps extends \AcceptanceTester
{

    /**
     * Navigation Pages
     */

    public function getNavigation()
    {
        $I = $this;
        $countPage = count($I->grabMultiple('//div[@class="dataTables_paginate paging_bootstrap pagination"]//li'));
        for ($p = 1; $p <= $countPage; $p++) {
            $I->scrollDown(500);
            $I->click('//div[@class="dataTables_paginate paging_bootstrap pagination"]//li['.$p.']/a');
            $I->wait(1);
        }
            $I->seeElement('//li[@class="next disabled"]');

    }

    /**
     * Show columns on Plants
     */

    public function getShowPlant(){
        $I = $this;
        $countPlants = count($I->grabMultiple('//table[@id="tbl_PlantByBatch"]//tr/th'));
        for ($plants = 1; $plants <= $countPlants; $plants++){
            $I->seeElement('//table[@id="tbl_PlantByBatch"]//tr/th['.$plants.']');

            switch ($plants){
               case 1:
                $I->waitForText('Sr No.');
                break;

               case 2:
                $I->waitForText('Order ID');
                break;

               case 3:
                $I->waitForText('Plant ID');
                break;

               case 4:
                $I->waitForText('Batch #');
                break;

               case 5:
                $I->waitForText('Product Name');
                break;

               case 6:
                $I->waitForText('UOM');
                break;

               case 7:
                $I->waitForText('Location');
                break;

               case 8:
                $I->waitForText('Tray');
                break;


               case 9:
                $I->waitForText('Stage');
                break;

               case 10:
                $I->waitForText('Wet Weight');
                break;

               case 11:
                $I->waitForText('Dry Weight');
                break;

               case 12:
                $I->waitForText('Stage Date');
                break;

               case 13:
                $I->waitForText('Harvest Date');
                break;

               case 14:
                $I->waitForText('Barcode');
                break;

               case 15:
                $I->waitForText('RFID');
                break;

               case 16:
                $I->waitForText('Assigned To');
                break;

               case 17:
                $I->waitForText('From Batch');
                break;

               case 18:
                $I->waitForElement('//*[@id="chkSelectall"]');
                break;




            }
        }
    }

    public function getShowActionTable()
    {
        $I = $this;
        $action = count($I->grabMultiple('//*[@id="plant_list"]//div[2]//div//input'));
        for ($a = 1; $a <= $action; $a++) {
           $I->moveMouseOver('//*[@id="plant_list"]//div[2]//div//input[' . $a . ']');

            switch ($a) {
                case 1:
                    $I->getVisibleText('Move Plants');
                    break;
                case 2:
                    $I->getVisibleText('Develop');
                    break;
                case 3:
                    $I->waitForElementNotVisible('Reverse');
                    break;
                case 4:
                    $I->getVisibleText('Destroy');
                    break;
                case 5:
                    $I->getVisibleText('Prune/Trim');
                    break;
                case 6:
                    $I->getVisibleText('Print Labels');
                    break;
                case 7:
                    $I->getVisibleText('Add Notes');
                    break;
            }
        }
        $I->waitForElement('//input[@id="btnScanBarcode"]');
        $I->waitForElement('//input[@id="txtBarcode"][@disabled="disabled"]');
    }



    public function getShowUserFromCutting(){
        $I = $this;
        $table = count($I->grabMultiple('//table[@id="tbl_PlantByBatch"]//tr[4]/td'));
        for ($t = 1; $t <= $table; $t++){
            $I->seeElement('//table[@id="tbl_PlantByBatch"]//tr[4]/td['.$t.']');

            switch ($t){
                case 1:
                    $I->waitForText('4');
                    break;

                case 2:
                    $I->waitForText('O1600');
                    break;

                case 3:
                    $I->waitForText('PL1615');
                    break;

                case 4:
                    $I->waitForText('Test123');
                    break;

                case 5:
                    $I->waitForText('White Widow');
                    break;

                case 6:
                    $I->waitForText('Gram');
                    break;

                case 7:
                    $I->waitForText('Clone Room');
                    break;

                case 8:
                    $I->waitForText('CL0001');
                    break;


                case 9:
                    $I->waitForText('Cloning');
                    break;

                case 10:
                    $I->waitForText('0');
                    break;

                case 11:
                    $I->waitForText('0');
                    break;

                case 12:
                    $I->waitForText('08-07-2016');
                    break;

                case 13:
                    $I->waitForText('10-07-2016');
                    break;

                case 14:
                    $I->waitForText('BL1161');
                    break;

                case 15:
                    $I->waitForText('N/A');
                    break;

                case 16:
                    $I->waitForText('Vanya Buvac');
                    break;

                case 17:
                    $I->waitForText('N/A');
                    break;

                case 18:
                    $I->waitForElement('//*[@id="chkSelectall"]');
                    break;




            }
        }
    }






}