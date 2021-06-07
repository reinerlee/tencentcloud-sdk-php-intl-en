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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateApply response structure.
 *
 * @method array getApplyResults() Obtain List of updated applications
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setApplyResults(array $ApplyResults) Set List of updated applications
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Total number of updated applications
 * @method void setTotalCount(integer $TotalCount) Set Total number of updated applications
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class UpdateApplyResponse extends AbstractModel
{
    /**
     * @var array List of updated applications
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $ApplyResults;

    /**
     * @var integer Total number of updated applications
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $ApplyResults List of updated applications
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param integer $TotalCount Total number of updated applications
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
        if (array_key_exists("ApplyResults",$param) and $param["ApplyResults"] !== null) {
            $this->ApplyResults = [];
            foreach ($param["ApplyResults"] as $key => $value){
                $obj = new ApplyResult();
                $obj->deserialize($value);
                array_push($this->ApplyResults, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
