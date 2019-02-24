<?php namespace frontend\tests;

use frontend\models\ContactForm;

class FirstTest extends \Codeception\Test\Unit
{
    /**
     * @var \frontend\tests\UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testRun()
    {
        $name = 'Gali';
        $email = 'example@mail.ru';
        $subject = 'subject';
        $body = 'body';
        $verifyCode = '1234';

        $model = new ContactForm();
        $model->setAttributes(['name' => $name, 'email' => $email, 'subject' => $subject, 'body' => $body,
            'verifyCode' => $verifyCode]);


        $this->assertAttributeEquals(
            $name,
            'name',
            $model
        );
        expect('set name', $model->name)->equals($name);
        $this->assertEquals('example@mail.ru', $model->email);
        $this->assertEquals('subject', $model->subject);
        $this->assertEquals('body', $model->body);
        $this->assertLessThan('12345', $model->verifyCode);
    }
}