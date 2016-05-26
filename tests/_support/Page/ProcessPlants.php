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
    public static $checkBox = '//table[@id="tbl_PlantByBatch"]//tbody/tr[3]//td[18]';
    public static $destroy = '//*[@class="span4"]//input[4]';
    public static $showFormDestroy = '//div[@id="DestroyModal"]';
    public static $thereArePlants = '';
    public static $wasteWeight = '';
    public static $reason = '//input[@id="txtWasteNote"]';
    public static $approve = '//div[@id="DestroyModal"]/div[3]/input';
    public static $seeTableNumbers = '//div[@class="ui-keyboard-keyset ui-keyboard-keyset-default"]';
    public static $seeQuantity = '//span[@id="confirmDestroy"]';
    public static $clickOnOne = '//div[@class="ui-keyboard-keyset ui-keyboard-keyset-default"]/button[7]';
    public static $clickAgreeNum = '//div[@class="ui-keyboard-keyset ui-keyboard-keyset-default"]/button[14]';
    public static $doNotSeeFiveString = '//table[@id="tbl_PlantByBatch"]//tbody/tr[5]';

    //prune trim

    public static $checkBox2 = '//table[@id="tbl_PlantByBatch"]//tbody/tr[4]//td[18]';
    public static $pruneTrim = '//*[@class="span4"]//input[5]';
    public static $checkBox4 = '//table[@id="tbl_PlantByBatch"]//tbody/tr[4]//td[18]';
    public static $showFormPrune = '//div[@id="TrimModal"]';
    public static $approvePrune = '//input[@id="btnTrimOrder"]';
    public static $yes = '//input[@name="destroyQ"]';
    public static $seeTablePrune = '//div[@class="ui-keyboard ui-widget-content ui-widget ui-corner-all ui-helper-clearfix ui-keyboard-has-focus"]';
    public static $weasteW = '//input[@id="txtTrashWeight2"]';
    public static $reasonPrune = '//input[@id="txtWasteNote2"]';
    public static $butter = '//input[@id="txtAssignedTo"]';
    public static $butter1 = '//input[@id="hdnAssignedItem"]';

    // Add Notes

    public static $addNotes = '//*[@class="span4"]//input[7]';
    public static $showFormAddNotes = '//div[@id="NotesModal"]';

    public static $short = '//input[@id="txtWaterNote"][@placeholder="Short Note"]';
    public static $short1 = '//input[@id="txtPHNote"][@placeholder="Short Note"]';
    public static $short2 = '//input[@id="txtLightNote"][@placeholder="Short Note"]';
    public static $short3 = '//input[@id="txtSignOfNote"][@placeholder="Short Note"]';

    public static $approveNotes = '//div[@id="NotesModal"]/div[3]/input';
    public static $textArea = '//textarea[@id="txtNotes"][@placeholder="Long Notes for Plant(s)"]';
    public static $statusPF = '//input[@name="chkPHStatus"][@value="Over"]';
    public static $signOf = '//input[@name="chkSignOf"][@value="Herma"]';
    public static $close = '#saved > div:nth-of-type(2) > span';







    // Develop

    public static $randomCheckBox = '//*[@id="tbl_PlantByBatch"]/tbody/tr[4]/td[18]';
    public static $develop = '//*[@class="span4"]//input[2]';
    public static $showFormDevelop = '//div[@id="DevelopModal"]';
    public static $selectUser = '//select[@id="UserId2"]';
    public static $test123 = '//input[@id="txtNewBatchNo"][@placeholder]';
    public static $yesDeploy = '//input[@id="chkSellable"]';
    public static $plantQty = '//input[@id="txtDryWeight"][@placeholder="In Grams Only"]';
    public static $dryItem = '//*[@id="txtDryItem"]';
    public static $assignedPlant = 'ul.ui-autocomplete.ui-menu.ui-widget.ui-widget-content.ui-corner-all';
    public static $assignedPlant2 = 'ul.ui-autocomplete.ui-menu.ui-widget.ui-widget-content.ui-corner-all > li:first-child > a.ui-corner-all';


    public static $skanTrayBatch = '//input[@id="trayBarcode4"]';
    public static $moveToDevelop = '//select[@id="SubLocCode4"]';
    public static $trayDevelop = '//select[@id="TrayId4"]';

    public static $applyChanges = '//div[@id="DevelopModal"]//div[3]/input[3]';

    //CHECK new developed

    public static $newDepCheckBox = '//*[@id="tbl_PlantByBatch"]/tbody/tr[1]/td[18]/input';
    public static $clickCheckBox = '//*[@id="chkSelectall"]';
    public static $newBatch = '//*[@id="tbl_PlantByBatch"]/tbody/tr[1]/td[4]';

    // vegetation

    public static $stage = '//*[@id="tbl_PlantByBatch"]/tbody/tr[1]/td[9]';
    public static $tablePlant = '//*[@id="tbl_PlantNotes"]/tbody';
    public static $closePlant = '//div[@id="ShowNotesModal"]/div/button';
    public static $reverse = '//*[@class="span4"]//input[3]';
    public static $reverseBatch = '//*[@id="divPlantByBatch"]//tr[4]';
    public static $checkBoxReverse = '//*[@id="divPlantByBatch"]//tr[4]/td[18]';

    
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
        //$I->click(self::$showAllVisible);
    }

    public function selectRoom($selectRoom){
        $I = $this->tester;
        $I->selectOption(self::$selectRoom, $selectRoom);
        $I->getVisibleText($selectRoom);
        //$I->click(self::$showAllVisible);
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
    }

    public function checkClickPlantId($plantID)
    {
        $I = $this->tester;
        $I->waitForElement(self::$plantID);
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
        //$I->waitForElement(self::$clickCancelAllCheckbox);
        //$I->click(self::$clickCancelAllCheckbox);
       // $I->click(self::$checkBox2);
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
        //$I->see('Plants moved successfully.', self::$success);
       // $I->click(self::$close);
        $I->click(self::$clickScanBarcode);


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
        $I->click(self::$clickOnOne);
        $I->click(self::$clickAgreeNum);
        $I->waitForElement(self::$reason);
        $I->fillField(self::$reason, 'Test');
        $I->getVisibleText('Test');
        $I->waitForElement(self::$approve);
        $I->click(self::$approve);
        $I->waitForElement(self::$success);
        $I->see('Plants destroyed.', self::$success);
        $I->click(self::$close);
        $I->dontSee(self::$doNotSeeFiveString);

    }

    public function checkPruneTrim(){
        $I = $this->tester;
        $I->waitForElement(self::$checkBox4);
        $I->click(self::$checkBox4);
        $I->waitForElement(self::$pruneTrim);
        $I->click(self::$pruneTrim);
        $I->waitForElement(self::$showFormPrune);
        $I->getVisibleText('There are plant(s) selected for this operation');
        $I->waitForText('Destroy Now');
        $I->waitForText('Waste Weight');
        $I->waitForText('Reasons/Notes');
        $I->waitForText('Waste Assigned to');
        $I->waitForElement(self::$approvePrune);
        $I->waitForElement(self::$yes);
        $I->click(self::$yes);
        $I->waitForElement(self::$approvePrune);
        $I->click(self::$approvePrune);
        /*
        $I->waitForElement(self::$seeTablePrune);
        $I->fillField('Test', self::$weasteW);
        $I->getVisibleText('');
        */
        $I->fillField(self::$weasteW,'123321');
        $I->waitForElement(self::$approvePrune);
        $I->click(self::$approvePrune);
        $I->seeElement(self::$reasonPrune);
        $I->fillField(self::$reasonPrune,'Reasons#Test1');
        $I->waitForElement(self::$butter);
        $I->fillField(self::$butter,'Butter - 1 lb');
        $I->waitForElement(self::$approvePrune);
        $I->click(self::$approvePrune);
        $I->waitForElement(self::$success);
        $I->see('Trim Destroyed Successfully.', self::$success);
        $I->click(self::$close);

    }

    public function checkAddNotes(){
        $I = $this->tester;

        $I->click(self::$randomCheckBox);
        $I->waitForElement(self::$addNotes);
        $I->click(self::$addNotes);
        $I->waitForElement(self::$showFormAddNotes);
        $I->getVisibleText('Adding Notes to Plant(s)');
        $I->getVisibleText('Water Status');
        $I->getVisibleText('Over');
        $I->getVisibleText('Just Right');
        $I->getVisibleText('Under');
        $I->getVisibleText('Bugs');
        $I->getVisibleText('Herma');
        $I->getVisibleText('Mold');
        $I->waitForElement(self::$short);
        $I->waitForElement(self::$textArea);
        $I->waitForElement(self::$approveNotes);
        $I->getVisibleText('There are 0plant(s) selected.');

        $I->waitForElement(self::$statusPF);
        $I->click(self::$statusPF);
        $I->waitForElement(self::$signOf);
        $I->click(self::$signOf);

        $I->fillField(self::$short, 'Test1');
        $I->getVisibleText('Test1');


        $I->getVisibleText('Test Notes for Plants');
        $I->waitForElement(self::$approveNotes);
        $I->click(self::$approveNotes);
        $I->acceptPopup('Please add data to the required fields.');
        $I->fillField(self::$short1, 'Test2');
        $I->fillField(self::$short2, 'Test3');
        $I->fillField(self::$short3, 'Test4');
        $I->fillField(self::$textArea, 'Test Notes for Plants');
        $I->waitForElement(self::$approveNotes);
        $I->click(self::$approveNotes);

        $I->waitForElement(self::$success);
        $I->see('Notes Added to Plant(s).', self::$success);
        $I->click(self::$close);


    }

    public function checkDeploy($newBatch ,$moveToDevelop, $trayDevelop){
        $I = $this->tester;
        $I->waitForElement(self::$clickCancelAllCheckbox);
        //$I->click(self::$clickCancelAllCheckbox);
        $I->waitForElement(self::$develop);
        $I->click(self::$develop);
        $I->acceptPopup('Please select at least one plant.');
        $I->click(self::$randomCheckBox);
        $I->waitForElement(self::$develop);
        $I->click(self::$develop);
        $I->waitForElement(self::$showFormDevelop);
        $I->getVisibleText('Develop Plants');
        $I->getVisibleText('Developed By');
        $I->waitForElement(self::$selectUser);
        $I->getVisibleText('Transition Clones to Inventory');
        $I->getVisibleText('New Batch Number');
        $I->getVisibleText('Test123_');
        $I->waitForElement(self::$test123);
        $I->getVisibleText('Result');
        $I->getVisibleText('Scan Tray Barcode (Optional)');
        $I->getVisibleText('Move To');
        $I->getVisibleText('Select Tray');

        //next

        $I->selectOption(self::$selectUser, 'Vanya Buvac');
        $I->getVisibleText('Vanya Buvac');
        $I->click(self::$yesDeploy);
        $I->getVisibleText('Plant Qty.');
        $I->waitForElement(self::$plantQty);
        $I->getVisibleText('Assign Plant Stock to Item');
        $I->waitForElement(self::$dryItem);

        //next 2

/*
        $I->waitForElement(self::$dryItem);
        $I->fillField(self::$dryItem, 'White');
        $I->waitForElement(self::$assignedPlant);
        $I->waitForText($widow);
        $I->click($widow);

        $I->waitForElement(self::$plantQty);
        $I->fillField(self::$plantQty, '12');
        $I->getVisibleText('12');
*/
        // next 3

        $I->waitForElement(self::$test123);
        $I->fillField(self::$test123, 'TEST');
        $I->getVisibleText('TEST');
        $I->getVisibleText('Test123_TEST');
        $I->wait(2);
        $I->fillField(self::$skanTrayBatch,$newBatch);
        $I->getVisibleText($newBatch);
        $I->getVisibleText('Test12345');
        $I->selectOption(self::$moveToDevelop, $moveToDevelop );
        $I->getVisibleText($moveToDevelop);
        $I->selectOption(self::$trayDevelop, $trayDevelop );
        $I->getVisibleText($trayDevelop);
        $I->getVisibleText('There are 1 plant(s) selected to be developed.');

        //final
        $I->waitForElement(self::$applyChanges);
        $I->click(self::$applyChanges);

        $I->waitForElement(self::$success);
        $I->see('Plants developed and shifted to next stage.', self::$success);
        $I->click(self::$close);

    }

    public function checkNewDeployed($newBatch){
        $I = $this->tester;
        $I->waitForElement(self::$newBatch);
        $I->getVisibleText($newBatch);

    }


    /**
     * @param $vegetation
     * @param $plantID
     * Vegetation
     */



    public function checkVegetation($vegetation,$plantID)
    {
        $I = $this->tester;
        $I->waitForElement(self::$stage);
        $I->getVisibleText($vegetation);
        self::checkClickPlantId($plantID);
        $I->waitForElement(self::$tablePlant);
        $I->getVisibleText('Test');
        $I->getVisibleText('O');
        $I->getVisibleText('Test2');
        $I->getVisibleText('H');
        $I->getVisibleText('Test3');
        $I->getVisibleText('Test Notes for Plant');
        $I->waitForElement(self::$closePlant);
        $I->click(self::$closePlant);
        $I->wait(3);
    }

    public function checkDeployVegetation($moveToDevelop, $trayDevelop){
        $I = $this->tester;
        $I->waitForElement(self::$develop);
        $I->click(self::$develop);
        $I->acceptPopup('Please select at least one plant.');
        $I->click(self::$newDepCheckBox);
        $I->waitForElement(self::$develop);
        $I->click(self::$develop);
        $I->waitForElement(self::$showFormDevelop);
        $I->getVisibleText('Develop Plants');
        $I->getVisibleText('Developed By');
        $I->waitForElement(self::$selectUser);
        $I->getVisibleText('Transition Clones to Inventory');
        $I->getVisibleText('New Batch Number');
        $I->getVisibleText('Test123_');
        $I->waitForElement(self::$test123);
        $I->getVisibleText('Result');
        $I->getVisibleText('Scan Tray Barcode (Optional)');
        $I->getVisibleText('Move To');
        $I->getVisibleText('Select Tray');

        $I->selectOption(self::$selectUser, 'Vanya Buvac');
        $I->getVisibleText('Vanya Buvac');

        $I->selectOption(self::$moveToDevelop, $moveToDevelop );
        $I->getVisibleText($moveToDevelop);
        $I->selectOption(self::$trayDevelop, $trayDevelop );
        $I->getVisibleText($trayDevelop);
        $I->getVisibleText('There are 1 plant(s) selected to be developed.');

        $I->waitForElement(self::$applyChanges);
        $I->click(self::$applyChanges);

        $I->waitForElement(self::$success);
        $I->see('Plants developed and shifted to next stage.', self::$success);
        $I->click(self::$close);


    }

    public function checkDeployForVegetation($moveToDevelop, $trayDevelop){
        self::checkDeployVegetation($moveToDevelop, $trayDevelop);
    }

    public function checkStageVegetation($flowering,$plantID){
        self::checkVegetation($flowering,$plantID);
    }










































        /*
$I->waitForElement(self::$reverse);

$I->click(self::$reverse);
$I->waitForElement(self::$success);
$I->see('Stage Reversed Successfully.',self::$success);
$I->click(self::$close);

    }

    public function checkReverse($newBatch)
    {
        $I = $this->tester;
        $I->waitForElement(self::$reverseBatch);
        $I->getVisibleText($newBatch);
    }


        $I->click(self::$checkBoxReverse);
        $I->waitForElement(self::$develop);
        $I->click(self::$develop);
        $I->waitForElement(self::$showFormDevelop);
        $I->getVisibleText('Develop Plants');
        $I->getVisibleText('Developed By');
        $I->waitForElement(self::$selectUser);
        $I->getVisibleText('Transition Clones to Inventory');
        $I->getVisibleText('New Batch Number');
        $I->getVisibleText('Test123_');
        $I->waitForElement(self::$test123);
        $I->getVisibleText('Result');
        $I->getVisibleText('Scan Tray Barcode (Optional)');
        $I->getVisibleText('Move To');
        $I->getVisibleText('Select Tray');

        //next

        $I->selectOption(self::$selectUser, 'Vanya Buvac');
        $I->getVisibleText('Vanya Buvac');
        $I->click(self::$yesDeploy);
        $I->getVisibleText('Plant Qty.');
        $I->waitForElement(self::$plantQty);
        $I->getVisibleText('Assign Plant Stock to Item');
        $I->waitForElement(self::$dryItem);
        $I->waitForElement(self::$test123);
        $I->fillField(self::$test123, 'TEST');
        $I->getVisibleText('TEST');
        $I->getVisibleText('Test123_TEST_TEST');
        $I->wait(2);
        $I->fillField(self::$skanTrayBatch,$newBatch);
        $I->getVisibleText($newBatch);
        $I->getVisibleText('Test12345');
        $I->selectOption(self::$moveToDevelop, $moveToDevelop );
        $I->getVisibleText($moveToDevelop);
        $I->selectOption(self::$trayDevelop, $trayDevelop );
        $I->getVisibleText($trayDevelop);
        $I->getVisibleText('There are 1 plant(s) selected to be developed.');

        //final
        $I->waitForElement(self::$applyChanges);
        $I->click(self::$applyChanges);

        $I->waitForElement(self::$success);
        $I->see('Plants developed and shifted to next stage.', self::$success);
        $I->click(self::$close);
    }
*/



    

   
























































}