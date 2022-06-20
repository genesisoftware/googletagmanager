<?php
namespace Genesisoft\GoogleTagManager\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

    protected $_scopeConfig;

    /**
     * Retorna Script
     *
     * @return string
     */
    public function getScript()
    {
        return $this->scopeConfig->getValue('google/tagmanager/gtm_script');
    }

    /**
     * Retorna NoScript
     *
     * @return string
     */
    public function getNoScript()
    {
        return $this->scopeConfig->getValue('google/tagmanager/gtm_noscript');
    }
}
