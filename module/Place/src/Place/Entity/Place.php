<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Place
 *
 * @ORM\Table(name="place", indexes={@ORM\Index(name="fk_place_address1_idx", columns={"address_id"}), @ORM\Index(name="fk_place_place_status1_idx", columns={"status_id"})})
 * @ORM\Entity
 */
class Place
{
    /**
     * @var integer
     *
     * @ORM\Column(name="place_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $placeId;

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
     * @var \Application\Entity\Address
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Address")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_id", referencedColumnName="address_id")
     * })
     */
    private $address;

    /**
     * @var \Application\Entity\PlaceStatus
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\PlaceStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_id", referencedColumnName="status_id")
     * })
     */
    private $status;



    /**
     * Get placeId
     *
     * @return integer
     */
    public function getPlaceId()
    {
        return $this->placeId;
    }

    /**
     * Set create
     *
     * @param \DateTime $create
     *
     * @return Place
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
     * @return Place
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
     * Set address
     *
     * @param \Application\Entity\Address $address
     *
     * @return Place
     */
    public function setAddress(\Application\Entity\Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \Application\Entity\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set status
     *
     * @param \Application\Entity\PlaceStatus $status
     *
     * @return Place
     */
    public function setStatus(\Application\Entity\PlaceStatus $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \Application\Entity\PlaceStatus
     */
    public function getStatus()
    {
        return $this->status;
    }
}
