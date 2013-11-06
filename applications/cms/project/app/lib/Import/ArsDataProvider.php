<?php

use Honeybee\Core\Import\Provider\BaseProvider;

class ArsDataProvider extends BaseProvider
{

    public function initialize(array $parameters = array())
    {
        parent::initialize($parameters);
    }

    /**
     * Forward current position inside the list we currently iterate (to the
     * next row from the CSV source file).
     *
     * @return boolean true if cursor was forwarded. False otherwise.
     */
    protected function forwardCursor()
    {

    }

    /**
     * Return the data at the offset which our cursor is currently pointing to.
     *
     * @return      array
     */
    protected function fetchData()
    {

    }

    /**
     * Return the a string that identifies our data origin.
     *
     * @return      string
     */
    protected function getCurrentOrigin()
    {
    }


}