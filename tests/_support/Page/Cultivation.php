<?php
namespace Page;

use Exception;

class Cultivation
{

    public static $URL = '/';
    public static $ButtonClick = '//*[@id="btnLogin"]';
    public static $seeError = '//div[@id="errormsg"]';
    public static $enterLogin = '//*[@id="login_username"]';
    public static $enterPass = '//*[@id="Password"]';

    //select location

    public static $clickContinue = '//*[@id="Continue"]';
    public static $selectLocation = '//*[@id="LocationId"]';
    public static $clickId = '//*[@id="LocationId"]';
    public static $seeUser = '//span[@id="loggedinuser"]';

    // cultivation


    public static $clickCultivation = '//ul[@class="nav"]/li[4]/a';
    public static $seeCreateOrder = '//div[@id="divOrderForm"]//legend';

    public static $clickOrder = '//*[@id="btnSaveOrder"]';
    //validation
    public static $seeErrorDate = '//*[@class="cloneordermst input-block-level error hasDatepicker"]';
    public static $seeErrorAssign = '//*[@id="UserId"][@class="cloneordermst error"]';
    public static $seeSubLocationName = '//*[@id="SubLocCode"][@class="cloneordermst error"]';

    //prod name and quality

    public static $clickAdd = '//*[@id="btnAddCloneQty"]';
    public static $seeProdName = '//*[@id="ProductList"][@class="cloneorderdetail input-block-level error"]';
    public static $seeProdQuality = '//*[@id="ProductQty"][@class="cloneorderdetail input-block-level numeric error"]';


    //check order date
    public static $selectOrderDate = '//*[@id="OrderDate"]';
    public static $clickOrderDate = '//div[@id="ui-datepicker-div"]';
    public static $clickMonth = '//select[@class="ui-datepicker-month"]';
    public static $selectMonth = '//select[@class="ui-datepicker-month"]/option';
    public static $selectMonthAug = '//select[@class="ui-datepicker-month"]/option[8]';
    public static $clickYear = '//select[@class="ui-datepicker-year"]';
    public static $selectYear = '//select[@class="ui-datepicker-year"]/option';
    public static $selectYear2020 = '//select[@class="ui-datepicker-year"]/option[15]';

    public static $clickDate = '//*[@class="ui-datepicker-calendar"]/tbody/tr[2]/td[2]';

    //assigned

    public static $selectAssigned = '//select[@id="UserId"]';
    public static $tableUsers = '//select[@id="UserId"]/option';
    public static $selectUser = '//select[@id="UserId"]';

    //sub location

    public static $selectSubLocation = '//select[@id="SubLocCode"]';
    public static $tableLocation = '//select[@id="SubLocCode"]/option';
    public static $selectSub = '//select[@id="SubLocCode"]';

    public static $noDateAvailable = '//*[@id="saved"]';
    public static $x = '#saved > div:nth-of-type(2) > span';



    // plant origin

    public static $selectPlantOrigin = '//select[@id="OrderType"]';
    public static $tableOrigin = '//select[@id="SubLocCode"]/option';
    public static $selectOrigin = '//select[@id="OrderType"]';

    // plant origin batch

    public static $selectPlantOriginBatch = '//*[@id="FromBatch"]';

    // Subtract Qty from Batch

    public static $qtyFromBatch = '//*[@id="QtyFromBatch"]';


    // product name and quantity

    public static $prodName = '//*[@id="ProductList"]';
    public static $list = '//li[@class="ui-menu-item"]/a';

    public static $prodQty = '//*[@id="ProductQty"]';
    public static $idProd = '//tr[@id="row_1"]';
    public static $seeNewProd = '//*[@id="row_0"]';
    public static $deleteProd = '//*[@id="row_0"]/td[3]/i[2]';

    // order
    public static $searchUser = '//*[@class="dataTables_filter"]/label/input';
    public static $showUserName = '//*[@id="tbl_EditOrderList"]/tbody/tr/td[2]';
    public static $showData = '//*[@id="tbl_EditOrderList"]/tbody/tr/td[3]';
    public static $showQty = '//*[@id="tbl_EditOrderList"]/tbody/tr/td[4]';
    public static $showID = '//*[@id="tbl_EditOrderList"]/tbody/tr/td[1]';
    public static $showCompletedQty = '//*[@id="tbl_EditOrderList"]/tbody/tr/td[5]';
    public static $showPendingQty = '//*[@id="tbl_EditOrderList"]/tbody/tr/td[6]';


    public static $recordsPerPage = '//select[@name="tbl_EditOrderList_length"]';
    public static $show100 = '//select[@name="tbl_EditOrderList_length"]/option[4]';

    public static $invalidSearch = '//*[@class="dataTables_empty"]';
    // search in plant order list

    public static $seeSave = '//*[@id="saved"]';
    public static $edit = '//*[@id="tbl_EditOrderList"]/tbody/tr/td/i';
    public static $showEdit = '//*[@id="checkbox_0"]';
    public static $save = '//*[@id="btnEditOrder"]';

    // check pages

    public static $page2 = '//*[@class="dataTables_paginate paging_bootstrap pagination"]/ul/li[3]/a';
    public static $clickNext = '//*[@class="dataTables_paginate paging_bootstrap pagination"]/ul/li[7]/a';
    public static $previous = '//*[@class="dataTables_paginate paging_bootstrap pagination"]/ul/li[1]/a';
    public static $prevDisabled = '//li[@class="prev disabled"]';


    // edit

    public static $moveOrderData = '//input[@id="txtOrderDateEdit"][@disabled ="disabled"]';
    public static $moveOrderBy = '//input[@id="txtOrderByEdit"][@disabled ="disabled"]';
    public static $moveSubLocation = '//input[@id="txtGrowLocNameEdit"][@disabled ="disabled"]';

    public static $back = '#btnback';
    public static $firstBlock = 'Create Plant Order';

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }


    public function enterFields($login, $password)
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->fillField(self::$enterLogin, $login);
        $I->fillField(self::$enterPass, $password);
        $I->click(self::$ButtonClick);
    }

    public function selectionLocation($location,$login )
    {
        $I = $this->tester;
        $I->seeElement(self::$selectLocation);
        $I->click(self::$selectLocation);
        $I->waitForElement(self::$clickId);
        $I->waitForText($location);
        $I->selectOption(self::$clickId, $location);
        $I->click(self::$clickContinue);
        $I->waitForElement(self::$seeUser);
        $I->see($login, self::$seeUser);

    }
    public function cultivation (){
        $I = $this->tester;
        $I->click(self::$clickCultivation);
        $I->seeElement(self::$seeCreateOrder);

    }

    public function clickSave()
    {
        $I = $this->tester;
        $I->click(self::$clickOrder);
    }
    public function checkValidationFields()
    {
        $I = $this->tester;
        $I->seeElement(self::$seeErrorDate);
        $I->seeElement(self::$seeErrorAssign);
        $I->seeElement(self::$seeSubLocationName);

        $I->click(self::$clickAdd);
        $I->seeElement(self::$seeProdName);
        $I->seeElement(self::$seeProdQuality);
    }

    public function selectOrderDate($date)
    {
        $I = $this->tester;
        $I->click(self::$selectOrderDate);
        $I->waitForElement(self::$clickOrderDate);
        $I->click(self::$clickMonth);


        $I->waitForElement(self::$selectMonth);
        $I->click(self::$clickYear);
        $I->waitForElement(self::$selectYear);
        $I->click(self::$selectYear2020);
        $I->click(self::$clickDate);
        $I->getVisibleText(self::$selectOrderDate , $date);

    }
    public function enterManualDate($dateManual)
    {
        $I = $this->tester;
        $I->fillField(self::$selectOrderDate, $dateManual);

    }

    public function selectAssigned($showUser)
    {
        $I = $this->tester;
        $I->click(self::$selectAssigned);
        $I->waitForElement(self::$tableUsers);
        $I->selectOption(self::$selectUser,$showUser);
        $I->getVisibleText(self::$selectAssigned, $showUser);
    }

    public function selectSubLocation($sub)
    {
        $I = $this->tester;
        $I->click(self::$selectSubLocation);
        $I->waitForElement(self::$tableLocation);
        $I->selectOption(self::$selectSub,$sub);
        $I->getVisibleText(self::$selectSubLocation, $sub);
    }

    public function selectPlantOrigin($plant)
    {
        $I = $this->tester;
        $I->click(self::$selectPlantOrigin);
        $I->waitForElement(self::$tableOrigin);
        $I->selectOption(self::$selectOrigin,$plant);
        $I->getVisibleText(self::$selectPlantOrigin, $plant);
    }

    public function selectPlantOriginBatch($batch)
    {
        $I = $this->tester;
        $I->fillField(self::$selectPlantOriginBatch, $batch);
        $I->waitForText($batch);

    }

    public function checkInvalidDate()
    {
        $I = $this->tester;
        $I->click(self::$clickOrder);
        $I->waitForElement(self::$noDateAvailable);
        $I->see('No data available to Save Clone Order. Operation cancelled.',self::$noDateAvailable);
        $I->click(self::$x);
    }

    public function selectQtyFromBatch($qtyBatch)
    {
        $I = $this->tester;
        $I->fillField(self::$qtyFromBatch, $qtyBatch);
        $I->getVisibleText($qtyBatch);

    }

    public function prodNameUndefined($name, $qty)
    {
        $I = $this->tester;
        $I->fillField(self::$prodName, $name);
        
        $I->fillField(self::$prodQty, $qty);
        $I->click(self::$clickAdd);
        $I->getVisibleText('undefined');
        $I->click(self::$deleteProd);
        $I->waitForElementNotVisible(self::$seeNewProd);

    }
    public function addProdNameAndQuality($name, $qty)
    {
        $I = $this->tester;
        $I->fillField(self::$prodName, $name);
        $I->waitForElementVisible(self::$list);
        $I->click(self::$list);
        $I->fillField(self::$prodQty, $qty);
        $I->click(self::$clickAdd);
        $I->getVisibleText(self::$idProd, $name);


    }



    public function clickSaveOrder()
    {
        $I = $this->tester;
 
        $I->click(self::$clickOrder);
        $I->waitForElement(self::$noDateAvailable);
        $I->see('Clone Order saved successfully.', self::$noDateAvailable);

    }
    /*
    public function checkOrderList($user, $searchName, $searchData, $searchQty)
    {
        $I = $this->tester;
        $I->click(self::$recordsPerPage);
        $I->waitForElement(self::$show100);
        $I->click(self::$show100);
        $I->waitForElement(self::$show100);
        $I->scrollDown(500);
        $I->waitForElement(self::$showUserName);
        $I->see($searchName, self::$showUserName);
        $I->see($searchData, self::$showData);
        $I->see($searchQty, self::$showQty);
    }
    */
    /**
     * Check Search
     * @param $user
     */

    public function searchOrderBy($user)
    {
        $I = $this->tester;
        $I->fillField(self::$searchUser, $user);
        $I->waitForElement(self::$showUserName);
        $I->see($user, self::$showUserName);
    }
    
    public function searchOrderID($id)
    {
        $I = $this->tester;
        $I->fillField(self::$searchUser, $id);
        $I->see($id, self::$showID);
    }

    public function searchData($data)
    {
        $I = $this->tester;
        $I->fillField(self::$searchUser, $data);
        $I->see($data, self::$showData);
    }

    public function searchQty($qty)
    {
        $I = $this->tester;
        $I->fillField(self::$searchUser, $qty);
        $I->see($qty, self::$showQty);
    }

    public function searchCompletedQty($completedQty)
    {
        $I = $this->tester;
        $I->fillField(self::$searchUser, $completedQty);
        $I->see($completedQty, self::$showCompletedQty);
    }
    public function searchPendingQty($pendingQty)
    {
        $I = $this->tester;
        $I->fillField(self::$searchUser, $pendingQty);
        $I->see($pendingQty, self::$showPendingQty);
    }



    public function searchInvalidResults($user)
    {
        $I = $this->tester;
        $I->fillField(self::$searchUser, $user);
        $I->waitForElement(self::$invalidSearch);
        $I->see('No matching records found',self::$invalidSearch);
        
    }

    public function checkPages()
    {
        $I = $this->tester;
        $I->reloadPage();
        $I->scrollDown(500);
        $I->click(self::$page2);
        $I->click(self::$previous);
        $I->seeElement(self::$prevDisabled);
        $I->click(self::$clickNext);

    }


    public function checkEditOrder($qty, $data, $name, $subLocal)
    {
        $I = $this->tester;
        $I->fillField(self::$searchUser, $qty);
        $I->see($qty, self::$showQty);
        $I->click(self::$edit);

        $I->moveMouseOver(self::$moveOrderData);
        $I->getVisibleText($data,self::$moveOrderData);

        $I->moveMouseOver(self::$moveOrderBy);
        $I->getVisibleText($name,self::$moveOrderBy);

        $I->moveMouseOver(self::$moveSubLocation);
        $I->getVisibleText($subLocal,self::$moveSubLocation);

        $I->click(self::$save);
        $I->waitForElement(self::$noDateAvailable);
        $I->see('Clone Order Edited successfully. Clone Order No',self::$noDateAvailable);
        $I->click(self::$x);
       // $I->click(self::$back);
        //$I->waitForText(self::$firstBlock);
    }


    public function deletePlantOrderList($searchID)
    {
        $I = $this->tester;
        $I->fillField(self::$searchUser, $searchID);
        $I->see($searchID,self::$showQty);
        $I->click(self::$edit);
        $I->waitForElement(self::$showEdit);
        $I->click(self::$showEdit);
        $I->click(self::$save);
        $I->waitForElement(self::$seeSave);
        $I->see('Clone Order Edited successfully.',self::$seeSave);

    }




















        
        
        

    



}