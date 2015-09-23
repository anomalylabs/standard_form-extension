<?php namespace Anomaly\StandardFormExtension;

use Anomaly\Streams\Platform\Addon\Extension\Extension;

/**
 * Class StandardFormExtension
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\StandardFormExtension
 */
class StandardFormExtension extends Extension
{

    /**
     * This extension provides the standard
     * form handler for the Forms module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.forms::form_handler.standard';

}
