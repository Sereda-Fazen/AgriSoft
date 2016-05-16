<?php
namespace Step\Acceptance;

use Exception;

class CultivationSteps extends \AcceptanceTester
{

    public function getNavigation()
    {
        $I = $this;
        $countPage = count($I->grabMultiple('//div[@class="dataTables_paginate paging_bootstrap pagination"]//li'));
        for ($p = 1; $p <= $countPage; $p++) {
            $I->scrollDown(500);
            $I->click('//div[@class="dataTables_paginate paging_bootstrap pagination"]//li['.$p.']/a');
            $I->wait(1);
        }
            $I->seeElement('//li[@class="next disabled"]');

    }




}