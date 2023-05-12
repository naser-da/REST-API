<?php

namespace App\Filters\V1;
use App\Filters\ApiFilter;

class InvoicesFilter extends ApiFilter{

    // $table->foreignId('customer_id');
    // $table->integer('amount');
    // $table->string('status'); //Billed, Paid, Void
    // $table->dateTime('billed_date');
    // $table->dateTime('paid_date')->nullable();
    // $table->timestamps();
    protected $safeParms = [
        'customerId' => ['eq'],
        'amount' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'status' => ['eq', 'ne'],
        'billedDate' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'paidDate' => ['eq', 'gt', 'lt', 'gte', 'lte'],
    ];

    protected $columnMap = [
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date',
        'customerId' => 'customer_id',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'gt' => '>',
        'lt' => '<',
        'gte' => '>=',
        'lte' => '<=',
        'ne' => '!='
    ]; 

    
}