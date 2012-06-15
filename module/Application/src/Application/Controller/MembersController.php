<?php

namespace Application\Controller;

use Zend\Mvc\Controller\ActionController,
    Zend\View\Model\ViewModel;

class MembersController extends ActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function viewUserAction()
    {
        $username = $this->getEvent()->getRouteMatch()->getParam('username');
        $vm = new ViewModel();
        $vm->setTemplate('application/members/userpage/'.$username);
        return $vm;
    }
}
