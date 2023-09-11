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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCSR response structure.
 *
 * @method integer getId() Obtain The CSR ID.
 * @method void setId(integer $Id) Set The CSR ID.
 * @method string getOwnerUin() Obtain The account.
 * @method void setOwnerUin(string $OwnerUin) Set The account.
 * @method string getDomain() Obtain The domain.
 * @method void setDomain(string $Domain) Set The domain.
 * @method string getOrganization() Obtain The organization name.
 * @method void setOrganization(string $Organization) Set The organization name.
 * @method string getDepartment() Obtain The department.
 * @method void setDepartment(string $Department) Set The department.
 * @method string getEmail() Obtain The email address.
 * @method void setEmail(string $Email) Set The email address.
 * @method string getProvince() Obtain The province.
 * @method void setProvince(string $Province) Set The province.
 * @method string getCity() Obtain The city.
 * @method void setCity(string $City) Set The city.
 * @method string getCountry() Obtain The country or region.
 * @method void setCountry(string $Country) Set The country or region.
 * @method string getEncryptAlgo() Obtain The key algorithm.
 * @method void setEncryptAlgo(string $EncryptAlgo) Set The key algorithm.
 * @method string getKeyParameter() Obtain The algorithm parameter.
 * @method void setKeyParameter(string $KeyParameter) Set The algorithm parameter.
 * @method string getRemarks() Obtain The remarks.
 * @method void setRemarks(string $Remarks) Set The remarks.
 * @method integer getStatus() Obtain The status.
 * @method void setStatus(integer $Status) Set The status.
 * @method string getKeyPassword() Obtain The password of the private key.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKeyPassword(string $KeyPassword) Set The password of the private key.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain The creation time.
 * @method void setCreateTime(string $CreateTime) Set The creation time.
 * @method string getCSR() Obtain The CSR content.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCSR(string $CSR) Set The CSR content.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPrivateKey() Obtain The content of the private key.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrivateKey(string $PrivateKey) Set The content of the private key.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeCSRResponse extends AbstractModel
{
    /**
     * @var integer The CSR ID.
     */
    public $Id;

    /**
     * @var string The account.
     */
    public $OwnerUin;

    /**
     * @var string The domain.
     */
    public $Domain;

    /**
     * @var string The organization name.
     */
    public $Organization;

    /**
     * @var string The department.
     */
    public $Department;

    /**
     * @var string The email address.
     */
    public $Email;

    /**
     * @var string The province.
     */
    public $Province;

    /**
     * @var string The city.
     */
    public $City;

    /**
     * @var string The country or region.
     */
    public $Country;

    /**
     * @var string The key algorithm.
     */
    public $EncryptAlgo;

    /**
     * @var string The algorithm parameter.
     */
    public $KeyParameter;

    /**
     * @var string The remarks.
     */
    public $Remarks;

    /**
     * @var integer The status.
     */
    public $Status;

    /**
     * @var string The password of the private key.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KeyPassword;

    /**
     * @var string The creation time.
     */
    public $CreateTime;

    /**
     * @var string The CSR content.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CSR;

    /**
     * @var string The content of the private key.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PrivateKey;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Id The CSR ID.
     * @param string $OwnerUin The account.
     * @param string $Domain The domain.
     * @param string $Organization The organization name.
     * @param string $Department The department.
     * @param string $Email The email address.
     * @param string $Province The province.
     * @param string $City The city.
     * @param string $Country The country or region.
     * @param string $EncryptAlgo The key algorithm.
     * @param string $KeyParameter The algorithm parameter.
     * @param string $Remarks The remarks.
     * @param integer $Status The status.
     * @param string $KeyPassword The password of the private key.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime The creation time.
     * @param string $CSR The CSR content.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PrivateKey The content of the private key.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Organization",$param) and $param["Organization"] !== null) {
            $this->Organization = $param["Organization"];
        }

        if (array_key_exists("Department",$param) and $param["Department"] !== null) {
            $this->Department = $param["Department"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("EncryptAlgo",$param) and $param["EncryptAlgo"] !== null) {
            $this->EncryptAlgo = $param["EncryptAlgo"];
        }

        if (array_key_exists("KeyParameter",$param) and $param["KeyParameter"] !== null) {
            $this->KeyParameter = $param["KeyParameter"];
        }

        if (array_key_exists("Remarks",$param) and $param["Remarks"] !== null) {
            $this->Remarks = $param["Remarks"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("KeyPassword",$param) and $param["KeyPassword"] !== null) {
            $this->KeyPassword = $param["KeyPassword"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CSR",$param) and $param["CSR"] !== null) {
            $this->CSR = $param["CSR"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
