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
        $I->see('Please Enter User Name.', '//div[@id="errormsg"]');
    }

    function checkShortPass (\Page\Login $loginPage, \AcceptanceTester $I)
    {

        $loginPage->enterFields('test', 'test');
        $I->getVisibleText('Please lengthen this text to 8 characters');
    }

    function checkNoSuchUser (\Page\Login $loginPage, \AcceptanceTester $I)
    {

        $loginPage->enterFields('123456', 'test1234');
        $I->see('No such user exists in system.', '//div[@id="errormsg"]');
    }

    function checkSuccessLogin (\Page\Login $loginPage, \AcceptanceTester $I)
    {

        $loginPage->enterFields('vbuvac', 'Password1');
        $I->getVisibleText('Select Location');
        $I->comment('Expected results: Check validation for user');
    }

}
