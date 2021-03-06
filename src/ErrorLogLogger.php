<?php

namespace WPPSR\Log;

use Psr\Log\AbstractLogger;

class ErrorLogLogger extends AbstractLogger
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
	public function log( $level, $message, $context = array() ) {
		if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
			if ( defined( 'WP_DEBUG_LOG' ) && WP_DEBUG_LOG ) {
				error_log(
					sprintf(
						'%s: %s. Details: %s',
						$level,
						trim( $message, '.' ),
						json_encode( $context )
					)
				);
			}
		}
	}
}
