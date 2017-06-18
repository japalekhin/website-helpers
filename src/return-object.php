<?php

namespace Alekhin\WebsiteHelpers;

if (!class_exists(__NAMESPACE__ . '\return_object')) {

    class return_object {

        var $success = FALSE;
        var $message = 'Unknown error!';
        var $redirect = '';
        var $data = null;

        function __construct() {
            $this->data = new \stdClass();
            $this->redirect = filter_input(INPUT_SERVER, 'REQUEST_URI');
        }

        function get_data($key) {
            if (isset($this->data->$key)) {
                return $this->data->$key;
            }
            return '';
        }

    }

}
