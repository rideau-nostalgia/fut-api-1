<?php

namespace Shapecode\FUT\Client\Response;

use Shapecode\FUT\Client\Items\DuplicateItem;
use Shapecode\FUT\Client\Items\ItemInterface;

/**
 * Class UnassignedResponse
 *
 * @package Shapecode\FUT\Client\Response
 * @author  Nikita Loges
 */
class UnassignedResponse
{

    /** @var ItemInterface[] */
    protected $items;

    /** @var DuplicateItem[] */
    protected $duplicateItemIdList;

    /**
     * @param ItemInterface[] $items
     * @param DuplicateItem[] $duplicateItemIdList
     */
    public function __construct(array $items, array $duplicateItemIdList)
    {
        $this->items = $items;
        $this->duplicateItemIdList = $duplicateItemIdList;
    }

    /**
     * @return ItemInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @return DuplicateItem[]
     */
    public function getDuplicateItemIdList(): array
    {
        return $this->duplicateItemIdList;
    }
}