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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityGroupManagedRules request structure.
 *
 * @method string getZoneId() Obtain The site ID.
 * @method void setZoneId(string $ZoneId) Set The site ID.
 * @method string getEntity() Obtain The subdomain name/layer-4 proxy.
 * @method void setEntity(string $Entity) Set The subdomain name/layer-4 proxy.
 * @method integer getOffset() Obtain The page offset. Default value: 0
 * @method void setOffset(integer $Offset) Set The page offset. Default value: 0
 * @method integer getLimit() Obtain The paginated query limit. Default value: 20. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set The paginated query limit. Default value: 20. Maximum value: 1000.
 */
class DescribeSecurityGroupManagedRulesRequest extends AbstractModel
{
    /**
     * @var string The site ID.
     */
    public $ZoneId;

    /**
     * @var string The subdomain name/layer-4 proxy.
     */
    public $Entity;

    /**
     * @var integer The page offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer The paginated query limit. Default value: 20. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @param string $ZoneId The site ID.
     * @param string $Entity The subdomain name/layer-4 proxy.
     * @param integer $Offset The page offset. Default value: 0
     * @param integer $Limit The paginated query limit. Default value: 20. Maximum value: 1000.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}