<?php

namespace App\Model;


class Message
{
private int $id;
private string $name;
private string $content;
private User $userId;

    // /**
    //  * @param int $id
    //  * @param string $name
    //  * @param string $content
    //  */

    // public function __construct(int $id, string $name, string $content, User $userId)
    // {
    //     $this->id = $id;
    //     $this->name = $name;
    //     $this->content = $content;
    //     $this->userId = $userId;
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
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

}