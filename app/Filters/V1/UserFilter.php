<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class UserFilter extends ApiFilter
{
 protected $safeParms = [
  'name' => ['eq'],
  'email' => ['eq'],
  'telepon' => ['eq'],
  'alamat' => ['eq', 'lt', 'lte', 'gt', 'gte'],
  'jenis_kelamin' => ['eq', 'ne'],
 ];
 protected $columnMap = [
  'email' => 'email'
 ];
 protected $operatorMap = [
  'eq' => '=',
  'lt' => '<',
  'lte' => '<=',
  'gt' => '>',
  'gte' => '>=',
  'ne' => '!=',
 ];
}