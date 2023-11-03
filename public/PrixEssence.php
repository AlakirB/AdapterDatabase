<?php


class PrixEssence
{
    /*
    Some other stuff
    */
    private DateTimeInterface $updatedAt;
    
    public function persist(DateTimeInterface $now, callable $persister)
    {
        $this->updatedAt = $now;

        $persister((array) $this);
    }
}