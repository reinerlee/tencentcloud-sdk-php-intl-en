<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pixel coordinates of the text line in the image after rotation correction, which is in the format of `(X-coordinate of top-left point, Y-coordinate of top-left point, width, height)`.
 *
 * @method integer getX() Obtain X-coordinate of top-left point.
 * @method void setX(integer $X) Set X-coordinate of top-left point.
 * @method integer getY() Obtain Y-coordinate of top-left point.
 * @method void setY(integer $Y) Set Y-coordinate of top-left point.
 * @method integer getWidth() Obtain Width
 * @method void setWidth(integer $Width) Set Width
 * @method integer getHeight() Obtain Height
 * @method void setHeight(integer $Height) Set Height
 */
class ItemCoord extends AbstractModel
{
    /**
     * @var integer X-coordinate of top-left point.
     */
    public $X;

    /**
     * @var integer Y-coordinate of top-left point.
     */
    public $Y;

    /**
     * @var integer Width
     */
    public $Width;

    /**
     * @var integer Height
     */
    public $Height;

    /**
     * @param integer $X X-coordinate of top-left point.
     * @param integer $Y Y-coordinate of top-left point.
     * @param integer $Width Width
     * @param integer $Height Height
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("X",$param) and $param["X"] !== null) {
            $this->X = $param["X"];
        }

        if (array_key_exists("Y",$param) and $param["Y"] !== null) {
            $this->Y = $param["Y"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}
