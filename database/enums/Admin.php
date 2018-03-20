<?php

abstract class AdminStatus extends BaseEnum
{
    const DELETE  = 0; // 刪除
    const ACTIVE  = 1; // 啟用
    const DISABLE = 2; // 停用
}
