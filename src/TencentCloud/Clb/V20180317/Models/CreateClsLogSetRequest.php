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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClsLogSet request structure.
 *
 * @method integer getPeriod() Obtain Logset retention period in days; max value: 90
 * @method void setPeriod(integer $Period) Set Logset retention period in days; max value: 90
 * @method string getLogsetName() Obtain Logset name, which must be unique among all CLS logsets; default value: clb_logset
 * @method void setLogsetName(string $LogsetName) Set Logset name, which must be unique among all CLS logsets; default value: clb_logset
 */
class CreateClsLogSetRequest extends AbstractModel
{
    /**
     * @var integer Logset retention period in days; max value: 90
     */
    public $Period;

    /**
     * @var string Logset name, which must be unique among all CLS logsets; default value: clb_logset
     */
    public $LogsetName;

    /**
     * @param integer $Period Logset retention period in days; max value: 90
     * @param string $LogsetName Logset name, which must be unique among all CLS logsets; default value: clb_logset
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }
    }
}