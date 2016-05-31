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
        $processPlantsPage->checkSelectFilter();
        $processPlantsPage->selectFilter('Clone');

        /**
         *  Show Action
         */

        //$I->getShowActionTable();

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

    }

    /**
     * @param \Page\ProcessPlants $processPlantsPage
     * @param Acceptance\CultivationSteps $I
     * Check Plant ID
     */


    function checkLinksPlantId (\Page\ProcessPlants $processPlantsPage, \Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->checkClickPlantId('PL16');
        $I->getShowPlantNotes();
    }

    /**
     * @param \Page\ProcessPlants $processPlantsPage
     * @param Acceptance\CultivationSteps $I
     * Check Link Batch
     */
    function checkLinkBatch (\Page\ProcessPlants $processPlantsPage, \Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->checkClickBatch('Test123');
        $I->getShowAssignedLots();

    }

    /**
     * @param \Page\ProcessPlants $processPlantsPage
     * @param Acceptance\CultivationSteps $I
     * Check More Plants
     */

    function checkMorePlants (\Page\ProcessPlants $processPlantsPage, \Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->checkMorePlants('Cure Room', 'Curing Rack 1');
    }

    function checkNewRoom (\Page\ProcessPlants $processPlantsPage, \Step\Acceptance\CultivationSteps $I)
    {

        $processPlantsPage->selectFilter('Cure Room');
        $processPlantsPage->checkScanBarcode('Test123');

    }

    /**
     * @param \Page\ProcessPlants $processPlantsPage
     * @param Acceptance\CultivationSteps $I
     * Check Destroy
     */

    function checkDestroy (\Page\ProcessPlants $processPlantsPage, \Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->checkDestroy();
    }

    /**
     * @param \Page\ProcessPlants $processPlantsPage
     * @param Acceptance\CultivationSteps $I
     * Check Prune/Trim
     */


    function checkPruneTrim (\Page\ProcessPlants $processPlantsPage, \Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->checkPruneTrim();
    }



    /**
     * @param \Page\ProcessPlants $processPlantsPage
     * @param Acceptance\CultivationSteps $I
     * Check Add Notes
     */

    function checkAddNotes (\Page\ProcessPlants $processPlantsPage, \Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->checkAddNotes();
    }


    /**
     * @param \Page\ProcessPlants $processPlantsPage
     * @param Acceptance\CultivationSteps $I
     * Check Deploy
     * @internal param \Page\ProcessPlants $processPlants
     */


    function checkDeploy ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->checkDeploy('Test123_TEST', 'Cure Room', 'Curing Rack 1');
    }














    /**
     * @param \Page\ProcessPlants $processPlantsPage
     * @param Acceptance\CultivationSteps $I
     * Next page VEGETATION
     */


    function selectVegetation ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->selectRoomVegetation('Vegetation');
    }

    function checkFindNewDeployed ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->checkNewDeployed('Test123_TEST');
    }



    function checkVegetation ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->selectRoomVegetation('Vegetation');
        $processPlantsPage->selectFilter('Cure Room');
    }

    function checkDeployForVegetation ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {
        /**
         * Processing Deploy Vegetation
         */

        $processPlantsPage->checkDeployForVegetation('Cure Room', 'Curing Rack 1');

    }

    function checkNewFlowering ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->selectRoomVegetation('Flowering');
        $processPlantsPage->selectFilter('Cure Room');
        $processPlantsPage->checkStageVegetation('Flowering','PL16');
    }











    /**
     * @param \Page\ProcessPlants $processPlantsPage
     * @param Acceptance\CultivationSteps $I
     * FLOWERING
     */

    function selectFlowering ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->selectRoomVegetation('Flowering');
    }

    function checkFindNewFlowering ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->checkNewDeployed('Test123_TEST');
    }

    function checkFlowering ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->selectRoomVegetation('Flowering');
        $processPlantsPage->selectFilter('Cure Room');
    }

    function checkDeployForFlowering ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {
        /**
         * Processing Deploy Flowering
         */

        $processPlantsPage->checkDeployForFlowering('Cure Room', 'Curing Rack 1');
    }

    function checkNewHarvesting ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {

        $processPlantsPage->selectRoomVegetation('Harvesting');
        $processPlantsPage->selectFilter('Cure Room');
        $processPlantsPage->checkStageVegetation('Harvesting','PL16');
    }







    

    /**
     * @param \Page\ProcessPlants $processPlantsPage
     * @param Acceptance\CultivationSteps $I
     * HARVESTING
     */

    function selectHarvesting ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->selectRoomVegetation('Harvesting');
    }

    function checkFindNewHarvesting ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->checkNewDeployed('Test123_TEST');
    }

    function checkHarvesting ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->selectRoomVegetation('Harvesting');
        $processPlantsPage->selectFilter('Cure Room');
    }

    function checkDeployForHarvesting ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {
        /**
         * Processing Deploy Harvesting
         */

        $processPlantsPage->checkInDeployHarvesting('10','50','Cure Room', 'Curing Rack 1');
    }

    function checkNewDrying ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {

        $processPlantsPage->selectRoomVegetation('Drying');
        $processPlantsPage->selectFilter('Cure Room');
        $processPlantsPage->checkStageVegetation('Drying','PL16');
    }
























    /**
     * @param \Page\ProcessPlants $processPlantsPage
     * @param Acceptance\CultivationSteps $I
     * DRYING
     */

    function selectDrying ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->selectRoomVegetation('Drying');
    }

    function checkFindNewDrying ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->checkNewDeployed('Test123_TEST');
    }

    function checkDrying ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->selectRoomVegetation('Drying');
        $processPlantsPage->selectFilter('Cure Room');
    }

    function checkDeployForDrying ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {
        /**
         * Processing Deploy Drying
         */

        $processPlantsPage->checkInDeployDrying('10','1','30','Cure Room', 'Curing Rack 1');
    }

    function checkNewCuring ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {

        $processPlantsPage->selectRoomVegetation('Curing');
        $processPlantsPage->selectFilter('Cure Room');
        $processPlantsPage->checkStageVegetation('Curing','PL16');
    }





    /**
     * @param \Page\ProcessPlants $processPlantsPage
     * @param Acceptance\CultivationSteps $I
     * CURING
     */
    

    function checkFindNewCuring ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->checkNewDeployed('Test123_TEST');
    }

    function checkCuring ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->selectRoomDeployed('Curing');
        $processPlantsPage->checkScanBarcode('Test123_TEST');
        $processPlantsPage->selectFilterForDeployed('Cure Room');
    }

    function checkDeployForCuring ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {
        /**
         * Processing Deploy Drying
         */

        $processPlantsPage->checkInDeployCuring('1','30','Cure Room', 'Curing Rack 1');
    }


    function checkNewDeveloped ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {

        $processPlantsPage->selectRoomVegetation('Developed');
        $processPlantsPage->selectFilter('Cure Room');
        $processPlantsPage->checkStageVegetation('Developed','PL16');
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
