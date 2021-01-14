<?php


namespace Webidea24\InlineLinkWidget\Block;


class Link extends \Magento\Catalog\Block\Widget\Link
{

    public function toHtml()
    {
        return $this->getHref();
    }
}
