<?php
/**
 * The MIT License (MIT)
 * 
 * Copyright (c) 2016 Smartex.io Ltd.
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace Smartex\Client;

use Smartex\InvoiceInterface;

/**
 * Sends request(s) to smartex server
 *
 * @package Smartex
 */
interface ClientInterface
{
    const TESTNET = '0x6F';
    const LIVENET = '0x00';

    /**
     * These can be changed/updated so when the request is sent to Smartex it
     * gives insight into what is making the calls.
     *
     * @see RFC2616 section 14.43 for User-Agent Format
     */
    const NAME    = 'Smartex PHP Client';
    const VERSION = '1.0.0';

    //public function createApplication(ApplicationInterface $application);

    //public function createBill(BillInterface $bill);
    //public function getBills($status = null);
    //public function getBill($billId);
    //public function updateBill(BillInterface $bill);

    //public function createAccessToken(AccessTokenInterface $accessToken);
    //public function getAccessTokens();
    //public function getAccessToken($keyId);

    public function getCurrencies();

    /**
     * @param InvoiceInterface $invoiceId
     * @return \Smartex\Invoice
     * @throws \Exception
     */
    public function createInvoice(InvoiceInterface $invoice);
    //public function getInvoices();

    /**
     * @param $invoiceId
     * @return InvoiceInterface
     * @throws \Exception
     */
    public function getInvoice($invoiceId);

    //public function getLedgers();
    //public function getLedger(CurrencyInterface $currency);

    //public function getOrgs();
    //public function getOrg($orgId);
    //public function updateOrg(OrgInterface $org);

    /**
     * Get an array of tokens indexed by facade
     * @return array
     * @throws \Exception
     */
    public function getTokens();

    //public function getUser();
    //public function updateUser(UserInterface $user);
}
