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

    //plant ID and batch

    public static $plantID = '//table[@id="tbl_PlantByBatch"]//tbody/tr[1]//td[3]//a';
    public static $batch = '//table[@id="tbl_PlantByBatch"]//tbody/tr[1]//td[4]//a';

    public static $plantForm = '//div[@id="ShowNotesModal"]';
    public static $batchForm = '//div[@id="ShowLotsModal"]';


    // Move Plants

    public static $morePlants = '//*[@class="span4"]//input[1]';
    public static $showPlantModal = '//*[@id="MovePlantModal"]';
    public static $moveTo = '//select[@id="SubLocCode3"]';
    public static $selectTray = '//select[@id="TrayId3"]';
    public static $apply = '//*[@id="btnMovePlant"]';
    public static $success = '//*[@id="saved"]';


    // Destroy


    public static $clickCancelAllCheckbox = '//*[@id="chkSelectall"]';
    public static $checkBox = '//table[@id="tbl_PlantByBatch"]//tbody/tr[5]//td[18]';
    public static $destroy = '//*[@class="span4"]//input[4]';
    public static $showFormDestroy = '//div[@id="DestroyModal"]';
    public static $thereArePlants = '';
    public static $wasteWeight = '';
    public static $reason = '//input[@id="txtWasteNote"]';
    public static $approve = '//div[@id="DestroyModal"]/div[3]/input';
    public static $seeTableNumbers = '//div[@class="ui-keyboard ui-widget-content ui-widget ui-corner-all ui-helper-clearfix ui-keyboard-has-focus"]';
    public static $seeQuantity = '//span[@id="confirmDestroy"]';
    public static $clickOnOne = '//div[@class="ui-keyboard-keyset ui-keyboard-keyset-default"]/button[7]';












    // Develop

    public static $develop = '';
    public static $showForm = '';

    
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

    public function checkSelectFilter(){
        $I = $this->tester;
        $I->click(self::$selectAll);
        $I->getVisibleText('Clone');
        $I->getVisibleText('Vegetation');
        $I->getVisibleText('Flowering');
        $I->getVisibleText('Harvesting');
        $I->getVisibleText('Drying');
        $I->getVisibleText('Curing');
        $I->getVisibleText('Developed');
        $I->getVisibleText('Destroyed');
        $I->waitForElement(self::$selectRoom);
    }

    public function selectFilter($select){
        $I = $this->tester;
        $I->waitForElement(self::$selectAll);
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
        $I->waitForElement(self::$clickScanBarcode);
        $I->click(self::$clickScanBarcode);
        $I->waitForElement(self::$visibleInputBarcode);
        $I->fillField(self::$visibleInputBarcode, $barcode);
        //$I->click(self::$clickScanBarcode);
        //$I->waitForElement(self::$showAllVisible,20);
        $I->click(self::$showAllVisible);
        $I->wait(3);
    }

    public function checkClickPlantId($plantID)
    {
        $I = $this->tester;
        $I->seeLink($plantID, self::$plantID);
        $I->click(self::$plantID);
        $I->waitForElement(self::$plantForm);
    }

    public function checkClickBatch($batch)
    {
        $I = $this->tester;
        $I->wait(2);
        $I->seeLink($batch,self::$batch);
        $I->click(self::$batch);
        $I->waitForElement(self::$batchForm);
    }


    public function checkMorePlants($moveTo, $selectTray){
        $I = $this->tester;
        $I->waitForElement(self::$morePlants);
        $I->click(self::$morePlants);
        $I->waitForElementVisible(self::$showPlantModal);
        $I->waitForElement(self::$apply);
        $I->click(self::$apply);
        $I->acceptPopup('Please Select Room First!');
        $I->waitForElement(self::$moveTo);
        $I->selectOption(self::$moveTo, $moveTo);
        $I->getVisibleText($moveTo);
        $I->click(self::$apply);
        $I->acceptPopup('Please Select Try!');
        $I->waitForElement(self::$selectTray);
        $I->selectOption(self::$selectTray, $selectTray);
        $I->getVisibleText($selectTray);
        $I->click(self::$apply);
        $I->waitForElement(self::$success);
        $I->see('Plants moved successfully.', self::$success);

    }


    public function checkDestroy(){
        $I = $this->tester;
        $I->waitForElement(self::$clickCancelAllCheckbox);
        $I->click(self::$clickCancelAllCheckbox);
        $I->click(self::$checkBox);
        $I->waitForElement(self::$destroy);
        $I->click(self::$destroy);
        $I->waitForElement(self::$showFormDestroy);
        $I->getVisibleText('There are 1plant(s) selected to be destroed');
        $I->waitForElement(self::$approve);
        $I->click(self::$approve);
        $I->waitForElement(self::$seeTableNumbers);
        $I->waitForElement(self::$reason);
        $I->fillField(self::$reason, 'Test');
        $I->getVisibleText('Test');
     //   $I->click(self::$approve);

    }

   
























































}