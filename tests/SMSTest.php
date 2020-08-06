<?php

declare(strict_types=1);

class SMSTest extends \PHPUnit\Framework\TestCase
{
  private static $infobip;

  public static function setUpBeforeClass(): void
  {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    self::$infobip = new AccessAfya\Infobip(
      $_ENV['USERNAME'],
      $_ENV['PASSWORD'],
      $_ENV['SENDER_ID'],
      $_ENV['BASE_URL']
    );
  }

  /**
   * Test that true does in fact equal true
   */
  public function testStatusCodeIsSuccess()
  {
    $response = self::$infobip->sms->send(
      "Hello, Library test!",
      "254719747908"
    );
    
    $statusCode = $response->getStatusCode();
    $this->assertEquals(200, $statusCode);
  }

  public function testResponseIsSuccess()
  {
    $response = self::$infobip->sms->send(
      "Hello, Library test!",
      "25471974708"
    );
    $body = $response = json_decode($response->getBody()->getContents(), true);
    $this->assertArrayHasKey('messages', $body);
  }
}
