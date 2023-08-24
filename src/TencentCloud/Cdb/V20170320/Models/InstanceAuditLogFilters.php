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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Search filter for audit log
 *
 * @method string getType() Obtain Filter condition, which is not supported for `SQL`. The search conditions are supported as follows:

`Equal to`, `Not equal to`, `Include`, and `Exclude` can be used to search for 
`host` (Client IP),
`user` (Username),
and `DBName` (Database name).

`Equal to` and `Not equal to` can be used to search for 
`sqlType`- SQL u200dtype,
`errCode` - Error code,
`threadId`- Thread ID.

Range search is supported for the fields, such as 
`execTime`- Execution time (μs),
`lockWaitTime`u200d - Lock wait time (μs),
`ioWaitTime` - IO wait time (μs),
`trxLivingTime` - Transaction duration (μs),
`cpuTime` - CPU time (μs),
`checkRows` - Number of scanned rows,
`affectRows` - Number of affected rows,
`sentRows` - Number of returned rows.
 * @method void setType(string $Type) Set Filter condition, which is not supported for `SQL`. The search conditions are supported as follows:

`Equal to`, `Not equal to`, `Include`, and `Exclude` can be used to search for 
`host` (Client IP),
`user` (Username),
and `DBName` (Database name).

`Equal to` and `Not equal to` can be used to search for 
`sqlType`- SQL u200dtype,
`errCode` - Error code,
`threadId`- Thread ID.

Range search is supported for the fields, such as 
`execTime`- Execution time (μs),
`lockWaitTime`u200d - Lock wait time (μs),
`ioWaitTime` - IO wait time (μs),
`trxLivingTime` - Transaction duration (μs),
`cpuTime` - CPU time (μs),
`checkRows` - Number of scanned rows,
`affectRows` - Number of affected rows,
`sentRows` - Number of returned rows.
 * @method string getCompare() Obtain Filter, including:
`INC` - Include,
`EXC` -Exclude,
`EQS` - Equal to,
`NEQ` - Not equal to.
u200d`RA` - Range
 * @method void setCompare(string $Compare) Set Filter, including:
`INC` - Include,
`EXC` -Exclude,
`EQS` - Equal to,
`NEQ` - Not equal to.
u200d`RA` - Range
 * @method array getValue() Obtain The filter value
 * @method void setValue(array $Value) Set The filter value
 */
class InstanceAuditLogFilters extends AbstractModel
{
    /**
     * @var string Filter condition, which is not supported for `SQL`. The search conditions are supported as follows:

`Equal to`, `Not equal to`, `Include`, and `Exclude` can be used to search for 
`host` (Client IP),
`user` (Username),
and `DBName` (Database name).

`Equal to` and `Not equal to` can be used to search for 
`sqlType`- SQL u200dtype,
`errCode` - Error code,
`threadId`- Thread ID.

Range search is supported for the fields, such as 
`execTime`- Execution time (μs),
`lockWaitTime`u200d - Lock wait time (μs),
`ioWaitTime` - IO wait time (μs),
`trxLivingTime` - Transaction duration (μs),
`cpuTime` - CPU time (μs),
`checkRows` - Number of scanned rows,
`affectRows` - Number of affected rows,
`sentRows` - Number of returned rows.
     */
    public $Type;

    /**
     * @var string Filter, including:
`INC` - Include,
`EXC` -Exclude,
`EQS` - Equal to,
`NEQ` - Not equal to.
u200d`RA` - Range
     */
    public $Compare;

    /**
     * @var array The filter value
     */
    public $Value;

    /**
     * @param string $Type Filter condition, which is not supported for `SQL`. The search conditions are supported as follows:

`Equal to`, `Not equal to`, `Include`, and `Exclude` can be used to search for 
`host` (Client IP),
`user` (Username),
and `DBName` (Database name).

`Equal to` and `Not equal to` can be used to search for 
`sqlType`- SQL u200dtype,
`errCode` - Error code,
`threadId`- Thread ID.

Range search is supported for the fields, such as 
`execTime`- Execution time (μs),
`lockWaitTime`u200d - Lock wait time (μs),
`ioWaitTime` - IO wait time (μs),
`trxLivingTime` - Transaction duration (μs),
`cpuTime` - CPU time (μs),
`checkRows` - Number of scanned rows,
`affectRows` - Number of affected rows,
`sentRows` - Number of returned rows.
     * @param string $Compare Filter, including:
`INC` - Include,
`EXC` -Exclude,
`EQS` - Equal to,
`NEQ` - Not equal to.
u200d`RA` - Range
     * @param array $Value The filter value
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Compare",$param) and $param["Compare"] !== null) {
            $this->Compare = $param["Compare"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}