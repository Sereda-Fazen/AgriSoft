<?php
use Step\Acceptance;
/**
 * @group 5_removeOrder
 */
class RemoveOrderCest
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
     * @param \Page\Cultivation $cultivationPage
     * @param AcceptanceTester $I
     * Check the Button Cutting and Navigate and show the Table
     * @internal param \Page\ProcessPlants $processPlantsPage
     * @internal param \Page\ProcessPlants $cuttingPage
     */

    


    function deletePlantOrderList (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->deletePlantOrderList('666');

    }
    function checkResultAfterRemoving (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->searchInvalidResults('666');

    }































    
    





    
    

    


    



    



    









}
