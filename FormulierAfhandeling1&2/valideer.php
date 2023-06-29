<?php

function isValidEmail(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function isNotValidString(string $data): bool {
    return empty(trim($data));
}

function isANumber(string $data): bool {
    return is_numeric($data);
}


