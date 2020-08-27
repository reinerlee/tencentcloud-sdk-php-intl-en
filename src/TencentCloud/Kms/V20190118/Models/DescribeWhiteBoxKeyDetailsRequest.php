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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWhiteBoxKeyDetails request structure.
 *
 * @method integer getKeyStatus() Obtain Filter: key status. 0: disabled, 1: enabled
 * @method void setKeyStatus(integer $KeyStatus) Set Filter: key status. 0: disabled, 1: enabled
 */
class DescribeWhiteBoxKeyDetailsRequest extends AbstractModel
{
    /**
     * @var integer Filter: key status. 0: disabled, 1: enabled
     */
    public $KeyStatus;

    /**
     * @param integer $KeyStatus Filter: key status. 0: disabled, 1: enabled
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
        if (array_key_exists("KeyStatus",$param) and $param["KeyStatus"] !== null) {
            $this->KeyStatus = $param["KeyStatus"];
        }
    }
}