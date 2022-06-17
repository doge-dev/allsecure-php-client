<?php

namespace DogeDev\AllSecure\Transaction\Base;
use DogeDev\AllSecure\Data\Item;

/**
 * Interface ItemsInterface
 *
 * @package DogeDev\AllSecure\Transaction\Base
 */
interface ItemsInterface {

    /**
     * @param Item[] $items
     * @return void
     */
    public function setItems($items);

    /**
     * @return Item[]
     */
    public function getItems();

    /**
     * @param Item $item
     * @return void
     */
    public function addItem($item);

}