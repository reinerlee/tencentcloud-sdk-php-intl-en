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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of a video processing input object.
 *
 * @method string getType() Obtain The type of video processing input object. COS and URL objects are supported.
 * @method void setType(string $Type) Set The type of video processing input object. COS and URL objects are supported.
 * @method CosInputInfo getCosInputInfo() Obtain This parameter is required and valid when `Type` is `COS`, indicating the information of a COS object for video processing.
 * @method void setCosInputInfo(CosInputInfo $CosInputInfo) Set This parameter is required and valid when `Type` is `COS`, indicating the information of a COS object for video processing.
 * @method UrlInputInfo getUrlInputInfo() Obtain This parameter is required and valid when `Type` is `URL`, indicating the information of a URL object for video processing.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setUrlInputInfo(UrlInputInfo $UrlInputInfo) Set This parameter is required and valid when `Type` is `URL`, indicating the information of a URL object for video processing.
Note: this field may return `null`, indicating that no valid value is obtained.
 */
class MediaInputInfo extends AbstractModel
{
    /**
     * @var string The type of video processing input object. COS and URL objects are supported.
     */
    public $Type;

    /**
     * @var CosInputInfo This parameter is required and valid when `Type` is `COS`, indicating the information of a COS object for video processing.
     */
    public $CosInputInfo;

    /**
     * @var UrlInputInfo This parameter is required and valid when `Type` is `URL`, indicating the information of a URL object for video processing.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $UrlInputInfo;

    /**
     * @param string $Type The type of video processing input object. COS and URL objects are supported.
     * @param CosInputInfo $CosInputInfo This parameter is required and valid when `Type` is `COS`, indicating the information of a COS object for video processing.
     * @param UrlInputInfo $UrlInputInfo This parameter is required and valid when `Type` is `URL`, indicating the information of a URL object for video processing.
Note: this field may return `null`, indicating that no valid value is obtained.
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

        if (array_key_exists("CosInputInfo",$param) and $param["CosInputInfo"] !== null) {
            $this->CosInputInfo = new CosInputInfo();
            $this->CosInputInfo->deserialize($param["CosInputInfo"]);
        }

        if (array_key_exists("UrlInputInfo",$param) and $param["UrlInputInfo"] !== null) {
            $this->UrlInputInfo = new UrlInputInfo();
            $this->UrlInputInfo->deserialize($param["UrlInputInfo"]);
        }
    }
}
