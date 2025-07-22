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
 * Services
 * @author    gthomas2
 * @copyright Copyright (c) 2016 Open LMS (https://www.openlms.net)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$functions = [
    'theme_boost_union_block_myoverview_filters'              => [
        'classname'       => 'theme_boost_union\\webservice\\ws_block_myoverview',
        'methodname'      => 'service',
        'description'     => 'Returns the list of courses from the filters applied in the course overview block',
        'type'            => 'read',
        'ajax'            => true,
        'loginrequired'   => true,
        'readonlysession' => true, // We don't modify the session.
    ],
];
