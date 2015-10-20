<?php

namespace Skywox\AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Recipient (Applicant)
 *
 * @ORM\Table(name="recipient")
 * @ORM\Entity
 */
class Recipient extends Base
{

    /**
     *
     */
    const STATUS_RECIPIENT = 1;

    /**
     *
     */
    const STATUS_APPLICANT = 2;

    /**
     * @ORM\OneToMany(targetEntity="DeliveryOrder", mappedBy="recipient")
     */
    protected $ordersRecipient;

    /**
     * @ORM\OneToMany(targetEntity="DeliveryOrder", mappedBy="applicant")
     */
    protected $ordersApplicant;

    /**
     * @var string
     *
     * @ORM\Column(name="formOfAdress", type="string", length=255)
     */
    private $formOfAdress;

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
     * @ORM\Column(name="customRegNo", type="string", length=255)
     */
    private $customRegNo;

    /**
     * @var string
     *
     * @ORM\Column(name="companyRegNo", type="string", length=255)
     */
    private $companyRegNo;

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
     * @ORM\Column(name="email", type="string")
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string")
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string")
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string")
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string")
     */
    private $mobile;

    /**
     * @return string
     */
    public function getCustomRegNo()
    {
        return $this->customRegNo;
    }

    /**
     * @param string $customRegNo
     */
    public function setCustomRegNo($customRegNo)
    {
        $this->customRegNo = $customRegNo;
    }

    /**
     * @return string
     */
    public function getCompanyRegNo()
    {
        return $this->companyRegNo;
    }

    /**
     * @param string $companyRegNo
     */
    public function setCompanyRegNo($companyRegNo)
    {
        $this->companyRegNo = $companyRegNo;
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

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

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

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * Recipient constructor.
     */
    public function __construct()
    {
        $this->ordersRecipient = new ArrayCollection();
        $this->ordersApplicant = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Set formOfAdress
     *
     * @param string $formOfAdress
     * @return Recipient
     */
    public function setFormOfAdress($formOfAdress)
    {
        $this->formOfAdress = $formOfAdress;

        return $this;
    }

    /**
     * Get formOfAdress
     *
     * @return string 
     */
    public function getFormOfAdress()
    {
        return $this->formOfAdress;
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
