<?php

/**
 * Kuetemeier-Essentials - Toolkit Module
 *
 * @package   kuetemeier-essentials
 * @author    Jörg Kütemeier (https://kuetemeier.de/kontakt)
 * @license   GNU General Public License 3
 * @link      https://kuetemeier.de
 * @copyright 2018 Jörg Kütemeier
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

namespace KuetemeierEssentials\Modules;

// KEEP THIS for security reasons - blocking direct access to the PHP files by checking for the ABSPATH constant.
defined('ABSPATH') || die('No direct call!');

/**
 * Toolkit Module of the Kuetemeier-Essentials Plugin.
 */
final class Toolkit extends \Kuetemeier\WordPress\PluginModule
{

    public static function manifest()
    {
        return array(
            'id' => 'toolkit',
            'short' => __('Toolkit', 'kuetemeier-essentials'),
            'description' => __('Little helper and tools for enriching your WordPress installation.', 'kuetemeier-essentials'),
            'page' => 'kuetemeier-toolkit',

            'config' => array()
        );
    }


    public function getAdminOptionSettings()
    {

        return array(
            'subpages' => array(
                array(
                    'id' => 'kuetemeier-toolkit',
                    'parentSlug' => 'kuetemeier',
                    'title' => __('Toolkit', 'kuetemeier-essentials'),
                    'content' => __('Little helper and tools for enriching your WordPress installation.', 'kuetemeier-essentials'),
                )
            ),
            'tabs' => array(
                array(
                    'id' => 'toolkit-shortcodes',
                    'page' => 'kuetemeier-toolkit',
                    'title' => __('Shortcodes', 'kuetemeier-essentials'),
                    'content' => __('The Toolkit section comes with some handy Shortcodes:', 'kuetemeier-essentials'),
                    'noButtons' => 1
                ),
            ),
            'sections' => array(
                array(
                    'id' => 'toolkit-shortcodes-dates',
                    'tab' => 'toolkit-shortcodes',
                    'title' => __('Dates', 'kuetemeier-essentials'),
                    'content' => __('Use the Shortcode `[ke-current-year]` to display the current year. Very helpful in Copyright notices.', 'kuetemeier-essentials') . "\n\n" .
                        __('', 'kuetemeier-essentials') . "\n\n" .
                        __('', 'kuetemeier-essentials'),
                    'markdown' => 1,
                ),
            ),
            'options' => array()
        );
    }


    public function frontendInit()
    {
        parent::frontendInit();

        add_shortcode('ke-current-year', array(&$this, 'callbackShortCodeCurrentYear'));
    }



    /* ------------------------------------------------------------------------------------------------------------------------
     * BEGIN - ShortCut 'kimg'
     * ------------------------------------------------------------------------------------------------------------------------ */


    public function callbackShortCodeCurrentYear()
    {
        return esc_html(date("Y"));
    }


    /* ------------------------------------------------------------------------------------------------------------------------
     * END - ShortCut 'kimg'
     * ------------------------------------------------------------------------------------------------------------------------ */
}
