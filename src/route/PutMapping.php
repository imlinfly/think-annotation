<?php

namespace think\annotation\route;

use Doctrine\Common\Annotations\Annotation\Enum;
use Doctrine\Common\Annotations\Annotation\Target;

/**
 * 注册路由
 * @package topthink\annotation
 * @Annotation
 * @Target({"METHOD","CLASS"})
 */
final class PutMapping extends Rule
{
    /**
     * 请求类型
     * @Enum({"GET","POST","PUT","DELETE","PATCH","OPTIONS","HEAD"})
     * @var string
     */
    public const method = 'put';

}
