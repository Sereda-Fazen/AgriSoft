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

    public function checkPages()
    {
        $I = $this->tester;
        $I->click(self::$page2);
        //$I->click(self::$previous);
       // $I->seeElement(self::$prevDisabled);
        $I->click(self::$clickNext);

    }
    
    
















        
        
        

    



}