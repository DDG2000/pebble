<?php
namespace app\common\model;

use think\Model;

class Goods extends Model
{
	protected $resultSetType = 'collection';
	protected $autoWriteTimestamp = 'timestamp';
	// 定义时间戳字段名
    protected $createTime = 'created_at';
    protected $updateTime = 'updated_at';
    
    public function category()
    {
        return $this->hasOne('GoodsCategory','id','category_id');
    }

}