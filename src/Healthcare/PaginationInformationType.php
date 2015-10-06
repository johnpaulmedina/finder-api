<?php

namespace Healthcare;

/**
 * Class representing PaginationInformationType
 *
 *
 * XSD Type: PaginationInformationType
 */
class PaginationInformationType
{

    /**
     * @property integer $pageNumber
     */
    private $pageNumber = null;

    /**
     * @property integer $pageSize
     */
    private $pageSize = null;

    /**
     * Gets as pageNumber
     *
     * @return integer
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * Sets a new pageNumber
     *
     * @param integer $pageNumber
     * @return self
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
        return $this;
    }

    /**
     * Gets as pageSize
     *
     * @return integer
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * Sets a new pageSize
     *
     * @param integer $pageSize
     * @return self
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }


}

