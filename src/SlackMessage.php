<?php

namespace SlackMessage;

/**
 * Slack Message
 */
class SlackMessage
{
    public static function message($string)
    {
        return "Hello {$string} Composer!";
    }
}
