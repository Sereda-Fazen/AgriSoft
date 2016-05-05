<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function checkEmptyFields (\Page\Login $loginPage)
    {
        $loginPage->emptyLogin();
    }

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
/*
    function checkInvalidLogin (\Page\Login $loginPage, \AcceptanceTester $I)
    {
        $loginPage->enterFields('test', 'test1234');
        $I->see('Your account has been Locked. Contact to Admin.', '//div[@id="errormsg"]' );
    }
*/
    function checkSuccessLogin (\Page\Login $loginPage, \AcceptanceTester $I)
    {

        $loginPage->enterFields('vbuvac', 'Password1');
        $I->getVisibleText('Select Location');
    }

    function checkSelect (\Page\Login $loginPage, \AcceptanceTester $I)
    {
        $loginPage->selectLocation();
        $loginPage->selectIdLocation();
    }


    





}

