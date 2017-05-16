<?php
namespace app\admin\controller\goods;
use app\admin\controller\BaseController;

use app\common\model\Goods;
use app\common\model\GoodsCategory;
use app\common\model\GoodsBinsn;
class IndexController extends BaseController
{
	//商品列表
	public function index(){
		$goodslist = Goods::with('category')->order('goods_id desc')->paginate();
		cookie("prevUrl", request()->url());
		$this->assign('list', $goodslist);
		return view();
	}

	//新增修改商品
	public function add(){
		if (request()->isPost()){
			$data = input('post.');
            $re=GoodsBinsn::find('1');
            $str=str_pad($re['num'], 6,0,0);
            model('goods_binsn')->where('id',1)->setInc("num");
			$data['goods_sn']='sn88'.$str;
			dump($data);die;
			if(input('post.goods_id')){
				$result = Goods::update($data);
			}else{
				$result = Goods::create($data);
			}

			if($result){
				$this->success("保存成功", cookie("prevUrl"));
			}else{
				$this->error('保存失败', cookie("prevUrl"));
			}
		}else{
			$id = input('param.id');
			if($id){
				$goods = Goods::find($id);
				$this->assign('goods', $goods);
			}
			$category = GoodsCategory::all()->toArray();
//			$tree = list_to_tree($category, 'id', 'pid', 'sub');
            $this->assign("category", $category);
			return view();
		}
	}

	//改变商品状态
	public function update(){
		$data = input('param.');
		$result = Goods::where('id','in',$data['id'])->update(['status' => $data['status']]);
		if($result){
			$this->success("修改成功", cookie("prevUrl"));
		}else{
			$this->error('修改失败', cookie("prevUrl"));
		}
	}

	//删除商品
	public function del(){
		$ids = input('param.id');
		
		$result = Goods::destroy($ids);
		if($result){
			$this->success("删除成功", cookie("prevUrl"));
		}else{
			$this->error('删除失败', cookie("prevUrl"));
		}
	}


}