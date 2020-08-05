<?php

declare(strict_types=1);

class SMSTest extends \PHPUnit\Framework\TestCase
{
  private static $baseUrl;

  private static $username;
  
  private static $password;
  
  private static $senderId;

  public static function setUpBeforeClass(): void
  {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    self::$baseUrl = $_ENV['BASE_URL'];
    self::$username = $_ENV['USERNAME'];
    self::$password = $_ENV['PASSWORD'];
    self::$senderId = $_ENV['SENDER_ID'];
  }

  /**
   * Test that true does in fact equal true
   */
  public function testStatusCodeIsSuccess()
  {
    $sms = new AccessAfya\Infobip\SMS(
      self::$username,
      self::$password,
      self::$senderId,
      self::$baseUrl
    );

    $response = $sms->send(
      "Hello, Library test!",
      "254719747908"
    );
    
    $statusCode = $response->getStatusCode();
    $this->assertEquals(200, $statusCode);
  }

  public function testStatusCodeIsFail()
  {
    # code...
  }

  public function testResponseIsSuccess()
  {
    # code...
    // $body = $response = json_decode($response->getBody()->getContents(), true);
  }
}
