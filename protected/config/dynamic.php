<?php return array (
  'components' => 
  array (
    'db' => 
    array (
      'class' => 'yii\\db\\Connection',
      'dsn' => 'mysql:host=localhost;dbname=humhub_prod_db',
      'username' => 'humhub_prod',
      'password' => 'a3th53Fsf',
    ),
    'user' => 
    array (
    ),
    'mailer' => 
    array (
      'transport' => 
      array (
        'class' => 'Swift_SmtpTransport',
        'host' => 'smtp-mail.outlook.com',
        'username' => 'baalia@live.ca',
        'password' => 'streetAMM1!',
        'encryption' => 'tls',
        'port' => '587',
      ),
    ),
    'cache' => 
    array (
      'class' => 'yii\\caching\\FileCache',
      'keyPrefix' => 'humhub',
    ),
    'formatter' => 
    array (
      'defaultTimeZone' => 'UTC',
    ),
    'formatterApp' => 
    array (
      'defaultTimeZone' => 'UTC',
      'timeZone' => 'UTC',
    ),
  ),
  'params' => 
  array (
    'installer' => 
    array (
      'db' => 
      array (
        'installer_hostname' => 'localhost',
        'installer_database' => 'humhub_prod_db',
      ),
    ),
    'config_created_at' => 1614659346,
    'horImageScrollOnMobile' => '1',
    'databaseInstalled' => true,
    'installed' => true,
  ),
  'name' => 'Cheftrix',
  'language' => 'en-US',
  'timeZone' => 'UTC',
); ?>