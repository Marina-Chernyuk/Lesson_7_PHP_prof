<?php
namespace App\Test\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityTest extends WebTestCase
{
public function testLogin()
    {
        $client=static::createClient();
        $client->request('GET', '/product');
        /*Утверждает конкретный HTTP статус-код.*/
        $this->assertResponseStatusCodeSame(200);
        /* тест валидирует, что HTTP-ответ был успешен, и что тело запроса содержит тег <h2> с информацией о продукте*/
       $this->assertSelectorTextContains('h1', 'Controller');

    }
    protected function setUp(): void
    {
        $this->user= new User;
    }
    public function testFailure()
    {
        /* будет возвращать true в том случае, если массив содержит предоставленное значение,
        иначе возвращается false, а в случае true утвержденный тестовый пример был пройден,
        иначе тестовый пример потерпел неудачу*/
        $this->assertContains(4, [1, 2, 3]);
    }

}
