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
    public static $clickId = '//*[@id="LocationId"]/option[2]';
    public static $seeUser = '//span[@id="loggedinuser"]';

    // cultivation


    public static $clickCultivation = '//ul[@class="nav"]/li[4]/a';
    public static $seeCreateOrder = '//div[@id="divOrderForm"]//legend';

    public static $clickOrder = '//*[@id="btnSaveOrder"]';
    //validation
    public static $seeErrorDate = '//*[@class="cloneordermst input-block-level error hasDatepicker"]';
    public static $seeErrorAssign = '//*[@id="UserId"][@class="cloneordermst error"]';
    public static $seeSubLocationName = '//*[@id="SubLocCode"][@class="cloneordermst error"]';


    public static $selectOrderDate = '//*[@id="OrderDate"]';
    public static $clickOrderDate = '//div[@id="ui-datepicker-div"]';



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
    
        /*
        $I->click(self::$selectOrderDate);
        $I->waitForElement(self::$clickOrderDate);
        */

    }

}