<?php

/*
 * This file is part of the Lakion package.
 *
 * (c) Lakion
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace AppBundle\Entity;

/**
 * @author Grzegorz Sadowski <grzegorz.sadowski@lakion.com>
 */
interface CarInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getMake();

    /**
     * @param string $make
     */
    public function setMake($make);

    /**
     * @return string
     */
    public function getModel();

    /**
     * @param string $model
     */
    public function setModel($model);
}
