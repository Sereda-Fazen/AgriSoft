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
        $table = count($I->grabMultiple('//table[@id="tbl_PlantByBatch"]//tr[5]/td'));
        for ($t = 1; $t <= $table; $t++){
            $I->seeElement('//table[@id="tbl_PlantByBatch"]//tr[5]/td['.$t.']');

            switch ($t){
                case 1:
                    $I->waitForText('5');
                    break;

                case 2:
                    $I->waitForText('O1600');
                    break;

                case 3:
                    $I->waitForText('PL16');
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
                    $I->waitForText('BL11');
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

    public function getShowPlantNotes(){
        $I = $this;
        $fields = count($I->grabMultiple('//*[@id="tbl_PlantNotes_wrapper"]//thead/tr/th'));
        for ($f = 1; $f <= $fields; $f++){
            $I->seeElement('//*[@id="tbl_PlantNotes_wrapper"]//thead/tr/th['.$f.']');

            switch ($f){
                case 1:
                    $I->waitForText('Water Status');
                    break;

                case 2:
                    $I->waitForText('Note');
                    break;

                case 3:
                    $I->waitForText('PH Status.');
                    break;

                case 4:
                    $I->waitForText('Note');
                    break;

                case 5:
                    $I->waitForText('Sign Of');
                    break;

                case 6:
                    $I->waitForText('Light Status');
                    break;

                case 7:
                    $I->waitForText('Note');
                    break;

                case 8:
                    $I->waitForText('General Notes');
                    break;

            }
        }
            $I->see('No data available in table', '//td[@class="dataTables_empty"]');
            $I->seeElement('//div[@id="tbl_PlantNotes_wrapper"]/div[2]/div[2]/div//li[1][@class="prev disabled"]');
            $I->seeElement('//div[@id="tbl_PlantNotes_wrapper"]/div[2]/div[2]/div//li[2][@class="next disabled"]');
            $I->seeElement('//div[@id="tbl_PlantNotes_length"]/label/select');
            $I->seeElement('//div[@id="tbl_PlantNotes_filter"]/label/input');
            $I->seeElement('//div[@id="ShowNotesModal"]/div/button');
            $I->click('//div[@id="ShowNotesModal"]/div/button');
    }

    public function getShowAssignedLots()
    {
        $I = $this;
        $fields1 = count($I->grabMultiple('//*[@id="tbl_LotsByBatch"]/thead//th'));
        for ($b = 1; $b <= $fields1; $b++) {
            $I->seeElement('//*[@id="tbl_LotsByBatch"]/thead//th[' . $b . ']');

            switch ($b) {
                case 1:
                    $I->waitForText('Lot No.');
                    break;

                case 2:
                    $I->waitForText('Location');
                    break;

                case 3:
                    $I->waitForText('Main Strain');
                    break;

                case 4:
                    $I->waitForText('UOM');
                    break;

                case 5:
                    $I->waitForText('Weight (grams)');
                    break;

                case 6:
                    $I->waitForText('Type');
                    break;

                case 7:
                    $I->waitForText('Created Date');
                    break;

            }
        }
            $I->see('No data available in table', '//td[@class="dataTables_empty"]');
            $I->seeElement('//div[@id="tbl_LotsByBatch_wrapper"]/div[2]/div[2]/div//li[1][@class="prev disabled"]');
            $I->seeElement('//div[@id="tbl_LotsByBatch_wrapper"]/div[2]/div[2]/div//li[2][@class="next disabled"]');
            $I->seeElement('//div[@id="tbl_LotsByBatch_length"]/label/select');
            $I->seeElement('//div[@id="tbl_LotsByBatch_filter"]/label/input');
            $I->seeElement('//div[@id="ShowLotsModal"]/div/button');
            $I->click('//div[@id="ShowLotsModal"]/div/button');
            $I->wait(2);

    }
    

    public function getNewWindowPrint() {
        $I = $this;
        $I->wait(3);
        $I->waitForElement('//*[@class="span4"]//input[6]');
        $I->click('//*[@class="span4"]//input[6]');
        $I->executeInSelenium(function (\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) {
            $handles = $webdriver->getWindowHandles();
            $last_window = end($handles);
            $webdriver->switchTo()->window($last_window);
        });
        $I->switchToWindow();
    }






}