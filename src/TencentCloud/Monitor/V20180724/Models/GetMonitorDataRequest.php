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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetMonitorData request structure.
 *
 * @method string getNamespace() Obtain Namespace, such as QCE/CVM. For more information on the namespaces of each Tencent Cloud service, please see [Tencent Cloud Service Metrics](https://intl.cloud.tencent.com/document/product/248/6140?from_cn_redirect=1)
 * @method void setNamespace(string $Namespace) Set Namespace, such as QCE/CVM. For more information on the namespaces of each Tencent Cloud service, please see [Tencent Cloud Service Metrics](https://intl.cloud.tencent.com/document/product/248/6140?from_cn_redirect=1)
 * @method string getMetricName() Obtain Metric name, such as `CPUUsage`. For more information on the metrics of each Tencent Cloud service, please see [Tencent Cloud Service Metrics](https://intl.cloud.tencent.com/document/product/248/6140?from_cn_redirect=1). The corresponding metric name is the `MetricName`
 * @method void setMetricName(string $MetricName) Set Metric name, such as `CPUUsage`. For more information on the metrics of each Tencent Cloud service, please see [Tencent Cloud Service Metrics](https://intl.cloud.tencent.com/document/product/248/6140?from_cn_redirect=1). The corresponding metric name is the `MetricName`
 * @method array getInstances() Obtain Dimension combination of instance object in the format of `key-value` pair, such as [{"Name":"InstanceId","Value":"ins-j0hk02zo"}]. For more information on the dimensions of each Tencent Cloud service, please see [Tencent Cloud Service Metrics](https://intl.cloud.tencent.com/document/product/248/6140?from_cn_redirect=1). The value in the dimension column is the `key` in the dimension combination, and the value corresponding to the `key` is the `value` in the combination
 * @method void setInstances(array $Instances) Set Dimension combination of instance object in the format of `key-value` pair, such as [{"Name":"InstanceId","Value":"ins-j0hk02zo"}]. For more information on the dimensions of each Tencent Cloud service, please see [Tencent Cloud Service Metrics](https://intl.cloud.tencent.com/document/product/248/6140?from_cn_redirect=1). The value in the dimension column is the `key` in the dimension combination, and the value corresponding to the `key` is the `value` in the combination
 * @method integer getPeriod() Obtain Monitoring statistical period in seconds, such as 60. Default value: 300. The statistical period varies by metric. For more information on the statistical periods supported by each Tencent Cloud service, please see [Tencent Cloud Service Metrics](https://intl.cloud.tencent.com/document/product/248/6140?from_cn_redirect=1). The values in the statistical period column are the supported statistical periods
 * @method void setPeriod(integer $Period) Set Monitoring statistical period in seconds, such as 60. Default value: 300. The statistical period varies by metric. For more information on the statistical periods supported by each Tencent Cloud service, please see [Tencent Cloud Service Metrics](https://intl.cloud.tencent.com/document/product/248/6140?from_cn_redirect=1). The values in the statistical period column are the supported statistical periods
 * @method string getStartTime() Obtain Start time such as 2018-09-22T19:51:23+08:00
 * @method void setStartTime(string $StartTime) Set Start time such as 2018-09-22T19:51:23+08:00
 * @method string getEndTime() Obtain End time, which is the current time by default, such as 2018-09-22T20:51:23+08:00. `EndTime` cannot be earlier than `StartTime`
 * @method void setEndTime(string $EndTime) Set End time, which is the current time by default, such as 2018-09-22T20:51:23+08:00. `EndTime` cannot be earlier than `StartTime`
 */
class GetMonitorDataRequest extends AbstractModel
{
    /**
     * @var string Namespace, such as QCE/CVM. For more information on the namespaces of each Tencent Cloud service, please see [Tencent Cloud Service Metrics](https://intl.cloud.tencent.com/document/product/248/6140?from_cn_redirect=1)
     */
    public $Namespace;

    /**
     * @var string Metric name, such as `CPUUsage`. For more information on the metrics of each Tencent Cloud service, please see [Tencent Cloud Service Metrics](https://intl.cloud.tencent.com/document/product/248/6140?from_cn_redirect=1). The corresponding metric name is the `MetricName`
     */
    public $MetricName;

    /**
     * @var array Dimension combination of instance object in the format of `key-value` pair, such as [{"Name":"InstanceId","Value":"ins-j0hk02zo"}]. For more information on the dimensions of each Tencent Cloud service, please see [Tencent Cloud Service Metrics](https://intl.cloud.tencent.com/document/product/248/6140?from_cn_redirect=1). The value in the dimension column is the `key` in the dimension combination, and the value corresponding to the `key` is the `value` in the combination
     */
    public $Instances;

    /**
     * @var integer Monitoring statistical period in seconds, such as 60. Default value: 300. The statistical period varies by metric. For more information on the statistical periods supported by each Tencent Cloud service, please see [Tencent Cloud Service Metrics](https://intl.cloud.tencent.com/document/product/248/6140?from_cn_redirect=1). The values in the statistical period column are the supported statistical periods
     */
    public $Period;

    /**
     * @var string Start time such as 2018-09-22T19:51:23+08:00
     */
    public $StartTime;

    /**
     * @var string End time, which is the current time by default, such as 2018-09-22T20:51:23+08:00. `EndTime` cannot be earlier than `StartTime`
     */
    public $EndTime;

    /**
     * @param string $Namespace Namespace, such as QCE/CVM. For more information on the namespaces of each Tencent Cloud service, please see [Tencent Cloud Service Metrics](https://intl.cloud.tencent.com/document/product/248/6140?from_cn_redirect=1)
     * @param string $MetricName Metric name, such as `CPUUsage`. For more information on the metrics of each Tencent Cloud service, please see [Tencent Cloud Service Metrics](https://intl.cloud.tencent.com/document/product/248/6140?from_cn_redirect=1). The corresponding metric name is the `MetricName`
     * @param array $Instances Dimension combination of instance object in the format of `key-value` pair, such as [{"Name":"InstanceId","Value":"ins-j0hk02zo"}]. For more information on the dimensions of each Tencent Cloud service, please see [Tencent Cloud Service Metrics](https://intl.cloud.tencent.com/document/product/248/6140?from_cn_redirect=1). The value in the dimension column is the `key` in the dimension combination, and the value corresponding to the `key` is the `value` in the combination
     * @param integer $Period Monitoring statistical period in seconds, such as 60. Default value: 300. The statistical period varies by metric. For more information on the statistical periods supported by each Tencent Cloud service, please see [Tencent Cloud Service Metrics](https://intl.cloud.tencent.com/document/product/248/6140?from_cn_redirect=1). The values in the statistical period column are the supported statistical periods
     * @param string $StartTime Start time such as 2018-09-22T19:51:23+08:00
     * @param string $EndTime End time, which is the current time by default, such as 2018-09-22T20:51:23+08:00. `EndTime` cannot be earlier than `StartTime`
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
            $this->Instances = [];
            foreach ($param["Instances"] as $key => $value){
                $obj = new Instance();
                $obj->deserialize($value);
                array_push($this->Instances, $obj);
            }
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
