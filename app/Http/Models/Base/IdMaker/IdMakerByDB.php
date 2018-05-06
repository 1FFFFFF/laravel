<?php

namespace App\Http\Models\Base\IdMaker;

use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Access\AuthorizationException;

class IDMakerByDB implements IDMaker
{
    private $_start  = 0;
    private $_now    = 0;
    private $_length = 100;

    private static $_instance;

    private function __construct()
    {
    }

    public static function clearInstance()
    {
        self::$_instance = null;
    }

    public static function instance()
    {
        if (!self::$_instance) {
            self::$_instance = new IDMakerByDB();
        }

        return self::$_instance;
    }

    /**
     * @return int
     * @throws AuthorizationException
     */
    public function getNextId()
    {
        if ($this->_now == 0 || $this->_now - $this->_start == $this->_length - 1) {
            $this->_start = $this->getNextIdFromDB();
            $this->_now   = $this->_start;
        } else if ($this->_now - $this->_start < $this->_length - 1)
            $this->_now = $this->_now + 1;
        else
            assert(false);

        return $this->_now;
    }

    /**
     * id 目前最大不得超过 天数*10000,
     * @return int
     * @throws AuthorizationException
     */
    private function getNextIdFromDB()
    {
        $querySQL  = "select nextid from idmaker";
        $updateSQL = "update idmaker set nextid=nextid+$this->_length";

        $lockSQL   = "lock tables idmaker write";
        $unLockSQL = "unlock tables";

        //DB::statement($lockSQL);
        DB::table('idmaker')->sharedLock()->get();
        //DB::table('idmaker')->lockForUpdate()->get();

        $rows = DB::select($querySQL);

        $todayMaxId = (int)((time() - strtotime('2018-05-05')) / 3600 / 24 * 10000);

        if ($rows[0]->nextid >= $todayMaxId)
            throw new AuthorizationException();

        DB::update($updateSQL);
        //DB::statement($unLockSQL);

        assert(count($rows) == 1);
        return (int)$rows[0]->nextid;
    }
}

/*

CREATE TABLE `idmaker` (
`nextid` decimal(30,0) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8

*/
