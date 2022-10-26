<?php

Class TelegramSendMessage {

    final const TGTOKEN = '5705182372:AAFDEVyqyd6rn04PZjqn7iG5ZImRTBHBglg';
    final const URL = 'https://api.telegram.org/bot' . self::TGTOKEN;

    public function response($method, $parameters) {
        file_get_contents(self::URL . '/' . $method . '?' . http_build_query($parameters));
    }
}
