<?php
/**
 * Created by IntelliJ IDEA.
 * User: winglechen
 * Date: 16/3/2
 * Time: 17:18
 */

namespace Zan\Framework\Foundation\Core;

use Zan\Framework\Foundation\Exception\System\InvalidArgumentException;
use Zan\Framework\Utilities\Types\Dir;
use Zan\Framework\Foundation\Core\Config;

class Path {
    const DEFAULT_CONFIG_PATH   = 'resource/config/';
    const DEFAULT_SQL_PATH      = 'resource/sql/';
    const DEFAULT_LOG_PATH      = 'resource/log/';
    const DEFAULT_CACHE_PATH    = 'resource/cache/';
    const DEFAULT_KV_PATH    = 'resource/kvstore/';
    const DEFAULT_MODEL_PATH    = 'resource/model/';
    const DEFAULT_TABLE_PATH    = 'resource/config/share/table/';
    const DEFAULT_ROUTING_PATH  = 'resource/routing/';
    const DEFAULT_MIDDLEWARE_PATH = 'resource/middleware';
    const DEFAULT_IRON_PATH = 'vendor/zan-config/iron/files/';
    const DEFAULT_APP_PATH = 'vendor/zan-config/app/';
    const DEFAULT_CRON_PATH         = 'resource/config/share/cron/';
    const DEFAULT_MQWORKER_PATH     = 'resource/config/share/mqworker/';

    const ROOT_PATH_CONFIG_KEY    = 'path.root';
    const CONFIG_PATH_CONFIG_KEY  = 'path.config';
    const SQL_PATH_CONFIG_KEY     = 'path.sql';
    const LOG_PATH_CONFIG_KEY     = 'path.log';
    const CACHE_PATH_CONFIG_KEY   = 'path.cache';
    const KV_PATH_CONFIG_KEY   = 'path.kvstore';
    const MODEL_PATH_CONFIG_KEY   = 'path.model';
    const TABLE_PATH_CONFIG_KEY   = 'path.table';
    const ROUTING_PATH_CONFIG_KEY = 'path.routing';
    const MIDDLEWARE_PATH_CONFIG_KEY = 'path.middleware';
    const IRON_PATH_CONFIG_KEY = 'path.iron';
    const APP_PATH_CONFIG_KEY = 'path.app';
    const CRON_PATH_CONFIG_KEY          = 'path.cron';
    const MQ_WORKER_PATH_CONFIG_KEY     = 'path.mqworker';

    private static $rootPath    = null;
    private static $configPath  = null;
    private static $sqlPath     = null;
    private static $logPath     = null;
    private static $cachePath   = null;
    private static $kvPath   = null;
    private static $modelPath   = null;
    private static $tablePath   = null;
    private static $routingPath = null;
    private static $middlewarePath = null;
    private static $ironConfigPath = null;
    private static $appConfigPath = null;
    private static $cronConfigPath = null;
    private static $mqWorkerConfigPath = null;

    public static function init($rootPath)
    {
        self::setRootPath($rootPath);
        self::setOtherPathes();
        self::setInConfig();
    }

    public static function getRootPath()
    {
        return self::$rootPath;
    }

    public static function getConfigPath()
    {
        return self::$configPath;
    }

    public static function setConfigPath($configPath){
        self::$configPath = $configPath;
    }

    public static function setLogPath($logPath){
        self::$logPath = $logPath;
    }

    public static function getSqlPath()
    {
        return self::$sqlPath;
    }

    public static function getLogPath()
    {
        return self::$logPath;
    }

    public static function getModelPath()
    {
        return self::$modelPath;
    }

    public static function getCachePath()
    {
        return self::$cachePath;
    }

    public static function getKvPath()
    {
        return self::$kvPath;
    }

    public static function getTablePath()
    {
        return self::$tablePath;
    }

    public static function getRoutingPath()
    {
        return self::$routingPath;
    }

    public static function getMiddlewarePath()
    {
        return self::$middlewarePath;
    }

    public static function getIronPath(){
        return self::$ironConfigPath;
    }

    public static function getAppPath(){
        return self::$appConfigPath;
    }

    public static function getCronPath()
    {
        return self::$cronConfigPath;
    }

    public static function getMqWorkerPath()
    {
        return self::$mqWorkerConfigPath;
    }

    private static function setRootPath($rootPath)
    {
        self::$rootPath = Dir::formatPath($rootPath);
    }

    private static function setOtherPathes()
    {
        self::$configPath = self::$rootPath . self::DEFAULT_CONFIG_PATH;
        self::$sqlPath = self::$rootPath . self::DEFAULT_SQL_PATH;
        self::$logPath = self::$rootPath . self::DEFAULT_LOG_PATH;
        self::$modelPath = self::$rootPath . self::DEFAULT_MODEL_PATH;
        self::$cachePath = self::$rootPath . self::DEFAULT_CACHE_PATH;
        self::$kvPath = self::$rootPath . self::DEFAULT_KV_PATH;
        self::$tablePath = self::$rootPath . self::DEFAULT_TABLE_PATH;
        self::$routingPath = self::$rootPath . self::DEFAULT_ROUTING_PATH;
        self::$middlewarePath = self::$rootPath . self::DEFAULT_MIDDLEWARE_PATH;
        self::$ironConfigPath = self::$rootPath .self::DEFAULT_IRON_PATH;
        self::$appConfigPath = self::$rootPath .self::DEFAULT_APP_PATH;
        self::$cronConfigPath = self::$rootPath . self::DEFAULT_CRON_PATH;
        self::$mqWorkerConfigPath = self::$rootPath . self::DEFAULT_MQWORKER_PATH;
    }

    private static function setInConfig()
    {
        Config::set(self::ROOT_PATH_CONFIG_KEY, self::$rootPath);
        Config::set(self::CONFIG_PATH_CONFIG_KEY, self::$configPath);
        Config::set(self::SQL_PATH_CONFIG_KEY, self::$sqlPath);
        Config::set(self::LOG_PATH_CONFIG_KEY, self::$logPath);
        Config::set(self::CACHE_PATH_CONFIG_KEY, self::$cachePath);
        Config::set(self::KV_PATH_CONFIG_KEY, self::$kvPath);
        Config::set(self::MODEL_PATH_CONFIG_KEY, self::$modelPath);
        Config::set(self::TABLE_PATH_CONFIG_KEY, self::$tablePath);
        Config::set(self::ROUTING_PATH_CONFIG_KEY, self::$routingPath);
        Config::set(self::MIDDLEWARE_PATH_CONFIG_KEY, self::$middlewarePath);
        Config::set(self::IRON_PATH_CONFIG_KEY, self::$ironConfigPath);
        Config::set(self::APP_PATH_CONFIG_KEY, self::$appConfigPath);
        Config::set(self::CRON_PATH_CONFIG_KEY, self::$cronConfigPath);
        Config::set(self::MQ_WORKER_PATH_CONFIG_KEY, self::$mqWorkerConfigPath);
    }
}