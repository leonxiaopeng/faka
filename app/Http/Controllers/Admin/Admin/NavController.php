<?php
/**
 * Larfree Api类
 * @author xiao
 */

namespace App\Http\Controllers\Admin\Admin;

use App\Models\Auth\AuthRole;
use Illuminate\Http\Request;
use Larfree\Controllers\AdminApisController as Controller;
use App\Models\Admin\AdminNav;

class NavController extends Controller {
    public function __construct(AdminNav $model) {
        $this->model = $model;
        parent::__construct();
    }

    /**
     * @OA\Get(
     *   summary="查询导航配置",
     *   description="查询导航配置",
     *   path="/admin/nav",
     *   tags={"导航相关"},
     *   security={{
     *     "jwt":{}
     *   }},
     *   @OA\Response(
     *     response="200",
     *     description="请求成功 md5:51754cebd1ee823ea1716f44531c3906",
     *   ),
     * )
     */
    public function index(Request $request) {
        return parent::index($request); // TODO: Change the autogenerated stub
    }

    /**
     * @OA\Post(
     *   summary="添加导航配置",
     *   description="添加导航配置",
     *   path="/admin/nav",
     *   tags={"导航相关"},
     *   security={{
     *     "jwt":{}
     *   }},
     *   @OA\Response(
     *     response="200",
     *     description="请求成功 md5:51754cebd1ee823ea1716f44531c3906",
     *   ),
     * )
     */
    public function store(Request $request) {
        return parent::store($request); // TODO: Change the autogenerated stub
    }

    /**
     * @OA\Put(
     *   summary="修改导航配置",
     *   description="修改导航配置",
     *   path="/admin/nav",
     *   tags={"导航相关"},
     *   security={{
     *     "jwt":{}
     *   }},
     *   @OA\Response(
     *     response="200",
     *     description="请求成功 md5:51754cebd1ee823ea1716f44531c3906",
     *   ),
     * )
     */
    public function update(Request $request, $id) {
        return parent::update($request, $id); // TODO: Change the autogenerated stub
    }

    /**
     * @OA\Delete(
     *   summary="删除导航配置",
     *   description="删除导航配置",
     *   path="/admin/nav",
     *   tags={"导航相关"},
     *   security={{
     *     "jwt":{}
     *   }},
     *   @OA\Response(
     *     response="200",
     *     description="请求成功 md5:51754cebd1ee823ea1716f44531c3906",
     *   ),
     * )
     */
    public function destroy($id, Request $request) {
        return parent::destroy($id, $request); // TODO: Change the autogenerated stub
    }

    /**
     * 获取树状结构的菜单栏
     * @return array
     */
    public function tree() {
        $nav = $this->model->where('status', 1)->orderBy('ranking', 'desc')->get();
        $nav = $nav->toArray();
        $nav = listToTree($nav, 'id', 'parent_id', 'child');
        return $nav;
    }

    /**
     * 获取权限菜单
     * @return mixed
     * @throws \Exception
     * @author xiaopeng<xiaopeng@snqu.com>
     */
    public function navTree() {
        $authRole = new AuthRole();
        $data = $authRole->getUserTreeNav();  //调用类的方法
        return Response()->success($data, '获取成功');
    }

}
