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


    function checkEditOrder (\Page\Cultivation $cultivationPage, \Step\Acceptance\CultivationSteps $I)
    {
        $cultivationPage->checkEditOrder('777','06-12-2016', 'Vanya Buvac', 'Clone Room');

    }

    function checkCancelEnterQty (\Page\Cultivation $cultivationPage, \Step\Acceptance\CultivationSteps $I)
    {
        $cultivationPage->checkCancelEnterQty('777', '7777');

    }
    function deletePlantOrderList (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->deletePlantOrderList('7777');

    }
    function checkResultAfterRemoving (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->searchInvalidResults('7777');

    }


    



}

