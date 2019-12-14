<?php

/*
| Base URL
|
| Overwrite the base_url function to support
| loading designated content from KeyCDN.
*/
function base_url($uri)
{
   $currentInstance = &get_instance();

   $keycdnUrl = $currentInstance->config->item('keycdn_url');

   // define any extension that should use your KeyCDN URL
   $extensions = array('css', 'js', 'svg', 'jpg', 'jpeg', 'png', 'gif', 'pdf');
   $pathParts = pathinfo($uri);

   if (!empty($keycdnUrl) && in_array($pathParts['extension'], $extensions)) {
      return $keycdnUrl . $uri;
   }

   return $currentInstance->config->base_url($uri);
}
