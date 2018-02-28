<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 01/02/2018
 * Time: 07:40
 */
namespace Test\Das\Controller\Index;

use Magento\Framework\App\Action\Action;

class Subscription extends Action{
    public function execute()
    {
        // TODO: Implement execute() method.
        $subscription = $this->_objectManager->create('Test\Das\Model\Subscription');
        $array= array('firstname'=>'thang','lastname'=>'nguyenquang','email'=>'asngmail.com','status'=>'pending');
        //        $array= [
//            'firstname'=>'Thang',
//            'lastname'=>'nguyenquang',
//            'email'=> 'asn@gmail.com'
//        ];
//        $id = 1;
//        if ($id) {
//            $subscription->load(1);
//        }
        $subscription->addData($array);
        $subscription->save();
        $this->getResponse()->setBody('success');
    }
}