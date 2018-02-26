<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 24/02/2018
 * Time: 14:40
 */
namespace Magenest\Movie\Block;

use Magento\Framework\View\Element\Template;

class MagenestAdvance extends Template{
    protected $magenestMovieFactory;
    protected $magenestDirectorFactory;
    protected $movieActorFactory;
    protected $magenestActorFactory;
    public function __construct(
        \Magenest\Movie\Model\ResourceModel\Collection\MagenestMovieFactory $magenestMovieFactory,
        \Magenest\Movie\Model\MagenestDirectorFactory $magenestDirectorFactory,
        \Magenest\Movie\Model\ResourceModel\Collection\MovieActorFactory $movieActorFactory,
        \Magenest\Movie\Model\MagenestActorFactory $magenestActorFactory,
        Template\Context $context,
        array $data = []
    )
    {
        $this->magenestMovieFactory = $magenestMovieFactory;
        $this->magenestDirectorFactory = $magenestDirectorFactory;
        $this->magenestActorFactory = $magenestActorFactory;
        $this->movieActorFactory = $movieActorFactory;
        parent::__construct($context, $data);
    }

    public function getMovieName(){
        $name = $this->magenestMovieFactory->create();
        return $name;
    }
    public function getDirector($a){
        $name = $this->magenestDirectorFactory->create()->load($a);
        return $name;
    }
    public function _getActorId($a){
        $name = $this->movieActorFactory->create()->addFieldToFilter('movie_id',$a);
//        $c = $name->load();
        return $name;
    }
    public function _getActorName($a){
        $name = $this->magenestActorFactory->create()->load($a);
        return $name;
    }

}