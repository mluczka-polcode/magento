<?php

class Mage_Core_Block_CustomMessages extends Mage_Core_Block_Messages
{
    protected function _toHtml()
    {
        $html = $this->getGroupedHtml();

        if($html != '')
        {
            $html = '<div id="site-messages">' . $html . '</div>';
        }

        return $html;
    }

}
