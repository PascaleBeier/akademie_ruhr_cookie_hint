<?php

/*
 * This file is part of the TYPO3 extension "Akademie Ruhr Cookie Hint".
 *
 * It is a fork of mindshape_cookie_hint.
 *
 * (c) 2018-2021 Christoph Dieter <dieter@mindshape.de>, mindshape GmbH
 *               Daniel Dorndorf <dorndorf@mindshape.de>, mindshape GmbH
 *
 * (c) 2021 Pascale Beier <mail@pascalebeier.de>, Akademie Ruhr
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

defined('TYPO3') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'akadmie_ruhr_cookie_hint',
    'Configuration/TypoScript',
    'Akademie Ruhr Cookie Hint'
);