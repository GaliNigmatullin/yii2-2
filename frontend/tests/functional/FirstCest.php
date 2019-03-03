<?php namespace frontend\tests\functional;
use frontend\tests\FunctionalTester;

class FirstCest
{
    public function _before(FunctionalTester $I)
    {
    }

    /**
     * @dataProvider pageProvider
     */

    // tests
    public function tryRun(FunctionalTester $I, \Codeception\Example $data)
    {
        $I->amOmRoute($data['url']);
        $I->see($data['h1'], 'h1');
    }

    protected function dataProvider(){
        return[
            ['url' => 'site/about', 'h1' => 'About'],
            ['url' => 'site/contact', 'h1' => 'Contact'],
            ['url' => 'site/signup', 'h1' => 'Signup'],
            ['url' => 'site/home', 'h1' => 'Home'],
        ];
    }
}

/*Выдал такую ошибку. Не понял в чем дело
 * Couldn't parse test 'C:\OSPanel\domains\yii2-2\adv\frontend\tests\functional\FirstCest.php'
  DataProvider 'pageProvider' for frontend\tests\functional\FirstCest->tryRun is invalid or not callable.
  Make sure that the dataprovider exist within the test class. */
