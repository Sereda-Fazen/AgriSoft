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
     * @param \Page\Cutting $cuttingPage
     * @param AcceptanceTester $I
     * Check the Button Cutting and Navigate and show the Table
     */

    function clickOnCutting (\Page\Cutting $cuttingPage, \AcceptanceTester $I){
        $cuttingPage->clickCutting();
   
    }

    function searchNewQtyInPlantOrder (\Page\Cutting $cultivationPage, \AcceptanceTester $I){
        $cultivationPage->searchNewQtyInPlantOrder();
    }
    function searchQty (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->searchQty('777');
    }
    function seeCompletedQtyPending (\Page\Cutting $cultivationPage, \AcceptanceTester $I){
        $cultivationPage->seeCompletedQtyPending('5','772');
    }
    



}

