<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class shopController extends Controller
{
    public function categoryAction()
    {
        $tovar=$this->getTovar();
        return $this->render('AppBundle:shop:category.html.twig', array(
            "tovar"=>$tovar
        ));
    }

    public function listAction($selected)
    {
        $list=$this->getList($selected);
        return $this->render('AppBundle:shop:list.html.twig', array(
            "list"=>$list, "selected"=>$selected
        ));
    }

    public function viewAction($selected,$id)
    {
        $list=$this->getList($selected);
        $item=$list[$id-1];
        return $this->render('AppBundle:shop:view.html.twig', array(
            "item"=>$item, "selected"=>$selected
        ));
    }
    
    protected function getTovar(){
        return 
        [
            [
                "position"=>"Computer"
            ],
            [
                "position"=>"Phone"
            ],
            [
               "position"=>"Periphery"
            ]
        ];
    }
    
    protected function getList($selected){
        $list=[
            "Computer"=>[
                ["id"=>1,"firm"=>"Asus","description"=>"Some description","image"=>"image","price"=>1000],
                ["id"=>2,"firm"=>"HP","description"=>"Some description","image"=>"image","price"=>2000],
                ["id"=>3,"firm"=>"Apple","description"=>"Some description","image"=>"image","price"=>3000],
                ["id"=>4,"firm"=>"Dell","description"=>"Some description","image"=>"image","price"=>4000]
                ], 
            "Phone"=>[
                ["id"=>1,"firm"=>"Nokia","description"=>"Some description","image"=>"image","price"=>1000],
                ["id"=>2,"firm"=>"Apple","description"=>"Some description","image"=>"image","price"=>2000],
                ["id"=>3,"firm"=>"Xiaomi","description"=>"Some description","image"=>"image","price"=>3000]
                ], 
            "Periphery"=>[
                ["id"=>1,"firm"=>"Headphones","description"=>"Some description","image"=>"image","price"=>1000],
                ["id"=>2,"firm"=>"Mouse","description"=>"Some description","image"=>"image","price"=>2000]
                ]
                ];
        return $list[$selected];
    }
}
