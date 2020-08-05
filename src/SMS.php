<?php
// Bulk SMS Messaging
declare(strict_types=1);

namespace AccessAfya\Infobip;

use GuzzleHttp\Client;
use Exception;

class SMS
{
  private $senderId;

  private $client;

  /** 
   * Initialize with Authentication
   * 
   * @param string $username
   * @param string $password
   * @param string $senderId
   * @param string $baseUrl
   */
  public function __construct($username, $password, $senderId, $baseUrl)
  {
    $authorization = base64_encode($username.":".$password);

    $this->senderId = $senderId;
    $this->client = new Client([
      'headers' => [
        "Authorization" => "Basic ".$authorization,
        "Accept" => "application/json",
        "Content-Type" => "application/json"
      ],
      'base_uri' => $baseUrl,
    ]);
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