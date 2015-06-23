<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @ORM\Table(name="country")
 * @ORM\Entity
 */
class Country
{
    /**
     * @var integer
     *
     * @ORM\Column(name="country_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $countryId;

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
     * Get countryId
     *
     * @return integer
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set create
     *
     * @param \DateTime $create
     *
     * @return Country
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
     * @return Country
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
}
