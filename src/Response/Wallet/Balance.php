<?php

namespace Electrum\Response\Wallet;

use Electrum\Response\ResponseInterface;
use Electrum\Response\Traits\Balance as BalanceTrait;

/**
 * @author Pascal Krason <pascal.krason@padr.io>
 */
class Balance implements ResponseInterface
{
    use BalanceTrait;
}