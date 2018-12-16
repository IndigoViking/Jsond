<?php
/**
 * Json'd plugin for Craft CMS 3.x
 *
 * Adds Twig filters for working with json.
 *
 * @link      https://www.theindigoviking.com
 * @copyright Copyright (c) 2018 The Indigo Viking
 */

namespace indigoviking\jsond;

use indigoviking\jsond\twigextensions\JsondTwigExtension;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

/**
 * Class Jsond
 *
 * @author    The Indigo Viking
 * @package   Jsond
 * @since     1
 *
 */
class Jsond extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var Jsond
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '1';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Craft::$app->view->registerTwigExtension(new JsondTwigExtension());

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'jsond',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

}
