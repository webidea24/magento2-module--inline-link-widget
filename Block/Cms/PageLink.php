<?php


namespace Webidea24\InlineLinkWidget\Block\Cms;


use Magento\Cms\Block\Widget\Page\Link;

class PageLink extends Link
{
    public function toHtml()
    {
        return $this->getHref();
    }
}
