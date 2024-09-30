<?php

namespace Training\PluginExample\Plugin;

use Training\PluginExample\ViewModel\Example;
use Magento\Framework\App\RequestInterface;

class ExamplePlugin{

    public function afterGetProductKey($subject, $result,RequestInterface $request):?string
    {
        $productId = $request->getParam('product_id');

        return "noItem";
    }
}