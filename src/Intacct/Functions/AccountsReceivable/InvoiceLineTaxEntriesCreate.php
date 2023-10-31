<?php

/**
 * Copyright 2021 Sage Intacct, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"). You may not
 * use this file except in compliance with the License. You may obtain a copy
 * of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * or in the "LICENSE" file accompanying this file. This file is distributed on
 * an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

namespace Intacct\Functions\AccountsReceivable;

use Intacct\Xml\XMLWriter;

/**
 * Create a new accounts receivable invoice tax entries line record
 */
class InvoiceLineTaxEntriesCreate extends AbstractInvoiceLineTaxEntries
{

    public function writeXml(XMLWriter &$xml)
    {
        $xml->startElement('taxentry');

        $xml->writeElement('detailid', $this->getTaxId());
        $xml->writeElement('trx_tax', $this->getTaxValue());

        $xml->endElement();
    }
}