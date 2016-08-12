<?php
use Step\Acceptance;
/**
 * @group 1_login
 */
class LoginCest
{
    

    function checkEmptyPass (\Page\Login $loginPage, \AcceptanceTester $I)
    {
        $loginPage->enterFields('test', '');
        $I->see('Please Enter Password.', '//div[@id="errormsg"]');
    }

    function checkEmptyEmail (\Page\Login $loginPage, \AcceptanceTester $I)
    {
        $loginPage->enterFields('', 'test');
        $I->see('Please Enter User Name.', '//div[@id="errorms"]');
    }





}
