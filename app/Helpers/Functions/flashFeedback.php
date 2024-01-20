<?php

/**
 * Queues a confirmation to be displayed on the next loaded page.
 * @param string $msg   The message to queue.
 * @return void
 */
function flashConfirm(string $msg): void { session()->push('flash-confirmations', $msg); }

/**
 * Queues an information message to be displayed on the next loaded page.
 * @param string $msg   The message to queue.
 * @return void
 */
function flashInfo(string $msg): void { session()->push('flash-info', $msg); }

/**
 * Queues an error message to be displayed on the next loaded page.
 * @param string $msg   The message to queue.
 * @return void
 */
function flashError(string $msg): void { session()->push('flash-errors', $msg); }
