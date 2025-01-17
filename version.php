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
 * Glendon Course Format: Displays course front page in a grid format
 * and the content in a tabbed format
 * @package format_glendon
 * @copyright 2018 Glendon - York University
 * @author Patrick Thibaudeau
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();


$plugin->version   = 2019050600;        // The current plugin version (Date: YYYYMMDDXX). - rewritten from 2018071900
$plugin->requires  = 2017051500;        // Requires this Moodle version.
$plugin->release = '2.3 Build(2018071900)';
$plugin->component = 'format_glendon';    // Full name of the plugin (used for diagnostics).
$plugin->dependencies = [
    'atto_etitle' => 2017072500
];
$plugin->maturity = MATURITY_STABLE;
