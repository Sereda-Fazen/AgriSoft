<?php
use Step\Acceptance;
/**
 * @group 2_cultivation
 */
class CultivationCest
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
     * Check empty fields
     */


    function checkTheButtonSave (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->clickSave();
    }

    /**
     * @param \Page\Cultivation $cultivationPage
     * @param AcceptanceTester $I
     * Check Validations
     */

    function checkValidationFields (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->checkValidationFields();
    }

    /**
     * @param \Page\Cultivation $cultivationPage
     * @param AcceptanceTester $I
     * Enter Product Name and Qty
     */

    function addProdNameAndQuality (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {

        $cultivationPage->prodNameUndefined('Wrong', '123456');
        $cultivationPage->addProdNameAndQuality('Wh', '77');

    }

    /**
     * @param \Page\Cultivation $cultivationPage
     * @param AcceptanceTester $I
     * Select Data
     */


    function selectOrderDate (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->selectOrderDate('08-03-2020');
    }

    /**
     * @param \Page\Cultivation $cultivationPage
     * @param AcceptanceTester $I
     * Enter manual data
     */

    function enterManualDate (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->enterManualDate('06-12-2016');
    }

    /**
     * @param \Page\Cultivation $cultivationPage
     * @param AcceptanceTester $I
     * Select Assigned
     */

    function selectAssigned (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->selectAssigned('Vanya Buvac');
    }

    /**
     * @param \Page\Cultivation $cultivationPage
     * @param AcceptanceTester $I
     * Select Sub Location
     */

    function selectSubLocation (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->selectSubLocation('Clone Room');
    }

    /**
     * @param \Page\Cultivation $cultivationPage
     * @param AcceptanceTester $I
     * Select Plant Origin
     */

    function selectPlantOrigin (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->selectPlantOrigin('Seed');
    }

    /**
     * @param \Page\Cultivation $cultivationPage
     * @param AcceptanceTester $I
     * Select Plant Origin Batch
     */

    function enterPlantOriginBatch (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->selectPlantOriginBatch('BM0');
    }

    /**
     * @param \Page\Cultivation $cultivationPage
     * @param AcceptanceTester $I
     * Select Qty From Batch
     */

    function enterQtyFromBatch (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->selectQtyFromBatch('77');
    }

    /**
     * @param \Page\Cultivation $cultivationPage
     * @param AcceptanceTester $I
     * Click on Button - Save
     */

    function clickSaveOrder (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->clickSaveOrder();

    }

    /**
     * @param \Page\Cultivation $cultivationPage
     * @param AcceptanceTester $I
     * Check Searches(OrderBy, OrderID, QTY, Data) and invalid Result
     */
    function checkSearch (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->searchOrderBy('Vanya Buvac');
    }
    function searchOrderID (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->searchOrderID('O1600');
    }
    function searchQty (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->searchQty('77');
    }
    function searchData (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->searchData('2016');
    }
    function searchCompletedQty (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->searchCompletedQty('0');
    }
    function searchPendingQty (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->searchPendingQty('50');

    }
    function searchInvalidResults (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->searchInvalidResults('Wrong');

    }

    /**
     * @param \Page\Cultivation $cultivationPage
     * @param Acceptance\CultivationSteps $I
     * Check pages Navigation (previous, next , 1-5)
     */

    function checkPagesNavigation (\Page\Cultivation $cultivationPage, \Step\Acceptance\CultivationSteps $I)
    {
        $cultivationPage->checkPages ();
        $I->getNavigation();

    }

    /**
     * @param \Page\Cultivation $cultivationPage
     * @param Acceptance\CultivationSteps $I
     * Check Editing
     */


    function checkEditOrder (\Page\Cultivation $cultivationPage, \Step\Acceptance\CultivationSteps $I)
    {
        $cultivationPage->checkEditOrder('77','06-12-2016', 'Vanya Buvac', 'Clone Room');

    }

    function checkCancelEnterQty (\Page\Cultivation $cultivationPage, \Step\Acceptance\CultivationSteps $I)
    {
        $cultivationPage->checkCancelEnterQty('77', '777');

    }
    




    



    









}
