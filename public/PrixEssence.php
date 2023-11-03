<?php


class PrixEssence
{
    /*
    Some other stuff
     */
    
    public function persist(DateTimeInterface $now, callable $persister)
    {
        $this->updatedAt = $now;

        $persister((array) $this);
    }
}