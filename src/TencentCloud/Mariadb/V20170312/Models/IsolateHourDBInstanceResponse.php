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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IsolateHourDBInstance response structure.
 *
 * @method array getSuccessInstanceIds() Obtain IDs of instances removed from isolation
 * @method void setSuccessInstanceIds(array $SuccessInstanceIds) Set IDs of instances removed from isolation
 * @method array getFailedInstanceIds() Obtain IDs of instances failed to be removed from isolation
 * @method void setFailedInstanceIds(array $FailedInstanceIds) Set IDs of instances failed to be removed from isolation
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class IsolateHourDBInstanceResponse extends AbstractModel
{
    /**
     * @var array IDs of instances removed from isolation
     */
    public $SuccessInstanceIds;

    /**
     * @var array IDs of instances failed to be removed from isolation
     */
    public $FailedInstanceIds;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $SuccessInstanceIds IDs of instances removed from isolation
     * @param array $FailedInstanceIds IDs of instances failed to be removed from isolation
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("SuccessInstanceIds",$param) and $param["SuccessInstanceIds"] !== null) {
            $this->SuccessInstanceIds = $param["SuccessInstanceIds"];
        }

        if (array_key_exists("FailedInstanceIds",$param) and $param["FailedInstanceIds"] !== null) {
            $this->FailedInstanceIds = $param["FailedInstanceIds"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}