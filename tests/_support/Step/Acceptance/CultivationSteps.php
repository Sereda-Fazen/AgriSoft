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

                $I->waitForText('Sr No.');
                $I->waitForText('Order ID');
                $I->waitForText('Plant ID');
                $I->waitForText('Batch #');
                $I->waitForText('Product Name');
                $I->waitForText('UOM');
                $I->waitForText('Location');
                $I->waitForText('Tray');
                $I->waitForText('Stage');
                $I->waitForText('Wet Weight');
                $I->waitForText('Dry Weight');
                $I->waitForText('Stage Date');
                $I->waitForText('Harvest Date');
                $I->waitForText('Barcode');
                $I->waitForText('RFID');
                $I->waitForText('Assigned To');
                $I->waitForText('From Batch');
                $I->waitForElement('//*[@id="chkSelectall"]');
    }

    public function getShowActionTable()
    {
        $I = $this;

                    $I->getVisibleText('Move Plants');
                    $I->getVisibleText('Develop');
                    $I->waitForElementNotVisible('Reverse');
                    $I->getVisibleText('Destroy');
                    $I->getVisibleText('Prune/Trim');
                    $I->getVisibleText('Print Labels');
                    $I->getVisibleText('Add Notes');

                    $I->waitForElement('//input[@id="btnScanBarcode"]');
                    $I->waitForElement('//input[@id="txtBarcode"][@disabled="disabled"]');
    }



    public function getShowUserFromCutting(){
        $I = $this;

                    $I->waitForText('5');

                    $I->waitForText('O1600');

                    $I->waitForText('PL16');

                    $I->waitForText('Test123');

                    $I->waitForText('White Widow');

                    $I->waitForText('Gram');

                    $I->waitForText('Clone Room');

                    $I->waitForText('CL0001');

                    $I->waitForText('Cloning');

                    $I->waitForText('0');

                    $I->waitForText('0');

                    $I->waitForText('08-07-2016');

                    $I->waitForText('10-07-2016');

                    $I->waitForText('BL11');

                    $I->waitForText('N/A');

                    $I->waitForText('Vanya Buvac');

                    $I->waitForText('N/A');

                    $I->waitForElement('//*[@id="chkSelectall"]');

    }

    public function getShowPlantNotes(){
        $I = $this;




                    $I->waitForText('Water Status');

                    $I->waitForText('Note');

                    $I->waitForText('PH Status.');

                    $I->waitForText('Note');

                    $I->waitForText('Sign Of');

                    $I->waitForText('Light Status');

                    $I->waitForText('Note');

                    $I->waitForText('General Notes');

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

                    $I->waitForText('Lot No.');

                    $I->waitForText('Location');

                    $I->waitForText('Main Strain');

                    $I->waitForText('UOM');

                    $I->waitForText('Weight (grams)');

                    $I->waitForText('Type');

                    $I->waitForText('Created Date');

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