<?php

namespace App\Model;

class Room
{
    private int $id;
    private string $title;
    private float $price;
    private string $description;
    private string $slug;
    private  Booking $bookingId;

    // /**
    //  * @param int $id
    //  * @param string $title
    //  * @param float $price
    //  * @param string $description
    //  * @param string $slug
    //  */
    // public function __construct(int $id, string $title, float $price, string $description, string $slug, Booking $bookingId)
    // {
    //     $this->id = $id;
    //     $this->title = $title;
    //     $this->price = $price;
    //     $this->description = $description;
    //     $this->slug = $slug;
    //     $this->bookingId = $bookingId;
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
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @return Booking
     */
    public function getBookingId(): Booking
    {
        return $this->bookingId;
    }

    /**
     * @param Booking $bookingId
     */
    public function setBookingId(Booking $bookingId): void
    {
        $this->bookingId = $bookingId;
    }


}
