<?php

namespace Skywox\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Document extends Base
{

    /**
     * @ORM\ManyToOne(targetEntity="DeliveryOrder", inversedBy="documents")
     * @ORM\JoinColumn(name="delivery_order_id", referencedColumnName="id")
     */
    protected $deliveryOrder;

    /**
     * @return mixed
     */
    public function getDeliveryOrder()
    {
        return $this->deliveryOrder;
    }

    /**
     * @param mixed $deliveryOrder
     */
    public function setDeliveryOrder($deliveryOrder)
    {
        $this->deliveryOrder = $deliveryOrder;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255)
     */
    private $filename;

    /**
     * Set type
     *
     * @param string $type
     * @return Document
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return Document
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @return string
     */
    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/documents';
    }

    /**
     * @return null|string
     */
    public function getAbsolutePath()
    {
        return null === $this->filename
            ? null
            : $this->getUploadRootDir().'/'.$this->filename;
    }

    /**
     * @return null|string
     */
    public function getWebPath()
    {
        return null === $this->filename
            ? null
            : $this->getUploadDir().'/'.$this->filename;
    }

    /**
     * @return string
     */
    public function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
}
