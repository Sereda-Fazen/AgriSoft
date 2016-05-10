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
    public static $clickId = '//*[@id="LocationId"]/option[3]';
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
    public static $selectUser = '//select[@id="UserId"]/option[74]';

    //sub location

    public static $selectSubLocation = '//select[@id="SubLocCode"]';
    public static $tableLocation = '//select[@id="SubLocCode"]/option';
    public static $selectSub = '//select[@id="SubLocCode"]/option[2]';

    public static $noDateAvailable = '//*[@id="saved"]';

    // product name and quantity

    public static $prodName = '//*[@id="ProductList"]';
    public static $prodQty = '//*[@id="ProductQty"]';
    public static $seeNewProd = '//*[@id="row_0"]';
    public static $deleteProd = '//*[@id="row_0"]/td[3]/i[2]';

    // order
    public static $searchUser = '//*[@class="dataTables_filter"]/label/input';
    public static $showUserName = '//*[@id="tbl_EditOrderList"]/tbody/tr/td[2]';
    public static $showData = '//*[@id="tbl_EditOrderList"]/tbody/tr/td[3]';
    public static $showQty = '//*[@id="tbl_EditOrderList"]/tbody/tr/td[4]';



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

    public function selectionLocation()
    {
        $I = $this->tester;
        $I->seeElement(self::$selectLocation);
        $I->click(self::$selectLocation);
        $I->waitForElement(self::$clickId);
        $I->click(self::$clickId);
        $I->click(self::$clickContinue);
        $I->waitForElement(self::$seeUser);
        $I->see('vbuvac', self::$seeUser);

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

    public function selectOrderDate()
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
        $I->getVisibleText(self::$selectOrderDate ,'08-03-2020');

    }
    public function enterManualDate()
    {
        $I = $this->tester;
        $I->fillField(self::$selectOrderDate, '05-12-2016');

    }

    public function selectAssigned()
    {
        $I = $this->tester;
        $I->click(self::$selectAssigned);
        $I->waitForElement(self::$tableUsers);
        $I->click(self::$selectUser);
        $I->getVisibleText(self::$selectAssigned,'Vanya Buvac');
    }

    public function selectSubLocation()
    {
        $I = $this->tester;
        $I->click(self::$selectSubLocation);
        $I->waitForElement(self::$tableLocation);
        $I->click(self::$selectSub);
        $I->getVisibleText(self::$selectSubLocation,'Clone Room');
    }

    public function checkInvalidDate()
    {
        $I = $this->tester;
        $I->click(self::$clickOrder);
        $I->waitForElement(self::$noDateAvailable);
        $I->see('No data available to Save Clone Order. Operation cancelled.',self::$noDateAvailable);
        $I->waitForElementNotVisible(self::$noDateAvailable, 15);
    }

    public function addProdNameAndQuality($name, $qty)
    {
        $I = $this->tester;
        $I->fillField(self::$prodName, $name);
        $I->fillField(self::$prodQty, $qty);
        $I->click(self::$clickAdd);
        $I->waitForElement(self::$seeNewProd);
       
        $I->click(self::$deleteProd);
        $I->waitForElementNotVisible(self::$seeNewProd);

        $I->fillField(self::$prodName, $name);
        $I->fillField(self::$prodQty, $qty);
        $I->click(self::$clickAdd);

    }

    public function clickSaveOrder($user){
        $I = $this->tester;
        $I->click(self::$clickOrder);
        $I->waitForElement(self::$noDateAvailable);
        $I->see('Clone Order saved successfully.', self::$noDateAvailable);

        $I->fillField(self::$searchUser, $user);
        $I->waitForElement(self::$showUserName);
        $I->see('Vanya Buvac',self::$showUserName);
        $I->see('05-12-2016', self::$showData);

    }




}