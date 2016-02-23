<?php
namespace PatrickBroens\Pbsurvey\Provider\Access\Check;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use PatrickBroens\Pbsurvey\Provider\Access\AccessProvider;
use PatrickBroens\Pbsurvey\Provider\Configuration\ConfigurationProvider;
use PatrickBroens\Pbsurvey\Provider\Element\PageProvider;
use PatrickBroens\Pbsurvey\Provider\User\UserProvider;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Access check interface
 */
interface AccessCheckInterface
{
    /**
     * @param AccessProvider $accessProvider The access provider
     * @param ConfigurationProvider $configurationProvider The configuration provider
     * @param PageProvider $pageProvider The page provider
     * @param UserProvider $userProvider The user provider
     */
    public function check(
        AccessProvider $accessProvider,
        ConfigurationProvider $configurationProvider,
        PageProvider $pageProvider,
        UserProvider $userProvider
    );
}