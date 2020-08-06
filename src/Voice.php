<?php
// Voice messaging
declare(strict_types=1);

namespace AccessAfya\Infobip;

class Voice {
  /** 
   * Infobip sender id
   * 
   * @var string
  */
  private $senderId;

  /** 
   * HTTP client
   * 
   * @var Client
  */
  private $client;


  /** 
   * Initialize with http client
   * 
   * @param Client $client
   * @param string $senderId
   */
  public function __construct($client, $senderId)
  {
    $this->client = $client;
    $this->senderId = $senderId;
  }
}