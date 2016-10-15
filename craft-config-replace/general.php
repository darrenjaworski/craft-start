<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(

  //shared
  '*' => array(

    // 'enableCsrfProtection' => true,
    'defaultImageQuality' => 100,
    'cache' => true,
    'cacheDuration' => 'PT1H',
    // Environmental variables
    // We can use these variables in the URL and Path settings
    // within the Craft Control Panel. For example:
    //    siteUrl   can be references as {siteUrl}
    //    basePath  can be references as {basePath}
    'environmentVariables' => array(
      'basePath' => BASEPATH,
      'siteUrl' => getenv('PROD_SITE_URL')
    ),
    'maxUploadFileSize' => 314572800,
    // Triggers
    'cpTrigger'       => 'admin',
    'resourceTrigger' => 'resources',
    'actionTrigger'   => 'actions',
    'pageTrigger'     => 'p',

    // Member login info duration
    // http://www.php.net/manual/en/dateinterval.construct.php
    'userSessionDuration'           => 'P1M',
    'rememberedUserSessionDuration' => 'P1M',
    'rememberUsernameDuration'      => 'P1M',

    // User account related paths
    'loginPath'              => 'login',
    'logoutPath'             => 'logout',
    'setPasswordPath'        => 'setpassword',
    'setPasswordSuccessPath' => '',
    'activateAccountPath'    => 'activate',
    'activateFailurePath'    => '',
    'omitScriptNameInUrls' => true,

    // Manage our routes in the craft/config/routes.php file
    // 'siteRoutesSource'   => 'file',
    'devMode' => false,

  ),

  //development
  'development' => array(
    'cache' => false,
    // Give us more useful error messages
    'devMode' => true,
    'siteUrl' => getenv('DEV_SITE_URL'),
  ),

  //production
  'production' => array(

  ),

);
