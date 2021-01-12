<?php
namespace LemmoTresto\Moneybird;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

/**
 * @method static \Picqer\Financials\Moneybird\Entities\Administration administration(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\Contact contact(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\ContactCustomField contactCustomField(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\Note note(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\CustomField customField(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\DocumentStyle documentStyle(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\Estimate estimate(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\ExternalSalesInvoice externalSalesInvoice(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\ExternalSalesInvoiceDetail externalSalesInvoiceDetail(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\ExternalSalesInvoicePayment externalSalesInvoicePayment(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\FinancialAccount financialAccount(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\FinancialMutation financialMutation(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\GeneralDocument financialStatement(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\GeneralJournalDocument generalJournalDocument(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\GeneralJournalDocumentEntry generalJournalDocumentEntry(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\Identity identity(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\ImportMapping importMapping(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\LedgerAccount ledgerAccount(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\Product product(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\PurchaseInvoice purchaseInvoice(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\PurchaseInvoiceDetail purchaseInvoiceDetail(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\PurchaseInvoicePayment purchaseInvoicePayment(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\RecurringSalesInvoice recurringSalesInvoice(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\RecurringSalesInvoiceCustomField recurringSalesInvoiceCustomField(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\RecurringSalesInvoiceDetail recurringSalesInvoiceDetail(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\SalesInvoice salesInvoice(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\SalesInvoiceCustomField salesInvoiceCustomField(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\SalesInvoiceDetail salesInvoiceDetail(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\SalesInvoicePayment salesInvoicePayment(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\SalesInvoiceReminder salesInvoiceReminder(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\TaxRate taxRate(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\TimeEntry timeEntry(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\TypelessDocument typelessDocument(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\User user(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\Webhook webhook(array $attributes = [])
 * @method static \Picqer\Financials\Moneybird\Entities\Workflow workflow(array $attributes = [])
 *
 * Class MoneybirdFacade
 * @package LemmoTresto\Moneybird
 */
class MoneybirdFacade extends IlluminateFacade {

    protected static function getFacadeAccessor()
    {
        return 'moneybird';
    }
}
