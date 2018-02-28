<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 25/01/2018
 * Time: 09:21
 */
namespace Pack\Thng\Controller\Index;

use \Magento\Framework\App\Action\Action;

class Subscription extends Action
{
    public function execute()
    {
        $subscription = $this->_objectManager->create('Pack\Thng\Model\Subscription');
        $subscription->setFirstname('Johns');
        $subscription->setLastname('Doe');
        $subscription->setEmail('john.doe@example.com');
        $subscription->setMessage('A	short	message	to	test');
        $subscription->save();
        $this->getResponse()->setBody('success');
    }
}