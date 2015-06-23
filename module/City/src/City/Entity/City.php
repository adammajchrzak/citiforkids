<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City
 *
 * @ORM\Table(name="city", indexes={@ORM\Index(name="fk_city_zipcode1_idx", columns={"zipcode_id"}), @ORM\Index(name="fk_city_country1_idx", columns={"country_id"})})
 * @ORM\Entity
 */
class City
{
    /**
     * @var integer
     *
     * @ORM\Column(name="city_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cityId;

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
     * @var \Application\Entity\Zipcode
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Zipcode")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="zipcode_id", referencedColumnName="zipcode_id")
     * })
     */
    private $zipcode;

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
     * Get cityId
     *
     * @return integer
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * Set create
     *
     * @param \DateTime $create
     *
     * @return City
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
     * @return City
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
     * Set zipcode
     *
     * @param \Application\Entity\Zipcode $zipcode
     *
     * @return City
     */
    public function setZipcode(\Application\Entity\Zipcode $zipcode = null)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return \Application\Entity\Zipcode
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set country
     *
     * @param \Application\Entity\Country $country
     *
     * @return City
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
