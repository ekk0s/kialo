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

namespace mod_kialo\admin;

use admin_setting_configcheckbox;

/**
 * Extends Moodle's built‑in admin checkbox setting, allowing it to be rendered read‑only.
 *
 * This class mirrors the implementation in the official Kialo plugin. It provides
 * a `force_readonly` method which, when set to true, marks the checkbox as read‑only and
 * prevents changes from being saved.
 *
 * @package    mod_kialo
 * @category   admin
 * @copyright  2023 Kialo GmbH
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class kialo_configcheckbox extends admin_setting_configcheckbox {
    /**
     * Flag indicating whether the checkbox should be rendered read‑only.
     *
     * @var bool
     */
    protected $forcereadonly = false;

    /**
     * Set whether the checkbox should be rendered read‑only.
     *
     * When set to true, the checkbox will be displayed as disabled and its
     * value will not be saved. It will remain set to its default value.
     *
     * @param bool $forcereadonly
     * @return void
     */
    public function force_readonly(bool $forcereadonly) {
        $this->forcereadonly = $forcereadonly;
        // If read‑only, do not save value; otherwise it will be reset to default.
        $this->nosave = $forcereadonly;
    }

    /**
     * Overrides parent to honor the `forcereadonly` flag.
     *
     * @return bool True if the checkbox should be read‑only, false otherwise.
     */
    public function is_readonly(): bool {
        if ($this->forcereadonly) {
            return true;
        }
        return parent::is_readonly();
    }
}