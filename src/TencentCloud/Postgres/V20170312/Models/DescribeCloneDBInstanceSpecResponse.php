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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloneDBInstanceSpec response structure.
 *
 * @method string getMinSpecCode() Obtain Code of the minimum specification available for purchase.
 * @method void setMinSpecCode(string $MinSpecCode) Set Code of the minimum specification available for purchase.
 * @method integer getMinStorage() Obtain The minimum disk capacity in GB available for purchase.
 * @method void setMinStorage(integer $MinStorage) Set The minimum disk capacity in GB available for purchase.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeCloneDBInstanceSpecResponse extends AbstractModel
{
    /**
     * @var string Code of the minimum specification available for purchase.
     */
    public $MinSpecCode;

    /**
     * @var integer The minimum disk capacity in GB available for purchase.
     */
    public $MinStorage;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $MinSpecCode Code of the minimum specification available for purchase.
     * @param integer $MinStorage The minimum disk capacity in GB available for purchase.
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
        if (array_key_exists("MinSpecCode",$param) and $param["MinSpecCode"] !== null) {
            $this->MinSpecCode = $param["MinSpecCode"];
        }

        if (array_key_exists("MinStorage",$param) and $param["MinStorage"] !== null) {
            $this->MinStorage = $param["MinStorage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}