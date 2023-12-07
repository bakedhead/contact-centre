<?php

namespace Config;

use CodeIgniter\Database\Config;

/**
 * Database Configuration
 */
class Database extends Config
{
    /**
     * The directory that holds the Migrations
     * and Seeds directories.
     */
    public string $filesPath = APPPATH . 'Database' . DIRECTORY_SEPARATOR;

    /**
     * Lets you choose which connection group to
     * use if no other is specified.
     */
    public string $defaultGroup = 'default';

    /**
     * The default database connection.
     */
    public array $default = [
        'DSN'          => 'Postgre://postgres:Ywynbw2z2!@123@localhost:5432/crud_basic?charset=utf8&connect_timeout=5',
        'hostname'     => 'localhost',
        'username'     => 'postgres',
        'password'     => 'Ywynbw2z2!@123',
        'database'     => 'crud_basic',
        'DBDriver'     => 'Postgre',
        'DBPrefix'     => '',
        'pConnect'     => true,
        'DBDebug'      => false,
        'charset'      => 'utf8',
        'DBCollat'     => 'utf8_general_ci',
        'swapPre'      => '',
        'encrypt'      => false,
        'compress'     => false,
        'strictOn'     => false,
        'failover'     => [],
        'port'         => 5432,
        'numberNative' => false,
    ];

    /**
     * This database connection is used when
     * running PHPUnit database tests.
     */
    public array $tests = [
        'DSN'          => 'Postgre://postgres:Ywynbw2z2!@123@localhost:5432/crud_basic?charset=utf8&connect_timeout=5',
        'hostname'     => 'localhost',
        'username'     => 'postgres',
        'password'     => 'Ywynbw2z2!@123',
        'database'     => 'crud_basic',
        'DBDriver'     => 'Postgre',
        'DBPrefix'     => '',
        'pConnect'     => true,
        'DBDebug'      => false,
        'charset'      => 'utf8',
        'DBCollat'     => 'utf8_general_ci',
        'swapPre'      => '',
        'encrypt'      => false,
        'compress'     => false,
        'strictOn'     => false,
        'failover'     => [],
        'port'         => 5432,
        'numberNative' => false,
    ];

    public function __construct()
    {
        parent::__construct();

        // Ensure that we always set the database group to 'tests' if
        // we are currently running an automated test suite, so that
        // we don't overwrite live data on accident.
        if (ENVIRONMENT === 'testing') {
            $this->defaultGroup = 'tests';
        }
    }
}
