<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.9-dev
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * -----------------------------------------------------------------------------
 *  Global database settings
 * -----------------------------------------------------------------------------
 *
 *  Set database configurations here to override environment specific
 *  configurations
 *
 */

return array(
    "type" => "mysqli",
    "connection" => array(
        "hostname" => "fuel_db",
        "port" => "3306",
        "database" => "fuelphp_sample",
        "username" => "fuelphp_sample",
        "password" => "fuelphp_sample_pw",
        "persistent" => false,
        "compress" => false,
    ),
    "identifier" => "`",
    "table_prefix" => "",
    "charset" => "utf8",
    "enable_cache" => true,
    "profiling" => false,
);
