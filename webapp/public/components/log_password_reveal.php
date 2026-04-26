<?php
require_once 'loggly-logger.php';

$data = json_decode(file_get_contents('php://input'), true);

$entryId = $data['entry_id'] ?? 'unknown';

$logger->warning("Password revealed to user", [
    'entry_id' => $entryId,
    'time' => date('c')
]);

http_response_code(204); // No content