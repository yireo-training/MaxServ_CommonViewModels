<?php declare(strict_types=1);

namespace MaxServ\CommonViewModels\ViewModel;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class SvgFile implements ArgumentInterface
{

    public function getSvgContents(string $svgFile): string
    {
        $absolutePath = __DIR__ .'/../../../../../vendor/magento/theme-frontend-luma/web/' . $svgFile;
        return file_get_contents($absolutePath);
    }

    public function getSvgImgTag(string $svgFile): string
    {
        return '';
    }
}
