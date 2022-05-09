<?php

namespace WPPSR\Log;

use Psr\Log\AbstractLogger;

class Logger extends AbstractLogger
{
    /**
     * Logs with an arbitrary level.
     *
     * @param mixed  $level
     * @param string $message
     * @param array $context
     *
     * @return void
     */
    public function log($level, string $message, array $context = [])
    {
        new WP_Error($level, $message, $context);
    }
}
