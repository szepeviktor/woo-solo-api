<?php

declare(strict_types=1);

namespace Tests\Acceptance\Activation;

use AcceptanceTester;

class WooSoloApiSubmenuCest
{
	public function _before(AcceptanceTester $I)
	{
		$I->loginAsAdmin();
		$I->amOnPluginsPage();
		$I->activatePlugin('woocommerce');
		$I->activatePlugin('woo-solo-api');
	}

	public function seeWooSoloApiSubmenuPage(AcceptanceTester $I)
	{
		$I->amOnPage('wp-admin/admin.php?page=solo_api_options');
		sleep(5);
		$I->see('Solo API token');
	}
}
