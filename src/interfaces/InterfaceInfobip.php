<?php

namespace AccessAfya\Infobip;

use GuzzleHttp\Psr7\Response;

interface InterfaceInfobip {
  /**
   * Send an sms using Infobip API
   * 
   * @param string $message
   * @param string $to
   * @param string $time
   * 
   * @return Response
   */
  public function send(string $message, string $to, string $time = null): Response;
}
