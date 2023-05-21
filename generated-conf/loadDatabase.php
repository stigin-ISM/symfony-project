<?php
$serviceContainer = \Propel\Runtime\Propel::getServiceContainer();
$serviceContainer->initDatabaseMapFromDumps(array (
  'default' => 
  array (
    'tablesByName' => 
    array (
      'author' => '\\App\\Controller\\Map\\AuthorTableMap',
      'book' => '\\App\\Controller\\Map\\BookTableMap',
      'publisher' => '\\App\\Controller\\Map\\PublisherTableMap',
    ),
    'tablesByPhpName' => 
    array (
      '\\Author' => '\\App\\Controller\\Map\\AuthorTableMap',
      '\\Book' => '\\App\\Controller\\Map\\BookTableMap',
      '\\Publisher' => '\\App\\Controller\\Map\\PublisherTableMap',
    ),
  ),
));
