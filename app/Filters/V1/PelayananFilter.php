<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class PelayananFilter extends ApiFilter
{
 protected $safeParms = [
  'jenis' => ['eq'],
  'harga' => ['eq', 'lt', 'lte', 'gt', 'gte'],
 ];
 protected $columnMap = [
  'harga' => 'harga'
 ];
 protected $operatorMap = [
  'eq' => '=',
  'lt' => '<',
  'lte' => '<=',
  'gt' => '>',
  'gte' => '>=',
 ];
}