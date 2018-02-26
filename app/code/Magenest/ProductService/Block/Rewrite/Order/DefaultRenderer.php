<?php
namespace Magenest\ProductService\Block\Rewrite\Order;

/**
 * Class DefaultRenderer
 * @package Magenest\ProductService\Block\Rewrite\Order
 */
class DefaultRenderer extends \Magento\Sales\Block\Order\Item\Renderer\DefaultRenderer
{
    /**
     * return 0 -> display
     */
    public function checkService()
    {
        /**
         * get order_id in this row
         */
        $item_id = $this->getItem()->getItemId();

        /**
         * get item_id in product_survey table
         */
        $i = 0;
        $array = [];
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $modelOrder = $objectManager->create('Magenest\ProductService\Model\ResourceModel\Service\Collection')->load();
        foreach ($modelOrder as $values) {
            $array[$i] = $values->getItemId();
            $i++;
        }

        if (isset($array)) {
            return in_array($item_id, $array);
        } else {
            return 0;
        }
    }
}
