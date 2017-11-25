<?php

namespace Alekhin\WebsiteHelpers;

if (!class_exists(__NAMESPACE__ . '\ReturnObject')) {

    class ReturnObject {

        var $success = FALSE;
        var $message = 'Unknown error!';
        var $redirect = '';
        var $data = NULL;

        function __construct() {
            $this->data = new \stdClass();
            $this->redirect = $_SERVER['REQUEST_URI'];
        }

        function set_message($message) {
            if (is_string($message)) {
                $this->message = trim($message);
            }
            return $this;
        }

        function get_data($key, $default = '') {
            if (isset($this->data->$key)) {
                return $this->data->$key;
            }
            return $default;
        }

    }

}
