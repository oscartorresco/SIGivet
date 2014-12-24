<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

$loader->registerNamespaces(array(
        'n3b\\Bundle\\Util\\HttpFoundation\\StreamResponse'  => __DIR__.'/../vendor/n3b/src',

        'Liuggio'              => __DIR__.'/../vendor/bundles',
    ));

$loader->registerPrefixes(array(
         'Twig_Extensions_' => __DIR__.'/../vendor/twig-extensions/lib',
         'Twig_'            => __DIR__.'/../vendor/twig/lib',
          // ...
         'PHPExcel'         => __DIR__.'/../vendor/phpexcel/lib/PHPExcel/Classes',
    ));

return $loader;

