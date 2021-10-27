<?php

$header = <<<EOF
This file is part of the TYPO3 extension "Akademie Ruhr Cookie Hint".

It is a fork of mindshape_cookie_hint.

(c) 2018-2021 Christoph Dieter <dieter@mindshape.de>, mindshape GmbH
              Daniel Dorndorf <dorndorf@mindshape.de>, mindshape GmbH

(c) 2021 Pascale Beier <mail@pascalebeier.de>, Akademie Ruhr
EOF;

$config = \TYPO3\CodingStandards\CsFixerConfig::create();
$config
    ->setHeader($header)
    ->getFinder()->in(__DIR__)
;

return $config;
