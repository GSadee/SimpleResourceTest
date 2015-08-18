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
class Car implements CarInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $make;

    /**
     * @var string
     */
    private $model;

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * {@inheritdoc}
     */
    public function setMake($make)
    {
        $this->make = $make;
    }

    /**
     * {@inheritdoc}
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * {@inheritdoc}
     */
    public function setModel($model)
    {
        $this->model = $model;
    }
}
