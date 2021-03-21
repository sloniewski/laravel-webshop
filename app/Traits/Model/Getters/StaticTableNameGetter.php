<?php

namespace App\Traits\Model\Getters;

trait StaticTableNameGetter
{
    public static function tablename()
    {
        $self = new static();

        return $self->getTable();
    }
}