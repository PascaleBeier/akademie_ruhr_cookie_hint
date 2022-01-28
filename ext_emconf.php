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

$EM_CONF[$_EXTKEY] = [
    'title' => 'Akademie Ruhr Cookie Hint',
    'description' => 'Fork of and drop-in successor to mindshape_cookie_hint. Shows a visible hint on the website that cookies are used - according to the European laws. Easy to install, fully customizable and the hint will permanently be hidden after accepting.',
    'category' => 'fe',
    'version' => '1.1.2',
    'state' => 'stable',
    'author' => 'Pascale Beier',
    'author_email' => 'mail@pascalebeier.de',
    'author_company' => 'Akademie Ruhr',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
