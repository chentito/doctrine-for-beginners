<?php
// src/Entities/User.php
namespace App\Entities;

/**
 * @Entity(repositoryClass=UserRepository::class)
 * @Table(name="users")
 */
class User
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     * @var int|null
     */
    private $id;

    /**
     * @Column(type="string", length=32)
     * @var string
     */
    private $username = '';

    /**
     * @Column(type="string", length=8)
     * @var string
     */
    private $status = 'active';

    /**
     * @Embedded(class=Address::class, columnPrefix="address_")
     * @var Address|null
     */
    private $address;

    /**
     * @Column(name="phone_number", type="string", length=22, nullable=true)
     * @var string|null
     */
    private $phoneNumber;

    public function getId() : ?int
    {
        return $this->id;
    }

    public function changeUsername(string $username) : void
    {
        $this->username = $username;
    }

    public function getUsername() : string
    {
        return $this->username;
    }

    public function changeStatus(
        string $status) : void
    {
        $this->status = $status;
    }

    public function getStatus() : string
    {
        return $this->status;
    }

    public function getAddress() : ? Address
    {
        return $this->address;
    }

    public function setAddress(Address $address) : void
    {
        $this->address = $address;
    }

    public function getPhoneNumber() : ? string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber) : void
    {
        $this->phoneNumber = $phoneNumber;
    }
}
