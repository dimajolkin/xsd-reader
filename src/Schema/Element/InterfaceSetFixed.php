<?php

declare(strict_types=1);

namespace GoetasWebservices\XML\XSDReader\Schema\Element;

interface InterfaceSetFixed
{
    public function getFixed();

    public function setFixed($fixed): void;
}
