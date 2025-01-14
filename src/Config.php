<?php

/**
 * Kuetemeier-Essentials - Plugin Config
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

namespace KuetemeierEssentials\Config;

// KEEP THIS for security reasons - blocking direct access to the PHP files by checking for the ABSPATH constant.
defined('ABSPATH') || die('No direct call!');

// DON'T TOUCH THIS - AUTOREPLACED BY GULP - YOU HAVE BEEN WARNED.
const PLUGIN_VERSION = '1.2.4';
// DON'T TOUCH THIS - AUTOREPLACED BY GULP - YOU HAVE BEEN WARNED.
const PLUGIN_VERSION_STABLE = '1.2.4';

/**
 * List of available modules, that will be registered by Modules
 *
 * Hint: If you write an additional module, you have to register it here.
 *
 * @see Modules
 */
const AVAILABLE_MODULES = array(
/*  'core'         => 'Core',
    'optimization' => 'Optimization',
    'media'        => 'Media',
    'analytics'    => 'Analytics',
    'data-privacy' => 'Data_Privacy',
    // 'develop'      => 'Develop',*/
);

/**
 * Base slug for all admin menu pages.
 *
 * The default value for the page slug should be a lowercase version of the Plugin name.
 *
 * @see WP_Plugin::get_admin_page_slug
 *
 * @since 0.2.1
 */
const ADMIN_PAGE_SLUG = 'kuetemeier-essentials';


/**
 * Base key for the WordPress Option Database table.
 *
 * The default value for the key should be a lowercase version of the Plugin name.
 *
 * @see WP_Plugin::get_db_option_table_base_key()
 *
 * @since 0.2.1
 */
const DB_OPTION_TABLE_BASE_KEY = 'kuetemeier-essentials';

const PLUGIN_CONFIG = array(
    '_plugin' => array(
        'id' => 'KuetemeierEssentials',
        'version' => array(
            'this' => PLUGIN_VERSION,
            'stable' => PLUGIN_VERSION_STABLE
        ),
        'options' => array(
            'key' => DB_OPTION_TABLE_BASE_KEY,
        ),
        'modules' => array(
            // numer is init priority, smaller means priority, load before higher numbers
            'available' => array(
                'core' => 0,
                'optimization' => 50,
                'media' => 100,
                'analytics' => 150,
                'dataprivacy' => 200,
                'security' => 250,
                'toolkit' => 300,
                //'test' => 1,
            ),
            'always-enabled' => array(
                'core'
            ),
            'default-enabled' => array(
                'optimization',
                'media',
                'analytics',
                'dataprivacy',
                'toolkit',
                'security',
                //'test',
            )
        )
    )
);
