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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNatGatewayDestinationIpPortTranslationNatRules response structure.
 *
 * @method array getNatGatewayDestinationIpPortTranslationNatRuleSet() Obtain The object array of port forwarding rules for the NAT gateway.
 * @method void setNatGatewayDestinationIpPortTranslationNatRuleSet(array $NatGatewayDestinationIpPortTranslationNatRuleSet) Set The object array of port forwarding rules for the NAT gateway.
 * @method integer getTotalCount() Obtain The number of eligible object arrays of NAT port forwarding rules.
 * @method void setTotalCount(integer $TotalCount) Set The number of eligible object arrays of NAT port forwarding rules.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeNatGatewayDestinationIpPortTranslationNatRulesResponse extends AbstractModel
{
    /**
     * @var array The object array of port forwarding rules for the NAT gateway.
     */
    public $NatGatewayDestinationIpPortTranslationNatRuleSet;

    /**
     * @var integer The number of eligible object arrays of NAT port forwarding rules.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $NatGatewayDestinationIpPortTranslationNatRuleSet The object array of port forwarding rules for the NAT gateway.
     * @param integer $TotalCount The number of eligible object arrays of NAT port forwarding rules.
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
        if (array_key_exists("NatGatewayDestinationIpPortTranslationNatRuleSet",$param) and $param["NatGatewayDestinationIpPortTranslationNatRuleSet"] !== null) {
            $this->NatGatewayDestinationIpPortTranslationNatRuleSet = [];
            foreach ($param["NatGatewayDestinationIpPortTranslationNatRuleSet"] as $key => $value){
                $obj = new NatGatewayDestinationIpPortTranslationNatRule();
                $obj->deserialize($value);
                array_push($this->NatGatewayDestinationIpPortTranslationNatRuleSet, $obj);
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