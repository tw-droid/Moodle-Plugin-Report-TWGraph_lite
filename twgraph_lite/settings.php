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
 * Settings
 *
 * @package report_twgraph_lite
 * @copyright 2025 Travis Wilhelm <https://traviswilhelm.com.au/>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * */
 
defined('MOODLE_INTERNAL') || die;

// Define the setting name (e.g., 'local_myplugin/myinteger_setting')
$settingname = 'twgraph_lite/dotsize';

// Instantiate admin_setting_configtext
$setting = new admin_setting_configtext(
    $settingname,
    get_string('dotsizetitle', 'twgraph_lite'), // Title for the setting
    get_string('dotsizedescription', 'twgraph_lite'), // Description
    10, // Default value (an integer)
    PARAM_INT // Data type validation: ensures it's an integer
);

// Add the setting to the Moodle administration tree
$ADMIN->add('localplugins', $setting);