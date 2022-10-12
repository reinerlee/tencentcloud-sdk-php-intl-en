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
 * CreatePlanForZone request structure.
 *
 * @method string getZoneId() Obtain ID of the site.
 * @method void setZoneId(string $ZoneId) Set ID of the site.
 * @method string getPlanType() Obtain Plan options available for purchase. Values:
<li>`sta`: Standard plan for global areas except Chinese mainland;</li>
<li>`sta_with_bot`: Standard plan for global areas except Chinese mainland, with extra bot management;</li>
<li>`sta_cm`: Standard plan for Chinese mainland;</li>
<li>`sta_cm_with_bot`: Standard plan for Chinese mainland, with extra bot management;</li>
<li>`ent`: Enterprise plan for global areas except Chinese mainland;</li>
<li>`ent_with_bot`: Enterprise plan for global areas except Chinese mainland, with extra bot management;</li>
<li>`ent_cm`: Enterprise plan for Chinese mainland;</li>
<li>`ent_cm_with_bot`: Enterprise plan for Chinese mainland, with extra bot management.</li>To get the available plan options for your account, view the output from <a href="https://tcloud4api.woa.com/document/product/1657/80124?!preview&!document=1">DescribeAvailablePlans</a>.
 * @method void setPlanType(string $PlanType) Set Plan options available for purchase. Values:
<li>`sta`: Standard plan for global areas except Chinese mainland;</li>
<li>`sta_with_bot`: Standard plan for global areas except Chinese mainland, with extra bot management;</li>
<li>`sta_cm`: Standard plan for Chinese mainland;</li>
<li>`sta_cm_with_bot`: Standard plan for Chinese mainland, with extra bot management;</li>
<li>`ent`: Enterprise plan for global areas except Chinese mainland;</li>
<li>`ent_with_bot`: Enterprise plan for global areas except Chinese mainland, with extra bot management;</li>
<li>`ent_cm`: Enterprise plan for Chinese mainland;</li>
<li>`ent_cm_with_bot`: Enterprise plan for Chinese mainland, with extra bot management.</li>To get the available plan options for your account, view the output from <a href="https://tcloud4api.woa.com/document/product/1657/80124?!preview&!document=1">DescribeAvailablePlans</a>.
 */
class CreatePlanForZoneRequest extends AbstractModel
{
    /**
     * @var string ID of the site.
     */
    public $ZoneId;

    /**
     * @var string Plan options available for purchase. Values:
<li>`sta`: Standard plan for global areas except Chinese mainland;</li>
<li>`sta_with_bot`: Standard plan for global areas except Chinese mainland, with extra bot management;</li>
<li>`sta_cm`: Standard plan for Chinese mainland;</li>
<li>`sta_cm_with_bot`: Standard plan for Chinese mainland, with extra bot management;</li>
<li>`ent`: Enterprise plan for global areas except Chinese mainland;</li>
<li>`ent_with_bot`: Enterprise plan for global areas except Chinese mainland, with extra bot management;</li>
<li>`ent_cm`: Enterprise plan for Chinese mainland;</li>
<li>`ent_cm_with_bot`: Enterprise plan for Chinese mainland, with extra bot management.</li>To get the available plan options for your account, view the output from <a href="https://tcloud4api.woa.com/document/product/1657/80124?!preview&!document=1">DescribeAvailablePlans</a>.
     */
    public $PlanType;

    /**
     * @param string $ZoneId ID of the site.
     * @param string $PlanType Plan options available for purchase. Values:
<li>`sta`: Standard plan for global areas except Chinese mainland;</li>
<li>`sta_with_bot`: Standard plan for global areas except Chinese mainland, with extra bot management;</li>
<li>`sta_cm`: Standard plan for Chinese mainland;</li>
<li>`sta_cm_with_bot`: Standard plan for Chinese mainland, with extra bot management;</li>
<li>`ent`: Enterprise plan for global areas except Chinese mainland;</li>
<li>`ent_with_bot`: Enterprise plan for global areas except Chinese mainland, with extra bot management;</li>
<li>`ent_cm`: Enterprise plan for Chinese mainland;</li>
<li>`ent_cm_with_bot`: Enterprise plan for Chinese mainland, with extra bot management.</li>To get the available plan options for your account, view the output from <a href="https://tcloud4api.woa.com/document/product/1657/80124?!preview&!document=1">DescribeAvailablePlans</a>.
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

        if (array_key_exists("PlanType",$param) and $param["PlanType"] !== null) {
            $this->PlanType = $param["PlanType"];
        }
    }
}