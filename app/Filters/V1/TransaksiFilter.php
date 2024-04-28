<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class TransaksiFilter extends ApiFilter
{
 protected $safeParms = [
  'pelayanan_id' => ['eq'],
  'user_id' => ['eq', 'lt', 'lte', 'gt', 'gte'],
  'tanggal' => ['eq', 'lt', 'lte', 'gt', 'gte'],
  'jam' => ['eq', 'lt', 'lte', 'gt', 'gte'],
  'barberman_id' => ['eq', 'lt', 'lte', 'gt', 'gte'],
  'status_pembayaran' => ['eq', 'lt', 'lte', 'gt', 'gte'],
 ];
 protected $columnMap = [
  'tanggal' => 'tanggal',
  'jam' => 'jam',
 ];
 protected $operatorMap = [
  'eq' => '=',
  'lt' => '<',
  'lte' => '<=',
  'gt' => '>',
  'gte' => '>=',
 ];
}