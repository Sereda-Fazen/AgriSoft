<?php
use Step\Acceptance;
/**
 * @group 3_cutting
 */
class CuttingPhaseCest
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
        $cuttingPage->showVisibleTable();
    }

/*
    function returnToCultivation (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->cultivation();
    }

    function navigateToCutting (\Page\Cutting $cuttingPage, \AcceptanceTester $I){
        $cuttingPage->clickCutting();

    }

    function checkPagesNavigation (\Page\Cutting $cultivationPage, \Step\Acceptance\CultivationSteps $I)
    {
      //  $cultivationPage->checkPages ();
        $I->getNavigation();

    }

*/
    /**
     * @param \Page\Cutting $cultivationPage
     * @param AcceptanceTester $I
     * Check last order
     */

    function checkArrowForOrderID (\Page\Cutting $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->checkArrowForOrderID('O1600','White Widow','Hybrid', 'Vanya Buvac', '05-10-2016', '2121', '0','2119');
    }

    /**
     * @param \Page\Cutting $cultivationPage
     * @param AcceptanceTester $I
     * Check Search fields
     */

    function checkSearchOrderId (\Page\Cutting $cultivationPage, \AcceptanceTester $I){
        $cultivationPage->checkSearchOrderId('O1600');
    }
    function checkSearchItemName (\Page\Cutting $cultivationPage, \AcceptanceTester $I){
        $cultivationPage->checkSearchItemName('White Widow');
    }
    function checkSearchItemStrain (\Page\Cutting $cultivationPage, \AcceptanceTester $I){
        $cultivationPage->checkSearchItemStrain('Hybrid');
    }
    function checkSearchOrderBy (\Page\Cutting $cultivationPage, \AcceptanceTester $I){
        $cultivationPage->checkSearchOrderBy('Vanya Buvac');
    }
    function checkSearchDate (\Page\Cutting $cultivationPage, \AcceptanceTester $I){
        $cultivationPage->checkSearchDate('05-10-2016');
    }
    function checkSearchTotalQty (\Page\Cutting $cultivationPage, \AcceptanceTester $I){
        $cultivationPage->checkSearchTotalQty('2121');
    }
    function checkSearchCompletedQty (\Page\Cutting $cultivationPage, \AcceptanceTester $I){
        $cultivationPage->checkSearchCompletedQty('0');
    }
    function checkSearchPendingQty (\Page\Cutting $cultivationPage, \AcceptanceTester $I){
        $cultivationPage->checkSearchPendingQty('2119');
    }





    
    

    


    



    



    









}
