<?php
namespace app\admin\controller\goods;
use app\admin\controller\BaseController;
use app\common\model\Config;
use app\common\model\Goods;
use app\common\model\GoodsCategory;
use app\common\model\GoodsBinsn;
class IndexController extends BaseController
{
	//商品列表
	public function index(){
		$goodslist = Goods::with('category')->order('goods_id desc')->where('status = 1')->paginate();
		cookie("prevUrl", request()->url());
		$this->assign('list', $goodslist);
		return view();
	}

	//新增修改商品
	public function add(){
		if (request()->isPost()){
			$data = input('post.');
//			dump($data);die;
			if(input('post.goods_id')){
				$result = Goods::update($data);
			}else{
                $re=GoodsBinsn::find('1');
                $str=str_pad($re['num'], 6,0,0);
                model('goods_binsn')->where('id',1)->setInc("num");
                $data['goods_sn']='sn88'.$str;
				$result = Goods::create($data);
			}

			if($result){
				$this->success("保存成功", cookie("prevUrl"));
			}else{
				$this->error('保存失败', cookie("prevUrl"));
			}
		}else{
			$id = input('param.goods_id');
			if($id){
				$goods = Goods::find($id);
				$this->assign('goods', $goods);
			}
			$category = GoodsCategory::all()->toArray();
//			$tree = list_to_tree($category, 'id', 'pid', 'sub');
            $config = Config::with('logo')->find();
            $this->assign("category", $category);
            $this->assign("config", $config);
			return view();
		}
	}

	//改变商品状态
	public function update(){
		$data = input('param.');
		$result = Goods::where('goods_id','in',$data['goods_id'])->update(['on_sale' => $data['on_sale']]);
		if($result){
			$this->success("修改成功", cookie("prevUrl"));
		}else{
			$this->error('修改失败', cookie("prevUrl"));
		}
	}

	//删除商品
	public function del(){
		$ids = input('param.id');
        $result = Goods::where('goods_id','in',$ids)->update(['status' => 0]);

		if($result){
			$this->success("删除成功", cookie("prevUrl"));
		}else{
			$this->error('删除失败', cookie("prevUrl"));
		}
	}


}