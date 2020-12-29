<?php
/*
 * This file is part of the OpxCore.
 *
 * Copyright (c) Lozovoy Vyacheslav <opxcore@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OpxCore\Config\Interfaces;

interface ConfigRepositoryInterface
{
    /**
     * Load config.
     *
     * @param array $config
     * @param string|null $profile
     * @param string|null $overrides
     *
     * @return  bool
     */
    public function load(&$config, $profile = null, $overrides = null): bool;

    /**
     * Save config.
     *
     * @param array $config
     * @param string $profile
     *
     * @return  bool
     */
    public function save($config, $profile = null): bool;
}