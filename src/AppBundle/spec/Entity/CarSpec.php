<?php

/*
 * This file is part of the Lakion package.
 *
 * (c) Lakion
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\AppBundle\Entity;

use PhpSpec\ObjectBehavior;

/**
 * @author Grzegorz Sadowski <grzegorz.sadowski@lakion.com>
 */
class CarSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('AppBundle\Entity\Car');
    }

    function it_implements_car_interface()
    {
        $this->shouldImplement('AppBundle\Entity\CarInterface');
    }

    function its_make_is_mutable()
    {
        $this->setMake('Ford');
        $this->getMake()->shouldReturn('Ford');
    }

    function its_model_is_mutable()
    {
        $this->setModel('Mondeo');
        $this->getModel()->shouldReturn('Mondeo');
    }
}
