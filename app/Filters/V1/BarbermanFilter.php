<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class BarbermanFilter extends ApiFilter
{
 protected $safeParms = [
  'nama' => ['eq'],
  'umur' => ['eq', 'lt', 'lte', 'gt', 'gte'],
  'deskripsi' => ['eq'],
 ];
 protected $columnMap = [
  'nama' => 'nama'
 ];
 protected $operatorMap = [
  'eq' => '=',
  'lt' => '<',
  'lte' => '<=',
  'gt' => '>',
  'gte' => '>=',
 ];
}