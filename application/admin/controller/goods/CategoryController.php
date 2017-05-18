<?php
namespace app\admin\controller\goods;
use app\admin\controller\BaseController;

use app\common\model\GoodsCategory;
use app\common\model\Goods;
class CategoryController extends BaseController
{
	//商品分类
	public function index(){
		$list = GoodsCategory::all(['status'=>1])->toArray();
		cookie("prevUrl", request()->url());
		$this->assign('list', $list);
		return view();
	}

	//新增修改商品分类
	public function add(){
		if (request()->isPost()){
			$data = input('post.');
			$data['status'] = input('?post.status') ? $data['status'] : 0;
			
			if(input('post.id')){
				$result = GoodsCategory::update($data);
			}else{
				$result = GoodsCategory::create($data);
			}

			if($result){
				$this->success("保存成功", cookie("prevUrl"));
			}else{
				$this->error('保存失败', cookie("prevUrl"));
			}
		}else{
			$id = input('param.id');
			if($id){
				$category = GoodsCategory::find($id);
				$this->assign('category', $category);
			}
			$parentcategory = GoodsCategory::all(['pid'=>0]);
            $this->assign("parentcategory", $parentcategory);
			return view();
		}
	}

	//改变商品类型状态
	public function update(){
		$data = input('param.');
		$result = GoodsCategory::where('id','in',$data['id'])->update(['on_sale' => $data['on_sale']]);
		Goods::where('category_id',$data['id'])->update(['on_sale' => $data['on_sale']]);
		if($result){
			$this->success("修改成功", cookie("prevUrl"));
		}else{
			$this->error('修改失败', cookie("prevUrl"));
		}
	}

	//删除商品分类
	public function del(){
		$id = input('param.id');
        $result=GoodsCategory::where('category_id',$id)->update(['status' => 0]);
		if($result){
			$this->success("删除成功", cookie("prevUrl"));
		}else{
			$this->error('删除失败', cookie("prevUrl"));
		}
	}
}