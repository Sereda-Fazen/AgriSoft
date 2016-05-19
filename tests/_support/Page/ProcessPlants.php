<?php
namespace Page;


class ProcessPlants
{
    public static $clickProcessPlants = '//*[@class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all"]/li[4]/a';
    public static $seeProcessPlants = 'List of Plants';

    // invisible bottoms

    public static $selectAll = '//select[@id="SelectStage"]';
    public static $showAll = '//input[@id="showAllPlants"][@disabled="disabled"]';
    public static $scan = '//input[@id="txtBarcode"][@disabled="disabled"]';
    public static $scanBarcode = '//input[@id="btnScanBarcode"][@disabled="disabled"]';
    public static $plant = '//table[@id="tbl_PlantByBatch"]';

    // select filter

    public static $selectRoom = '//*[@id="SelectRoom"]';
    public static $showAllVisible = '//input[@id="showAllPlants"]';
    public static $seeTable = '//table[@id="tbl_PlantByBatch"]//tbody';

    // scan barcode

    public static $clickScanBarcode = '//input[@id="btnScanBarcode"]';
    public static $visibleInputBarcode = '//input[@id="txtBarcode"]';

    // table

    public static $id = '//*[@id="tbl_PlantByBatch"]//tr[5]';
    
    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }


    public function clickProcessPlants()
    {
        $I = $this->tester;
        $I->waitForElement(self::$clickProcessPlants);
        $I->click(self::$clickProcessPlants);
        $I->waitForText(self::$seeProcessPlants);
    }


    public function checkInvisibleBottoms(){
        $I = $this->tester;
        $I->waitForElement(self::$selectAll);
        $I->waitForElement(self::$showAll);
        $I->waitForElement(self::$scan);
        $I->waitForElement(self::$scanBarcode);
        $I->waitForElement(self::$plant);
    }

    public function selectFilter($select){
        $I = $this->tester;
        $I->selectOption(self::$selectAll, $select);
        $I->getVisibleText($select);
        $I->waitForElement(self::$selectRoom);
    }

    public function selectRoom($selectRoom){
        $I = $this->tester;
        $I->selectOption(self::$selectRoom, $selectRoom);
        $I->getVisibleText($selectRoom);
        $I->click(self::$showAllVisible);
        $I->waitForElement(self::$seeTable, 20);
    }

    public function checkScanBarcode($barcode)
    {
        $I = $this->tester;
        $I->click(self::$clickScanBarcode);
        $I->waitForElement(self::$visibleInputBarcode);
        $I->fillField(self::$visibleInputBarcode, $barcode);
        //$I->click(self::$clickScanBarcode);
        //$I->waitForElement(self::$showAllVisible,20);
        $I->click(self::$showAllVisible);
        $I->wait(3);
    }
/*
    public function checkFitFieldsWithCutting($orderId)
//,$plantId, $batch,$prodName,$UOM,$location,$tray,$stage,$wetW,$dryW,$stageDate,$harvestDate,$barcode,$RFID,$assigned,$fromBatch )
    {
        $I = $this->tester;
        $I->wait(3);
        $I->see($orderId,self::$id);

    }
*/


   
























































}