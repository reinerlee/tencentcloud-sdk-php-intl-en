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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBashPolicies request structure.
 *
 * @method integer getLimit() Obtain Quantity of returned entries. The maximum value is 100.
 * @method void setLimit(integer $Limit) Set Quantity of returned entries. The maximum value is 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method array getFilters() Obtain Filtering criteria
<li>Name - String - required: no - rule name</li>
<li>Rule - String - required: no - rule content</li>
<li>Level - Int - required: no - threat level</li>
<li>White - Int - required: no - allowlist type</li>
<li>Category - Int - required: no - policy type</li>
<li>BashAction - Int - required: no - action</li>
<li>Enable - Int - required: no - enabling status</li>
<li>Id - Int - required: no - policy ID</li>
<li>PolicyId - Int - required: no - policy ID</li>
<li>RuleId - Int - required: no - rule ID</li>
 * @method void setFilters(array $Filters) Set Filtering criteria
<li>Name - String - required: no - rule name</li>
<li>Rule - String - required: no - rule content</li>
<li>Level - Int - required: no - threat level</li>
<li>White - Int - required: no - allowlist type</li>
<li>Category - Int - required: no - policy type</li>
<li>BashAction - Int - required: no - action</li>
<li>Enable - Int - required: no - enabling status</li>
<li>Id - Int - required: no - policy ID</li>
<li>PolicyId - Int - required: no - policy ID</li>
<li>RuleId - Int - required: no - rule ID</li>
 */
class DescribeBashPoliciesRequest extends AbstractModel
{
    /**
     * @var integer Quantity of returned entries. The maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var array Filtering criteria
<li>Name - String - required: no - rule name</li>
<li>Rule - String - required: no - rule content</li>
<li>Level - Int - required: no - threat level</li>
<li>White - Int - required: no - allowlist type</li>
<li>Category - Int - required: no - policy type</li>
<li>BashAction - Int - required: no - action</li>
<li>Enable - Int - required: no - enabling status</li>
<li>Id - Int - required: no - policy ID</li>
<li>PolicyId - Int - required: no - policy ID</li>
<li>RuleId - Int - required: no - rule ID</li>
     */
    public $Filters;

    /**
     * @param integer $Limit Quantity of returned entries. The maximum value is 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param array $Filters Filtering criteria
<li>Name - String - required: no - rule name</li>
<li>Rule - String - required: no - rule content</li>
<li>Level - Int - required: no - threat level</li>
<li>White - Int - required: no - allowlist type</li>
<li>Category - Int - required: no - policy type</li>
<li>BashAction - Int - required: no - action</li>
<li>Enable - Int - required: no - enabling status</li>
<li>Id - Int - required: no - policy ID</li>
<li>PolicyId - Int - required: no - policy ID</li>
<li>RuleId - Int - required: no - rule ID</li>
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}