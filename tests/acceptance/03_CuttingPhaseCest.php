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
        $cultivationPage->checkArrowForOrderID('O1600','White Widow','Hybrid', 'Vanya Buvac', '06-12-2016', '666', '0','666');
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
        $cultivationPage->checkSearchDate('06-12-2016');
    }
    function checkSearchTotalQty (\Page\Cutting $cultivationPage, \AcceptanceTester $I){
        $cultivationPage->checkSearchTotalQty('666');
    }
    function checkSearchCompletedQty (\Page\Cutting $cultivationPage, \AcceptanceTester $I){
        $cultivationPage->checkSearchCompletedQty('0');
    }
    function checkSearchPendingQty (\Page\Cutting $cultivationPage, \AcceptanceTester $I){
        $cultivationPage->checkSearchPendingQty('666');
    }

    /**
     * @param \Page\Cutting $cultivationPage
     * @param AcceptanceTester $I
     * Click on button Edit(pencil)
     */

    function clickEdit (\Page\Cutting $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->clickEdit();
    }

    /**
     * @param \Page\Cutting $cultivationPage
     * @param AcceptanceTester $I
     * Check fields in the Edit Order
     */

    function checkTreeFieldsDisabled (\Page\Cutting $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->checkFieldsInEditOrder('06-12-2016', 'Vanya Buvac', 'Clean Room');
    }


    /**
     * @param \Page\Cutting $cultivationPage
     * @param AcceptanceTester $I
     * Check validation other fields
     */


    function checkValidationOtherFields (\Page\Cutting $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->checkValidationOtherFields();
    }

    function showTableWithData (\Page\Cutting $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->showTableWithData('1','White Widow','666','0', '666');
    }

    /**
     * @param \Page\Cutting $cultivationPage
     * @param AcceptanceTester $I
     * Select Tray and Enter Date
     */


    function selectTrayAndEnterDate (\Page\Cutting $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->enterTrayAndDate('CL0001','08-07-2016','09-07-2016','10-07-2016');
    }

    /**
     * @param \Page\Cutting $cultivationPage
     * @param AcceptanceTester $I
     * Check alert window for Cutting quantity
     */

    function checkNullCuttingQuantity (\Page\Cutting $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->pleaseEnterQuantity();
    }

    /**
     * @param \Page\Cutting $cultivationPage
     * @param AcceptanceTester $I
     * Enter Cutting Qty
     */

    function enterIncorrectCuttingQty (\Page\Cutting $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->enterIncorrectCuttingQty('667');
    }


    function enterCuttingQty (\Page\Cutting $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->enterCuttingQty('2');
    }

    function checkNullCuttingBatch (\Page\Cutting $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->pleaseEnterBatch();
    }

    /**
     * @param \Page\Cutting $cultivationPage
     * @param AcceptanceTester $I
     * Enter the Batch (Cutting saved successfully.)
     */
    function enterBatch (\Page\Cutting $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->enterBatch('Test123');
    }

    /**
     * @param \Page\Cutting $cultivationPage
     * @param AcceptanceTester $I
     * Next page
     */

    function navigateToNetPage (\Page\Cutting $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->navigateToNetPage('2');
    }

    function checkBottomSaveScanRFID (\Page\Cutting $cultivationPage, \AcceptanceTester $I)
    {
        /**
         * SaveScanRFID
         */
        $cultivationPage->checkBottomSaveScanRFID();
    }


    function checkBottomReadRFIDBarcode (\Page\Cutting $cultivationPage, \AcceptanceTester $I)
    {
        /**
         * ReadRFIDBarcode

         */
        $cultivationPage->checkBottomReadRFIDBarcode();
    }


    function checkBottomGenerateBarcode (\Page\Cutting $cultivationPage, \AcceptanceTester $I)
    {
        /**
         * GenerateBarcode
         */
        $cultivationPage->checkBottomGenerateBarcode('BL1');
    }

    /**
     * @param \Page\Cutting $cultivationPage
     * @param AcceptanceTester $I
     * Save
     */

    function clickSaveCutting (\Page\Cutting $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->clickSaveCutting();
    }



    function checkSearchTotal (\Page\Cutting $cultivationPage, \AcceptanceTester $I){
        $cultivationPage->checkSearchTotalQty('666');
    }

    function searchNewQtyInCutting (\Page\Cutting $cultivationPage, \AcceptanceTester $I){
        $cultivationPage->checkSearchNewCompletedQty('2','664');
    }
    
    function searchNewQtyInPlantOrder (\Page\Cutting $cultivationPage, \AcceptanceTester $I){
        $cultivationPage->searchNewQtyInPlantOrder();
    }
    function searchQty (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->searchQty('666');
    }
    function seeCompletedQtyPending (\Page\Cutting $cultivationPage, \AcceptanceTester $I){
        $cultivationPage->seeCompletedQtyPending('2','664');
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
