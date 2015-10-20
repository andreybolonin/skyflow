<?php

namespace Skywox\AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="delivery_order")
 */
class DeliveryOrder extends Base
{

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="orders")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * @ORM\ManyToOne(targetEntity="Recipient", inversedBy="ordersRecipient")
     * @ORM\JoinColumn(name="recipient_id", referencedColumnName="id")
     */
    protected $recipient;

    /**
     * @ORM\ManyToOne(targetEntity="Recipient", inversedBy="ordersApplicant")
     * @ORM\JoinColumn(name="applicant_id", referencedColumnName="id")
     */
    protected $applicant;

    /**
     * @ORM\ManyToOne(targetEntity="Sender", inversedBy="orders")
     * @ORM\JoinColumn(name="sender_id", referencedColumnName="id")
     */
    protected $sender;

    /**
     * @ORM\OneToMany(targetEntity="Document", mappedBy="deliveryOrder")
     */
    protected $documents;

    /**
     * DeliveryOrder constructor.
     */
    public function __construct()
    {
        $this->documents = new ArrayCollection();
    }

    /**
     * var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min = 2, max = 255)
     *
     * @ORM\Column(type="string")
     */
    protected $adresses;

    /**
     * var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min = 2, max = 255)
     *
     * @ORM\Column(type="string")
     */
    protected $desc;

    /**
     * var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min = 2, max = 255)
     *
     * @ORM\Column(type="string")
     */
    protected $weight;

    /**
     * var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min = 2, max = 255)
     *
     * @ORM\Column(type="string")
     */
    protected $packing;

    /**
     * var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min = 2, max = 255)
     *
     * @ORM\Column(type="string")
     */
    protected $qty;

    /**
     * var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min = 2, max = 255)
     *
     * @ORM\Column(type="string")
     */
    protected $measurements;

    /**
     * var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min = 2, max = 255)
     *
     * @ORM\Column(type="string")
     */
    protected $itemPrice;

    /**
     * var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min = 2, max = 255)
     *
     * @ORM\Column(type="string")
     */
    protected $value;

    /**
     * var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min = 2, max = 255)
     *
     * @ORM\Column(type="string")
     */
    protected $euTaricNo;

    /**
     * var string
     *
     * @Assert\NotBlank()
     * @Assert\Length(min = 2, max = 255)
     *
     * @ORM\Column(type="string")
     */
    protected $euCode;

    /**
     * @return mixed
     */
    public function getAdresses()
    {
        return $this->adresses;
    }

    /**
     * @param mixed $adresses
     */
    public function setAdresses($adresses)
    {
        $this->adresses = $adresses;
    }

    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param mixed $desc
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getPacking()
    {
        return $this->packing;
    }

    /**
     * @param mixed $packing
     */
    public function setPacking($packing)
    {
        $this->packing = $packing;
    }

    /**
     * @return mixed
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param mixed $qty
     */
    public function setQty($qty)
    {
        $this->qty = $qty;
    }

    /**
     * @return mixed
     */
    public function getMeasurements()
    {
        return $this->measurements;
    }

    /**
     * @param mixed $measurements
     */
    public function setMeasurements($measurements)
    {
        $this->measurements = $measurements;
    }

    /**
     * @return mixed
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * @param mixed $itemPrice
     */
    public function setItemPrice($itemPrice)
    {
        $this->itemPrice = $itemPrice;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getEuTaricNo()
    {
        return $this->euTaricNo;
    }

    /**
     * @param mixed $euTaricNo
     */
    public function setEuTaricNo($euTaricNo)
    {
        $this->euTaricNo = $euTaricNo;
    }

    /**
     * @return mixed
     */
    public function getEuCode()
    {
        return $this->euCode;
    }

    /**
     * @param mixed $euCode
     */
    public function setEuCode($euCode)
    {
        $this->euCode = $euCode;
    }
}
