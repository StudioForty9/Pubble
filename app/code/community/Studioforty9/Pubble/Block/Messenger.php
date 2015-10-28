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
 * Studioforty9_Pubble_Block_Messenger
 *
 * @category   Studioforty9
 * @package    Studioforty9_Pubble
 * @subpackage Block
 */
class Studioforty9_Pubble_Block_Messenger extends Mage_Core_Block_Template
{
    /**
     * The pubble javascript library code URL.
     * @var string
     */
    protected $_url = '//www.pubble.io/resources/javascript/QAInit.js';
    
    /**
     * Is the configuration method set to'Copy & Paste'?
     *
     * @return bool
     */
    public function isCopyPaste()
    {
        return $this->_getHelper()->isMethodCopyPaste();
    }
    
    /**
     * Render the copy and pasted code.
     *
     * @return string
     */
    public function renderCode()
    {
        return $this->_getHelper()->getCode();
    }
    
    /**
     * Render the tag to fetch the pubble javascript library code.
     *
     * @return string
     */
    public function renderJsUrl()
    {
        return sprintf('<script type="text/javascript" src="%s"></script>', $this->_url);
    }
    
    /**
     * Render the javascript to initialize the pubble messenger.
     *
     * @return string
     */
    public function renderJsScript()
    {
        $appId = $this->_getHelper()->getAppId();
        $identifier = $this->_getHelper()->getIdentifier();
        
        $html = sprintf(
            '<script type="text/javascript">var lpQA = lpQA({appID: "%s",identifier: "%s"});</script>',
            $appId,
            $identifier
        );

        return $html;
    }
    
    /**
     * Get an instance of the Pubble Data helper.
     *
     * @return Studioforty9_Pubble_Helper_Data
     */
    private function _getHelper()
    {
        return Mage::helper('studioforty9_pubble');
    }
}
