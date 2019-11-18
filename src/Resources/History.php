<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\DeleteRecordReturn;
use Voximplant\Interfaces\DownloadHistoryReportReturn;
use Voximplant\Interfaces\GetACDHistoryReturn;
use Voximplant\Interfaces\GetAuditLogReturn;
use Voximplant\Interfaces\GetCallHistoryReturn;
use Voximplant\Interfaces\GetHistoryReportsReturn;
use Voximplant\Interfaces\GetTransactionHistoryReturn;
use Voximplant\Interfaces\HistoryInterface;

class History implements HistoryInterface
{
    protected $client;

    /** @object GetCallHistory */
    protected $GetCallHistoryReturn;

    /** @object GetHistoryReports */
    protected $GetHistoryReportsReturn;

    /** @object DownloadHistoryReport */
    protected $DownloadHistoryReportReturn;

    /** @object GetTransactionHistory */
    protected $GetTransactionHistoryReturn;

    /** @object DeleteRecord */
    protected $DeleteRecordReturn;

    /** @object GetACDHistory */
    protected $GetACDHistoryReturn;

    /** @object GetAuditLog */
    protected $GetAuditLogReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->GetCallHistoryReturn = new GetCallHistoryReturn();
        $this->GetHistoryReportsReturn = new GetHistoryReportsReturn();
        $this->DownloadHistoryReportReturn = new DownloadHistoryReportReturn();
        $this->GetTransactionHistoryReturn = new GetTransactionHistoryReturn();
        $this->DeleteRecordReturn = new DeleteRecordReturn();
        $this->GetACDHistoryReturn = new GetACDHistoryReturn();
        $this->GetAuditLogReturn = new GetAuditLogReturn();
    }

    /**
     * @method Gets the call history.
     */
    public function GetCallHistory(Params\GetCallHistoryParams $params = null): GetCallHistoryReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetCallHistoryReturn->$key = $value;
        }
        return $this->GetCallHistoryReturn;
    }

    /**
     * @method Gets the list of history reports and their statuses. The method returns info about reports made via [GetCallHistory] with the specified __output=csv__ and **is_async=true** parameters.
     */
    public function GetHistoryReports(Params\GetHistoryReportsParams $params = null): GetHistoryReportsReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetHistoryReportsReturn->$key = $value;
        }
        return $this->GetHistoryReportsReturn;
    }

    /**
     * @method Downloads the required history report.
     */
    public function DownloadHistoryReport(Params\DownloadHistoryReportParams $params = null): DownloadHistoryReportReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->DownloadHistoryReportReturn->$key = $value;
        }
        return $this->DownloadHistoryReportReturn;
    }

    /**
     * @method Gets the transaction history.
     */
    public function GetTransactionHistory(Params\GetTransactionHistoryParams $params = null): GetTransactionHistoryReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetTransactionHistoryReturn->$key = $value;
        }
        return $this->GetTransactionHistoryReturn;
    }

    /**
     * @method Try to remove record and transcription files.
     */
    public function DeleteRecord(Params\DeleteRecordParams $params = null): DeleteRecordReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->DeleteRecordReturn->$key = $value;
        }
        return $this->DeleteRecordReturn;
    }

    /**
     * @method Gets the ACD history.
     */
    public function GetACDHistory(Params\GetACDHistoryParams $params = null): GetACDHistoryReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetACDHistoryReturn->$key = $value;
        }
        return $this->GetACDHistoryReturn;
    }

    /**
     * @method Gets the history of account changes.
     */
    public function GetAuditLog(Params\GetAuditLogParams $params = null): GetAuditLogReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetAuditLogReturn->$key = $value;
        }
        return $this->GetAuditLogReturn;
    }
}
