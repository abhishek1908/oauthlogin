<?php defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
|  Google API Configuration
| -------------------------------------------------------------------
|  client_id         string   Your Google API Client ID.
|  client_secret     string   Your Google API Client secret.
|  redirect_uri      string   URL to redirect back to after login.
|  application_name  string   Your Google application name.
|  api_key           string   Developer key.
|  scopes            string   Specify scopes
*/
$config['google']['client_id']        = '386327821084-of2tjb6aogletldbgpegtjdge8kpc6el.apps.googleusercontent.com';
$config['google']['client_secret']    = 'AaLW2QUj6AF637UJLN8akHz6';
$config['google']['redirect_uri']     = 'http://localhost/oauthlogin/user_authentication/';
$config['google']['application_name'] = 'samplelogin';
$config['google']['api_key']          = '';
$config['google']['scopes']           = array();