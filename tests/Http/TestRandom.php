<?php

/*
 * eduVPN - End-user friendly VPN.
 *
 * Copyright: 2016-2019, The Commons Conservancy eduVPN Programme
 * SPDX-License-Identifier: AGPL-3.0+
 */

namespace LC\Portal\Tests\Http;

use LC\Portal\RandomInterface;

class TestRandom implements RandomInterface
{
    /** @var int */
    private $randomState = 0;

    /**
     * @param int $length
     *
     * @return string
     */
    public function get($length)
    {
        return str_pad((string) $this->randomState++, $length * 2, '0', STR_PAD_LEFT);
    }
}