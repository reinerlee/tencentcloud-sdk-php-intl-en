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
namespace TencentCloud\Ip\V20210409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Complex type of output parameters for querying customer's credit
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getType() Obtain Type
 * @method void setType(string $Type) Set Type
 * @method string getMobile() Obtain Phone
 * @method void setMobile(string $Mobile) Set Phone
 * @method string getEmail() Obtain Email
 * @method void setEmail(string $Email) Set Email
 * @method string getArrears() Obtain Overdue payment flag
 * @method void setArrears(string $Arrears) Set Overdue payment flag
 * @method string getAssociationTime() Obtain Binding time
 * @method void setAssociationTime(string $AssociationTime) Set Binding time
 * @method string getRecentExpiry() Obtain Expiration time
 * @method void setRecentExpiry(string $RecentExpiry) Set Expiration time
 * @method integer getClientUin() Obtain The UIN of reseller’s customer
 * @method void setClientUin(integer $ClientUin) Set The UIN of reseller’s customer
 * @method float getCredit() Obtain Credit granted to reseller’s customer
 * @method void setCredit(float $Credit) Set Credit granted to reseller’s customer
 * @method float getRemainingCredit() Obtain The remaining credit of reseller’s customer
 * @method void setRemainingCredit(float $RemainingCredit) Set The remaining credit of reseller’s customer
 */
class QueryCustomersCreditData extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Type
     */
    public $Type;

    /**
     * @var string Phone
     */
    public $Mobile;

    /**
     * @var string Email
     */
    public $Email;

    /**
     * @var string Overdue payment flag
     */
    public $Arrears;

    /**
     * @var string Binding time
     */
    public $AssociationTime;

    /**
     * @var string Expiration time
     */
    public $RecentExpiry;

    /**
     * @var integer The UIN of reseller’s customer
     */
    public $ClientUin;

    /**
     * @var float Credit granted to reseller’s customer
     */
    public $Credit;

    /**
     * @var float The remaining credit of reseller’s customer
     */
    public $RemainingCredit;

    /**
     * @param string $Name Name
     * @param string $Type Type
     * @param string $Mobile Phone
     * @param string $Email Email
     * @param string $Arrears Overdue payment flag
     * @param string $AssociationTime Binding time
     * @param string $RecentExpiry Expiration time
     * @param integer $ClientUin The UIN of reseller’s customer
     * @param float $Credit Credit granted to reseller’s customer
     * @param float $RemainingCredit The remaining credit of reseller’s customer
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Arrears",$param) and $param["Arrears"] !== null) {
            $this->Arrears = $param["Arrears"];
        }

        if (array_key_exists("AssociationTime",$param) and $param["AssociationTime"] !== null) {
            $this->AssociationTime = $param["AssociationTime"];
        }

        if (array_key_exists("RecentExpiry",$param) and $param["RecentExpiry"] !== null) {
            $this->RecentExpiry = $param["RecentExpiry"];
        }

        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("Credit",$param) and $param["Credit"] !== null) {
            $this->Credit = $param["Credit"];
        }

        if (array_key_exists("RemainingCredit",$param) and $param["RemainingCredit"] !== null) {
            $this->RemainingCredit = $param["RemainingCredit"];
        }
    }
}