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
 * DescribeImageProcessingTemplates request structure.
 *
 * @method integer getSubAppId() Obtain <b>The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.</b>
 * @method array getDefinitions() Obtain The IDs of the templates to query. Length limit: 100.
 * @method void setDefinitions(array $Definitions) Set The IDs of the templates to query. Length limit: 100.
 * @method string getType() Obtain The template type. Valid values:
<li>Preset</li>
<li>Custom</li>
 * @method void setType(string $Type) Set The template type. Valid values:
<li>Preset</li>
<li>Custom</li>
 * @method integer getOffset() Obtain The offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set The offset. Default value: 0.
 * @method integer getLimit() Obtain The number of records to return. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set The number of records to return. Default value: 10. Maximum value: 100.
 */
class DescribeImageProcessingTemplatesRequest extends AbstractModel
{
    /**
     * @var integer <b>The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.</b>
     */
    public $SubAppId;

    /**
     * @var array The IDs of the templates to query. Length limit: 100.
     */
    public $Definitions;

    /**
     * @var string The template type. Valid values:
<li>Preset</li>
<li>Custom</li>
     */
    public $Type;

    /**
     * @var integer The offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer The number of records to return. Default value: 10. Maximum value: 100.
     */
    public $Limit;

    /**
     * @param integer $SubAppId <b>The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.</b>
     * @param array $Definitions The IDs of the templates to query. Length limit: 100.
     * @param string $Type The template type. Valid values:
<li>Preset</li>
<li>Custom</li>
     * @param integer $Offset The offset. Default value: 0.
     * @param integer $Limit The number of records to return. Default value: 10. Maximum value: 100.
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Definitions",$param) and $param["Definitions"] !== null) {
            $this->Definitions = $param["Definitions"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
