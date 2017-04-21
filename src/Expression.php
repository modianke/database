<?php
namespace MyQEE\Database;

/**
 *
 * @author     呼吸二氧化碳 <jonwang@myqee.com>
 * @category   Database
 * @copyright  Copyright (c) 2008-2018 myqee.com
 * @license    http://www.myqee.com/license.html
 */
class Expression
{
    // Raw expression string
    protected $value;

    /**
     * Sets the expression string.
     *
     * $expression = new Database_Expression('COUNT(users.id)');
     *
     * @return  void
     */
    public function __construct($value)
    {
        // Set the expression string
        $this->value = $value;
    }

    /**
     * Get the expression value as a string.
     *
     * $sql = $expression->value();
     *
     * @return  string
     */
    public function value()
    {
        return $this->value;
    }

    /**
     * Return the value of the expression as a string.
     *
     * echo $expression;
     *
     * @return  string
     * @uses    Database_Expression::value
     */
    public function __toString()
    {
        return $this->value();
    }

}