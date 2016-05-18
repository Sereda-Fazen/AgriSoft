<?php
namespace Page;


class Cutting
{
    public static $clickCutting = '//li[@class="ui-state-default ui-corner-top"]/a';
    public static $seeCuttingBlock = 'Pending Plants Orders';
    public static $seeOrderID = '//*[@id="tbl_OrderList"]/thead//th[1]';
    public static $seeItemName = '//*[@id="tbl_OrderList"]/thead//th[2]';
    public static $seeItemStrain = '//*[@id="tbl_OrderList"]/thead//th[3]';
    public static $seeOrderBy = '//*[@id="tbl_OrderList"]/thead//th[4]';
    public static $seeOrderDate = '//*[@id="tbl_OrderList"]/thead//th[5]';
    public static $seeTotalQty = '//*[@id="tbl_OrderList"]/thead//th[6]';
    public static $seeCompletedQty = '//*[@id="tbl_OrderList"]/thead//th[7]';
    public static $seePendingQty = '//*[@id="tbl_OrderList"]/thead//th[8]';

    // sort


    public static $sortID = '//*[@id="tbl_OrderList"]//tbody/tr/td[1]';
    public static $sortItemName ='//*[@id="tbl_OrderList"]//tbody/tr/td[2]';
    public static $sortItemStrain ='//*[@id="tbl_OrderList"]//tbody/tr/td[3]';
    public static $sortOrderBy ='//*[@id="tbl_OrderList"]//tbody/tr/td[4]';
    public static $sortDate ='//*[@id="tbl_OrderList"]//tbody/tr/td[5]';
    public static $sortTotalQty ='//*[@id="tbl_OrderList"]//tbody/tr/td[6]';
    public static $sortCompletedQty ='//*[@id="tbl_OrderList"]//tbody/tr/td[7]';
    public static $sortPendingQty ='//*[@id="tbl_OrderList"]//tbody/tr/td[8]';


    public static $arrow = '//*[@id="tbl_OrderList"]/thead//th[1][@aria-sort="ascending"]';

    // search
    public static $searchField = '//*[@id="tbl_OrderList_filter"]/label/input';

    // pages

    public static $page2 = '//*[@id="tbl_OrderList_wrapper"]/div[2]/div[2]/div/ul/li[3]/a';
    public static $clickNext = '//*[@id="tbl_OrderList_wrapper"]/div[2]/div[2]/div/ul/li[5]/a';
   // public static $previous = '//*[@class="dataTables_paginate paging_bootstrap pagination"]/ul/li[1]/a';
  //  public static $prevDisabled = '//li[@class="prev disabled"]';


    // edit

    public static $edit = '//*[@id="tbl_OrderList"]//tbody/tr/td[9]';
    public static $next = '//input[@id="btnNext"]';
    public static $redTray = '//*[@id="TrayId"][@class="pendingorder input-block-level error"]';
    public static $redDateCutting = '//*[@id="txtCuttingDate"][@class="input-block-level pendingorder error"]';
    public static $redExpectedDate = '//*[@id="txtExpDateOfCutting"][@class="input-block-level pendingorder error"]';
    public static $redExpectedHurvestDate = '//*[@id="txtExpectedHarvestDate"][@class="input-block-level pendingorder error"]';

    // check fields in order

    public static $disabledDate = '//*[@id="txtOrderDate"][@disabled="disabled"]';
    public static $disabledOrderBy = '//*[@id="txtOrderBy"][@disabled="disabled"]';
    public static $disabledSubLocation = '//*[@id="txtGrowLocName"][@disabled="disabled"]';

    // product list

    public static $prodID = '//*[@id="tbl_ProductQtyList"]//tr/td[1]';
    public static $prodName = '//*[@id="tbl_ProductQtyList"]//tr/td[2]';
    public static $prodTotalQty = '//*[@id="tbl_ProductQtyList"]//tr/td[3]';
    public static $prodCompletedQty = '//*[@id="tbl_ProductQtyList"]//tr/td[4]';
    public static $prodPendingQty = '//*[@id="tbl_ProductQtyList"]//tr/td[5]';

    // enter tray and date

    public static $tray = '//*[@id="TrayId"]';
    public static $dateCutting = '//*[@id="txtCuttingDate"]';
    public static $dateExpected = '//*[@id="txtExpDateOfCutting"]';
    public static $dateHurvest = '//*[@id="txtExpectedHarvestDate"]';

    // enter cutting qty

    public static $cuttingQty = '//*[@id="tbl_ProductQtyList"]//tr/td[6]/input';

    // enter batch

    public static $enterBatch = '//*[@id="tbl_ProductQtyList"]//tr/td[7]/input';

    // next page

    public static $str = '//div[@id="CutList"]/div/table//tr[5]/td[@data-rowid="SrNo"]';

    public static $scanRfid = '//*[@id="CutList"]/div[2]/input[3]';

    public static $readRfidNo = '//*[@id="tbl_cutlist"]/tbody/tr/td[5]/input[@disabled="disabled"]';
    public static $readRfid = '//*[@id="CutList"]/div[2]/input[4]';

    public static $generateBarcode = '//*[@id="tbl_cutlist"]/tbody/tr/td[6]/input[@disabled="disabled"]';
    public static $barcode = '//*[@id="CutList"]/div[2]/input[5]';
    public static $showBarcode = '//*[@id="cboxLoadedContent"]';
    public static $fiveFields = '//*[@id="divCodeList"]/div/ul/li[5]';
    public static $close = '//*[@id="cboxClose"]';
    public static $ok = '//*[@id="divCodeList"]/div[2]//input';
    public static $showRandomBarcode = '//*[@id="tbl_cutlist"]/tbody/tr/td[6]/input[@disabled="disabled"]';


    // click save cutting

    public static $clickSaveCutting = '//*[@id="CutList"]/div[2]/input[2]';
    public static $msgSaved = '#saved > div:nth-of-type(2) > span';
    public static $success = '//*[@id="saved"]';


    //return to plant order

    public static $clickPlantOrder = '//div[@id="tabs"]/ul/li';

    public static $completedQtyInPlantOrder = '//*[@id="tbl_EditOrderList"]//tbody/tr/td[5]';
    public static $pendingQtyInPlantOrder = '//*[@id="tbl_EditOrderList"]//tbody/tr/td[6]';
    
    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }


    public function clickCutting()
    {
        $I = $this->tester;
        $I->waitForElement(self::$clickCutting);
        $I->click(self::$clickCutting);
        $I->waitForText(self::$seeCuttingBlock);
    }

    public function showVisibleTable(){
        $I = $this->tester;
        $I->see('Order ID', self::$seeOrderID);
        $I->see('Item Name',self::$seeItemName);
        $I->see('Item Strain',self::$seeItemStrain);
        $I->see('Order By', self::$seeOrderBy);
        $I->see('Order Date',self::$seeOrderDate);
        $I->see('Total Qty.',self::$seeTotalQty);
        $I->see('Completed Qty.',self::$seeCompletedQty);
        $I->see('Pending Qty.',self::$seePendingQty);

    }

    public function checkArrowForOrderID($id, $itemName,$itemStrain,$orderBy,$date,$totalQty,$completedQty,$pendingQty){
        $I = $this->tester;
        $I->waitForElement(self::$arrow);
        $I->click(self::$arrow);
        $I->see($id, self::$sortID);
        $I->see($itemName, self::$sortItemName);
        $I->see($itemStrain, self::$sortItemStrain);
        $I->see($orderBy, self::$sortOrderBy);
        $I->see($date, self::$sortDate);
        $I->see($totalQty, self::$sortTotalQty);
        $I->see($completedQty, self::$sortCompletedQty);
        $I->see($pendingQty, self::$sortPendingQty);

    }

    public function checkPages()
    {
        $I = $this->tester;
        $I->click(self::$page2);
        //$I->click(self::$previous);
        // $I->seeElement(self::$prevDisabled);
        $I->click(self::$clickNext);

    }


    public function checkSearchOrderId($id){
        $I = $this->tester;
        $I->fillField(self::$searchField, $id);
        $I->see($id, self::$sortID);
    }

    public function checkSearchItemName($itemName){
        $I = $this->tester;
        $I->fillField(self::$searchField, $itemName);
        $I->see($itemName, self::$sortItemName);
    }

    public function checkSearchItemStrain($temStrain){
        $I = $this->tester;
        $I->fillField(self::$searchField, $temStrain);
        $I->see($temStrain, self::$sortItemStrain);
    }

    public function checkSearchOrderBy($orderBy){
        $I = $this->tester;
        $I->fillField(self::$searchField, $orderBy);
        $I->see($orderBy, self::$sortOrderBy);
    }

    public function checkSearchDate($date){
        $I = $this->tester;
        $I->fillField(self::$searchField, $date);
        $I->see($date, self::$sortDate);
    }

    public function checkSearchTotalQty($totalQty){
        $I = $this->tester;
        $I->fillField(self::$searchField, $totalQty);
        $I->see($totalQty, self::$sortTotalQty);
    }

    public function checkSearchCompletedQty($completedQty){
        $I = $this->tester;
        $I->fillField(self::$searchField, $completedQty);
        $I->see($completedQty, self::$sortCompletedQty);
    }

    public function checkSearchPendingQty($pendingQty){
        $I = $this->tester;
        $I->fillField(self::$searchField, $pendingQty);
        $I->see($pendingQty, self::$sortPendingQty);
    }

    public function clickEdit()
    {
        $I = $this->tester;
        $I->click(self::$edit);
        $I->waitForElement(self::$next);
    }
    public function checkFieldsInEditOrder($date, $orderBy, $location)
    {
        $I = $this->tester;

        $I->moveMouseOver(self::$disabledDate);
        $I->getVisibleText($date, self::$disabledDate);

        $I->moveMouseOver(self::$disabledOrderBy);
        $I->getVisibleText($orderBy, self::$disabledOrderBy);

        $I->moveMouseOver(self::$disabledSubLocation);
        $I->getVisibleText($location, self::$disabledSubLocation);
    }

    public function checkValidationOtherFields()
    {
        $I = $this->tester;
        $I->click(self::$next);
        $I->seeElement(self::$redTray);
        $I->seeElement(self::$redDateCutting);
        $I->seeElement(self::$redExpectedDate);
        $I->seeElement(self::$redExpectedHurvestDate);

    }
    public function showTableWithData($id, $name,$totalQty,$completedQty,$pendingQty)
    {
        $I = $this->tester;
        $I->see($id, self::$prodID);
        $I->see($name, self::$prodName);
        $I->see($totalQty, self::$prodTotalQty);
        $I->see($completedQty, self::$prodCompletedQty);
        $I->see($pendingQty, self::$prodPendingQty);
    }

    public function enterTrayAndDate($selectTray,$enterDate,$enterDateExpected,$enterDateHurvest)
    {
        $I = $this->tester;
        $I->selectOption(self::$tray, $selectTray);
        $I->getVisibleText($selectTray);

        $I->fillField(self::$dateCutting, $enterDate);
        $I->getVisibleText($enterDate);

        $I->fillField(self::$dateExpected, $enterDateExpected);
        $I->getVisibleText($enterDateExpected);

        $I->fillField(self::$dateHurvest, $enterDateHurvest);
        $I->getVisibleText($enterDateHurvest);


    }

    public function pleaseEnterQuantity ()
    {
        $I = $this->tester;

        $I->click(self::$next);
        $I->acceptPopup();
    }

    public function enterCuttingQty($cuttingQty){
        $I = $this->tester;
        $I->fillField(self::$cuttingQty, $cuttingQty);
        $I->getVisibleText($cuttingQty);
    }

    public function enterIncorrectCuttingQty($cuttingQty){
        $I = $this->tester;
        $I->fillField(self::$cuttingQty, $cuttingQty);
        $I->click(self::$next);
        $I->acceptPopup();
    }

    public function pleaseEnterBatch ()
    {
        $I = $this->tester;

        $I->click(self::$next);
        $I->acceptPopup();
    }



    public function enterBatch($batch){
        $I =$this->tester;
        $I->fillField(self::$enterBatch, $batch);
        $I->getVisibleText($batch);

    }
    
    public function navigateToNetPage($str){
        $I =$this->tester;
        $I->click(self::$next);

        $I->waitForElement(self::$str);
        $I->see($str, self::$str);

    }

    public function checkBottomSaveScanRFID(){
        $I = $this->tester;
        $I->waitForElement(self::$scanRfid);
        $I->click(self::$scanRfid);
        $I->acceptPopup();
    }

    public function checkBottomReadRFIDBarcode(){
        $I = $this->tester;
        $I->seeElement(self::$readRfidNo);
        $I->click(self::$readRfid);
        $I->dontSee(self::$readRfidNo);

    }

    public function checkBottomGenerateBarcode($numBarcode){
        $I = $this->tester;
        $I->seeElement(self::$generateBarcode);
        $I->click(self::$barcode);
        $I->waitForElement(self::$showBarcode);
        $I->seeElement(self::$fiveFields);
        $I->click(self::$close);
        $I->waitForElement(self::$barcode);
        $I->wait(1);
        $I->click(self::$barcode);
        $I->waitForElement(self::$ok);
        $I->wait(1);
        $I->click(self::$ok);
        $I->waitForElement(self::$barcode);
        $I->getVisibleText($numBarcode,self::$generateBarcode);
        $I->wait(1);

    }

    public function clickSaveCutting()
    {
        $I = $this->tester;
        $I->click(self::$clickSaveCutting);
        $I->waitForElement(self::$msgSaved);
        $I->see('Cutting saved successfully. Cutting No :', self::$success);
    }

    public function checkSearchNewCompletedQty($completedQty,$pendingQty)
    {
        $I = $this->tester;
        $I->see($completedQty, self::$sortCompletedQty);
        $I->see($pendingQty, self::$sortPendingQty);
        
    }

    public function searchNewQtyInPlantOrder(){
        $I = $this->tester;
        $I->waitForElement(self::$clickPlantOrder);
        $I->click(self::$clickPlantOrder);
    }

    public function seeCompletedQtyPending($completedQty,$pendingQty){
        $I = $this->tester;
        $I->see($completedQty, self::$completedQtyInPlantOrder);
        $I->see($pendingQty, self::$pendingQtyInPlantOrder);
    }
























































}