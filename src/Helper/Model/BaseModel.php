<?php

namespace Yuxing\Tool\Helper\Model;

trait BaseModel
{
    /**
     * Notes: 为数组 / JSON 序列化准备日期。
     */
    protected function serializeDate(\DateTimeInterface $date)
    {
        return $date->format($this->dateFormat ?: 'Y-m-d H:i:s');
    }
}
