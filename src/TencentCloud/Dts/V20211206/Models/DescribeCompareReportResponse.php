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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCompareReport response structure.
 *
 * @method CompareAbstractInfo getAbstract() Obtain Summary information of data consistency check
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAbstract(CompareAbstractInfo $Abstract) Set Summary information of data consistency check
Note: This field may return null, indicating that no valid values can be obtained.
 * @method CompareDetailInfo getDetail() Obtain Data consistency check details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetail(CompareDetailInfo $Detail) Set Data consistency check details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeCompareReportResponse extends AbstractModel
{
    /**
     * @var CompareAbstractInfo Summary information of data consistency check
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Abstract;

    /**
     * @var CompareDetailInfo Data consistency check details
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Detail;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param CompareAbstractInfo $Abstract Summary information of data consistency check
Note: This field may return null, indicating that no valid values can be obtained.
     * @param CompareDetailInfo $Detail Data consistency check details
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Abstract",$param) and $param["Abstract"] !== null) {
            $this->Abstract = new CompareAbstractInfo();
            $this->Abstract->deserialize($param["Abstract"]);
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = new CompareDetailInfo();
            $this->Detail->deserialize($param["Detail"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
