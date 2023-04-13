<?php declare(strict_types=1);

namespace MaxServ\CommonViewModels\ViewModel;

use Magento\Framework\App\Config\ScopeConfigInterface;

class StoreConfig
{
    private ScopeConfigInterface $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function getValue(string $path)
    {
        return $this->scopeConfig->getValue($path);
    }
}
