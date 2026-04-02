<?php

trait HasTimestap
{
    protected DateTime $createdAt;
    protected DateTime $updatedAt;

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function setCreatedAt($_createdAt)
    {
        $this->createdAt = $_createdAt;
    }

    public function setUpdatedAt($_updatedAt)
    {
        $this->updatedAt = $_updatedAt;
    }

    protected function initTimeStamps()
    {
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();
    }
}
