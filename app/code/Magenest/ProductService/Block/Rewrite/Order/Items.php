<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 12/02/2018
 * Time: 08:25
 */
namespace Magenest\ProductService\Block\Rewrite\Order;

/**
 * Class Items
 * @package Magenest\ProductService\Block\Rewrite\Order
 */
class Items extends \Magento\Sales\Block\Order\Items
{
    /**
     *  Test survey done or not
     * return 1 ->not display
     */
    public function checkService()
    {
        /**
         *  get item_id in sales_order_items table
         */
        $array1=[];
        $i=0;
        $item = $this->getItems();
        foreach ($item as $value) {
            $array1[$i] = $value->getItemId();
            $i++;
        }

        /**
         * get item_id in product_survey table
         */
        $array = [];
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $modelOrder = $objectManager->create('Magenest\ProductService\Model\ResourceModel\Service\Collection')->load();
        foreach ($modelOrder as $values) {
            $array[$i] = $values->getItemId();
            $i++;
        }

        $a = 0;
        if (count($array) != 0) {
            foreach ($array1 as $values) {
                $a += in_array($values, $array);
            }

            if ((count($array1)-$a) == 0) {
                return 1;
            } else {
                return 0;
            }
        } else {
            return 0;
        }
    }
}
