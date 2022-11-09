<?php


class Jar
{
    /**
     * @var Cookie[]
     */
    private $cookies = [];
    private $initialCookiesCount = 0;

    /**
     * All available options for lucks in the cookies
     * @var string[]
     */
    private $allOptions = ["Здраве", "Късмет", "Щастие", "Пари", "Сватба", "Нова Къща", "Пътуване", "Почивка", "Нова кола", "Ново гадже"];

    /**
     * fill the jar with random cookies with $count number of cookies
     * @param $count
     */
    public function fill($count)
    {
        $this->initialCookiesCount = $count;
        for ($i = 0; $i < $count; $i++) {
            $randomKey = array_rand($this->allOptions);
            $this->cookies[] = new Cookie($this->allOptions[$randomKey]);
        }
    }

    /**
     * Draw cookie from the jar
     * @return Cookie
     * @throws Exception
     */
    public function draw()
    {
        if (count($this->cookies)) {
            $cookieIndex = array_rand($this->cookies);
            $cookie = $this->cookies[$cookieIndex];
            unset($this->cookies[$cookieIndex]);
            return $cookie;
        }

        throw new Exception("There are no cookies in the jar");
    }

    /**
     * return the current cookies in the jar.
     * @return int
     */
    public function cookiesInside()
    {
        return count($this->cookies);
    }

    /**
     * return with how many cookies we initialized the jar
     * @return int
     */
    public function initialCookiesCount()
    {
        return $this->initialCookiesCount;
    }
}