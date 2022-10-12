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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageAccelerateService response structure.
 *
 * @method string getStatus() Obtain Image acceleration status
 * @method void setStatus(string $Status) Set Image acceleration status
 * @method string getCFSVIP() Obtain CFS VIP
 * @method void setCFSVIP(string $CFSVIP) Set CFS VIP
 * @method boolean getIsEnable() Obtain Whether to enable
 * @method void setIsEnable(boolean $IsEnable) Set Whether to enable
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeImageAccelerateServiceResponse extends AbstractModel
{
    /**
     * @var string Image acceleration status
     */
    public $Status;

    /**
     * @var string CFS VIP
     */
    public $CFSVIP;

    /**
     * @var boolean Whether to enable
     */
    public $IsEnable;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Status Image acceleration status
     * @param string $CFSVIP CFS VIP
     * @param boolean $IsEnable Whether to enable
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CFSVIP",$param) and $param["CFSVIP"] !== null) {
            $this->CFSVIP = $param["CFSVIP"];
        }

        if (array_key_exists("IsEnable",$param) and $param["IsEnable"] !== null) {
            $this->IsEnable = $param["IsEnable"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}