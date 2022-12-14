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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * An image operation.
 *
 * @method string getType() Obtain The image processing type. Valid values:
<li>`Scale`: Scaling</li>
<li>`CenterCut`: Cropping</li>
 * @method void setType(string $Type) Set The image processing type. Valid values:
<li>`Scale`: Scaling</li>
<li>`CenterCut`: Cropping</li>
 * @method ImageScale getScale() Obtain The scaling details. This parameter is valid only if `Type` is `Scale`.
 * @method void setScale(ImageScale $Scale) Set The scaling details. This parameter is valid only if `Type` is `Scale`.
 * @method ImageCenterCut getCenterCut() Obtain The cropping details. This parameter is valid only if `Type` is `CenterCut`.
 * @method void setCenterCut(ImageCenterCut $CenterCut) Set The cropping details. This parameter is valid only if `Type` is `CenterCut`.
 */
class ImageOperation extends AbstractModel
{
    /**
     * @var string The image processing type. Valid values:
<li>`Scale`: Scaling</li>
<li>`CenterCut`: Cropping</li>
     */
    public $Type;

    /**
     * @var ImageScale The scaling details. This parameter is valid only if `Type` is `Scale`.
     */
    public $Scale;

    /**
     * @var ImageCenterCut The cropping details. This parameter is valid only if `Type` is `CenterCut`.
     */
    public $CenterCut;

    /**
     * @param string $Type The image processing type. Valid values:
<li>`Scale`: Scaling</li>
<li>`CenterCut`: Cropping</li>
     * @param ImageScale $Scale The scaling details. This parameter is valid only if `Type` is `Scale`.
     * @param ImageCenterCut $CenterCut The cropping details. This parameter is valid only if `Type` is `CenterCut`.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = new ImageScale();
            $this->Scale->deserialize($param["Scale"]);
        }

        if (array_key_exists("CenterCut",$param) and $param["CenterCut"] !== null) {
            $this->CenterCut = new ImageCenterCut();
            $this->CenterCut->deserialize($param["CenterCut"]);
        }
    }
}
