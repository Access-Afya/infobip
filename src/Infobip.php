<?php

namespace  AccessAfya;

use GuzzleHttp\Client;
use AccessAfya\Infobip\Email;
use AccessAfya\Infobip\RCS;
use AccessAfya\Infobip\SMS;
use AccessAfya\Infobip\Voice;
use AccessAfya\Infobip\WhatsApp;
use GuzzleHttp\ClientInterface;

/**
 * Infobip APIs wrapper
 * 
 * @param string $username
 * @param string $password
 * @param string $senderId
 * @param string $baseUrl
 */
class Infobip {
  /** 
   * SMS instance
   * 
   * @var SMS
  */
  public $sms;

  /** 
   * Email instance
   * 
   * @var Email
  */
  public $email;

  /** 
   * Voice instance
   * 
   * @var Voice
  */
  public $voice;

  /** 
   * WhatsApp instance
   * 
   * @var WhatsApp
  */
  public $whatsApp;

  /** 
   * SRC instance 
   * 
   * @var SRC
  */
  public $rcs;

  /** 
   * Infobip sender id
   * 
   * @var string
  */
  protected $senderId;

  /** 
   * Infobip password
   * 
   * @var string
  */
  private $username;

  /** 
   * Infobip password
   * 
   * @var string
  */
  private $password;

  public function __construct(string $username, string $password, string $senderId, string $baseUrl)
  {
    $this->username = $username;
    $this->password = $password;
    $this->senderId = $senderId;
    $this->baseUrl = $baseUrl;

    $client = $this->authenticate();

    // Initialize Wrappers
    $this->sms = new SMS($client, $senderId);
    $this->email = new Email($client, $senderId);
    $this->voice = new Voice($client, $senderId);
    $this->whatsApp = new WhatsApp($client, $senderId);
    $this->rcs = new RCS($client, $senderId);
  }

  /**
   * Authenticate with infobip
   * 
   * @param string $username
   * @param string $password
   * 
   * @return void
   */
  public function authenticate(): ClientInterface
  {
    $authorization = base64_encode($this->username.":".$this->password);

    return new Client([
      'headers' => [
        "Authorization" => "Basic ".$authorization,
        "Accept" => "application/json",
        "Content-Type" => "application/json"
      ],
      'base_uri' => $this->baseUrl,
    ]);
  }

  /**
   * Sender ID setter
   * 
   * @param string $senderId
   * 
   * @return void
   */
  public function setSenderId(string $senderId): void
  {
    $this->senderId = $senderId;
  }
}