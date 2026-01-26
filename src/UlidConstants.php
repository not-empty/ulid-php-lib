<?php

namespace Ulid;

class UlidConstants
{
    const CHARS = '0123456789ABCDEFGHJKMNPQRSTVWXYZ';
    const LENGHT = 32;
    const TIME_MAX = 281474976710655;
    const TIME_LENGTH = 10;
    const RANDOM_LENGTH = 16;
    const REGEX = '/^[0-9A-HJKMNP-TV-Z]{26}$/ ';
}
