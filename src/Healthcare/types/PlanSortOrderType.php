<?php

namespace Healthcare\types;

/**
 * Class representing PlanSortOrderType
 *
 *
 * XSD Type: PlanSortOrderType
 */
class PlanSortOrderType
{

    /**
     * @property string $sortField
     */
    private $sortField = null;

    /**
     * @property string $sortDirection
     */
    private $sortDirection = null;

    /**
     * Gets as sortField
     *
     * @return string
     */
    public function getSortField()
    {
        return $this->sortField;
    }

    /**
     * Sets a new sortField
     *
     * @param string $sortField
     * @return self
     */
    public function setSortField($sortField)
    {
        $this->sortField = $sortField;
        return $this;
    }

    /**
     * Gets as sortDirection
     *
     * @return string
     */
    public function getSortDirection()
    {
        return $this->sortDirection;
    }

    /**
     * Sets a new sortDirection
     *
     * @param string $sortDirection
     * @return self
     */
    public function setSortDirection($sortDirection)
    {
        $this->sortDirection = $sortDirection;
        return $this;
    }


}

