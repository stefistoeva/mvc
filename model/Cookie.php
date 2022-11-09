<?php

/**
 * Class Cookie
 */
class Cookie
{
    const NOT_OPENED = 0;
    const OPENED = 1;

    private $luck;
    private $state;

    /**
     * Cookie constructor.
     * @param $luck
     */
    public function __construct($luck)
    {
        $this->luck = $luck;
        $this->state = self::NOT_OPENED;
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function open()
    {
        if ($this->state == self::NOT_OPENED) {
            $this->state = self::OPENED;
            return $this->luck;
        }

        throw new Exception("Trying to open already opened cookie");
    }
}
