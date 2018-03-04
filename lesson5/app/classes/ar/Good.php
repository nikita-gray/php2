<?php
/**
 * Created by PhpStorm.
 * User: Nikita
 * Date: 26.02.2018
 * Time: 19:50
 */

namespace app\classes\ar;

use app\classes\ActiveRecord;
use app\classes\DB;

class Good extends ActiveRecord
{

    public $id;
    public $title;
    public $description;
    public $price;

    public function addToDB()
    {
        return $this->id = DB::insert("INSERT INTO `goods`(`title`,`description`,`price`) VALUES (?, ?, ?)", [$this->title, $this->description, $this->price]);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }


}