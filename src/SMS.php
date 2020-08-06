<?php
// Bulk SMS Messaging
declare(strict_types=1);

namespace AccessAfya\Infobip;

use GuzzleHttp\Client;

class SMS
{
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

  /**
   * Send an sms using Infobip API
   * 
   * @param string $message
   * @param string $to
   * @param string $time
   * 
   * @return ResponseInterface | boolean
   */
  public function send(String $message, String $to, $time = null)
  {
    $payload = [
      "messages" => [
        [
          "from" => $this->senderId,
          "destinations" => [
            ["to" => $to],
          ],
          "text" => $message,
          "notifyContentType" => "application/json",
          "sendAt" => $time,
        ]
      ]
    ];

    $response = $this->client->post('/sms/2/text/advanced', ["body" => json_encode((object)$payload)]);

    return $response;
  }
}