<?php
class ModDashboardHelper
{
     
    public static function getSites($params)
    {
      define('API_KEY', 'df071b1cfaf900008702d26f2998d0bf');
      define('BASE_URL', 'https://app.watchful.li/api/v1');
      $ch = curl_init(BASE_URL . '/sites');
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Api-Key: ' . API_KEY));
      return curl_exec($ch);
    }
}