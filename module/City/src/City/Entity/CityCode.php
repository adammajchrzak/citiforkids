<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CityCode
 *
 * @ORM\Table(name="city_code", indexes={@ORM\Index(name="fk_city_code_city1_idx", columns={"city_id"})})
 * @ORM\Entity
 */
class CityCode
{
    /**
     * @var integer
     *
     * @ORM\Column(name="code_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeId;

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
     * @var \Application\Entity\City
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\City")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city_id", referencedColumnName="city_id")
     * })
     */
    private $city;



    /**
     * Get codeId
     *
     * @return integer
     */
    public function getCodeId()
    {
        return $this->codeId;
    }

    /**
     * Set langCode
     *
     * @param string $langCode
     *
     * @return CityCode
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
     * @return CityCode
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
     * @return CityCode
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
     * @return CityCode
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
     * @return CityCode
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
     * Set city
     *
     * @param \Application\Entity\City $city
     *
     * @return CityCode
     */
    public function setCity(\Application\Entity\City $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \Application\Entity\City
     */
    public function getCity()
    {
        return $this->city;
    }
}
