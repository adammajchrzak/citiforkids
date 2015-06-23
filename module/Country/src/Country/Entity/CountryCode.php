<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CountryCode
 *
 * @ORM\Table(name="country_code", indexes={@ORM\Index(name="fk_country_code_country_idx", columns={"country_id"})})
 * @ORM\Entity
 */
class CountryCode
{
    /**
     * @var integer
     *
     * @ORM\Column(name="country_code_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $countryCodeId;

    /**
     * @var string
     *
     * @ORM\Column(name="lang_code", type="string", length=2, nullable=true)
     */
    private $langCode = 'pl';

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=45, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="_create", type="datetime", nullable=true)
     */
    private $create = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="_update", type="datetime", nullable=true)
     */
    private $update = 'CURRENT_TIMESTAMP';

    /**
     * @var \Application\Entity\Country
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="country_id")
     * })
     */
    private $country;



    /**
     * Get countryCodeId
     *
     * @return integer
     */
    public function getCountryCodeId()
    {
        return $this->countryCodeId;
    }

    /**
     * Set langCode
     *
     * @param string $langCode
     *
     * @return CountryCode
     */
    public function setLangCode($langCode)
    {
        $this->langCode = $langCode;

        return $this;
    }

    /**
     * Get langCode
     *
     * @return string
     */
    public function getLangCode()
    {
        return $this->langCode;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return CountryCode
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return CountryCode
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set create
     *
     * @param \DateTime $create
     *
     * @return CountryCode
     */
    public function setCreate($create)
    {
        $this->create = $create;

        return $this;
    }

    /**
     * Get create
     *
     * @return \DateTime
     */
    public function getCreate()
    {
        return $this->create;
    }

    /**
     * Set update
     *
     * @param \DateTime $update
     *
     * @return CountryCode
     */
    public function setUpdate($update)
    {
        $this->update = $update;

        return $this;
    }

    /**
     * Get update
     *
     * @return \DateTime
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * Set country
     *
     * @param \Application\Entity\Country $country
     *
     * @return CountryCode
     */
    public function setCountry(\Application\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \Application\Entity\Country
     */
    public function getCountry()
    {
        return $this->country;
    }
}
