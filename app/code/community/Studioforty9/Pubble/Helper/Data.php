<?php
/**
 * Studioforty9_Pubble
 *
 * @category  Studioforty9
 * @package   Studioforty9_Pubble
 * @author    StudioForty9 <info@studioforty9.com>
 * @copyright 2015 StudioForty9 (http://www.studioforty9.com)
 * @version   1.0.0
 */

/**
 * Studioforty9_Pubble_Helper_Data
 *
 * @category   Studioforty9
 * @package    Studioforty9_Pubble
 * @subpackage Helper
 */
class Studioforty9_Pubble_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**#@+
     * Configuration Method Types
     * @var int
     */
    const METHOD_CREDENTIALS = 1;
    const METHOD_COPYPASTE   = 2;
    /**#@-*/
    
    /**
     * Determine whether the module is enabled via admin configuration.
     *
     * @return bool
     */
    public function isEnabled()
    {
        return Mage::getStoreConfigFlag('studioforty9_pubble/messenger/enabled');
    }
    
    /**
     * Get the method configuration type.
     *
     * @return int
     */
    public function getMethod()
    {
        return (int) Mage::getStoreConfig('studioforty9_pubble/messenger/method');
    }
    
    /**
     * Determine if the method type is 'credentials'.
     *
     * @return bool
     */
    public function isMethodCredentials()
    {
        return ($this->getMethod() === static::METHOD_CREDENTIALS);
    }
    
    /**
     * Determine if the method type is 'copy and paste'.
     *
     * @return bool
     */
    public function isMethodCopyPaste()
    {
        return ($this->getMethod() === static::METHOD_COPYPASTE);
    }
    
    /**
     * Get the configuration setting for App Id.
     *
     * @return int
     */
    public function getAppId()
    {
        return Mage::getStoreConfig('studioforty9_pubble/messenger/app_id');
    }
    
    /**
     * Get the configuration setting for Identifier.
     *
     * @return int
     */
    public function getIdentifier()
    {
        return Mage::getStoreConfig('studioforty9_pubble/messenger/identifier');
    }
    
    /**
     * Get the copy and pasted code from Pubble saved in the configuration.
     *
     * @return int
     */
    public function getCode()
    {
        return Mage::getStoreConfig('studioforty9_pubble/messenger/code');
    }
}
