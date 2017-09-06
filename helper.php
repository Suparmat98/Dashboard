<?php
class ModDashboardHelper
{
    
    public static function getAPIKey()
    {
      return 'df071b1cfaf900008702d26f2998d0bf';
    }

    public static function initAPI(){
      define('API_KEY', getAPIKey());
      define('BASE_URL', 'https://app.watchful.li/api/v1');
    } 
     
    public static function getSites($params)
    {
      initAPI();
      $ch = curl_init(BASE_URL . '/sites');
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Api-Key: ' . API_KEY));
      return curl_exec($ch);
    }
    
    public static function requestUpgrade($params)
    {
      
    }
}