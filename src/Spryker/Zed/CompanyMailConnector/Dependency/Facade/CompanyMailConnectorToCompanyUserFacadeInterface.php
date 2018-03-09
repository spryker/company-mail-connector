<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CompanyMailConnector\Dependency\Facade;

use Generated\Shared\Transfer\CompanyUserTransfer;

interface CompanyMailConnectorToCompanyUserFacadeInterface
{
    /**
     * @param int $idCompany
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer
     */
    public function getInitialCompanyUserByCompanyId(int $idCompany): CompanyUserTransfer;
}
