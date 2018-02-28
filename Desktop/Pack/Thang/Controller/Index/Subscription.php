<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 25/01/2018
 * Time: 08:50
 */

namespace Pack\Thang\Controller\Index;

use \Magento\Framework\App\Action\Action;

class Subscription extends Action
{
    public function execute()
    {
        $subscription = $this->_objectManager->create('Pack\Thang\Model\Subscription');
        $subscription->setFirstname('John');
        $subscription->setLastname('Doe');
        $subscription->setEmail('john.doe@example.com');
        $subscription->setMessage('A short message to test');
//        $array = [
//          'firstname' => 'aaa',
//            'lastname' => 'bbb',
//        ];
//        $subscription->addData($array);
        $subscription->save();
        $this->getResponse()->setBody('success');
    }
}