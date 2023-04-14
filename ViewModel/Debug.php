<?php
namespace MaxServ\CommonViewModels\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\LayoutInterface;

class Debug implements ArgumentInterface
{
    private LayoutInterface $layout;

    public function __construct(
        LayoutInterface $layout
    ) {
        $this->layout = $layout;
    }

    public function output(array $variables = [])
    {
        $block = $this->layout->createBlock(Template::class);
        $block->setTemplate('MaxServ_CommonViewModels::debug.phtml');
        $block->setVariables($variables);
        return $block->toHtml();
    }
}