<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController,
    Zend\View\Model\ViewModel;

class MembersController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function viewUserAction()
    {
        $username = $this->plugin('params')->fromRoute('username');
        $vm = new ViewModel();
        $vm->setTemplate('application/members/userpage/'.$username);
        return $vm;
    }
}
