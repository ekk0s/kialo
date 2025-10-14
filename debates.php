<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Lists the weekly debates configured in the Mindscape Feed.  This page is
 * deliberately simple and minimalistic to fit the look and feel of the
 * Mindscape Feed plugin.  It displays a heading and a message when no
 * debates are available.  In a full integration the list could be
 * generated from a separate table (e.g. local_mindscape_debates).
 *
 * @package     mod_kialo
 * @copyright   2023 onwards, Kialo GmbH
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require(__DIR__ . '/../../config.php');

// Require the user to be logged in; guests cannot view debates.
require_login();

// Set up the page context and URL.  We use the system context because this
// page is not tied to a specific course or module instance.  If you choose
// to restrict debates to a course, change this to context_course::instance().
$context = context_system::instance();
require_capability('mod/kialo:view', $context);

$PAGE->set_url('/mod/kialo/debates.php');
$PAGE->set_title(get_string('debatesweek', 'mod_kialo'));
$PAGE->set_heading(get_string('debatesweek', 'mod_kialo'));
$PAGE->set_pagelayout('standard');

// Render the header.
echo $OUTPUT->header();

// Print the page heading.
echo $OUTPUT->heading(get_string('debatesweek', 'mod_kialo'));

// In a full integration this section would fetch records from a database
// table (e.g. local_mindscape_debates) and list them here.  For now
// display a placeholder message to match the current Mindscape Feed
// implementation when there are no debates.
echo html_writer::div(
    get_string('noactivedebates', 'mod_kialo'),
    'alert alert-info'
);

// Finish the page.
echo $OUTPUT->footer();