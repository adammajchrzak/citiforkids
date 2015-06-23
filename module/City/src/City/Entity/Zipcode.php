<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zipcode
 *
 * @ORM\Table(name="zipcode")
 * @ORM\Entity
 */
class Zipcode
{
    /**
     * @var integer
     *
     * @ORM\Column(name="zipcode_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $zipcodeId;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="string", length=6, nullable=true)
     */
    private $zipcode;

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
     * Get zipcodeId
     *
     * @return integer
     */
    public function getZipcodeId()
    {
        return $this->zipcodeId;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     *
     * @return Zipcode
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set create
     *
     * @param \DateTime $create
     *
     * @return Zipcode
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
     * @return Zipcode
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
