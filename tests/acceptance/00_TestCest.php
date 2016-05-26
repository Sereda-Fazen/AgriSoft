<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
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




    function selectVegetation ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->selectRoom('Vegetation');
        $processPlantsPage->selectFilter('Cure Room');
    }

    function checkDeployForVegetation ( \Page\ProcessPlants $processPlantsPage ,\Step\Acceptance\CultivationSteps $I)
    {
        /**
         * Processing Deploy Vegetation
         */

        $processPlantsPage->checkDeployForVegetation('Cure Room', 'Curing Rack 1');
        $processPlantsPage->selectRoom('Flowering');
        $processPlantsPage->selectFilter('Cure Room');
        $processPlantsPage->checkStageVegetation('Flowering','PL16');
    }




}

