<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class JamFilter extends ApiFilter
{
 protected $safeParms = [
  'jam' => ['eq', 'lt', 'lte', 'gt', 'gte'],
 ];
 protected $columnMap = [
  'jam' => 'jam'
 ];
 protected $operatorMap = [
  'eq' => '=',
  'lt' => '<',
  'lte' => '<=',
  'gt' => '>',
  'gte' => '>=',
 ];
}