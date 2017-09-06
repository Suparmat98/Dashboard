<?php
class ModDashboardHelper
{
     
    public static function getSites()
    {
      $ch = curl_init('https://app.watchful.li/api/v1' . '/sites');
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Api-Key: ' . 'df071b1cfaf900008702d26f2998d0bf'));
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      return curl_exec($ch);
    }
}