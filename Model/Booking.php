<?php

namespace App\Model;

use App\Model\User;
use DateTimeImmutable;

class Booking
{
    private int $id;
    private string $title;
    private float $totalPrice;
    private bool $status;
    private DateTimeImmutable $created_at;
    private DateTimeImmutable $arrived_date;
    private DateTimeImmutable $departure_date;
    private User $userId;
    private Room $roomId;

    // /**
    //  * @param int $id
    //  * @param string $title
    //  * @param float $totalPrice
    //  * @param bool $status
    //  * @param Datetime $created_at
    //  * @param DateTime $arrived_date
    //  * @param DateTime $departure_date
    //  */

    // public function __construct(int $id, string $title, float $totalPrice, bool $status, DateTimeImmutable $created_at, DateTimeImmutable $arrived_date, DateTimeImmutable $departure_date, User $userId, Room $roomId)
    // {
    //     $this->id = $id;
    //     $this->title = $title;
    //     $this->totalPrice = $totalPrice;
    //     $this->status = $status;
    //     $this->created_at = $created_at;
    //     $this->arrived_date = $arrived_date;
    //     $this->departure_date = $departure_date;
    //     $this->userId = $userId;
    //     $this->roomId = $roomId;
    // }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return float
     */
    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

    /**
     * @param float $totalPrice
     */
    public function setTotalPrice(float $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @return bool
     */
    public function isStatus(): bool
    {
        return $this->status;
    }

    /**
     * @param bool $status
     */
    public function setStatus(bool $status): void
    {
        $this->status = $status;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->created_at;
    }

    /**
     * @param Datetime $created_at
     */
    public function setCreatedAt(DateTimeImmutable $created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return DateTime
     */
    public function getArrivedDate(): DateTimeImmutable
    {
        return $this->arrived_date;
    }

    /**
     * @param DateTime $arrived_date
     */
    public function setArrivedDate(DateTimeImmutable $arrived_date): void
    {
        $this->arrived_date = $arrived_date;
    }

    /**
     * @return DateTime
     */
    public function getDepartureDate(): DateTimeImmutable
    {
        return $this->departure_date;
    }

    /**
     * @param DateTime $departure_date
     */
    public function setDepartureDate(DateTimeImmutable $departure_date): void
    {
        $this->departure_date = $departure_date;
    }

    /**
     * @return User
     */
    public function getUserId(): User
    {
        return $this->userId;
    }

    /**
     * @param User $userId
     */
    public function setUserId(User $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return Room
     */
    public function getRoomId(): Room
    {
        return $this->roomId;
    }

    /**
     * @param Room $roomId
     */
    public function setRoomId(Room $roomId): void
    {
        $this->roomId = $roomId;
    }
}
