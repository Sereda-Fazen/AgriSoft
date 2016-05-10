<?php
namespace Page;

use Exception;

class Login
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

    
    public function selectIdLocation()
    {
        $I = $this->tester;
        $I->click(self::$selectLocation);
        $I->waitForElement(self::$clickId);
        $I->click(self::$clickId);
        $I->click(self::$clickContinue);


        $I->waitForElement(self::$seeUser);
        $I->see('vbuvac', self::$seeUser);

    }

}