<?php

$mageConfig = Symfony\CS\Config\MagentoConfig::create();

return $mageConfig
    ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
    ->setUsingCache(true)
    ->finder(
        $mageConfig->getFinder()
            ->in(__DIR__.'/app')
    )
;

// vim:ft=php
