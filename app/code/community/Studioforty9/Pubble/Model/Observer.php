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
 * Studioforty9_Pubble_Model_Observer
 *
 * @category   Studioforty9
 * @package    Studioforty9_Pubble
 * @subpackage Model
 */
class Studioforty9_Pubble_Model_Observer
{
    /**
     * Add Pubble script to the footer.
     *
     * @return self
     */
    public function addPubbleToFooter()
    {
        if (!$this->_getHelper()->isEnabled()) {
            return $this;
        }
        
        try {
            /** @var Mage_Core_Model_Layout $layout */
            $layout = Mage::app()->getLayout();
            
            /** @var Studioforty9_Pubble_Block_Messenger $$pubble */
            $pubble = $layout->createBlock(
                'studioforty9_pubble/messenger',
                'pubble.messenger',
                array(
                    'template' => 'studioforty9/pubble/messenger.phtml',
                    'after'    => '-'
                )
            );
            $layout->getBlock('footer')->append($pubble);
        } catch (Exception $e) {
            Mage::logException($e);
        }

        return $this;
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
