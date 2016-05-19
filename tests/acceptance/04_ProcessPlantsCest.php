<?php
use Step\Acceptance;
/**
 * @group 4_processPlants
 */
class ProcessPlantsCest
{

    /**
     * @param \Page\Cultivation $cultivationPage
     * @param AcceptanceTester $I
     * Login
     */


    function checkSuccessLogin (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->enterFields('vbuvac', 'Password1');
    }

    /**
     * @param \Page\Cultivation $cultivationPage
     * @param AcceptanceTester $I
     * Select Select Location
     */

    function selectLocation (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->selectionLocation('Grow 1','vbuvac');
    }

    /**
     * @param \Page\Cultivation $cultivationPage
     * @param AcceptanceTester $I
     * Navigate to Cultivation
     */

    function navigateToCultivation (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->cultivation();
    }

    /**
     * @param \Page\ProcessPlants $processPlantsPage
     * @param AcceptanceTester $I
     * Check the Button Cutting and Navigate and show the Table
     * @internal param \Page\ProcessPlants $cuttingPage
     */

    function clickOnProcessPlants (\Page\ProcessPlants $processPlantsPage, \AcceptanceTester $I){
        $processPlantsPage->clickProcessPlants();

    }

    function checkInvisibleBottoms (\Page\ProcessPlants $processPlantsPage, \Step\Acceptance\CultivationSteps $I){
        /**
         * Invisible Show,Scan Barcode and Show the Table
         */
        $processPlantsPage->checkInvisibleBottoms();
        $I->getShowPlant();
    }

    function selectFilter (\Page\ProcessPlants $processPlantsPage, \Step\Acceptance\CultivationSteps $I)
    {
        /**
         *  Show select room
         */
        $processPlantsPage->selectFilter('Clone');

        /**
         *  Show Action
         */

        $I->getShowActionTable();

        /**
         * Select Clone in the filter
         */

        $processPlantsPage->selectRoom('Clone Room');

    }



    function checkScanBarcode (\Page\ProcessPlants $processPlantsPage, \Step\Acceptance\CultivationSteps $I)
    {
        /**
         * Click and enter Code
         */
        $processPlantsPage->checkScanBarcode('Test123');
    }


    /**
     * @param \Page\ProcessPlants $processPlantsPage
     * @param Acceptance\CultivationSteps $I
     * Check match table with the table in cutting
     */

    function checkMatchFieldsWithCutting (\Page\ProcessPlants $processPlantsPage, \Step\Acceptance\CultivationSteps $I)
    {
        $I->getShowUserFromCutting();
        //$processPlantsPage->checkFitFieldsWithCutting('5');
    }



    


    

    











    






/*

    function deletePlantOrderList (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->deletePlantOrderList('7777');

    }
    function checkResultAfterRemoving (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->searchInvalidResults('7777');

    }
*/






























    
    





    
    

    


    



    



    









}