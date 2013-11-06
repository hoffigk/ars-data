<?php
/*              AUTOGENERATED CODE - DO NOT EDIT !
This base class was generated by the Dat0r library (https://github.com/berlinonline/Dat0r)
on 2013-11-05 20:29:47 and is closed to modifications by any meaning.
If you are looking for a place to alter the behaviour of 'PluginResult' documents,
then the 'PluginResultDocument' (skeleton) class probally might be a good place to look. */

namespace Honeybee\Domain\Product\Base;

use Dat0r\Core\Document;

/**
 * Serves as the base class to the 'PluginResult' document skeleton.
 */
abstract class PluginResultDocument extends Document\Document
{
    /**
     * Returns an 'PluginResult' document's state.
     *
     * @return 
     */
    public function getState()
    {
        return $this->getValue('state');
    }

    /**
     * Sets an 'PluginResult' document's state.
     *
     * @param  $state
     */
    public function setState($state)
    {
        $this->setValue('state', $state);
    }

    /**
     * Returns an 'PluginResult' document's gate.
     *
     * @return 
     */
    public function getGate()
    {
        return $this->getValue('gate');
    }

    /**
     * Sets an 'PluginResult' document's gate.
     *
     * @param  $gate
     */
    public function setGate($gate)
    {
        $this->setValue('gate', $gate);
    }

    /**
     * Returns an 'PluginResult' document's message.
     *
     * @return 
     */
    public function getMessage()
    {
        return $this->getValue('message');
    }

    /**
     * Sets an 'PluginResult' document's message.
     *
     * @param  $message
     */
    public function setMessage($message)
    {
        $this->setValue('message', $message);
    }
}
