<?php

namespace SkyFlow\AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Sender, Recipient, Applicant
 *
 * @ORM\Table(name="customer")
 * @ORM\Entity
 */
class Customer extends Base
{

    /**
     *
     */
    const TYPE_RECIPIENT = 1;

    /**
     *
     */
    const TYPE_APPLICANT = 2;

    /**
     *
     */
    const TYPE_SENDER = 3;

    /**
     * @ORM\OneToMany(targetEntity="DeliveryOrder", mappedBy="recipient")
     */
    protected $ordersRecipient;

    /**
     * @ORM\OneToMany(targetEntity="DeliveryOrder", mappedBy="applicant")
     */
    protected $ordersApplicant;

    /**
     * @ORM\OneToMany(targetEntity="Invoice", mappedBy="customer")
     */
    protected $invoices;

    /**
     * @return mixed
     */
    public function getOrdersRecipient()
    {
        return $this->ordersRecipient;
    }

    /**
     * @return mixed
     */
    public function getOrdersApplicant()
    {
        return $this->ordersApplicant;
    }

    /**
     * @ORM\OneToMany(targetEntity="DeliveryOrder", mappedBy="sender")
     */
    protected $ordersSender;

    /**
     * @return mixed
     */
    public function getOrdersSender()
    {
        return $this->ordersSender;
    }

    /**
     * @return array
     */
    public function getOrdersCount()
    {
        $idsOrder = [];
        foreach ($this->getOrdersSender() as $order) {
            $idsOrder[] = $order->getId();
        }
        foreach ($this->getOrdersApplicant() as $order) {
            $idsOrder[] = $order->getId();
        }
        foreach ($this->getOrdersSender() as $order) {
            $idsOrder[] = $order->getId();
        }

        return count(array_unique($idsOrder));
    }

    /**
     * @param mixed $ordersSender
     */
    public function setOrdersSender($ordersSender)
    {
        $this->ordersSender = $ordersSender;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="formOfAddress", type="string", length=255)
     */
    private $formOfAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="trackingNumber", type="string", length=255)
     */
    private $trackingNumber;

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * @param string $trackingNumber
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="buildingNumber", type="string", length=255)
     */
    private $buildingNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=255)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="familyName", type="string", length=255)
     */
    private $familyName;

    /**
     * @var string
     *
     * @ORM\Column(name="customReg", type="string", length=255)
     */
    private $customReg;

    /**
     * @var string
     *
     * @ORM\Column(name="companyReg", type="string", length=255)
     */
    private $companyReg;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="additionalInfo", type="string", length=255)
     */
    private $additionalInfo;

    /**
     * @var string
     *
     * @ORM\Column(name="postCode", type="string", length=255)
     */
    private $postCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="integer", length=255)
     */
    private $type;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

//    /**
//     * @var string
//     *
//     * @ORM\Column(name="password", type="string", length=255)
//     */
//    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=255)
     */
    private $mobile;

//    /**
//     * @var string
//     *
//     * @ORM\Column(name="status", type="string", length=255)
//     */
//    private $status;

    /**
     * Recipient constructor.
     */
    public function __construct($type)
    {
        $this->ordersRecipient = new ArrayCollection();
        $this->ordersApplicant = new ArrayCollection();
        $this->ordersSender = new ArrayCollection();
        $this->invoices = new ArrayCollection();
        $this->setType($type);
    }

    /**
     * @return mixed
     */
    public function getInvoices()
    {
        return $this->invoices;
    }

    /**
     * @return string
     */
    public function getBuildingNumber()
    {
        return $this->buildingNumber;
    }

    /**
     * @param string $buildingNumber
     */
    public function setBuildingNumber($buildingNumber)
    {
        $this->buildingNumber = $buildingNumber;
    }

    /**
     * @return string
     */
    public function getCustomReg()
    {
        return $this->customReg;
    }

    /**
     * @param string $customReg
     */
    public function setCustomReg($customReg)
    {
        $this->customReg = $customReg;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getCompanyReg()
    {
        return $this->companyReg;
    }

    /**
     * @param string $companyReg
     */
    public function setCompanyReg($companyReg)
    {
        $this->companyReg = $companyReg;
    }

    /**
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param string $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    /**
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * @param string $additionalInfo
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;
    }

    /**
     * @return string
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * @param string $postCode
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

//    /**
//     * @return string
//     */
//    public function getPassword()
//    {
//        return $this->password;
//    }
//
//    /**
//     * @param string $password
//     */
//    public function setPassword($password)
//    {
//        $this->password = $password;
//    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

//    /**
//     * @return string
//     */
//    public function getStatus()
//    {
//        return $this->status;
//    }
//
//    /**
//     * @param string $status
//     */
//    public function setStatus($status)
//    {
//        $this->status = $status;
//    }

    /**
     * Set formOfAddress
     *
     * @param string $formOfAddress
     * @return Recipient
     */
    public function setFormOfAddress($formOfAddress)
    {
        $this->formOfAddress = $formOfAddress;

        return $this;
    }

    /**
     * Get formOfAddress
     *
     * @return string 
     */
    public function getFormOfAddress()
    {
        return $this->formOfAddress;
    }

    /**
     * Set company
     *
     * @param string $company
     * @return Recipient
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Recipient
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set familyName
     *
     * @param string $familyName
     * @return Recipient
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;

        return $this;
    }

    /**
     * Get familyName
     *
     * @return string 
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }
}
