<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Redis Cache Store - Add instance form
 *
 * @package   cachestore_redissentinel
 * @copyright 2013 Adam Durana
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot.'/cache/forms.php');

/**
 * Form for adding instance of Redis Cache Store.
 *
 * @copyright   2013 Adam Durana
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class cachestore_redissentinel_addinstance_form extends cachestore_addinstance_form {
    /**
     * Builds the form for creating an instance.
     */
    protected function configuration_definition() {
		$plugin_name = 'cachestore_redissentinel';
        $form = $this->_form;

		$field = 'server';
        $form->addElement('text', $field, get_string($field, $plugin_name), array('size' => 24));
        $form->setType($field, PARAM_TEXT);
        $form->addHelpButton($field, $field, $plugin_name);
        $form->addRule($field, get_string('required'), 'required');

		$field = 'sentinel_server';
        $form->addElement('text', $field, get_string($field, $plugin_name), array('size' => 24));
        $form->setType($field, PARAM_TEXT);
        $form->addHelpButton($field, $field, $plugin_name);
        $form->addRule($field, get_string('required'), 'required');

		$field = 'master_set_name';
        $form->addElement('text', $field, get_string($field, $plugin_name), array('size' => 24));
        $form->setType($field, PARAM_TEXT);
        $form->addHelpButton($field, $field, $plugin_name);
        $form->addRule($field, get_string('required'), 'required');
		
        $form->addElement('passwordunmask', 'password', get_string('password', $plugin_name));
        $form->setType('password', PARAM_RAW);
        $form->addHelpButton('password', 'password', $plugin_name);

        $form->addElement('text', 'prefix', get_string('prefix', $plugin_name), array('size' => 16));
        $form->setType('prefix', PARAM_TEXT); // We set to text but we have a rule to limit to alphanumext.
        $form->addHelpButton('prefix', 'prefix', $plugin_name);
        $form->addRule('prefix', get_string('prefixinvalid', $plugin_name), 'regex', '#^[a-zA-Z0-9\-_]+$#');

        $serializeroptions = cachestore_redis::config_get_serializer_options();
        $form->addElement('select', 'serializer', get_string('useserializer', $plugin_name), $serializeroptions);
        $form->addHelpButton('serializer', 'useserializer', $plugin_name);
        $form->setDefault('serializer', Redis::SERIALIZER_PHP);
        $form->setType('serializer', PARAM_INT);
    }
}
