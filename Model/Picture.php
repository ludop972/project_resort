<?php

namespace App\Model;

use App\Model\Room;

class Picture
{
    private int $id;
    private string $fileName;
    private Room $roomId;

    // /**
    //  * @param int $id
    //  * @param string $fileName
    //  * @param Room $roomId
    //  */

    // public function __construct(int $id, string $fileName, Room $roomId)
    // {
    //     $this->id = $id;
    //     $this->fileName = $fileName;
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
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     */
    public function setFileName(string $fileName): void
    {
        $this->fileName = $fileName;
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