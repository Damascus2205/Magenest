<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 24/02/2018
 * Time: 10:53
 */
namespace Magenest\Movie\Block;

use Magento\Framework\View\Element\Template;

class MagenestBasic extends Template
{
    /**
     * @var \Magenest\Movie\Model\ResourceModel\Collection\MagenestActor
     */
    private $magenestActor;
    /**
     * @var \Magenest\Movie\Model\ResourceModel\Collection\MagenestDirector
     */
    private $magenestDirector;
    /**
     * @var \Magenest\Movie\Model\ResourceModel\Collection\MagenestMovie
     */
    private $magenestMovie;
    /**
     * @var \Magenest\Movie\Model\ResourceModel\Collection\MovieActor
     */
    private $movieActor;

    /**
     * MagenestBasic constructor.
     * @param Template\Context $context
     * @param \Magenest\Movie\Model\ResourceModel\Collection\MagenestActor $magenestActor
     * @param \Magenest\Movie\Model\ResourceModel\Collection\MagenestDirector $magenestDirector
     * @param \Magenest\Movie\Model\ResourceModel\Collection\MagenestMovie $magenestMovie
     * @param \Magenest\Movie\Model\ResourceModel\Collection\MovieActor $movieActor
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        \Magenest\Movie\Model\ResourceModel\Collection\MagenestActor $magenestActor,
        \Magenest\Movie\Model\ResourceModel\Collection\MagenestDirector $magenestDirector,
        \Magenest\Movie\Model\ResourceModel\Collection\MagenestMovie $magenestMovie,
        \Magenest\Movie\Model\ResourceModel\Collection\MovieActor $movieActor,
        array $data = []
    ) {
        $this->magenestActor = $magenestActor;
        $this->magenestMovie = $magenestMovie;
        $this->magenestDirector = $magenestDirector;
        $this->movieActor = $movieActor;
        parent::__construct($context, $data);
    }

    /**
     * @return \Magento\Framework\DataObject[]
     */
    public function getItem($a){
        return $this->$a->getItems();
    }
}