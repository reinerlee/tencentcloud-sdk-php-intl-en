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
 * ModifyCensorship response structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getUins() Obtain Approver UIN list
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setUins(array $Uins) Set Approver UIN list
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method integer getCensorship() Obtain Whether the operation approval feature is enabled for this cluster. Valid values: `0` (disabled), `1` (enabled)
 * @method void setCensorship(integer $Censorship) Set Whether the operation approval feature is enabled for this cluster. Valid values: `0` (disabled), `1` (enabled)
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ModifyCensorshipResponse extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array Approver UIN list
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $Uins;

    /**
     * @var integer Whether the operation approval feature is enabled for this cluster. Valid values: `0` (disabled), `1` (enabled)
     */
    public $Censorship;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $Uins Approver UIN list
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param integer $Censorship Whether the operation approval feature is enabled for this cluster. Valid values: `0` (disabled), `1` (enabled)
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Uins",$param) and $param["Uins"] !== null) {
            $this->Uins = $param["Uins"];
        }

        if (array_key_exists("Censorship",$param) and $param["Censorship"] !== null) {
            $this->Censorship = $param["Censorship"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
